jQuery(document).ready(function($){
    //Function for Add Recipe Button
    $("#addRecipe").click(function(){
        $(".RecipeFormPopUpOuter").removeClass("hidden");
    });
    // Close ReciepeForm on Button click
    $(".closeForm").on('click', function(){
        $(".RecipeFormPopUpOuter").addClass("hidden");
    });
});