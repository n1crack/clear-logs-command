<?php

namespace Ozdemir\ClearLogsCommand;

use Illuminate\Support\ServiceProvider;

class ClearLogsCommandServiceProvider extends ServiceProvider
{
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Ozdemir\ClearLogsCommand\Console\Commands\ClearLogs::class,
            ]);
        }
    }
}
