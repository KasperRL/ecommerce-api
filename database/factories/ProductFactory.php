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
            'category' => $this->faker->word(),
            'description' => $this->faker->text(),
            'stock' => $this->faker->numberBetween(1, 30)
        ];
    }
}
