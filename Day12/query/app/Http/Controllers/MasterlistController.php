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
        $data = Masterlist::find(4);
         
        return dd($data);
    }
}
