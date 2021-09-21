<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('jwt.auth', ['only' => 'destroy']);
    }

    public function index() 
    {
        $products = Product::all();

        return response($products);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        $product->categoria;

        return response($product);
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

        if (!$product) {
            return response([
                'error' => 'Produto não encontrado'
            ] ,404);
        }

        $product->fill($data);

        $product->update();

        return response($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) 
            return response([
                'error' => 'Produto não encontrado'
            ], 404);
        

        $product->delete();

        return response('');
    }
}
