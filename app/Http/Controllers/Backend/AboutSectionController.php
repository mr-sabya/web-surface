<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    // about section
    public function index()
    {
        return view('backend.about-section.index');
    }
}
