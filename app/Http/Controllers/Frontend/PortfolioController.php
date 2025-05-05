<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // show portfolio page
    public function index()
    {
        return view('frontend.portfolio.index');    
    }
}
