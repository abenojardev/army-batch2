<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 

class IndexController extends Controller
{ 
    protected $request;
 
    public function __construct(Request $request)
    { 
        $this->request = $request;
    }

    public function index()
    {  
        $data = Event::all();

        if($this->request->has('search')){
            $data = Event::where(
                $this->request->by,
                '=',  
                $this->request->search
            )->get(); 
            /**
             * Kinds of operator
             * = != < > <= >= LIKE
             * 
             * ->where(column_name, operator, string)
             * 
             */
        }

        return view('index')->with([ 
            'data' => $data
        ]);
    }
}
