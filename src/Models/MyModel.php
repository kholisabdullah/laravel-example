<?php

namespace KholisAbdullah\LaravelExample\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use KholisAbdullah\LaravelExample\Database\Factories\MyModelFactory;

/**
 * @property string $name
 */
class MyModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected static $factory = MyModelFactory::class;

    protected function nameUppercased(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::upper($this->name),
        );
    }
}
