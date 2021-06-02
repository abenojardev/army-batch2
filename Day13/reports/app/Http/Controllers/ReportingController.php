<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;

class ReportingController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    { 
        return view('index')->with([
            'total_number_of_customers' => Customer::count(),
            'total_number_of_customers_using_app' => Customer::whereDevice('app')->count(),
            'total_number_of_customers_using_browser' => Customer::whereDevice('browser')->count(),
            'female_customers' => Customer::whereGender('female')->count(),
            'male_customers' => Customer::whereGender('male')->count(),
            'age' => [
                'child' => Customer::whereBetween('age', [0, 12])->count(),
                'adolescence' => Customer::whereBetween('age', [13, 18])->count(),
                'adult' => Customer::whereBetween('age', [19, 59])->count(),
                'senioradult' => Customer::where('age', '>=', 60)->count()
            ],
            'country' => [
                'ASIA' => Customer::whereCountry('ASIA')->count(), 
                'EUROPE' => Customer::whereCountry('EUROPE')->count(), 
                'US' => Customer::whereCountry('US')->count(), 
                'AFRICA' => Customer::whereCountry('AFRICA')->count(), 
                'AUSTRALIA' => Customer::whereCountry('AUSTRALIA')->count()
            ]
        ]);
    }
}
