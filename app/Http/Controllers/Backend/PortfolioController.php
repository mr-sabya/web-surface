<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // portfolio list
    public function index()
    {
        return view('backend.portfolio.index');
    }

    // create portfolio
    public function create()
    {
        return view('backend.portfolio.create');
    }

    // edit portfolio
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.portfolio.edit', compact('portfolio'));
    }
}
