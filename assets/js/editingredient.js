

$(document).ready(function() {
    var max_fields      = 12; //maximum input boxes allowed
    var wrapperingredient = $(".input_fields_wrape"); //Fields wrapper

    var edit_button      = $(".edit_field_button"); //Add button ID
    var editData = JSON.parse($('.input_fields_wrape').attr('data'));
    var x = 1; //initlal text box count
    $(edit_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment]
            var h ='';
            var t ='';
            
        for (var i = 0; i < editData.length; i++)
        {   

            t += '<option id="'+editData[i].ingredientinfoID+'" value="'+editData[i].ingredientinfoID+'" >'+editData[i].ingredient+'</option>';
        }name="ingredientinfoDetail[]"
            $(wrapperingredient).append('<div id="ingredient-field"><div class="row"><div class="col-md-3"><select class="form-control"  name="ingredientinfoDetail[]"  >  '+t+'</select></div><div class="col-md-3"><input type="text" class="form-control "   name="option[]"  id="option[]"   > </div> <label>grams</label>&nbsp;&nbsp;<a href="#" class="remove_field">Remove</a></div></div>');
        }

    });
    
    $(wrapperingredient).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;

    })
});
