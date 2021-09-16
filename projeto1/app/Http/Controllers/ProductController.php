<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::all();

        return response($products);
    }

    public function show($id)
    {
        $products = Product::findOrFail($id);

        return response($products);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = new Product;

        $data = $request->json()->all();

        /*
        $product->name = $request->name;
        $product->category = $request->category;
        $product->stock = $request->stock;
        */

        $product->fill($data);

        $product->save();

        return response($product, 201);
    }

    public function update($id, Request $request)
    {
        $data = $request->json()->all();

        $product = Product::find($id);

        $product->fill($data);

        $product->update();

        return response($product);
    }
}
