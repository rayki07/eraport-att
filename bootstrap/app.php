<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            // Rute khusus Admin
            Route::middleware(['web', 'auth', 'role:admin'])
            ->prefix('admin')
            ->name('admin.')
            ->group(base_path('routes/admin.php'));

            // Rute khusus walikelas
            Route::middleware(['web', 'auth', 'role:walikelas'])
            ->prefix('walikelas')
            ->name('walikelas.')
            ->group(base_path('routes/walikelas.php'));

            // Rute khusus Guru
            Route::middleware(['web', 'auth', 'role:guru_att'])
            ->prefix('guru_att')
            ->name('guru_att.')
            ->group(base_path('routes/guru_att.php'));

            
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //Daftarkan middleware spatie disini
        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create(); 
