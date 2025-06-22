<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');
Route::view('/skills', 'skills')->name('skills');
Route::view('/projects', 'projects')->name('projects');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/api/contact', [ContactController::class, 'send']);
Route::view('/about', 'about');
Route::view('/services', 'services');
