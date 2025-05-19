<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhyChooseSectionController extends Controller
{
    //
    public function index()
    {
        return view('backend.why-choose-us.index');
    }
}
