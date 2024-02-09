<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Post;
use App\Models\Discussion;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $user = auth()->user();

        $newOrders = Order::where('seller_id', $user->id)->with('product', 'product.user')->get();

        $newDiscussions = Discussion::where('sender_id', $user->id)->orWhere('receiver_id', $user->id)->with('sender', 'receiver')->get();

        $messages = [];

        foreach ($newDiscussions as $discussion){
            $messagesInDiscussion = Message::where('discussion_id', $discussion->id)->get();
            $messages[$discussion->id] = $messagesInDiscussion;
        }
        // Récupérer le nombre de commandes
        $orderCount = $newOrders->count();

        $userPosts = Post::where('user_id', $user->id)->get();

        // Récupérer le nombre d'articles ajoutés par l'utilisateur
        $postCount = $userPosts->count();

        $userProducts = Product::where('user_id', $user->id)->get();

        // Récupérer le nombre de produits ajoutés par l'utilisateur
        $productCount = $userProducts->count();


        return response()->view('back.index', ['newOrders' => $newOrders, 'userProducts' => $userProducts, 'orderCount' => $orderCount, 'productCount' => $productCount, 'userPosts' => $userPosts, 'postCount' => $postCount, 'newDiscussions' => $newDiscussions, 'messages' => $messages])->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
    }

    public function changeUserRole()
    {
        $user = auth()->user();
        $user->role = "seller";
        $user->save();
        return back()->with("success", "Congratulation! You are now a seller");

    }


    public function sendMessage(Request $request)
    {

        // Validation des données
        $request->validate([
            'content' => 'required|string',
            'discussion_id' => 'required|exists:discussions,id',
        ]);

        // Créer un nouveau message
        $message = new Message();
        $message->discussion_id = $request->input('discussion_id');
        $message->content = $request->input('content');
        $message->sender_id = auth()->user()->id;
        $message->save();

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    // public function deleteOrder($id)
    // {
    //     try {
    //         // Trouver la commande avec l'ID spécifié
    //         $order = Order::findOrFail($id);


    //         // Supprimer la commande
    //         $order->delete();

    //         // Rediriger avec un message de succès
    //         return back()->with('success', 'Order deleted successfully.');
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Error deleting order.');
    //     }
    // }

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
                'caracteristic' => 'nullable|string',
                'age' => 'nullable|string',
                'gender' => 'nullable|string',
                'race_id' => 'nullable|integer',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'nullable|integer',
                'title' => 'nullable|string',
            ]);

            $userId = Auth::id();


            // Update the product in the database
            $product = Product::find($id);

            if ($product->user_id === $userId) {
                // Get the existing values from the database
                $existingValues = $product->toArray();

                // Prepare an array of fields to update, using the existing values if the corresponding fields are not present in the request
                $updateFields = [
                    'caracteristic' => $request->filled('caracteristic') ? $request->input('caracteristic') : $existingValues['caracteristic'],
                    'age' => $request->filled('age') ? $request->input('age') : $existingValues['age'],
                    'gender' => $request->filled('gender') ? $request->input('gender') : $existingValues['gender'],
                    'race_id' => $request->filled('race_id') ? $request->input('race_id') : $existingValues['race_id'],
                    'price' => $request->filled('price') ? $request->input('price') : $existingValues['price'],
                    'title' => $request->filled('title') ? $request->input('title') : $existingValues['title'],
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
            return back()->with('error', $e->getMessage());
        }

    }

    public function updatePost(Request $request, $id)
    {
        try {
            // Validate the form data
            $request->validate([
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'nullable|string',
                'title' => 'nullable|string',
            ]);

            $userId = Auth::id();

            // Update the post in the database
            $post = Post::find($id);

            if ($post->user_id === $userId) {
                // Get the existing values from the database
                $existingValues = $post->toArray();

                // Prepare an array of fields to update
                $updateFields = [
                    'content' => $request->filled('content') ? $request->input('content') : $existingValues['content'],
                    'title' => $request->filled('title') ? $request->input('title') : $existingValues['title'],
                ];

                // Handle the photo upload if present in the request
                if ($request->hasFile('photo')) {
                    $fichier = $request->file('photo');
                    $fichier->storeAs('blog', $fichier->getClientOriginalName(), 'public');

                    $updateFields['photo'] = $fichier->getClientOriginalName();
                }

                $post->update($updateFields);

                return back()->with('success', 'Post updated successfully.');
            }

            return back()->with('error', 'You do not have permission to edit this post.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error updating post.');
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

    public function deletePost($id)
    {
        $user = Auth::user();
        try {
            // Trouver le post avec l'ID spécifié
            $post = Post::findOrFail($id);
            // Vérifier si l'utilisateur actuel est l'auteur du post
            if ($post->user_id == $user->id) {
                // Supprimer le post
                $post->delete();

                // Rediriger avec un message de succès
                return back()->with('success', 'Post deleted successfully.');
            } else {
                // L'utilisateur n'est pas autorisé à supprimer ce post
                return back()->with('error', 'You do not have permission to delete this post.');
            }
        } catch (\Exception $e) {
            // Une erreur s'est produite lors de la suppression du post
            return back()->with('error', 'Error deleting post.');
        }
    }



}
