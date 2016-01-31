

$(document).ready(function() {
    var max_fields      = 12; //maximum input boxes allowed
    var wrapperingredient         = $(".input_fields_wrapin"); //Fields wrapper

    var add_button      = $(".add_field_button"); //Add button ID
    var editData = JSON.parse($('.input_fields_wrapin').attr('data'));
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
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

//-------------------------------------------------------------------
   //  var editData = JSON.parse($('.input_fields_wrapin').attr('data'));

   //  if (editData.length > 0)
   //  {

   //      $(".input_fields_wrapin #ingredient-field").remove();
   //      //$(wrapper).html('');
   //         for(var i = 0;i<1;i++){
   // $(wrapperingredient).append('<div class="col-xs-12"><div id="ingredient-field"><input type="hidden" name="idIn[]" value="'+editData[i].ingredient+'" /><div class="col-xs-9 col-md-3"><input class="form-control" type="text"  id="'+editData[i].id+'" name="option[]" value="'+editData[i].ingredient+'" / required></div><a href="#" name="removein[]" value="'+editData[i].id+'"  </div></div>');
   //      }
   //      for (var i = 1; i < editData.length; i++)
   //      {
   //         $(wrapperingredient).append('<input type="hidden" name="defaultID[]" value="'+editData[i].ingredient+'" />');
   //          $(wrapperingredient).append('<div class="col-xs-12"><div id="ingredient-field"><input type="hidden" name="idIn[]" value="'+editData[i].ingredient+'" /><div class="col-xs-9 col-md-3"><input class="form-control" type="text"  id="'+editData[i].id+'" name="option[]" value="'+editData[i].ingredient+'" /></div><a href="#" name="removein[]" value="'+editData[i].id+'"  class="remove_field">Remove</a></div></div>');
   //      }

   //    //$(wrapper).append('<div id="ingredient-field"><input type="text" name="option[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
   //  }

       
});
