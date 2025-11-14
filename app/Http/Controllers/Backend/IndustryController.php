<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    //
    public function index()
    {
        return view('backend.industry.index');
    }
}
