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



<form  role="form" action="save"  method="post" enctype="multipart/form-data" >

   <div class="container">
   	<label>Date</label>
    <div class="row">
        <div class='col-md-4'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                      <input type='text' class="form-control" placeholder="YYYY/MM/DD" id="date" name="date"  >
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({ format:'YYYY/MM/DD'});
            });
        </script>
    </div>

<label  class="control-label">Notes</label>
    <div class="form-group">

<div class="row">
     <div class="col-md-4">
    <input type="text" step="any" maxlength="27" class="form-control" id="data" name="data" > 
   
  </div>

</div>
  </div>
   <div class="row col-md-offset-3">
    <input type="submit" name="submit" class="btn btn-primary" value="Analyze" onClick="return confirm('Do you Confirm?')">
    &nbsp;
   <br>
    </div>
</div>











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