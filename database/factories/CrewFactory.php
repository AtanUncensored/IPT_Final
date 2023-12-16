<?php

namespace Database\Factories;

use App\Models\Rgm;
use App\Models\Manager;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crew>
 */
class CrewFactory extends Factory
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
            'address'     => fake()->address(),
            'salary'     => fake()->numberBetween(1000,10000),
            'station'   => fake()->randomElement(['service','kitchen','Lobby']),
            'contact_number' => fake()->phoneNumber(),
            'manager_id' => fake() ->randomElement(Manager::pluck('id')),
            'rgm_id'  =>fake()->randomElement(Rgm::pluck('id')),
        ];
    }
}
