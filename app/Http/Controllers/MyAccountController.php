<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    public function getRegister(){
        return view('Layouts.register');
    }
    
    public function getLogIn(){
        return view('Layouts.log-in');
    }
}
