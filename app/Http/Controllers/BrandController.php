<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return response()->json(Brand::with('products')->get());
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return response()->json(Brand::with('products')->findOrFail($id));
    }

    public function update(Request $request, Brand $brand)
    {
        //
    }

    public function destroy(Brand $brand)
    {
        //
    }
}
