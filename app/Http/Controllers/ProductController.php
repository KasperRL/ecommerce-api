<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::with('category')->get());
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:120'],
            'price_usd' => ['required'],
            'brand' => ['required', 'max:120'],
            'description' => ['max:255']
        ]);
    
        $newProduct = Product::create($attributes);
    
        return response()->json($newProduct);
    }

    public function show($id)
    {
        return response()->json(Product::where('id', $id)->get());
    }

    public function update($id)
    {
        $product = Product::findOrFail($id);

        $attributes = request()->validate([
            'name' => ['max:120'],
            'price_usd' => ['numeric'],
            'brand' => ['max:120'],
            'description' => ['max:255']
        ]);

        $product->update($attributes);

        return response()->json($product);
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();

        return response()->json(Product::all());
    }
}
