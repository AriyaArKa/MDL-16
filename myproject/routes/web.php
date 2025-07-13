<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/resume', [App\Http\Controllers\ResumeController::class, 'index'])->name('resume');
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');