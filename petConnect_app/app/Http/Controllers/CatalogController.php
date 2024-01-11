<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Race;

class CatalogController extends Controller
{
    public function catalogPage()
    {
        $products = Product::all();
        $races = Race::all();
        return view("catalog", compact('products', 'races'));
    }

    public function dogsByRace($id)
    {
        $filteredDogs = Product::where('race_id', $id)->get();
        return view('catalog', ['filteredDogs' => $filteredDogs]);


    }
}
