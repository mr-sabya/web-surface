<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhilosophyController extends Controller
{
    // Philosophy page
    public function index()
    {
        return view('backend.philosophy.index');
    }
}
