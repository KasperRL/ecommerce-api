<?php

namespace Database\Factories;

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
            'category_id' => $this->faker->numberBetween(1, 3),
            'brand_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
