<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function login_verify()
    {

    }

    public function registration_verify()
    {

    }
}
