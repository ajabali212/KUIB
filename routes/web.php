<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\Gallerycontroller;
use App\Http\Controllers\Frontend\MembershipController;
use App\Http\Controllers\Frontend\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::resource('/home',HomeController::class);
Route::resource('/about-us',AboutController::class);
Route::resource('/gallery',Gallerycontroller::class);
Route::resource('/membership',MembershipController::class);
Route::resource('/contact-us',ContactController::class);