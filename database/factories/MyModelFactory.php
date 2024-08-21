<?php

namespace KholisAbdullah\LaravelExample\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use KholisAbdullah\LaravelExample\Models\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
