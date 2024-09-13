@extends("layout.app")

@section('content')
@php

@endphp

<div class="recipiesWrapper">
    <div class="AddNewRecipe m-4 flex items-center">
        Have Some Recipes In Mind...? Add here... <button id="addRecipe" class="ml-2 h-8 w-8 text-center inline-flex justify-center bg-green-500 text-3xl text-white items-center">+</button>
    </div>
    <div class="Recipes shadow-lg p-4">
        All Recipies Will be Listed Here... Stay Tuned...!!!
    </div>
</div>
@php
$strInputClass = "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline";
@endphp
<div class="RecipeFormPopUpOuter h-full w-full fixed z-10 inset-0 py-4 bg-slate-400 hidden">
    <div class="recipeForm relative w-1/2 mx-auto  h-full overflow-auto">
        <div class="formTitle text-2xl text-center relative">
            <span class="font-bold uppercase">Add Recipe Form </span>
            <button title="Close Form" class="closeForm h-8 w-8 text-center inline-flex justify-center bg-red-500 text-3xl text-white items-center absolute right-5">x</button>
        </div>
        <form action="" method="" class="w-full">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Recipe Title</label>
                <input type="text" name="title" id="title" class="{{$strInputClass}}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="description" id="description" class="{{$strInputClass}}" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label for="ingredients" class="block text-gray-700 text-sm font-bold mb-2">Ingredients</label>
                <textarea name="ingredients" id="ingredients" class="{{$strInputClass}}" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label for="instructions" class="block text-gray-700 text-sm font-bold mb-2">Instructions</label>
                <textarea name="instructions" id="instructions" class="{{$strInputClass}}" rows="4" required></textarea>
            </div>

            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Recipe</button>
            </div>
        </form>
    </div>
</div>
@endsection