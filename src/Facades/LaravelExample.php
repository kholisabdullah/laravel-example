<?php

namespace KholisAbdullah\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KholisAbdullah\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \KholisAbdullah\LaravelExample\LaravelExample::class;
    }
}
