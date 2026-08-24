<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [UserController::class, 'index']);

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/quienes-somos', [UserController::class, 'quienes_somos']);

Route::get('/servicios', [UserController::class, 'servicios']);

Route::get('/aviso-privacidad', [UserController::class, 'aviso_privacidad']);

Route::post('/contacto', [UserController::class, 'guardar']);

Route::get('/setup', function() {
    Artisan::call('migrate', ['--force' => true]);
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('storage:link');
    return 'Listo ✅';
});

Route::get('/cache', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Caché limpiado ✅';
});
