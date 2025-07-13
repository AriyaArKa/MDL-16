<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');

// Show contact form
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Handle form submission
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Confirmation page
Route::get('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
