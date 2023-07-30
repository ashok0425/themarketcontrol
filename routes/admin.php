<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PropertyTypeController;
use App\Http\Controllers\Admin\WebsiteController;
// use Illuminate\Routing\Route;
Route::prefix('admin')->name('admin.')->group(function(){
    Route::view('/dashboard', 'admin.dashboard');

    Route::resource('propertyTypes', PropertyTypeController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('websites', WebsiteController::class)->only('edit','update');
    Route::resource('banners', BannerController::class);


});
