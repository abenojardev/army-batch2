<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{    
    protected $request;
 
    public function __construct(Request $request)
    { 
        $this->request = $request;
    }

    public function index()
    {
        return view('create');
    }

    public function save()
    {
        dd(
            $this->request->all()
        );
    }
}
