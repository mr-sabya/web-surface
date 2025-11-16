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

    // settings routes group
    Route::prefix('setting')->name('setting.')->group(function () {
        // general settings
        Route::get('general-setting', [App\Http\Controllers\Backend\SettingController::class, 'generalSetting'])->name('general');

        // seo settings
        Route::get('seo-setting', [App\Http\Controllers\Backend\SettingController::class, 'seoSetting'])->name('seo');
        
        // maintenance settings
        Route::get('maintenance-setting', [App\Http\Controllers\Backend\SettingController::class, 'maintenanceSetting'])->name('maintenance');

        // analytics settings
        Route::get('analytics-setting', [App\Http\Controllers\Backend\SettingController::class, 'analyticsSetting'])->name('analytics');

        // currency & language settings
        Route::get('currency-language-setting', [App\Http\Controllers\Backend\SettingController::class, 'currencyLanguageSetting'])->name('currency');

        // email settings
        Route::get('email-setting', [App\Http\Controllers\Backend\SettingController::class, 'emailSetting'])->name('email');
        
        // security settings
        Route::get('security-setting', [App\Http\Controllers\Backend\SettingController::class, 'securitySetting'])->name('security');
    });




    // website routes group
    Route::prefix('website')->name('website.')->group(function () {
        // banner
        Route::get('banner', [App\Http\Controllers\Backend\BannerController::class, 'index'])->name('banner');

        // client
        Route::get('clients', [App\Http\Controllers\Backend\ClientController::class, 'index'])->name('client');

        // about section
        Route::get('about-section', [App\Http\Controllers\Backend\AboutSectionController::class, 'index'])->name('about-section');

        // why choose us
        Route::get('why-choose-us', [App\Http\Controllers\Backend\WhyChooseSectionController::class, 'index'])->name('why-choose-us');

        // our service section
        Route::get('our-service-section', [App\Http\Controllers\Backend\OurServiceSectionController::class, 'index'])->name('our-service-section');

        // portfolio section
        Route::get('portfolio-section', [App\Http\Controllers\Backend\PortfolioSectionController::class, 'index'])->name('portfolio-section');

        // our client section
        Route::get('our-client-section', [App\Http\Controllers\Backend\OurClientSectionController::class, 'index'])->name('our-client-section');

        // badge section
        Route::get('badge-section', [App\Http\Controllers\Backend\BadgeSectionController::class, 'index'])->name('badge-section');

        // industry section
        Route::get('industry-section', [App\Http\Controllers\Backend\IndustrySectionController::class, 'index'])->name('industry-section');

        // testimonial section
        Route::get('testimonial-section', [App\Http\Controllers\Backend\TestimonialSectionController::class, 'index'])->name('testimonial-section');

        // pages
        Route::get('/{page}', [App\Http\Controllers\Backend\PageController::class, 'webpages'])->name('page');
    });




    // page component
    Route::get('pages', [App\Http\Controllers\Backend\PageController::class, 'index'])->name('page.index');
    Route::get('page/create', [App\Http\Controllers\Backend\PageController::class, 'create'])->name('page.create');
    Route::get('page/edit/{id}', [App\Http\Controllers\Backend\PageController::class, 'edit'])->name('page.edit');

    // services
    Route::get('services', [App\Http\Controllers\Backend\ServiceController::class, 'index'])->name('service.index');

    Route::get('service/create', [App\Http\Controllers\Backend\ServiceController::class, 'create'])->name('service.create');

    Route::get('service/edit/{id}', [App\Http\Controllers\Backend\ServiceController::class, 'edit'])->name('service.edit');

    Route::get('service/{id}', [App\Http\Controllers\Backend\ServiceController::class, 'show'])->name('service.show');


    // technology
    Route::get('technology', [App\Http\Controllers\Backend\TechnologyController::class, 'index'])->name('technology.index');

    // portfolio
    Route::get('portfolio', [App\Http\Controllers\Backend\PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('portfolio/create', [App\Http\Controllers\Backend\PortfolioController::class, 'create'])->name('portfolio.create');
    Route::get('portfolio/edit/{id}', [App\Http\Controllers\Backend\PortfolioController::class, 'edit'])->name('portfolio.edit');

    // testimonial
    Route::get('testimonials', [App\Http\Controllers\Backend\TestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('testimonial/create', [App\Http\Controllers\Backend\TestimonialController::class, 'create'])->name('testimonial.create');
    Route::get('testimonial/edit/{id}', [App\Http\Controllers\Backend\TestimonialController::class, 'edit'])->name('testimonial.edit');

    // badge
    Route::get('badges', [App\Http\Controllers\Backend\BadgeController::class, 'index'])->name('badge.index');

    // industry
    Route::get('industries', [App\Http\Controllers\Backend\IndustryController::class, 'index'])->name('industry.index');

    // review platform
    Route::get('review-platforms', [App\Http\Controllers\Backend\ReviewPlatformController::class, 'index'])->name('review-platform.index');
});
