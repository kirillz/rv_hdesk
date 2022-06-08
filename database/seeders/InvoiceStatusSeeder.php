<?php

namespace Database\Seeders;

use Dotenv\Util\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoice_statuses')->insert([
          'id' => 1,
        'name' => 'Черновик',
      ]);
        DB::table('invoice_statuses')->insert([
        'id' => 2,
        'name' => 'Отправлен',
      ]);
        DB::table('invoice_statuses')->insert([
        'id' => 3,
        'name' => 'Просмотрен',
      ]);
        DB::table('invoice_statuses')->insert([
        'id' => 4,
        'name' => 'Одобрен',
      ]);
        DB::table('invoice_statuses')->insert([
        'id' => 5,
        'name' => 'Частично оплачен',
      ]);
        DB::table('invoice_statuses')->insert([
        'id' => -1,
        'name' => 'Просроченный',
      ]);
        DB::table('invoice_statuses')->insert([
        'id' => -2,
        'name' => 'Неуплаченный',
      ]);
    }
}
