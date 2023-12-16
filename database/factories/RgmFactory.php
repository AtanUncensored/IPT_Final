<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rgm>
 */
class RgmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'email'     => fake()->safeEmail(),
            'branch' => fake()->randomElement(['Tubigon', 'Talibon', 'Tubigon', 'Tubigon']),
            'salary' =>fake()->numberBetween(10000,30000),
            'contact_number' => fake()->phoneNumber(),
           
        ];
    }
}
