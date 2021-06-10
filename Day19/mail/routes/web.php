<?php

use Illuminate\Support\Facades\Route;

// email form
Route::get('/', [
    App\Http\Controllers\HomeController::class,
    'index'
])->name('home');

// email template
Route::get('/template', [
    App\Http\Controllers\HomeController::class,
    'template'
])->name('template');

// send email 
Route::post('/send', [
    App\Http\Controllers\HomeController::class,
    'send'
])->name('send');