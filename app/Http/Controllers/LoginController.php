<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function index ()
    {
        return view('login.index');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('/dashboard');
        }
        return redirect('/login')->with('danger', 'Login Failed! Please login again');

    }


    /*public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        //return back()->with('loginError', 'Login Failed');
        return redirect('/login')->with('danger', 'Login Failed! Please login again');
        //dd('gagal');
    }*/

    public function logout (Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
