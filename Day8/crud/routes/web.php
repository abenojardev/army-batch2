<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[
    App\Http\Controllers\IndexController::class,
    'index'
]);

Route::get('/create',[
    App\Http\Controllers\CreateController::class,
    'index'
]);