<?php

namespace App\Http\Controllers;

use App\Http\Requests\Introduction\StoreIntroductionRequest;
use App\Http\Requests\Introduction\UpdateIntroductionRequest;
use App\Models\Introduction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class IntroductionController extends Controller 
{
    public function index()
    {
        $introductions = Introduction::latest()->get();

        return view('admin.introduction.index', compact('introductions'));
    }

    public function create()
    {
        return view('admin.introduction.create');
    }

    public function store(StoreIntroductionRequest $request): RedirectResponse
    {
        Introduction::create($request->validated());
        Alert::success('Introduction is created');
        return redirect(route('admin.introduction.index'));
    }
    public function edit(Introduction $introduction)
    {
        return view ('admin.introduction.edit',compact('introduction'));
    }
    public function update(UpdateIntroductionRequest $request,Introduction $introduction)
    {
        $introduction-> update($request->validated());
        Alert::success('Introduction is updated');
        return redirect(route('admin.introduction.index'));
    }
    public function destroy(Introduction $introduction)
    {
        $introduction->delete();
        Alert::success("Introduction is deleted");
        return back();
    }
}

    

