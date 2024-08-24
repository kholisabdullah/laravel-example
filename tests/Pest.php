<?php

use Illuminate\Support\Facades\Route;
use KholisAbdullah\LaravelExample\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(fn () => Route::example())
    ->in(__DIR__);
