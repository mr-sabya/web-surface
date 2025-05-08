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
    
    
    

    // banner
    Route::get('website/banner', [App\Http\Controllers\Backend\BannerController::class, 'index'])->name('website.banner');

    // client
    Route::get('website/clients', [App\Http\Controllers\Backend\ClientController::class, 'index'])->name('website.client');

    // pages
    Route::get('website/{page}', [App\Http\Controllers\Backend\PageController::class, 'index'])->name('website.page');
    
    // services
    Route::get('services', [App\Http\Controllers\Backend\ServiceController::class, 'index'])->name('service.index');
    
    Route::get('service/create', [App\Http\Controllers\Backend\ServiceController::class, 'create'])->name('service.create');
    
    Route::get('service/edit/{id}', [App\Http\Controllers\Backend\ServiceController::class, 'edit'])->name('service.edit');
    
    Route::get('service/{id}', [App\Http\Controllers\Backend\ServiceController::class, 'show'])->name('service.show');
    
    
    // technology
    Route::get('technology', [App\Http\Controllers\Backend\TechnologyController::class, 'index'])->name('technology.index');


});
