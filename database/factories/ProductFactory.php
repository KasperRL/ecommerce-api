<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'price_usd' => $this->faker->numberBetween(1, 99),
            'description' => $this->faker->text(),
            'stock' => $this->faker->numberBetween(1, 30),
            'category_id' => Category::factory()->create(),
            'brand_id' => Brand::factory()->create()
        ];
    }
}
