<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // show portfolio page
    public function index()
    {
        return view('frontend.portfolio.index');    
    }


    // show portfolio details page
    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('frontend.portfolio.show', compact('portfolio'));
    }
}
