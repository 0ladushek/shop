<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Product::all();
        return view('index', compact('products'));
    }

    public function show( \App\Product $product)
    {
        return view('product/show', compact('product'));// создать шаблон
    }
}
