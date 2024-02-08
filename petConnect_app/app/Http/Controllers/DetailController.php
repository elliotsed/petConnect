<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Discussion;

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

    public function addOrder(Request $request, $id)
    {

        // Vérifiez si l'utilisateur est authentifié
        if (auth()->check()) {

            $userId = auth()->user()->id;
            $productId = $request->input('product_id');
            $sellerId = $id;

            //Vérifier si le produit appartient à l'utilisateur
            $userOwnsProduct = Product::where('id', $productId)
                ->where('user_id', $userId)
                ->exists();

            if ($userOwnsProduct) {
                return back()->with('error', 'You cannot place an order for your own product!');
            }

            //Vérifier si cette commande existe déjà
            $existingOrder = Order::where('user_id', auth()->user()->id)
                ->where('product_id', $request->input('product_id'))
                ->first();

            if ($existingOrder) {
                return back()->with('error', 'You already placed an order for this product!');
            }

            //Ouverture d'une nouvelle discussion entre l'acheteur et le vendeur si elle n'existait pas
            $existingDiscussion = Discussion::where('sender_id', $userId)->where('receiver_id', $sellerId);

            if ($existingDiscussion->doesntExist()) {
                $discussion = new Discussion();
                $discussion->sender_id = $userId;
                $discussion->receiver_id = $sellerId;
                $discussion->save();
            }


            $order = new Order();
            $order->user_id = $userId;
            $order->product_id = $productId;
            $order->seller_id = $sellerId;
            $order->save();

            return back()->with('success', 'Order placed successfully!');

        } else {
            return back()->with('error', 'You need to be connected to place an order!');
        }
    }
}
