<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     

    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'first_name' => $this->faker->text(8),
            'last_name' => $this->faker->text(12),
            'email' => $this->faker->unique()->safeEmail,
            'passport_num'  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' =>$gender,

        ];
    }
}
