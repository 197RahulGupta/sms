<?php

namespace App\Http\Controllers;

use App\Http\Requests\About\StoreAboutRequest;
use App\Http\Requests\About\UpdateAboutRequest;
use App\Models\About;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;


class AboutController extends Controller
{
     public function index()
    {
        $abouts= About::latest()->get();
        return view('admin.about.index',compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(StoreAboutRequest $request) : RedirectResponse
    {
        About::create($request->validated());
        Alert::success('About is created');
        return redirect(route('admin.about.index'));
    }
    public function edit(About $about)
    {
        return view ("admin.about.edit",compact('about'));
    }
    public function update(UpdateAboutRequest $request,About $about)
    {
        $about-> update($request->validated());
        Alert::success('About is updated');
        return redirect(route('admin.about.index'));
    }
    public function destroy(About $about)
    {
        $about->delete();
        Alert::success("About is deleted");
        return back();
    }
}
