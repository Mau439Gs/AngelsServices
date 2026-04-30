<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'index']);

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/quienes-somos', [UserController::class, 'quienes_somos']);

Route::get('/servicios', [UserController::class, 'servicios']);

Route::get('/aviso-privacidad', [UserController::class, 'aviso_privacidad']);
