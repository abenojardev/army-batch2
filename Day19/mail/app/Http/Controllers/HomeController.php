<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewsMailer;
use Mail, Redirect;

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
        $template = new NewsMailer([
            'message' => $this->request->message, 
            'email' => $this->request->email
        ]);

        Mail::to($this->request->email)
            ->send($template);

        return Redirect::route('home');
    }

}
