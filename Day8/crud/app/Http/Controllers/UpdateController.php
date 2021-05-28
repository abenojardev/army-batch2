<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel; 
use Redirect;

class UpdateController extends Controller
{
    protected $request;
 
    public function __construct(Request $request)
    { 
        $this->request = $request;
    }

    public function index($id)
    {
        return view('update')->with([
            'data' => Personel::find($id)
        ]);
    }
}
