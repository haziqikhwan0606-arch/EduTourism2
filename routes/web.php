<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences');
Route::get('/programmes', [ProgrammeController::class, 'index'])->name('programmes');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/programmes/consultation', [ProgrammeController::class, 'consultation'])->name('programmes.consultation');

// Fallback & legacy compatibility redirects
Route::redirect('/projects', '/experiences');
Route::redirect('/world', '/experiences#section-04-destinations');
