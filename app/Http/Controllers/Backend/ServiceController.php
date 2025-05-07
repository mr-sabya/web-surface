<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // list of services
    public function index()
    {
        return view('backend.service.index');
    }


    // show create form
    public function create()
    {
        return view('backend.service.create');    
    }

    // show update form
    public function edit($id)
    {
        $service = Service::findOrFail(intval($id));
        return view('backend.service.edit', compact('service'));    
    }
}
