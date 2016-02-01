<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ingredient Analysis</title>

    <!-- Bootstrap Core JavaScript -->
    


      
 <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
    
         <script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/moment-with-locales.js'); ?>"></script>




 
    <script src="<?php echo base_url('assets/js/angular.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/validator.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/bootstrap-filestyle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-filestyle.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jasny-bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jasny-bootstrap.min.js'); ?>"></script>

          <script src="<?php echo base_url('assets/js/addingredient.js'); ?>"></script> 
   <!-- <script src="<?php echo base_url('assets/js/editingredient.js'); ?>"></script> -->

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/business-casual.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jasny-bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jasny-bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jasny-bootstrap.css.map'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
     <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/fontawesome/4.2.0/css/font-awesome.min.css">
    <link href="<?php echo base_url('assets/css/logo-nav.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/datepicker.css'); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('./logopic/favicon.ico/'); ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="./css/prettify-1.0.css" rel="stylesheet">
    <link href="./css/base.css" rel="stylesheet">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

      
       


    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">






    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>






    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <div class="brand">Ingredient Management System</div>
        <div class="address-bar">CREATE YOU OWN INGREDIENT | CALCULATE </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.html">Ingredient Analysis</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo base_url('index.php/Maincontroller/index'); ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Foodcontroller/viewfood'); ?>">Food</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Ingredientcontroller/viewingredient'); ?>">Ingredient</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Calculatecontroller/viewcalculate'); ?>">Calculate</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Reportcontroller/viewreport/2015/11'); ?>">Report</a>
                        </li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>



    </head>
