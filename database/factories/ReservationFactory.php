<?php

namespace Database\Factories;

use App\Models\HotelGuest;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_id' => Room::factory(),
            'hotel_guests_id' => HotelGuest::factory(),
            'booking_date'=> fake()->dateTimeThisMonth(),
            'duration_in_days' => fake()->numberBetween(0, 5)
        ];
    }
}
