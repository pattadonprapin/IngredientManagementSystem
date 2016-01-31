

$(document).ready(function() {
    var max_fields      = 12; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<input type="hidden" name="defaultID[]" value="0" />');
           $(wrapper).append('<div id="ingredient-field"><input type="hidden" name="idIn[]" value="0" /><div class="col-xs-12"><div class="col-xs-9 col-md-3"><input class="form-control" type="text" id="option[]" name="option[]"/></div><a href="#" class="remove_field">Remove</a></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;

    })





// --------------------------------------------------------------------
    var editData = JSON.parse($('.input_fields_wrap').attr('data'));

    if (editData.length > 0)
    {

        $(".input_fields_wrap #ingredient-field").remove();
        //$(wrapper).html('');
           for(var i = 0;i<1;i++){
   $(wrapper).append('<div class="col-xs-12"><div id="ingredient-field"><input type="hidden" name="idIn[]" value="'+editData[i].ingredientID+'" /><div class="col-xs-9 col-md-3"><input class="form-control" type="number"  id="'+editData[i].ingredientID+'" name="option[]" value="'+editData[i].ingredientAmount+'" / required></div><a href="#" name="removein[]" value="'+editData[i].ingredientID+'"  </div></div>');
        }
        for (var i = 1; i < editData.length; i++)
        {
           $(wrapper).append('<input type="hidden" name="defaultID[]" value="'+editData[i].ingredientID+'" />');
            $(wrapper).append('<div class="col-xs-12"><div id="ingredient-field"><input type="hidden" name="idIn[]" value="'+editData[i].ingredientID+'" /><div class="col-xs-9 col-md-3"><input class="form-control" type="number"  id="'+editData[i].ingredientID+'" name="option[]" value="'+editData[i].ingredientAmount+'" /></div><a href="#" name="removein[]" value="'+editData[i].ingredientID+'"  class="remove_field">Remove</a></div></div>');
        }

      //$(wrapper).append('<div id="ingredient-field"><input type="text" name="option[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
    }

       
});
