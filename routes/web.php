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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

// about page
Route::get('about-us', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about.index');

// portfolio
Route::get('portfolio', [App\Http\Controllers\Frontend\PortfolioController::class, 'index'])->name('portfolio.index');

// services
Route::get('service/web-development', [App\Http\Controllers\Frontend\ServiceController::class, 'webDevelopment'])->name('service.web');

Route::get('service/app-development', [App\Http\Controllers\Frontend\ServiceController::class, 'appDevelopment'])->name('service.app');

Route::get('service/seo-digital-marketing', [App\Http\Controllers\Frontend\ServiceController::class, 'seoDigitalMarketing'])->name('service.seo');

Route::get('service/graphic-design', [App\Http\Controllers\Frontend\ServiceController::class, 'graphicDesign'])->name('service.graphic');


// blog
Route::get('blog', [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog.index');

// contact us
Route::get('contact-us', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact.index');

// auth
// show login form
Route::get('login', [App\Http\Controllers\Frontend\Auth\LoginController::class, 'showLoginForm'])->name('login');


