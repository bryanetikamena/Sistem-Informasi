<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_admin'=>'max:10|unique:users',
            'email'=>'required|email:dns|max:255|unique:users',
            'password'=>'required|min:5|max:20',
            'username'=>'required|max:30|min:5|unique:users'
        ]);

        //$validatedData['password']= bcrypt(($validatedData['password']));
        $validatedData['password'] = Hash::make($validatedData['password']);

        pengguna::create($validatedData);
        //$request->session()->flash('success', 'Registration successfull! Please login');
        
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
