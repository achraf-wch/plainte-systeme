<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\citoyen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\plainte;
use App\Http\Requests\citoyenRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\plainteRequest;
class citoyenController extends Controller
{
    public function Login()
    {
        return view('citoyen.Login');
    }
    public function LoginHandle(Request $request)
    {
         $credentials = [
            'CIN'=>$request->input('CIN'),
            'password' => $request->input('motpass')
         ];
        
         if(Auth::guard('citoyen')->attempt($credentials))
         {
            $citoyen=citoyen::where('CIN',$credentials['CIN'])->first();
            session(['CIN'=>$credentials['CIN']]);
            session(['nom'=>$citoyen->nom]);
            session(['prenom'=>$citoyen->prenom]);

            $request->session()->regenerate();
            return redirect()->route('citoyen.Dashboard');
         }
        else 
           return back()->withErrors(['le mot pass ou CIN est faux']);
        
         
      }
 public function Regester()
    {
        return view('citoyen.Regester');
    }
     public function RegesterHandle(citoyenRequest $request)
    {
            citoyen::create(
                [
                'CIN'=>$request->CIN,
                'nom'=> $request->nom,
                'prenom'=> $request->prenom,
                'adress'=> $request->adress,
                'password' => Hash::make($request->password),
                
                ]
                );
             return redirect()->route("citoyen.Login")->with('success', 'citoyen etait ajouté!');
        
    
            }
   public function Dashboard(Request $request)
   {
   $CIN = session('CIN');
    $nom = session('nom');
    $prenom= session('prenom');

    return view('citoyen.Dashboard');
   }


   
        public function palques(Request $request)
        {
                 $CIN = session('CIN');
                 $nom = session('nom');
                $plaintes= plainte::where('CIN',$CIN)->get();                 
                return view('citoyen.Palques',compact('plaintes'));

        }
        public function Store()
        {
            return view('citoyen.Store',[session('CIN')]);
        }
        public function StoreHandle(plainteRequest $request)
        { 
            plainte::create(
                [
                    'CIN' => session('CIN'),
                    'plainte' => $request->plainte,
                ]
                );
                 return view('citoyen.Store')->with('success', 'plainte etait ajouté!');

        }
        public function plainteDelete(plainte $plainte)
        {
              $plainte->delete();
        }
}