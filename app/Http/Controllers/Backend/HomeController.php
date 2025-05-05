<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // show admin panel
    public function index()
    {
        return view('backend.home.index');    
    }
}
