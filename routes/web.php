<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
