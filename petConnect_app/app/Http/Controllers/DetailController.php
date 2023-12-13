<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailPage($id)
    {
        $product = Product::find($id);
        return view('detail', ['product' => $product]);
    }
}
