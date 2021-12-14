<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::with('cart')->get();
    }

    public function show($id)
    {
        return User::with('cart')->findOrFail($id);
    }
}
