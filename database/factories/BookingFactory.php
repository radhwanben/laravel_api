<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_id' =>rand(1 ,20),
            'product_id' =>rand(1 ,40),
            'booked_on' =>$this->faker->dateTime(),
            'status' =>$this->faker->randomElement(['available', 'unavailable'])
        ];
    }
}
