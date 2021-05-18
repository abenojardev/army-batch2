<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{    
    public function index()
    {
        return view('login');
    }

    public function table()
    {
        return view('table');
    }

    public function layout()
    {
        return view('layout');
    }

    public function departments()
    {
        return view('departments');
    }
    public function employees()
    {
        return view('employees');
    }
    public function loans()
    {
        return view('loans');
    }
    public function payslips()
    {
        return view('payslips');
    }
    public function leaves()
    {
        return view('leaves');
    }
    public function mandatorydeductions()
    {
        return view('mandatorydeductions');
    }
    public function timekeeping()
    {
        return view('timekeeping');
    }
}
