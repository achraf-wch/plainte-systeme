<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generalController extends Controller
{
    public function homePage()
    {
        return view('homePage');
    }
    public function services()
    {
        return view('general.services');
    }
    public function informations()
    {
        return view('general.informations');
    }
        public function contact()
    {
        return view('general.contact');
    }
            public function problems()
    {
        return view('general.problems');
    }

}
