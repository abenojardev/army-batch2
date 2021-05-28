<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 

class IndexController extends Controller
{ 

    public function index()
    {  
        return view('index')->with([
            // query -> get the data from the table
            'data' => Event::all()
        ]);
    }
}
