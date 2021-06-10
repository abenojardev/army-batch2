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

    }

    public function template()
    {

    }

    public function send()
    {

    }

}
