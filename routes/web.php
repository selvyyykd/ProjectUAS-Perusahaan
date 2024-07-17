<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Models\About;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/portofolio', [HomeController::class, 'portofolio']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/testimonials', [HomeController::class, 'testimonials']);

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Dashboard
Route::prefix('/admin')->middleware('auth')->group(function () {


    //
    Route::resource('sliders', SliderController::class);

    //
    Route::resource('services', ServiceController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('portofolios', PortofolioController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('teams', TeamController::class);


    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);



    Route::get('/about', [AboutController::class, 'index'])->middleware('auth');
});
