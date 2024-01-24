<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $user = auth()->user();

        $newOrders = Order::where('seller_id', $user->id)->with('product', 'product.user')->get();

        // Récupérer le nombre de commandes
        $orderCount = $newOrders->count();

        $userPosts = Post::where('user_id', $user->id)->get();

        // Récupérer le nombre d'articles ajoutés par l'utilisateur
        $postCount = $userPosts->count();

        $userProducts = Product::where('user_id', $user->id)->get();

        // Récupérer le nombre de produits ajoutés par l'utilisateur
        $productCount = $userProducts->count();


        return response()->view('back.index', ['newOrders' => $newOrders, 'userProducts' => $userProducts, 'orderCount' => $orderCount, 'productCount' => $productCount, 'userPosts' => $userPosts, 'postCount' => $postCount])->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
    }

    public function deleteOrder($id)
    {
        try {
            // Trouver la commande avec l'ID spécifié
            $order = Order::findOrFail($id);


            // Supprimer la commande
            $order->delete();

            // Rediriger avec un message de succès
            return back()->with('success', 'Order deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error deleting order.');
        }
    }

    public function deleteProduct($id)
    {
        try {
            $product = Product::findOrFail($id);

            $product->delete();

            return back()->with('success', 'product deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error deleting product.');
        }
    }

    public function updateProduct(Request $request, $id)
    {

        try {
            // Validate the form data
            $request->validate([
                'caracteristic' => 'required|string',
                'age' => 'required|string',
                'gender' => 'required|string',
                'race_id' => 'required|integer',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'required|integer',
                'title' => 'required|string',
            ]);

            $userId = Auth::id();


            // Update the product in the database
            $product = Product::find($id);

            if ($product->user_id === $userId) {
                // Prepare an array of fields to update
                $updateFields = [
                    'caracteristic' => $request->input('caracteristic'),
                    'age' => $request->input('age'),
                    'gender' => $request->input('gender'),
                    'race_id' => $request->input('race_id'),
                    'price' => $request->input('price'),
                    'title' => $request->input('title'),
                ];

                // Handle the photo upload if present in the request
                if ($request->hasFile('photo')) {
                    $fichier = $request->file('photo');
                    $fichier->storeAs('catalog', $fichier->getClientOriginalName(), 'public');
                    $updateFields['photo'] = $fichier->getClientOriginalName();
                }

                $product->update($updateFields);


                return back()->with('success', 'product edited successfully.');
            }

            return back()->with('error', 'You do not have permission to edit this product.');

        } catch (\Exception $e) {
            return back()->with('error', 'Error editing product.');
        }

    }

    public function updateUser(Request $request)
    {
        // Validation des données
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        // Mise à jour des informations de l'utilisateur
        $user = Auth::user();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');

        $user->save();

        return redirect()->back()->with('success', 'Profile updated sucessfully!');
    }


}
