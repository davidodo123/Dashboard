<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

Route::get('/', [FirstController::class, 'copy'])->name('main.index');
Route::get('/dashboard', [FirstController::class, 'index'])->name('main.dashboard');
