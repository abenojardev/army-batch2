<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'index'
])->name('login');

// Route::get('/table', [
//     App\Http\Controllers\LoginController::class,
//     'table'
// ]);

// Route::get('/layout', [
//     App\Http\Controllers\LoginController::class,
//     'layout'
// ]);

// Route::get('/form', [
//     App\Http\Controllers\LoginController::class,
//     'form'
// ]);


Route::get('/departments/create', [
    App\Http\Controllers\LoginController::class,
    'departments_create'
])->name('deparment.create');


Route::get('/employees/create', [
    App\Http\Controllers\LoginController::class,
    'employees_create'
])->name('employee.create');


Route::get('/leaves/create', [
    App\Http\Controllers\LoginController::class,
    'leaves_create'
])->name('leave.create');
Route::get('/loans/create', [
    App\Http\Controllers\LoginController::class,
    'loans_create'
])->name('loan.create');
Route::get('/deductions/create', [
    App\Http\Controllers\LoginController::class,
    'deductions_create'
])->name('deduction.create');

Route::get('/timekeeping/create', [
    App\Http\Controllers\LoginController::class,
    'timekeeping_create'
])->name('timekeeping.create');

Route::get('/payslips/create', [
    App\Http\Controllers\LoginController::class,
    'payslips_create'
])->name('payslip.create');

 
Route::get('/departments', [
    App\Http\Controllers\LoginController::class,
    'departments'
])->name('departments');
Route::get('/employees', [
    App\Http\Controllers\LoginController::class,
    'employees'
])->name('employee');
Route::get('/loans', [
    App\Http\Controllers\LoginController::class,
    'loans'
])->name('loans'); 
Route::get('/payslips', [
    App\Http\Controllers\LoginController::class,
    'payslips'
])->name('payslips');
Route::get('/leaves', [
    App\Http\Controllers\LoginController::class,
    'leaves'
])->name('leaves');
Route::get('/mandatory-deductions', [
    App\Http\Controllers\LoginController::class,
    'mandatorydeductions'
])->name('mandatorydeductions');
Route::get('/timekeeping', [
    App\Http\Controllers\LoginController::class,
    'timekeeping'
])->name('timekeeping');


Route::get('/timekeeping/view', [
    App\Http\Controllers\LoginController::class,
    'timekeeping_view'
])->name('timekeeping.view');
Route::get('/payslip/view', [
    App\Http\Controllers\LoginController::class,
    'payslip_view'
])->name('payslip.view');