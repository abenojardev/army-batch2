<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/** Home,  */
 
Route::get('/home', [
    App\Http\Controllers\HomeController::class,
    'index'
]); 

Route::get('/about', [
    App\Http\Controllers\HomeController::class,
    'about'
]);

Route::get('/contact', [
    App\Http\Controllers\HomeController::class,
    'contact'
]);