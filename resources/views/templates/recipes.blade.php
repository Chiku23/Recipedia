@extends("layout.app")

@section('content')
@php
    $user = session('user') ?? [];
@endphp

<div class="recipiesWrapper w-full">
    @if(!empty($user))
        <div class="AddNewRecipe m-4 flex items-center">
            Have Some Recipes In Mind...? Add here... <button id="addRecipe" class="ml-2 h-8 w-8 text-center inline-flex justify-center bg-green-500 text-3xl text-white items-center">+</button>
        </div>
    @endif
    <div class="Recipes shadow-lg p-4">
        
        @if(!empty($allrecipes->isNotEmpty()))
                    @foreach($allrecipes as $recipe)
                        <div class="Reciepes flex flex-col sm:flex-row my-4 p-4 bg-gray-100 rounded gap-2">
                            <div class="contentBox w-full sm:w-[75%] sm:pt-2">
                                <div class="BlogTitle mb-2 pb-2 text-2xl border-b border-slate-500 font-bold">
                                    {{$recipe->title}}
                                </div>
                                <div class="BlogDescription`">
                                    {!! $recipe->description !!}
                                </div>
                                <div class="BlogDescription">
                                    {!! $recipe->ingredients !!}
                                </div>
                                <div class="BlogDescription">
                                    {!! $recipe->instructions !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="noReciepes flex my-4 p-4 rounded">
                        All Recipies Will be Listed Here... Stay Tuned...!!!
                    </div>
                @endif
    </div>
</div>
@php
$strInputClass = "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline";
$strEditorClass = "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline !h-48 bg-white editorInput";
@endphp
<div class="RecipeFormPopUpOuter h-full w-full fixed z-10 inset-0 py-4 bg-slate-400 hidden">
    <div class="recipeForm relative w-1/2 mx-auto h-[90%] my-auto overflow-y-auto overflow-x-hidden scrollbar-custom">
        <div class="formTitle text-2xl text-center relative">
            <span class="font-bold uppercase">Add Recipe</span>
            <button title="Close Form" class="closeForm h-8 w-8 text-center inline-flex justify-center bg-red-500 text-3xl text-white items-center absolute right-5">x</button>
        </div>
        <form action="{{route('processRecipeForm')}}" method="post" class="w-full">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-black text-md font-bold mb-2">Recipe Title</label>
                <input type="text" name="title" id="title" class="{{$strInputClass}}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-black text-md font-bold mb-2">Description</label>
                <div id="description" class="{{$strEditorClass}}"></div>
                <input type="hidden" name="description" id="descriptionHidden" />
            </div>

            <div class="mb-4">
                <label for="ingredients" class="block text-black text-md font-bold mb-2">Ingredients</label>
                <div id="ingredients" class="{{$strEditorClass}}"></div>
                <input type="hidden" name="ingredients" id="ingredientsHidden" />
            </div>

            <div class="mb-4">
                <label for="instructions" class="block text-black text-md font-bold mb-2">Instructions</label>
                <div id="instructions" class="{{$strEditorClass}}"></div>
                <input type="hidden" name="instructions" id="instructionsHidden" />
            </div>

            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Recipe</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const editors = document.querySelectorAll('.editorInput');
        const EditorInstances = {};
        editors.forEach(editor => {
            const quill = new Quill('#'+editor.id, {
                theme: 'snow',
            })
            EditorInstances[editor.id] = quill;
        });
        document.querySelector('.recipeForm').onsubmit = function() {
            for (const editorId in EditorInstances) {
                const hiddenInput = document.getElementById(`${editorId}Hidden`);
                if (hiddenInput) {
                    hiddenInput.value = EditorInstances[editorId].root.innerHTML;
                }
            }
        };
    });
</script>
@endsection