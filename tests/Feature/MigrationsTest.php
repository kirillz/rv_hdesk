<?php

namespace Tests\Feature;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class MigrationsTest extends TestCase
{
    public function test_migrate()
    {
        $this->expectNotToPerformAssertions();

        Artisan::call('migrate', ['--path' => 'database/migrations/tasks']);
    }

    public function test_tables_exists()
    {
        $this->assertTrue(Schema::hasTable('clients'));
        $this->assertTrue(Schema::hasTable('invoices'));
        $this->assertTrue(Schema::hasTable('tasks'));
        $this->assertTrue(Schema::hasTable('payments'));
    }

    public function test_columns_clients_exists()
    {  // FIXME: дописать тест на все табликолонки всех таблиц
        $this->assertTrue(Schema::hasColumns('clients', ['invoice_id', 'task_id', 'name', 'email', 'address1', 'address2', 'city', 'state', 'postal_code']));
    }

    public function test_columns_invoices_exists()
    {  // FIXME: дописать тест на все табликолонки всех таблиц
        $this->assertTrue(Schema::hasColumns('invoices', ['client_id', 'discount', 'pers_order_number', 'invoice_number', 'invoice_date', 'tax_name1', 'tax_rate1', 'amount', 'balance', 'terms', 'public_notes', 'is_deleted', 'is_recurring', 'work_start_date', 'work_due_date', 'work_end_date', 'pay_due_date', 'last_sent_date', 'recurring_invoice_id']));
    }

    public function test_soft_delete()
    {
        $this->assertTrue(Schema::hasColumns('clients', ['deleted_at']));
    }

    public function test_timestamps()
    {
        $this->assertTrue(Schema::hasColumns('clients', ['created_at', 'updated_at']));
    }

    public function test_default_nullable()
    {
        $client = Client::factory()->create(['name' => null]);

        $this->assertNull($client->name);
    }

    public function test_relation_table()
    {
        $invoices = Invoice::factory()->count(3);

        $client = Client::factory()->has($invoices)->create();

        $this->assertEquals(3, $client->invoices->count());
    }
}
