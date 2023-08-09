<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => '10' . fake()->randomNumber(1, true),
            'is_available'=> fake()->randomElement([true, false]),
            'room_type' => fake()->randomElement(['single', 'double', 'suite'])
        ];
    }
}
