<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'index'
]);

Route::get('/table', [
    App\Http\Controllers\LoginController::class,
    'table'
]);

Route::get('/layout', [
    App\Http\Controllers\LoginController::class,
    'layout'
]);

Route::get('/form', [
    App\Http\Controllers\LoginController::class,
    'form'
]);


Route::get('/departments/create', [
    App\Http\Controllers\LoginController::class,
    'departments_create'
]);


Route::get('/employees/create', [
    App\Http\Controllers\LoginController::class,
    'employees_create'
]);











 
Route::get('/departments', [
    App\Http\Controllers\LoginController::class,
    'departments'
]);
Route::get('/employees', [
    App\Http\Controllers\LoginController::class,
    'employees'
]);
Route::get('/loans', [
    App\Http\Controllers\LoginController::class,
    'loans'
]); 
Route::get('/payslips', [
    App\Http\Controllers\LoginController::class,
    'payslips'
]);
Route::get('/leaves', [
    App\Http\Controllers\LoginController::class,
    'leaves'
]);
Route::get('/mandatory-deductions', [
    App\Http\Controllers\LoginController::class,
    'mandatorydeductions'
]);
Route::get('/timekeeping', [
    App\Http\Controllers\LoginController::class,
    'timekeeping'
]);