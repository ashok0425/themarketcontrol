<?php

use App\Events\Chat;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ImageController;
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

Route::get('/', function () {
    return view('frontend.home.index');
})->name('/');

Route::post('/upload-image',[ImageController::class,'upload']);
Route::get('/delete-image',[ImageController::class,'delete']);

Route::get('/category/{slug}',[HomeController::class,'category'])->name('category');
Route::get('/search',[HomeController::class,'search'])->name('search');
Route::get('/detail/{slug}',[HomeController::class,'detail'])->name('detail');



