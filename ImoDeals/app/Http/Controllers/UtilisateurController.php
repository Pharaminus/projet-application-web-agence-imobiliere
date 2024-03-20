<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //

    public function admin(){



    }

    public function dashbord(){
        $users = new User();
        // $users = User::paginate(1);
        $users = User::all();
        // User::fi
        return view('imodeals.dashbord', compact('users'));
    }

}
