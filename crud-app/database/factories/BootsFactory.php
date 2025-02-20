<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class BootsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word, 
            'description' => $this->faker->text(200),
            'brand' => $this->faker->unique()->company
        ];
    }
    
    
}