<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{   
    public function index()
    {
        return view('index');
    }
    public function aboutUs()
    {
        return view('aboutUs');
    }
    public function contact()
    {
        return view('contact');
    }
    public function fbaccountmemberslogin()
    {
        return view('fbaccountmemberslogin');
    } 
    public function authuserforgotpassword()
    {
        return view('authuserforgotpassword');
    }
    public function product()
    {
        return view('product');
    }
    public function productsfilterallfree()
    {
        return view('productsfilterallfree');
    }
    public function members()
    {
        return view('members');
    }
    public function print()
    {
        return view('print');
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
}
