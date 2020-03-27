<?php

namespace Kem1980\CrudGenerator;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/stubs/' => base_path('resources/crud-generator/'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Kem1980\CrudGenerator\Commands\CrudCommand',
            'Kem1980\CrudGenerator\Commands\CrudControllerCommand',
            'Kem1980\CrudGenerator\Commands\CrudModelCommand',
            'Kem1980\CrudGenerator\Commands\CrudMigrationCommand',
            'Kem1980\CrudGenerator\Commands\CrudViewCommand',
            'Kem1980\CrudGenerator\Commands\CrudLangCommand',
            'Kem1980\CrudGenerator\Commands\CrudApiCommand',
            'Kem1980\CrudGenerator\Commands\CrudApiControllerCommand'
        );
    }
}
