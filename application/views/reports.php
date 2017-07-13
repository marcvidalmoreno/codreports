<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Marc Vidal Moreno">

        <link rel="shortcut icon" href="<?php echo base_url("assets/ico/favicon.ico"); ?>">

        <title>Cod Files Reporting Tool</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        <!--<link rel="stylesheet" href="<?php //echo base_url("assets/css/bootstrap.min.css"); ?>" />-->
        
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-theme.css"); ?>" />
        <!-- <link rel="stylesheet" href="<?php //echo base_url("assets/css/bootstrap-theme.min.css"); ?>" /> -->
        
        <!-- Bootstrap DatePicker -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-datetimepicker.css"); ?>" />

        <!-- Bootstrap Select -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-select.css"); ?>" />

        <!-- Bootstrap Checkbox -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-checkbox.css"); ?>" />
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" />
        
        <!-- Awesome Bootstrap Checkbox -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/awesome-bootstrap-checkbox.css"); ?>" />
        
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>" />
        
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.dataTables.css"); ?>" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">COD Reports</a>
            </div>
            

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="demo.asp">All Files</a></li>
                    <li><a href="myfiles.asp">My Files</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Help</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
              
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <!-- Begin page content -->
    <div class="main-container container">
        <div class="bs-callout bs-callout-warning">
            <p>Tool for the File Coordinators to <strong>assemble and report</strong> all relevant information about the <strong>COD files</strong>.</p>
        </div>





    </div>

    <div id="footer">
        <div class="container">
        <p class="text-muted text-center">
          <!--<img src="../../IMAGES/DLA.png">-->
          European Parliament | Directorate-General for the Presidency | Directorate for Legislative Acts
        </p>
        </div>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!--  Placed at the end of the document so the pages load faster  -->
    <!--  Jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- JS Bootstrap -->
    <script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <!-- <script src="<?php //echo base_url("assets/js/bootstrap.min.js"); ?>"></script> -->

    <script src="<?php echo base_url("assets/js/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-datetimepicker.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-select.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-checkbox.js"); ?>"></script>
    
    <!-- CKEditor - Rich Text Editor -->

    <!--<script src="ckeditor/ckeditor.js"></script>-->
    <!-- TODO: Move file to assets/js folder -->
    <script src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>

    <!--<script src="autosize/jquery.autosize.min.js"></script>-->
    <!-- TODO: Move file to assets/js folder -->
    <script src="<?php echo base_url("assets/autosize/jquery.autosize.min.js"); ?>"></script>

    
    <script src="<?php echo base_url("assets/js/jquery.placeholder.js"); ?>"></script>
    
    <!-- TODO: Confirm - See which one is used -->
    <script src="<?php echo base_url("assets/js/confirm.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.confirm.js"); ?>"></script>
    
    <script src="<?php echo base_url("assets/js/underscore.min.js"); ?>"></script>
    
    <script src="<?php echo base_url("assets/js/jquery.highlight-4.js"); ?>"></script>
  
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
    
    <script src="<?php echo base_url("assets/js/jquery.dataTables.columnFilter.js"); ?>"></script>

    <!-- Javascript Library to get the differences from to texts -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/diff-match-patch.js"); ?>"></script>

    <!-- Custom JS file -->
    <script src="<?php echo base_url("assets/js/main.js"); ?>"></script>

  </body>
</html>