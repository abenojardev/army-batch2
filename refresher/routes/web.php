<?php

use Illuminate\Support\Facades\Route;

/**
 * URI
 * '/'
 * This is what the user will access
 * error 404
 */
Route::get('/', [
    /**
     * Controller
     * Will handle the logic of the route
     * error controller does not exists
     */
    App\Http\Controllers\DepartmentController::class,
    /**
     * method
     * function that will run in the controller
     * error method does not exists
     */
    'department'
])->name('home');


Route::post('/save', [ 
    App\Http\Controllers\DepartmentController::class, 
    'save'
])->name('save');

Route::get('/delete', [ 
    App\Http\Controllers\DepartmentController::class, 
    'delete'
])->name('delete');