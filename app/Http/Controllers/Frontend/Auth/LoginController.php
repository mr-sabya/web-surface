<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // show login form
    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }
}
