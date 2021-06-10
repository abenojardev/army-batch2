<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin',[
    App\Http\Controllers\VideoController::class,
    'index'
])->name('admin');

Route::get('/admin/create',[
    App\Http\Controllers\VideoController::class,
    'create'
])->name('admin.create');

Route::post('/admin/create/save',[
    App\Http\Controllers\VideoController::class,
    'create_save'
])->name('admin.create.save');


Route::get('/admin/update/{id}',[
    App\Http\Controllers\VideoController::class,
    'update'
])->name('admin.update');

Route::post('/admin/update/{id}/save',[
    App\Http\Controllers\VideoController::class,
    'update_save'
])->name('admin.update.save');



Route::get('/', [
    App\Http\Controllers\HomeController::class,
    'index'
]); 
Route::get('/watch/{id}', [
    App\Http\Controllers\HomeController::class,
    'watch'
]);
