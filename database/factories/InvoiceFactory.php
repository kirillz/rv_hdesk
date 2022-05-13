<?php

namespace Database\Factories;

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
        $invoiceIds = Invoice::all()->pluck('id')->toArray();

        return [
            'client_id' => $this->faker->randomElement($invoiceIds),
            'invoice_number' => $this->faker->numberBetween(0, 999999),
            'discount' => $this->faker->numberBetween(0, 10),
            'terms' => $this->faker->sentence(4, true),
            'public_notes' => $this->faker->sentence(4, true),
            'tax_name1' => $this->faker->sentence(4, true),
            'tax_rate1' => $this->faker->sentence(4, true),
            'pers_order_number' => $this->faker->numberBetween(5000, 10000),
            'pay_due_date' => $this->faker->dateTimeInInterval('-30', '+7', 'Europe/Moscow'),
            'invoice_date' => $this->faker->dateTimeInInterval('-30', '+7', 'Europe/Moscow'),
            'work_start_date' => $this->faker->dateTimeInInterval('-30', '+7', 'Europe/Moscow'),
            'work_due_date' => $this->faker->dateTimeInInterval('-30', '+7', 'Europe/Moscow'),
            'work_end_date' => $this->faker->dateTimeInInterval('-30', '+7', 'Europe/Moscow'),
            'amount' => $this->faker->numberBetween(0, 999999),
            'balance' => $this->faker->numberBetween(0, 999999),
        ];
    }
}
