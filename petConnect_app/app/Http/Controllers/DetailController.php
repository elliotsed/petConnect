<?php

namespace App\Http\Controllers;
use App\Models\Product;

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
}
