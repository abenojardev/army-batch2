<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{page}',[
    App\Http\Controllers\PageController::class,
    'index'
]);

Route::get('/create/{page}',[
    App\Http\Controllers\FormController::class,
    'index'
]);


Route::get('/product',[
    // php artisan make:controller TestController
    App\Http\Controllers\TestController::class,
    'product'
]);