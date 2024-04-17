<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use Exception;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function registerPost(UserRegisterRequest $request)
    {
        try{

            $validatedData = $request->validated();
            $validatedData["password"] =  Hash::make($request->password);

            $user = User::create($validatedData);
            
            auth()->login($user);

            return redirect("/")->with('success', 'register successful');
        } catch (UniqueConstraintViolationException $e) {
            return back()->withErrors("duplicate email address");
        }
    }
    public function login()
    {
        return view('auth.login');
    }
    public function loginPost(LoginRequest $request)
    {
        $validatedData = $request->validated();

        if (!Auth::attempt($validatedData)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        if(auth()->user()->role == "client"){
            return redirect('/home');
        }elseif (Auth::user()->role == "vendeur"){
            return redirect('/vendeurDashboard');
        }elseif(auth()->user()->role == "admin"){
            return redirect('/dashboard');
        }

        return redirect('/')->with("success", "Login berhasil");
    }

}
