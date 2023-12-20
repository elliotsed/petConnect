<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'caracteristic' => 'required|string',
            'age' => 'required|string',
            'gender' => 'required|string',
            'race_id' => 'required|integer',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|integer',
            'title' => 'required|string',
        ]);

        $userId = Auth::id();


        $fichier = null; // Déclaration de la variable $fichier

        if ($request->hasFile('photo')) {
            $fichier = $request->file('photo');
            $fichier->storeAs('catalog', $fichier->getClientOriginalName(), 'public');
        }


        $newProduct = new Product([
            'caracteristic' => $request->input('caracteristic'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'race_id' => $request->input('race_id'),
            'photo' => $fichier->getClientOriginalName(), // Utilisation du nom du fichier stocké
            'user_id' => $userId,
            'price' => $request->input('price'),
            'title' => $request->input('title'),
        ]);

        $newProduct->save();

        return redirect()->route('dashboard')->with('success', 'Dog added sucessfully!');
    }
}
