<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    public function addProduct(Request $request) {
        $request->validate([
            'caracteristic' => 'required|string',
            'age' => 'required|string',
            'gender' => 'required|string',
            'race_id' => 'required|integer',
            'photo' => 'required|string',
            'user_id' => 'required|integer',
        ]);

        $newProduct = new Product([
            'caracteristic' => $request->input('caracteristic'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'race_id' => $request->input('race_id'),
            'photo' => $request->input('photo'),
            'user_id' => $request->input('user_id'),
        ]);

        $newProduct->save();

        return redirect()->route('')->with('success', 'Chien ajouté avec succès!');
    }
}
