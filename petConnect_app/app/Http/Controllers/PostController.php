<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;



class PostController extends Controller
{
    public function postPage()
    {
        return view("post");
    }

    public function addPost(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $userId = Auth::id();

        $fichier = null; // Déclaration de la variable $fichier

        if ($request->hasFile('photo')) {
            $fichier = $request->file('photo');
            if ($fichier) {
                $fichier->storeAs('blog', $fichier->getClientOriginalName(), 'public');
            }
        }

        $newPost = new Post([
            'photo' => $fichier->getClientOriginalName(), // Utilisation du nom du fichier stocké
            'user_id' => $userId,
            'content' => $request->input('content'),
            'title' => $request->input('title'),
        ]);

        $newPost->save();

        return redirect()->route('dashboard')->with('success', 'Post added sucessfully!');

    }
}
