<body>


<!DOCTYPE html>
<html lang="en">

  
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About
                        <strong>Food Forms</strong>
                    </h2>
                    <hr>
                </div>
             
<!-- ddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->


<div class="container">
<form data-toggle="validator" role="form"  action="foodingredientsave" id="inform" method="post" enctype="multipart/form-data" >
  

<br>
 <div class="form-group">
    <label for="inname" class="control-label">Ingredient Name</label>
 
    <div class="col-md-12 ">
     <div class="col-md-4"> 
    <input type="text" class="form-control" id="inname" name="inname"  data-error="Ingredient Name is required"  required>
    <div class="help-block with-errors"></div>

  </div>
 </div>
</div>
 <br>
<br>
<div class="form-group  has-feedback">
   <label for="type" class="control-label">Recipe Type</label>
   <div class="col-md-12 ">
     <div class="col-md-4"> 
<select class="form-control" name="type" data-error="Recipe Type is required" required>
    <option value="">---</option>
  <option value="Fresh Food">อาหารสด</option>
  <option value="Dry Food">อาหารแห้ง</option>
</select>
<div class="help-block with-errors"></div>
  </div>
 </div>
</div>

<br>
<br>
<div class="form-group">
<label for="inprice" class="control-label">Amount of Ingredient</label>
<div class="col-md-12">
     <div class="col-md-4">
    <input type="number" step="any" class="form-control" id="amountofingredient" name="amountofingredient" data-error="Amount of recipe is required"   required> 
    <div class="help-block with-errors"></div>
  </div>
  <label>per grams</label>
</div>
  </div>
        <br>
        <br>
        <div class="form-group">
          <label for="inprice" class="control-label">Purchase Date</label>
      <div class='col-md-12'>   
       <div class="col-md-4"> 
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control" placeholder="YYYY/MM/DD" id="purchasedate" name="purchasedate"  data-error="Purchase Date is required"  required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
             <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
      <br>
      <br>
        <div class="form-group">
          <label for="inprice" class="control-label">Expired Date</label>
    <div class='col-md-12'>    
      <div class="col-md-4">
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control" placeholder="YYYY/MM/DD" id="expireddate" name="expireddate"data-error="Expired Date is required"  required>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>    
                </span>
            </div>
                   <div class="help-block with-errors"></div>
              </div>
        </div>
    </div>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker({
      format: 'YYYY/MM/DD'
        });
        $('#datetimepicker7').datetimepicker({
           format: 'YYYY/MM/DD',
            useCurrent: false //Important! See issue #1075


        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);


        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>



<!-- // -->
<!--  <label class="control-label">Ingredient</label>
<div class="form-group">
<div class="input_fields_wrap ">
      <div class="col-xs-6">
    <button class="add_field_button btn btn-default col-xs-offset-3 ">Add More Fields</button>
    </div>
    <div class="col-xs-12">
    <div class="col-xs-9 col-md-3">
    <div><input type="text"   class="form-control"   name="option[]"  id="option[]" required></div>
     </div>
  </div>
</div>
  </div> -->



 


<br>
<div class="col-xs-12">
   <br>
  </div>
  <div class="col-md-5 col-md-offset-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="submit" class="btn btn-primary" value="Submit" onClick="return confirm('Do you Confirm?')">
  &nbsp;
  <button type="button" onclick="location.href='<?php echo site_url('Ingredientcontroller/viewingredient') ?>'" class="btn btn-success">Back</button>
</div>
</form>
<br>







<!-- ddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->

                <div class="clearfix"></div>

            </div>
        </div>

    
    </div>
    <!-- /.container -->



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>















</body>