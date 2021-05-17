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
Route::get('/', [
    App\Http\Controllers\MainController::class,
    'index'
]);
Route::get('/about-us', [
    App\Http\Controllers\MainController::class,
    'aboutUs'
]);
Route::get('/contact', [
    App\Http\Controllers\MainController::class,
    'contact'
]);
Route::get('/facebook/accounts/members/login', [
    App\Http\Controllers\MainController::class,
    'fbaccountmemberslogin'
]);
Route::get('/order/checkout', [
    App\Http\Controllers\MainController::class,
    'index'
]);
Route::get('/auth/user/forgot/password', [
    App\Http\Controllers\MainController::class,
    'authuserforgotpassword'
]);
Route::get('/search/product', [
    App\Http\Controllers\MainController::class,
    'product'
]);
Route::get('/products/filter/all/free', [
    App\Http\Controllers\MainController::class,
    'productsfilterallfree'
]);
Route::get('/members', [
    App\Http\Controllers\MainController::class,
    'members'
]);
Route::get('/print', [
    App\Http\Controllers\MainController::class,
    'print'
]);
Route::get('/services', [
    App\Http\Controllers\MainController::class,
    'services'
]);
Route::get('/gallery ', [
    App\Http\Controllers\MainController::class,
    'gallery'
]);
Route::get('/profile/anthony', [
    App\Http\Controllers\MainController::class,
    'profile_anthony'
]);
Route::get('/profile/albert', [
    App\Http\Controllers\MainController::class,
    'profile_albert'
]);
Route::get('/services/cleaning', [
    App\Http\Controllers\MainController::class,
    'services_cleaning'
]);
