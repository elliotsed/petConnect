<?php

namespace App\Http\Controllers;

use App\Models\Order;


use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartPage()
    {
        $user = auth()->user();

        $totalPrice = 0;

        $userOrders = Order::where('user_id', $user->id)->with('product', 'product.user')->get();

        foreach ($userOrders as $order) {
            $totalPrice += $order->product->price * $order->quantity;
        }

        return view("cart", ['userOrders' => $userOrders, 'totalPrice' => $totalPrice]);
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

    public function updateQuantity($orderId)
    {
        $quantity = request()->input('quantity');


        $order = Order::find($orderId);
        $order->quantity = $quantity;
        $order->save();

        return response()->json(['success' => true]);
    }

}

