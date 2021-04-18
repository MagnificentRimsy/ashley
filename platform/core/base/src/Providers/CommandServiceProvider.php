<?php

namespace Botble\Base\Providers;

use Botble\Base\Commands\ClearLogCommand;
use Botble\Base\Commands\InstallCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            ClearLogCommand::class,
            InstallCommand::class,
        ]);
    }
}
