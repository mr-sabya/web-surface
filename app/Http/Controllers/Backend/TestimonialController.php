<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    // 
    public function index()
    {
        return view('backend.testimonial.index');
    }


    // create
    public function create()
    {
        return view('backend.testimonial.create');
    }

    // edit
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit', compact('testimonial'));
    }
}
