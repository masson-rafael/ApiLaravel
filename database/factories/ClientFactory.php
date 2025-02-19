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
    public function definition(): array
    {
        return [
            'numeroclient' => $this->faker->unique()->randomNumber(5),
            'nom' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail,
            'cartebancaire' => $this->faker->creditCardNumber,
        ];
    }
}
