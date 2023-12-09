<?php

namespace Ozdemir\ClearLogsCommand\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Output\OutputInterface;

class ClearLogs extends Command
{
    protected $signature = 'logs:clear
                            {--daily : Clear daily logs}
                            {--dry-run : Simulate the command without clearing any files}';

    protected $description = 'Clear the application logs';

    public function handle()
    {
        $path = storage_path('logs');

        // Get all files in the logs directory
        $files = File::glob("{$path}/*.log");

        if (!count($files)){
            $this->info("No log files found.");
            return;
        }

        // Display verbose information if --verbose is used
        $verbosityLevel = $this->getOutput()->getVerbosity();

        if ($verbosityLevel >= OutputInterface::VERBOSITY_VERBOSE || $this->option('dry-run')) {
            $this->info('Files to be cleared:');
            foreach ($files as $file) {
                $this->line($file);
            }
        }

        // Simulate the command without actually clearing files if --dry-run is used
        if ($this->option('dry-run')) {
            $this->info('Simulation complete. No files were cleared.');
            return;
        }

        // Clear all files in the logs directory
        foreach ($files as $file) {
            File::delete($file);
        }

        $this->info($this->option('daily') ? 'Daily logs cleared successfully!' : 'Logs cleared successfully!');
    }
}
