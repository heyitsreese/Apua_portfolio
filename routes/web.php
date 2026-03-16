<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;

Route::get('/', [PortfolioController::class, 'home'])->middleware('portfolio');

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/skills', [SkillController::class, 'index']);

// Route::get('/projects', [PortfolioController::class, 'projects']);

Route::get('/experience', [PortfolioController::class, 'experience']);


Route::get('/contact', [PortfolioController::class, 'contact']);

Route::resource('projects', ProjectController::class);