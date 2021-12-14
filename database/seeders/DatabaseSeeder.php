<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::factory(20)->create();
        Cart::create([
            'key' => random_int(100, 2000),
            'user_id' => random_int(1, 10)
        ]);
        Cart::create([
            'key' => random_int(100, 2000),
            'user_id' => random_int(1, 10)
        ]);
        Cart::create([
            'key' => random_int(100, 2000),
            'user_id' => random_int(1, 10)
        ]);
    }
}
