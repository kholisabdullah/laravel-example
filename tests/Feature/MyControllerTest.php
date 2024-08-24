<?php

use function Pest\Laravel\get;

test('see ok in index', function () {
    get('/example/')
        ->assertStatus(200)
        ->assertSee('index');
});

test('see ok in create', function () {
    get('/example/create')
        ->assertStatus(200)
        ->assertSee('ok create');
});
