<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\HomeController;

class AuthController extends Controller
{
    public function registerpage()
    {
        return (view('auth.register'));
    }

    public function loginpage()
    {
        return (view('auth.login'));
    }


    public function index()
    {
    }



    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {

            return back()->with( [
                'message' => $validator->errors(),
            ], 'something went wrong');


        } else {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->is_admin = 0;
            $user->save();
        }
        if ($user->save()) {
            $loggedInUser = User::where('email', $user->email)->get();
            $request->session()->regenerate();
            $request->session()->put('loginId', $loggedInUser[0]->id);
            return (view('auth.login'))->with('message', 'Registration Successful');
        } else {
            return back()->with('failed', 'something went wrong');
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $user = User::where('email', '=', $request->email) -> first();

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            $request->session()->put('loginId', $user->id);

            return redirect()->action(
                [HomeController::class, 'index']
            );
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password'=> 'Incorrect password'
        ]);
    }
}