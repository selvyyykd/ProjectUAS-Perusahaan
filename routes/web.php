<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/portofolio', [HomeController::class, 'portofolio']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/testimonials', [HomeController::class, 'testimonials']);

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//
Route::resource('sliders', SliderController::class)->middleware('auth');

//
Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('testimonials', TestimonialController::class)->middleware('auth');
Route::resource('portofolios', PortofolioController::class)->middleware('auth');
Route::resource('clients', ClientController::class)->middleware('auth');
Route::resource('teams', TeamController::class)->middleware('auth');

Route::get('/about', [AboutController::class, 'index'])->middleware('auth');
Route::put('/about/{id}', [AboutController::class, 'update'])->middleware('auth');