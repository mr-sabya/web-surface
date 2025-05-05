<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // web development service
    public function webDevelopment()
    {
        return view('frontend.service.web');
    }


    // app development service
    public function appDevelopment()
    {
        return view('frontend.service.android');    
    }
}
