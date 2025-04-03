<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipesController extends Controller
{
    //main function
    public function index(){
        $recipe = new Recipe;
        $allrecipes = $recipe->get();
        return view('templates.recipes',compact('allrecipes'));
    }

    public function store(Request $request){
        $user = Auth::user();

        if(!$user){
            return back()->with('error', 'User not logged in.');
        }
        $validated = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'ingredients' => 'required',
                'instructions' => 'required',
            ]
        );

        $recipe = new Recipe();
        $recipe->title = $validated['title'];
        $recipe->description = $validated['description'];
        $recipe->ingredients = $validated['ingredients'];
        $recipe->instructions = $validated['instructions'];
        $recipe->user_id = $user->id;
        $recipe->save();

        return redirect('/recipes');
    }
}
