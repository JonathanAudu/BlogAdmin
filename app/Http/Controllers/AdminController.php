<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::find(session()->get('loginId'));

        return(view('admin.dashboard', compact('user')));
    }
}
