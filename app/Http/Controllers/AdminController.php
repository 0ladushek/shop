<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        $products = \App\Product::All();

        return view('admin/adminTable', compact('products'));// создать шаблон
    }

    public function edit (\App\Product $product)
    {
        return view('product/show', compact('product'));// создать шаблон
    }
}
