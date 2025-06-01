<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioSectionController extends Controller
{
    //
    public function index()
    {
        return view('backend.portfolio-section.index');
    }
}
