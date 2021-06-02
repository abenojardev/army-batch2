<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;
use App\Models\Statistic;

class MainController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request = $request;  
    }

    public function main($case = null)
    {
        if(!is_null($case)){
            return $this->$case();
        }

        abort(500);
    } 

    public function one()
    {
        $data = Personel::all();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function two()
    {
        $data = Personel::avg('age');

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function three()
    {
        $data = Personel::find(8);

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function four()
    {
        $data = Personel::count();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function five()
    {
        $data = Statistic::sum('weight');

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function six()
    {
        $data = Personel::select('last_name')->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function seven()
    {
        $data = Personel::where('age', '<', 25)->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function eight()
    {
        $data = Personel::where('age', '<', 30)->avg('age');

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function nine()
    {
        $data = Statistic::where('height', '<', 150)->count();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function ten()
    {
        $data = Statistic::where('height', '>', 130)->sum('weight');

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function eleven()
    {
        $data = Personel::select('last_name')
                        ->where('id', '>', 10)->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
}