<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficeSectionController extends Controller
{
    //
    public function index()
    {
        return view('backend.office-section.index');
    }
}
