<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Spatie\BackupServer\Commands\CreateBackupCommand;

class Kernel extends ConsoleKernel
{
    /**
     * Add Moox Backup Server command to the Artisan console
     */
    protected $commands = [
        CreateBackupCommand::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('backup-server:dispatch-backups')->everyMinute();
        $schedule->command('backup-server:cleanup')->daily();
        $schedule->command('backup-server:monitor')->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
