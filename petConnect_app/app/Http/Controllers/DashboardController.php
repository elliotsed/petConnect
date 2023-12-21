<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $user = auth()->user();

        $userOrders = Order::where('user_id', $user->id)->with('product', 'product.user')->get();

        $userProducts = Product::where('user_id', $user->id)->get();

        return response()->view('dashboard', ['userOrders' => $userOrders, 'userProducts' => $userProducts])->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
    }

}
