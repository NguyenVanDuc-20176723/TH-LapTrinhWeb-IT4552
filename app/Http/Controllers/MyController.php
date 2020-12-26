<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class MyController extends Controller
{
    public function getHome(){
        return view('pages.home');
    }

    public function getRegister(){
        return view('pages.register');
    }
    
    public function getLogIn(){
        return view('pages.log-in');
    }

    public function postRegister(Request $request){
        
        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        echo "da them du lieu vao bang user";
    }
}
