<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Client::factory(5)->create();
        \App\Models\Invoice::factory(5)->create();
        \App\Models\Task::factory(5)->create();
        \App\Models\Payment::factory(5)->create();


        $this->call([
        InvoiceStatusSeeder::class,
      ]);
    }
}
