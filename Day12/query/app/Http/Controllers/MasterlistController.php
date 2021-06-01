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
        $data = Masterlist::find(1);
         
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
        // where(column, operator, string)
        // where('gender', '=', 'female')

        /**
         * Operator
         * = equal
         * != not equal
         * < less than
         * > greater than
         * <= less than or equal
         * >= greater than or equal
         * like
         */
        $data = Masterlist::select('name', 'gender', 'age')
                        // ->where('gender','=','male')
                        // ->where('age', '!=', 31) 
                        // ->where('age', '<', 50) 
                        ->where('name', 'LIKE', '%m%') 
                        ->get();
         
        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function orwhere()
    {
        // orwhere
        // accepts 1 or more choice
        $data = Masterlist::select('name', 'age') 
                        ->where('age', '=', 9999999234) 
                        ->orWhere('age', '=', 12) 
                        ->orWhere('age', '=', 21) 
                        ->get();
         
        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function wherebetween()
    {
        // whereBetween(column_name, [range1, range2])
        $data = Masterlist::select('name', 'birthday', 'age')  
                        // ->whereBetween('birthday', [
                        //     '2000-01-01',
                        //     '2005-01-01'
                        // ]) 
                        ->whereBetween('age', [
                            '20',
                            '25'
                        ])
                        ->get();
         
        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function wherein()
    {
        // whereIn(columns_name, [...value])
        $data = Masterlist::select('name', 'gender', 'age')
                        ->whereIn('age', [21, 23, 12])  
                        ->whereIn('position', ['gen','sgt'])   
                        ->get(); 
 
        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function wherenull()
    {
        // find for tables with null values on said column
        // whereNull(columns_name)
        $data = Masterlist::select('name', 'gender', 'age')
                        ->whereNull('created_at')  
                        ->get(); 
 
        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

}
