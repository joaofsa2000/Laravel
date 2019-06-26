<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('products')->with('products',$products);
    }
    function show(int $id)
    {
        $product = Product::findOrFail($id);
        return view('product')->with('product',$product);
    }
    function create()
    {
        # code...
    }
}
