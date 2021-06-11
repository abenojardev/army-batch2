<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Jobs\MailerJob;
use Redirect;

class HomeController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('index');
    }

    public function template()
    {
        return view('emails.default_template');
    }

    public function send()
    {   
        MailerJob::dispatch([
            'text' => $this->request->message, 
            'email' => $this->request->email
        ])->onQueue('emails'); 
         
        return Redirect::route('home');
    }
}
