<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Index function returns the login frontend template.
    public function index(){
        // return the tempalte
        return view('templates.login');        
    }

    public function loginUser(Request $request){
        // dd($request->email, $request->password);
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'email.required' => "Email can not be blank.",
            'email.email' => "Please enter a valid email.",
            'password.required' => "Password can not be blank."
        ]
    );

    }
}
