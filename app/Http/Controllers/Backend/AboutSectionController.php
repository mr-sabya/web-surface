<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    // about section
    public function index()
    {
        $about = AboutSection::first();
        return view('backend.about-section.index', compact('about'));
    }
}
