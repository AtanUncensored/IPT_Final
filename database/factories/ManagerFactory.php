<?php

namespace Database\Factories;

use App\Models\Rgm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manager>
 */
class ManagerFactory extends Factory
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
            'station'   => fake()->randomElement(['service','kitchen','Lobby']),
            'contact_number' => fake()->phoneNumber(),
            'salary' => fake()->numberBetween(10000, 20000),
            'rgm_id'  =>fake()->randomElement(Rgm::pluck('id')),
        ];
    }
}
