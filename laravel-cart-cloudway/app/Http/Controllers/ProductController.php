<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('shop.index', compact('products'));
    }

    public function show($id)
    {
        $product = product::FindOrFail($id);
        return view('shop.show', compact('product'));
    }
}
