<body>


<!DOCTYPE html>
<html lang="en">

    <link href="<?php echo base_url('assets/css/datatables.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/datatables.min.js'); ?>"></script>
    


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

    <form data-toggle="validator" role="form" action="save"  method="post" enctype="multipart/form-data" >

 
    <br>
    <div class="form-group">
      <label for="inname" class="control-label">Food Name</label>

      <div class="col-md-12 ">
       <div class="col-md-3"> 
      <input type="text" class="form-control" id="foodname" name="foodname"   data-error="Ingredient Name is required"  >
      <div class="help-block with-errors"></div>

    </div>
    </div>
    </div>
    <br>
    <br>
  <!--   ingredient -->
      <label class="control-label">Ingredient</label>
      <div class="form-group">
      <div class="input_fields_wrap ">
      <div class="col-md-6">
      <button class="add_field_button btn btn-default col-xs-offset-9 ">Add More Fields</button>
      <!-- <div class="help-block with-errors"></div> -->
      <div class="row">   
      <div class="col-md-3">

      <select class="form-control" name="ingredientinfoDetail[]"  id="<?php echo $row["ingredientinfoID"]; ?>" required>
      <?php foreach ($ingredientinfo as $row) { ?>
      <option   id="<?php echo $row["ingredientinfoID"]; ?>" value="<?php echo $row["ingredientinfoID"]; ?>"> <?php echo $row["ingredient"]; ?></option>
      <?php } ?>
      </select>


      </div>
      <div class="col-md-3">

      <div><input type="number" step="any" class="form-control"   name="option[]"  id="option[]"   required></div>
      </div>

      <label>grams</label>

      </div> 
      <div class="input_fields_wrapin" data='<?php echo json_encode($ingredientinfo);?>'> </div>
      </div>
      
      </div>

    <br>
    <br>
    <br>
    <br>
  <br>
    <br>
    <br>

    <label for="upload">Upload :</label>
    <div class="col-md-12 ">
    <div class="fileinput fileinput-new" data-provides="fileinput">
    <div class="fileinput-preview thumbnail"  style="width: 400px; height: 200px;" ></div>
    <div>
      <span class="btn btn-default btn-file"><span class="fileinput-new" >Select image</span><span class="fileinput-exists">Change</span>
      <input type="file"  name="fileToUpload"  id="fileToUpload" >   </span>
      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
      
    </div>
    </div>
    </div>

   

    <br>
    <div class="col-xs-12">
     <br>
    </div>
    <div class="col-md-5 col-md-offset-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit" class="btn btn-primary" value="Submit" onClick="return confirm('Do you Confirm?')">
    &nbsp;
    <button type="button" onclick="location.href='<?php echo site_url('Foodcontroller/viewfood') ?>'" class="btn btn-success">Back</button>
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