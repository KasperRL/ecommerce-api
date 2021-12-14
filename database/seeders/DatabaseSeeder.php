<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use App\Models\Brand;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(30)->create();
        Category::factory(3)->create();
        Brand::factory(10)->create();
        Product::factory(20)->create();
        CartItem::factory(15)->create();
        Cart::factory(5)->create();
    }
}
