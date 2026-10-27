<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::resource('pelanggan', PelangganController::class);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('/home', [HomeController::class, 'index']);

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
Route::resource('portofolio', PortofolioController::class)->except(['show']);
Route::resource('skill', SkillController::class)->except(['show']);
Route::resource('pengalaman', PengalamanController::class)->except(['show']);
