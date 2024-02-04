<?php

namespace TimWassenburg\RepositoryGenerator;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use TimWassenburg\RepositoryGenerator\Console\MakeRepository;

class RepositoryGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeRepository::class,
            ]);

        }
    }
}
