<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    //main function
    public function index(){
        return view('templates.recipes');
    }
}
