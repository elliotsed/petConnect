<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerPage()
    {
        return response()->view('register')->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
    }
}
