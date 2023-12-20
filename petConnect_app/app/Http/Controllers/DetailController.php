<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailPage($id)
    {
        $product = Product::find($id);

        $sameRace = Product::where('race_id', $product->race_id)
                      ->where('id', '!=', $id)
                      ->take(3)
                      ->get();

        return view('detail', ['product' => $product, 'sameRace' => $sameRace]);
    }

    public function addOrder(Request $request)
    {
        //L'utilisateur doit-être authentifié avant de passer à l'étape suivante
        $user = auth()->user();

        $order = new Order();
        $order->user_id = $user->id;
        $order->product_id = $request->input('product_id');
        $order->save();

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}
