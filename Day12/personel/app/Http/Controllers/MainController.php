<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;
use App\Models\Statistic;

class MainController extends Controller
{
    protected $request, $personel, $statistics;
    
    public function __construct(Request $request, Personel $personel, Statistic $statistics)
    {
        $this->request = $request; 
        $this->personel = $personel; 
        $this->statistics = $statistics; 
    }

    public function main($case = null)
    {
        if(!is_null($case)){
            return $this->$case();
        }

        abort(500);
    }

    public function response($data)
    {
        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function one()
    {
        return $this->response($this->personel::all());
    }
}
