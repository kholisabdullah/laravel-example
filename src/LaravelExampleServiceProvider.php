<?php

namespace KholisAbdullah\LaravelExample;

use Illuminate\Support\Facades\Route;
use KholisAbdullah\LaravelExample\Http\Controllers\MyController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use KholisAbdullah\LaravelExample\Commands\LaravelExampleCommand;

class LaravelExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(LaravelExampleCommand::class);
    }

    public function packageRegistered(): void
    {
        Route::macro('example', function (string $prefix = 'example') {
            Route::prefix($prefix)->group(function () {
                Route::get('/', [MyController::class, 'index']);
                Route::get('/create', [MyController::class, 'create']);
            });
        });
    }
}
