<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class RegisterController extends Controller
{
    //Register COntroller Functions

    // Index Function returns the register template
    public function index(){

        // return the tempalte
        return view('templates.register');
    }

    // Function to register a new user and handle the form submit
    public function registerUser(Request $request){
        //Validate the user data
        $validatedData = $request->validate([
            'fullname' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ],
        [
            'fullname.required' => "Name can not be blank.",
            'fullname.min' => 'Name should be contain a minimum 3 characters',
            'email.required' => "Email can not be blank.",
            'email.email' => "Please enter a valid email.",
            'password.required' => "Password can not be blank.",
            'password.min' => "Password should be atlease 8 characters."
        ]);

        // Hash the password
        $hashedPassword = bcrypt($validatedData['password']);

         // Create the user with the hashed password
        $user = User::create([
            'name' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'password' => $hashedPassword,
        ]);

        return Redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
