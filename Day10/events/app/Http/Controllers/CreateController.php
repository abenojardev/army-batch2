<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 
use Redirect;

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
        // save to database
        Event::create(
            $this->request->except('_token')
        );  

        return Redirect::route('home'); 
    }
}
