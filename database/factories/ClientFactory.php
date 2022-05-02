<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'address1' => $this->faker->unique()->address(),
            'city' => $this->faker->unique()->city(),
            'state' => $this->faker->unique()->country(),
            'postal_code' => $this->faker->numberBetween(0,999999),
        ];
    }
}
