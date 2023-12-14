<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        return response()->view('dashboard')->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
    }
}
