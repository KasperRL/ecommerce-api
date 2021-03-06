<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::with('products')->get());
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Category $category)
    {
        return response()->json($category->load('products'));
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
