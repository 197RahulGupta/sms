<?php

namespace App\Http\Controllers;

use App\Http\Requests\Feature\StoreFeatureRequest;
use App\Http\Requests\Feature\UpdateFeatureRequest;
use App\Models\Feature;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeatureController extends Controller
{
    public function index()
    {
        $features= Feature::latest()->get();
        return view('admin.feature.index',compact('features'));
    }

    public function create()
    {
        return view('admin.feature.create');
    }

    public function store(StoreFeatureRequest $request) : RedirectResponse
    {
        Feature::create($request->validated());
        Alert::success('Feature is created');
        return redirect(route('admin.feature.index'));
    }
    public function edit(Feature $feature)
    {
        return view ("admin.feature.edit",compact('feature'));
    }
    public function update(UpdateFeatureRequest $request,Feature $feature)
    {
        $feature-> update($request->validated());
        Alert::success('Feature is updated');
        return redirect(route('admin.feature.index'));
    }
    public function destroy(Feature $feature)
    {
        $feature->delete();
        Alert::success("Feature is deleted");
        return back();
    }
}
