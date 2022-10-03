<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends controller
{

    public function display()
    {
        return view('login');
    }

    public function displayRegister()
    {
        return view('register');
    }


    public function register(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'email' => 'email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'

        ]);


        $user = User::create([
            'name' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->pwd),
        ]);

        Auth::login($user);

        return redirect()->route('accueil')->with('message', 'Soyez la bienvenue surnotre site');
    }

  /*   public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       // $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('accueil')->with('message', 'Soyez la bienvenue sur notre site');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    } */




    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('accueil');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }






    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
