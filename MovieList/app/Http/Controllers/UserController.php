<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function viewLogin(){
        return view('login');
    }
    public function viewRegister(){
        return view('register');
    }
}
