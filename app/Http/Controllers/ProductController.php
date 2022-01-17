<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::with(['category', 'brand'])->get());
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:120'],
            'price_usd' => ['required', 'numeric'],
            'description' => ['max:255'],
            'stock' => ['required', 'numeric'],
            'category_id' => ['required', 'numeric'],
            'brand_id' => ['required', 'numeric']
        ]);
    
        $newProduct = Product::create($attributes);
    
        return response()->json(Product::with(['category', 'brand'])->findOrFail($newProduct->id));
    }

    public function show(Product $product)
    {
        return response()->json($product->load('category', 'brand'));
    }

    public function update(Product $product)
    {
        $attributes = request()->validate([
            'name' => ['max:120'],
            'price_usd' => ['numeric'],
            'description' => ['max:255'],
            'stock' => ['numeric'],
            'category_id' => ['numeric'],
            'brand_id' => ['numeric']
        ]);

        $product->update($attributes);

        return response()->json($product->load('category', 'brand'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json($product->name . " destroyed.");
    }
}
