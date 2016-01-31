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
                        <strong>Food</strong>
                    </h2>
                    <hr>
                </div>
             
<!-- ddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->





<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
$('#example').DataTable();
} );
</script>





<table id="example" class="display" cellspacing="0" width="100%">



<thead>
<tr>


  <th>Food Name</th>  
  <th>Created Date</th>   
  <th>Picture</th>       
  <th>Action</th>


</tr>
</thead>


<tbody >
<?php

if (!empty($foodlist)) {
  foreach ($foodlist as $row) { ?>
  <tr>

   <td> <?php echo $row["foodName"]; ?></td>

   <td><?php echo $row["foodCreatedDate"]; ?></td>

   <td> <img src="<?php echo  $row["imageTitle"];?>" style="width:80px;height:70px;"></td>


   <td>

     <a href="<?php echo site_url('Foodcontroller/edit/' . $row["foodID"]); ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
     <a href="<?php echo site_url('Foodcontroller/delete/' . $row["foodID"]); ?>"  onClick="return confirm('Delete This recipe?')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
   </td>

 </tr>
 <?php }}?>
</tbody>






</table>


<script type="text/javascript">
// For demo to fit into DataTables site builder...
$('#example')
.removeClass( 'display' )
.addClass('table table-striped table-bordered table-hover');
</script>




<p>
<a href="<?php echo site_url('Foodcontroller/add') ?>" class="btn btn-primary">Add New</a>
</p>






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