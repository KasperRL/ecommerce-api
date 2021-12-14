<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'price_usd' => $this->faker->numberBetween(1, 99),
            'brand' => $this->faker->word(),
            'category_id' => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->text(),
            'stock' => $this->faker->numberBetween(1, 30)
        ];
    }
}
