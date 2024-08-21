<?php

namespace Workbench\App\Commands;

use KholisAbdullah\LaravelExample\Commands\LaravelExampleCommand;
use function Pest\Laravel\artisan;

test('can return defaultoutput', function () {
    artisan(LaravelExampleCommand::class)
        ->expectsOutput('All done');
});

test('can return output from config', function () {
    config()->set('example.command_output', 'Hello World');

    artisan(LaravelExampleCommand::class)
        ->expectsOutput('Hello World');
});
