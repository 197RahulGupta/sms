<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemSetting extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'orgination_name',
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
}
