<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "sku" => mt_rand(10000, 99999),
            "category_id" => 1,
            "brand_id" => 1,
            "unit_id" => 1,
            "quantity" => mt_rand(10, 100),
            "supplier" => 1,
            "buy_price" => mt_rand(5, 500),
            "sell_price" => mt_rand(20, 1000),
        ];
    }
}
