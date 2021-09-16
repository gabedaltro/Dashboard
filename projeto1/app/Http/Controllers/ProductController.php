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
        $products = new Product;

        $products->name = $request->name;
        $products->category = $request->category;
        $products->stock = $request->stock;

        $products->save();
        
        return redirect('/api/products');
        return response($products);
    }
}
