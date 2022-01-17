<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return response()->json(Cart::with(['user', 'items'])->get());
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Cart $cart)
    {
        return response()->json($cart);
    }

    public function update(Request $request, Cart $cart)
    {
        //
    }

    public function destroy(Cart $cart)
    {
        //
    }
}
