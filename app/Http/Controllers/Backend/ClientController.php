<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // show client page
    public function index()
    {
        return view('backend.client.index');
    }
}
