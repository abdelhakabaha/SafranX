<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function registerPost(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required|confirmed",
        ]);
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return back()->with('success', 'register successful');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function loginPost(LoginRequest $request)
    {
        $validatedData = $request->validated();
        if (Auth::attempt($validatedData)) {
            return redirect('/')->with("success","Login berhasil");
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);


    }
}
