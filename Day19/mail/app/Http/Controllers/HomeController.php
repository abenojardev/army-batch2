<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $request;

    public function __contruct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('index');
    }

    public function template()
    {
        return view('emails.default_template');
    }

    public function send()
    {

    }

}
