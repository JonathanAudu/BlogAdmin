<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerpage(){
        return (view('auth.register'));
    }

    public function loginpage(){
        return(view('auth.login'));
    }
}
