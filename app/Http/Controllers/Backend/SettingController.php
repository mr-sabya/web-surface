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

    // seo setting
    public function seoSetting()
    {
        return view('backend.setting.seo');
    }
    
    // maintenance setting
    public function maintenanceSetting()
    {
        return view('backend.setting.maintenance');
    }

    // analytics setting
    public function analyticsSetting()
    {
        return view('backend.setting.analytics');
    }

    // currency- setting
    public function currencyLanguageSetting()
    {
        return view('backend.setting.currency-language');
    }

    // email- setting
    public function emailSetting()
    {
        return view('backend.setting.email');
    }

    // security- setting
    public function securitySetting()
    {
        return view('backend.setting.security');
    }
}
