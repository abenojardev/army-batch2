<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{   
    // declare variable
    protected $request;

    // initiate class upon controller start
    public function __contruct(Request $request)
    {
        // make the request available on the class
        $this->request = $request;
    }


    public function index()
    {
        return view('create');
    }

    public function save()
    {
        //
    }
}
