<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function addUser(Request $request) {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'role' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        $newUser = new User([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'role' => $request->input('role'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $newUser->save();

        return redirect()->route('/')->with('success', 'Utilisateur ajouté avec succès!');
    }
}

