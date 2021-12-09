<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:120'],
            'price' => ['required'],
            'brand' => ['required', 'max:120'],
            'description' => ['max:255']
        ]);
    
        $newProduct = Product::create($attributes);
    
        return $newProduct;
    }

    public function show($id)
    {
        return Product::where('id', $id)->get();
    }

    public function update($id)
    {
        $product = Product::findOrFail($id);

        $attributes = request()->validate([
            'name' => ['required', 'max:120'],
            'price' => ['required'],
            'brand' => ['required', 'max:120'],
            'description' => ['required', 'max:255']
        ]);

        $product->update($attributes);
    
        return $product;
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();

        return Product::all();
    }
}
