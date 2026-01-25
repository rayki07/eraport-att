<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruATT\DashboardController;

Route::middleware(['auth', 'role:guru_att'])
    ->prefix('guru_att')
    ->name('guru_att')
    ->group(function (){

        

    });

Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');


/* require __DIR__.'/auth.php'; */ 
