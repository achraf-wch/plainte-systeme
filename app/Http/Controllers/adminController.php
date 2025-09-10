<?php
namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\plainte;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function Login()
    {
        return view('admin.Login');
    }
    public function loginHandle(Request $request)
    {
        $credentials=[
            "nom"=>$request->input('nom'),
            "password"=>$request->input('password')
        ];
          if(Auth::guard('admin')->attempt($credentials))
          {
            $admin=admin::where('nom',$credentials['nom'])->first();
            session(['nom'=>$credentials['nom']]);
            return redirect()->route('admin.Dashboard');
          }
          else 
          {
            return back()->withErrors(['le motpass ou le nom n\'est pas vrais']);
          }
    }
    public function Update(){
        return view('admin.Update');
    }
   public function UpdateHandle(Request $request)
{
    $request->validate([
        'vieux' => 'required',
        'nouveau'=>'required|min:4',
    ]);
    $admin = admin::first();
    if (!$admin) {
        return back()->withErrors(['error' => 'Aucun admin trouvé dans la base']);
    }
    if (Hash::check($request->vieux, $admin->password)) {
        $admin->password = Hash::make($request->nouveau);
        $admin->save();

        return back()->with(['success', 'Mot de passe mis à jour avec succès']);
    } else {
        return back()->withErrors(['vieux' => 'Le mot de passe est incorrect']);
    }
}

    public function Dashboard()
    {
        return view('admin.Dashboard');
    }
    public function Palques_ALL(Request $request)
    {
        $values = plainte::all();
        return view('admin.Palques_All',compact('values'));
    }
    public function Palques_Search()
    {
        return view('admin.Palques_Search');
    }
    public function Palques_Search_Handle(Request $request)
    {
        $CIN = $request->CIN;
        $values = plainte::where("CIN",$CIN)->get();
        if($values->count()>0)
        {
            
            return view('admin.Palques_All',compact('values'));
        }
        else 
        {
            
            return back()->withErrors(['il y a aucune plaitne avec cette CIN']);
            
        }
    }

}
