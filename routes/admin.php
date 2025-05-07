<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');

    // general setting
    Route::get('setting/general-setting', [App\Http\Controllers\Backend\SettingController::class, 'generalSetting'])->name('setting.general');

    Route::get('setting/seo-setting', [App\Http\Controllers\Backend\SettingController::class, 'seoSetting'])->name('setting.seo');

    Route::get('setting/maintenance-setting', [App\Http\Controllers\Backend\SettingController::class, 'maintenanceSetting'])->name('setting.maintenance');

    Route::get('setting/analytics-setting', [App\Http\Controllers\Backend\SettingController::class, 'analyticsSetting'])->name('setting.analytics');

    Route::get('setting/currency-language-setting', [App\Http\Controllers\Backend\SettingController::class, 'currencyLanguageSetting'])->name('setting.currency');

    Route::get('setting/email-setting', [App\Http\Controllers\Backend\SettingController::class, 'emailSetting'])->name('setting.email');

    Route::get('setting/security-setting', [App\Http\Controllers\Backend\SettingController::class, 'securitySetting'])->name('setting.security');
});
