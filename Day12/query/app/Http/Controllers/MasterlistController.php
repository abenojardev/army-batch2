<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterlist;

class MasterlistController extends Controller
{
    public function simple_query()
    {
        // get all data
        $data = Masterlist::all();
         
        return dd($data);
    }

    public function select()
    {
        // select specific columns to fetch
        $data = Masterlist::select('name', 'age', 'id')
                          ->get();
         
        return dd($data); 
    }

    public function find()
    {
        // get data by its ID
        // pass the ID inside find()
        $data = Masterlist::find(8);
         
        return dd($data);
    }

    public function count()
    {
        // will show total number of results in the query
        $data = Masterlist::whereStatus('regular')
                          ->count();
         
        return dd($data);
    }

    public function avg()
    {
        // will get average of a column
        // pass the column to be computed
        $data = Masterlist::whereGender('male')->avg('age');
         
        return dd($data);
    }

    public function exists()
    {

        // will find if the data exists on the table
        // boolean = true / false
        $data = Masterlist::whereAge(21) 
                        ->exists();
         
        return dd($data);
    }

    
    public function where()
    {
        
    }
    
    public function orwhere()
    {
        
    }
    
    public function wherebetween()
    {
        
    }
    
    public function wherein()
    {
        
    }
    
    public function wherenull()
    {
        
    }

}
