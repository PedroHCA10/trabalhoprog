<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/sobre', [PortfolioController::class, 'about'])->name('about');
Route::get('/contato', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contato', [PortfolioController::class, 'sendMessage'])->name('contact.send');