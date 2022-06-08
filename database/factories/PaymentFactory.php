<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $clientIds = Client::all()->pluck('id')->toArray();
        return [
      'client_id' => $this->faker->randomElement($clientIds),
      'invoice_id' => $this->faker->numberBetween(0, 999999),
      'amount' => $this->faker->numberBetween(0, 10000),
      'payment_date' => $this->faker->dateTimeInInterval('now', '+3 week', 'Europe/Moscow'),
    ];
    }
}
