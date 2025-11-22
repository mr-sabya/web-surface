<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class WhyChooseSectionController extends Controller
{
    //
    public function index()
    {
        $whyChooseUs = WhyChooseUs::first();
        return view('backend.why-choose-us.index', compact('whyChooseUs'));
    }
}
