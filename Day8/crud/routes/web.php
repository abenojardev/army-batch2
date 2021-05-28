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

Route::get('/update/{id}',[
    App\Http\Controllers\UpdateController::class,
    'index'
])->name('update');
 
