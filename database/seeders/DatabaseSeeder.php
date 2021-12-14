<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Category::factory(3)->create();
        Brand::factory(10)->create();
        Product::factory(20)->create();
        Cart::factory(5)->create();
    }
}
