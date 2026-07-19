<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class SystemSetting extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'organization_name',
        'address',
        'logo',
        'pan_no',
        'phone_number',
        'telephone_number',
        'footer_description',
        'map_url',
        'email',
        'facebook_url',
        'tiktok_url',
        'instagram_url',
        
    ];
     protected function logo(): Attribute
{
    return Attribute::make(
        get: fn(?string $value) => $value ? Storage::disk('public')->url($value) :null,
        set: fn($value) => $value ? $value->store('systemsetting', 'public') :null,
    );
}
}
