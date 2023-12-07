<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'utilisateur est connecté avec succès
            return redirect()->route('home');
        }

        // Échec de l'authentification
        return redirect()->route('login')->withErrors('Invalid credentials');
    }
}
