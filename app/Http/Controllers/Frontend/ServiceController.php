<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    /**
     * Display the service page.
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('frontend.service.show', compact('service'));
    }

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

    // seo and digital marketing service
    public function seoDigitalMarketing()
    {
        return view('frontend.service.seo');
    }

    // graphic design
    public function graphicDesign()
    {
        return view('frontend.service.graphic');    
    }
}
