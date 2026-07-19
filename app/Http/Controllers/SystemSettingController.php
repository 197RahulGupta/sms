<?php

namespace App\Http\Controllers;

use App\Http\Requests\SystemSetting\StoreSystemSettingRequest;
use App\Models\SystemSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class SystemSettingController extends Controller
{
    public function create()
    {
       $systemsetting = SystemSetting::latest()->first();
        return view('admin.systemsetting.create', compact('systemsetting'));
    }

    public function store(StoreSystemSettingRequest $request): RedirectResponse
    {
        if ($systemsetting = SystemSetting::latest()->first()) {
            if ($request->hasFile('logo') && $logo = $systemsetting->getRawOriginal('logo')) {
                $this->deleteFile($logo);
            }
           
            $systemsetting->update($request->validated());
        } else {
            SystemSetting::create($request->validated());
        }
        Alert::success('Setting added successfully');
        Cache::forget('systemsetting');

        return back();
    }
}