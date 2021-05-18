<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }
    
    public function services()
    {
        return view('services');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function profile_anthony()
    {
        return view('profile_anthony');
    }
    public function profile_albert()
    {
        return view('profile_albert');
    }
    public function services_cleaning()
    {
        return view('services_cleaning');
    }
    public function auth_user_forgot_password()
    {
        return view('auth_user_forgot_password');
    }
    public function search_product()
    {
        return view('search_product');
    }
    public function products_filter_all_free()
    {
        return view('products_filter_all_free');
    }
    public function members()
    {
        return view('members');
    }
    public function print()
    {
        return view('print');
    }
    public function order_checkout()
    {
        return view('order_checkout');
    }
    public function facebook_accounts_members_login()
    {
        return view('facebook_accounts_members_login');
    }

}
