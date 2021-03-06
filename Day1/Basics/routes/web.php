<?php

use Illuminate\Support\Facades\Route;
 
Route::get('/',[
    App\Http\Controllers\MainController::class,
    'index'
]);

Route::get('/about-us',[
    App\Http\Controllers\MainController::class,
    'about_us'
]);
Route::get('/contact',[
    App\Http\Controllers\MainController::class,
    'contact'
]);
Route::get('/services',[
    App\Http\Controllers\MainController::class,
    'services'
]);
Route::get('/gallery',[
    App\Http\Controllers\MainController::class,
    'gallery'
]);
Route::get('/profile/anthony',[
    App\Http\Controllers\MainController::class,
    'profile_anthony'
]);
Route::get('/profile/albert',[
    App\Http\Controllers\MainController::class,
    'profile_albert'
]);
Route::get('/services/cleaning',[
    App\Http\Controllers\MainController::class,
    'services_cleaning'
]);
Route::get('/auth/user/forgot/password',[
    App\Http\Controllers\MainController::class,
    'auth_user_forgot_password'
]);
Route::get('/search/product',[
    App\Http\Controllers\MainController::class,
    'search_product'
]);
Route::get('/products/filter/all/free',[
    App\Http\Controllers\MainController::class,
    'products_filter_all_free'
]);
Route::get('/members',[
    App\Http\Controllers\MainController::class,
    'members'
]);
Route::get('/print',[
    App\Http\Controllers\MainController::class,
    'print'
]);
Route::get('/order/checkout',[
    App\Http\Controllers\MainController::class,
    'order_checkout'
]);
Route::get('/facebook/accounts/members/login',[
    App\Http\Controllers\MainController::class,
    'facebook_accounts_members_login'
]);