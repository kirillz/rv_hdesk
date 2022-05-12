<?php

namespace Database\Factories;

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
        $paymentIds = Payment::all()->pluck('id')->toArray();

        return [
            'client_id' => $this->faker->randomElement($paymentIds),
            'invoice_id' => $this->faker->numberBetween(0, 999999),
            'amount' => $this->faker->numberBetween(0, 10),
            'payment_date' => $this->faker->dateTimeInInterval('-30', '+7', 'Europe/Moscow'),
        ];
    }
}
