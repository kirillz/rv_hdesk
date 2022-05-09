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
    $this->info("Загружаю демонстрационные данные: Клиенты -   OK!");
  }

  private function performTaskInvoices()
  {
    $this->info("Загружаю демонстрационные данные: Счета -   OK!");
  }

  private function performTaskTasks()
  {
    $this->info("Загружаю демонстрационные данные: Задачи -   OK!");
  }
}
