<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    // Attempt to log the user in
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication passed, redirect to the intended page
        return redirect()->route('home')->with('success', 'Welcome!');
    }

    // If authentication fails, redirect back with an error message
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->withInput($request->only('email'));

    }
}
