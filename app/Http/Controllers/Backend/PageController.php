<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index($name)
    {
        return view('backend.page.index', compact('name'));    
    }
}
