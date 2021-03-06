<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $invoiceIds = Client::all()->pluck('id')->toArray();

        return [
            'client_id' => $this->faker->randomElement($invoiceIds),
            'invoice_number' => $this->faker->numberBetween(0, 999999),
            'invoice_status_id' => '1',
            'discount' => $this->faker->numberBetween(0, 10),
            'terms' => $this->faker->sentence(4, true),
            'public_notes' => $this->faker->sentence(4, true),
            'tax_name1' => $this->faker->sentence(4, true),
            'tax_rate1' => $this->faker->sentence(4, true),
            'pers_order_number' => $this->faker->numberBetween(5000, 10000),
            'pay_due_date' => $this->faker->dateTimeInInterval('now', '+1 month', 'Europe/Moscow'),
            'invoice_date' => $this->faker->dateTimeInInterval('-3 days', '+8 hours', 'Europe/Moscow'),
            'amount' => $this->faker->numberBetween(0, 99),
            'balance' => $this->faker->numberBetween(0, 9999),
        ];
    }
}
