<?php

use KholisAbdullah\LaravelExample\Models\MyModel;

it('can return the uppercased name', function () {
    $model = MyModel::factory()->create(['name' => 'John']);

    expect($model->name_uppercased)->toBe('JOHN');
});
