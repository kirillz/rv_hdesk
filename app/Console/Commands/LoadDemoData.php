<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Task;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class LoadDemoData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'RV:demo-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Загрузить демо данные в только что установленном приложении';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->newLine();
        $this->info(date('r') . '   Запуск миграций');
        $this->performTaskClients();
        $this->performTaskInvoices();
        $this->performTaskTasks();
        Artisan::call('migrate:refresh --seed');
        $this->newLine();
        $this->info(date('r') . '   Готово');

        return 0;
    }

    private function performTaskClients()
    {
        $this->newLine();
        $this->info("Загружаю демонстрационные данные: Клиенты -   OK!");
        $this->newLine();
        $clients = Client::all();
        $bar = $this->output->createProgressBar(count($clients));
        $bar->start();

        foreach ($clients as $client) {
            $bar->advance();
        }
        $bar->finish();
    }

    private function performTaskInvoices()
    {
        $this->newLine();
        $this->info("Загружаю демонстрационные данные: Счета -   OK!");
        $this->newLine();
        $invoices = Invoice::all();
        $bar = $this->output->createProgressBar(count($invoices));
        $bar->start();

        foreach ($invoices as $invoice) {
            $bar->advance();
        }
        $bar->finish();
    }

    private function performTaskTasks()
    {
        $this->newLine();
        $this->info("Загружаю демонстрационные данные: Задачи -   OK!");
        $this->newLine();
        $tasks = Task::all();
        $bar = $this->output->createProgressBar(count($tasks));
        $bar->start();

        foreach ($tasks as $task) {
            $bar->advance();
        }
        $bar->finish();
    }
}
