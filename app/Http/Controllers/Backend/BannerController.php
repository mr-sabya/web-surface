<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    // show banner page
    public function index()
    {
        return view('backend.banner.index');
    }
}
