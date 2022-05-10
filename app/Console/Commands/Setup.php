<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Artisan;

class Setup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'RV:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Настроить только что установленное приложение';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $keyGenerated = config('app.key');
        $databaseFile = config('database.connections.sqlite.database');
        if (!file_exists($databaseFile)) {
            $this->info('Создаю Sqlite файл "' . $databaseFile . '"');
            file_put_contents($databaseFile, '');
        }
        if (empty($keyGenerated)) {
            $this->info('Создаю ключ key:generate');
            Artisan::call('key:generate');
        }
        $doMigrate = $this->choice(
        'Хотите чтобы я сделал миграции?',
        ['Да', 'Нет'],
        '0',
        );
        if ($doMigrate == 'Да' ) {
          $this->info('Запускаю migrate...');
          Artisan::call('migrate');
          dump(Artisan::output());
          $this->info('готово.');
        }

        return 0;
    }
}
