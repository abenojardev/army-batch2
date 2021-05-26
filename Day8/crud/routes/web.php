<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[
    App\Http\Controllers\IndexController::class,
    'index'
])->name('home');

Route::get('/create',[
    App\Http\Controllers\CreateController::class,
    'index'
])->name('create');

Route::post('/create/save',[
    App\Http\Controllers\CreateController::class,
    'save'
])->name('create.save');