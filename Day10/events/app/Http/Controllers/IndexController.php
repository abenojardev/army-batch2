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
                'LIKE',  
                '%'.$this->request->search.'%'
            )->get(); 
            /**
             * Kinds of operator
             * = != < > <= >= LIKE
             * 
             * ->where(column_name, operator, string)
             * 
             */
        } 
        
        if($this->request->has('date1')){
            // dates 
            // whereBetween('colum',[date1, date2])
            $data = Event::whereBetween('date',[
                $this->request->date1,
                $this->request->date2
            ])->get(); 
        }

        return view('index')->with([ 
            'data' => $data
        ]);
    }
}
