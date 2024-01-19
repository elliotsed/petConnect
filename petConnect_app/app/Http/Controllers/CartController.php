<?php

namespace App\Http\Controllers;
use App\Models\Order;


use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartPage()
    {
        $user = auth()->user();

        $userOrders = Order::where('user_id', $user->id)->with('product', 'product.user')->get();

        return view("cart", ['userOrders' => $userOrders]);
    }

    public function getNumberOfOrders()
    {
        $user = auth()->user();

        if ($user) {
            $numberOfOrders = Order::where('user_id', $user->id)->count();
            return $numberOfOrders;
        }

        // return 0; // Retourne 0 si l'utilisateur n'est pas connecté ou s'il n'a pas de commandes.
    }

    public function deleteOrder($orderId)
    {
        $order = Order::find($orderId);

        if ($order) {
            $order->delete();
            return back()->with('success', 'Order deleted successfully.');
        } else {
            return back()->with('error', 'Error deleting order!');
        }
    }

}

