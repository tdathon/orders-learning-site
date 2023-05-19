<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => random_int(1,500),
            'name' => $this->faker->name(),
            'item' => $this->faker->word(),
            'subtotal' => random_int(200,5000)/100,
            'date' => $this->faker->date(),
        ];
    }
}
