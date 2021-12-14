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
            'price_usd' => ['required', 'numeric'],
            'brand' => ['required', 'max:120'],
            'description' => ['max:255'],
            'stock' => ['required', 'numeric'],
            'category_id' => ['required', 'numeric']
        ]);
    
        $newProduct = Product::create($attributes);
    
        return response()->json(Product::with('category')->findOrFail($newProduct->id));
    }

    public function show($id)
    {
        return response()->json(Product::with('category')->findOrFail($id));
    }

    public function update($id)
    {
        $product = Product::findOrFail($id);

        $attributes = request()->validate([
            'name' => ['max:120'],
            'price_usd' => ['numeric'],
            'brand' => ['max:120'],
            'description' => ['max:255'],
            'stock' => ['numeric'],
            'category_id' => ['numeric']
        ]);

        $product->update($attributes);

        return response()->json(Product::with('category')->findOrFail($product->id));
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();

        return response()->json(Product::with('category')->get());
    }
}
