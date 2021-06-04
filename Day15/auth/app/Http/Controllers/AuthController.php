<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect, Storage;
use App\Models\User;

class AuthController extends Controller
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

    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function login_verify()
    {

    }

    public function registration_verify()
    {
        /**
         * 1. Upload image in storage
         * 2. Save data on database
         * 3. Redirect user to login
         */

        // upload
        // putFile('folder_name', fileObject)
        $filename = Storage::disk('public')->putFile('avatar', $this->request->file);
        
        $this->request->merge([
            'avatar' => $filename,
            // encrypt password
            'password' => bcrypt($this->request->password) 
        ]);

        // save to db
        User::create(
            $this->request->except('file', '_token')
        );

        // redirect
        return Redirect::route('app.login');
    }
}
