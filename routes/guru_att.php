<?php

use App\Http\Controllers\GuruATT\NilaiATTController;
use illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruATT\DashboardController;

Route::middleware(['auth', 'role:guru_att'])
    ->prefix('guru_att')
    ->name('guru_att')
    ->group(function (){

        

    });

Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

Route::get('/nilai', [NilaiATTController::class, 'index'])->name('nilai.index');
Route::get('/nilai/{kelas}', [NilaiATTController::class, 'siswa'])->name('nilai.siswa');
Route::get('/nilai/{kelas}/{siswa}', [NilaiATTController::class, 'form'])->name('nilai.form');

Route::post('/nilai/simpan', [NilaiATTController::class, 'store'])->name('nilai.store');
Route::post('/nilai/kunci', [NilaiATTController::class, 'kunci'])->name('nilai.kunci');

/* require __DIR__.'/auth.php'; */ 
