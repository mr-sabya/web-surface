<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewPlatformController extends Controller
{
    //
    public function index()
    {
        return view('backend.review-platform.index');
    }
}
