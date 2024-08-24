<?php

namespace KholisAbdullah\LaravelExample\Http\Controllers;

class MyController
{
    public function index(): string
    {
        return view('example::my-index');
    }

    public function create()
    {
        return 'ok create';
    }
}
