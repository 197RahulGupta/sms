<?php
use Illuminate\Support\Facades\Cache;
use App\Models\SystemSetting;


if (!function_exists('systemsetting')) {
    function systemsetting()
    {
        return Cache::rememberForever('system_setting', function () {
            return SystemSetting::latest()->first();
        });
    }
}