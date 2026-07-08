<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Introduction extends Model
{
      use SoftDeletes;
    protected $fillable = [
        'title',
        'image',
        'description',
        'status',
        'mission',
        'vision',
    ];

     protected function image(): Attribute
{
    return Attribute::make(
        get: fn(?string $value) => $value ? Storage::disk('public')->url($value) :null,
        set: fn($value) => $value ? $value->store('introduction', 'public') :null,
    );
}
}
