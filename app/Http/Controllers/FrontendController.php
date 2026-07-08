<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Feature;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $about = About::latest()->first();
        $features = Feature::all();
        return view('welcome',compact('about','features'));
    }
}
