<?php

use Illuminate\Support\Facades\Route;

Route::get('/1',[
    App\Http\Controllers\MasterlistController::class,
    'simple_query'
]); 
Route::get('/2',[
    App\Http\Controllers\MasterlistController::class,
    'select'
]); 
Route::get('/3',[
    App\Http\Controllers\MasterlistController::class,
    'find'
]);  