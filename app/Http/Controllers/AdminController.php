<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $products = \App\Product::All();

        return view('admin/adminTable', compact('products'));
    }

    public function edit(\App\Product $product)
    {
        return view('admin/adminEdit', compact('product'));
    }

    public function add()
    {
        return view('admin/adminAdd');
    }

    public function delete(\App\Product $product)
    {
        $product->delete();
        return redirect('/admin');
    }


    public function store(Request $request)
    {
        $product = \App\Product::find( (int) $request->id );

        if(empty($product)) {
           $product  = new \App\Product;
        }

        $formData = $request->intersect($product->fillable);
        $product->fill($formData);

        $product->save();

        return redirect('/');
    }

}
