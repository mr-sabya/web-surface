<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // generalSetting
    public function generalSetting()
    {
        return view('backend.setting.general');
    }
}
