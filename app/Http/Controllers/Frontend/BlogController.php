<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // show blog list
    public function index()
    {
        return view('frontend.blog.index');    
    }
}
