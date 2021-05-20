<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    protected $data = [ 
        'products' => [
            'name',	
            'category',	
            'price',	
            'brand',	
            'description'
        ],
        'categories' => [
            'name',
            'description'
        ],
        'orders' =>  [
			'customer_name',	
			'contact',
			'address',	
			'product',
			'quantity',
			'total',
			'shipment_status'
        ],	
        'customers' => [ 
			'name',	
			'contact',
			'address',	
			'gender',
			'age',
			'email_address'
        ]
    ];

    public function index($page)
    {
        if(!array_key_exists($page, $this->data)){
            abort(404);
        }

        return view('form')->with([
            'data' => $this->data[$page],
            'page' => $page
        ]);
    }
}
