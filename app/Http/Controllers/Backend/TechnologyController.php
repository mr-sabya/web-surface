<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    // show list of technology
    public function index()
    {
        return view('backend.technology.index');    
    }
}
