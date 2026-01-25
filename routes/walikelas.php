<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\WaliKelas\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');



/* require __DIR__.'/auth.php'; */ 
