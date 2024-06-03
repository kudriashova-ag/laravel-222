<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;

    function genre() {
        return $this->belongsTo(Genre::class);
    }


    protected function shortDescription(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => Str::words($attributes['description'], 4, '...'),
        );
    }
}
