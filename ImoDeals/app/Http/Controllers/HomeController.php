<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('imodeals.acceuil');
    }

    public function presentation(){
        return view('imodeals.presentation');
    }


}
