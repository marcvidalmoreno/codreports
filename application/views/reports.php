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
      <meta name="author" content="">
      <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

      <title>Cod Files Reporting Tool</title>
      <!-- <title>All COD Reports</title> -->

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
      <!-- Bootstrap theme -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-theme.min.css"); ?>" />
      <!-- Custom styles for this template -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-theme.css"); ?>" />
      <!-- Bootstrap DatePicker -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-datetimepicker.css"); ?>" />
      <!-- Main Stylesheet -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>" />
    
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
        <h1>Welcome to Cod Files Reporting Tool! 234</h1>
        <pre>
          <?php print_r($reports); ?>
        </pre>

        <div id="footer">
          <div class="container">
            <p class="text-muted text-center">
              <img src="../../IMAGES/DLA.png">
              European Parliament | Directorate-General for the Presidency | Directorate for Legislative Acts
            </p>
          </div>
        </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo base_url("assets/js/jquery-2.1.0.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-datetimepicker.js"); ?>"></script>
  
    <!-- CKEditor - Rich Text Editor -->
    <script src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>
    
    <!-- Date Time Picker -->
    <script src="<?php echo base_url("assets/js/bootstrap-datetimepicker.js"); ?>"></script>

    <!--  Autosize Jquery Library -->
    <script src="<?php echo base_url("assets/autosize/jquery.autosize.min.js"); ?>"></script>
    
    <!--  Placeholder Jquery Library -->
    <script src="<?php echo base_url("assets/js/jquery.placeholder.js"); ?>"></script>
    




    <script>
  
  // $(document).ready(function(){
  //    $('textarea').autosize();   
  //});
  
  //<div class="fieldwrapper" id="field1">
  //  <input class="fieldname" type="text"><input class="remove" value="-" type="button">
  //</div>
  
  /*
    <div class="fieldwrapper" id="field1">
      <input class="fieldname" type="text">
      <input class="remove" value="-" type="button">
    </div>  
    
    <div class="fieldwrapper" id="field2">
      <input class="fieldname" type="text">
      <input class="remove" value="-" type="button">
    </div>
    
    
    
    
    <div class="form-group">
      <div class="row">
        <div class="col-md-2">
        <label for="dateofthetrilogue">Date of the trilogue:</label>
         <div class="input-group date" id="datetimepicker123" data-date-format="YYYY/MM/DD"> 
          <input type='text' class="form-control" placeholder="Enter the date..."  id="show123" />
           <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
          </span> 
        </div> 
        </div>
        <div class="col-md-9">
        <label for="notesaboutthetrilogue">Notes about the trilogue:</label>
        <textarea class="form-control autosize" id="" name="">The consolidated text was received from translation and finalisation is well under way.</textarea>
        </div>
        <div style="" class="col-md-1">           
        <button type="button" class="btn btn-primary btn-md pull-right" style="margin-top:25px">Delete</button>
        </div>
      </div>
    </div>
      
      
  */
  
  
  $(document).ready(function() {
  
    $("#add").click(function() {
      var intId = $("#buildyourform div.row").length + 1;
      alert(intId);
      //var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
      //var fieldWrapper = $('<div class="fieldwrapper" id="field'+ intId +'>');
      
      //var fName = $("<input type=\"text\" class=\"fieldname\" />");
      //var fName = $('<input class="fieldname" type="text">');
       
      var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");
      //var removeButton = $('<input class="remove" value="-" type="button">');
      
      var row = '<div class="form-group"><div class="row"><div class="col-md-2"><label for="dateofthetrilogue">Date of the trilogue:</label><div class="input-group date" class="datetimepickaa" id="datetimepickerloop'+ intId +'" data-date-format="YYYY/MM/DD"><input type="text" class="form-control" placeholder="Enter the date..."  class="datetimepickaa" /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div></div><div class="col-md-9"><label for="notesaboutthetrilogue">Notes about the trilogue:</label><textarea class="form-control autosize" id="" name="">The consolidated text was received from translation and finalisation is well under way.</textarea></div><div style="" class="col-md-1"><button type="button" class="btn btn-primary btn-md pull-right" style="margin-top:25px">Delete</button></div></div></div>'
    
    
    
    
      removeButton.click(function() {
        $(this).parent().remove();
      });
      //fieldWrapper.append(fName);
      //fieldWrapper.append(removeButton);
      //fieldWrapper.append(row);
      $("#buildyourform").append(row);
      
      $('.autosize').autosize();
      
    
      $('#datetimepickerloop1').datetimepicker({
        pickTime: false
        //orientation: "auto left"
      });
      $('#datetimepickerloop2').datetimepicker({
        pickTime: false
        //orientation: "auto left"
      });
      $('#datetimepickerloop3').datetimepicker({
        pickTime: false
        //orientation: "auto left"
      });
      $('#datetimepickerloop4').datetimepicker({
        pickTime: false
        //orientation: "auto left"
      });
    });



    //GOOD
    $("#add324243").click(function() {
      var intId = $("#buildyourform div.fieldwrapper").length + 1;
      alert(intId);
      var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\" />");
      //var fieldWrapper = $('<div class="fieldwrapper" id="field'+ intId +'>');
      
      var fName = $("<input type=\"text\" class=\"fieldname\" />");
      //var fName = $('<input class="fieldname" type="text">');
       
      var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");
      //var removeButton = $('<input class="remove" value="-" type="button">');
      
      removeButton.click(function() {
        $(this).parent().remove();
      });
      fieldWrapper.append(fName);
      fieldWrapper.append(removeButton);
      $("#buildyourform").append(fieldWrapper);
    });
  
    $('input, textarea').placeholder();
    $('#datetimepicker343').datetimepicker();
    //$('#datetimepicker123').datetimepicker();
    
    $('#datetimepicker123').datetimepicker({
      pickTime: false
      //orientation: "auto left"
    });

    
    
    
    $("#show123").click(function () {
      $('#datetimepicker123').data("DateTimePicker").show();
    });
    
    
    
    $('.datetimepickaa').datetimepicker({
      pickTime: false
      //orientation: "auto left"
    });
    
    $(".datetimepickaa").click(function () {
      $('.datetimepickaa').data("DateTimePicker").show();
    });

    //$('#datetimepicker1').datetimepicker();
    
    //$('input.deitpicka').datepicker({   });
    
    /*$('#dp1').datepicker({
      format: 'mm-dd-yyyy'
    });*/   

    CKEDITOR.replace( 'editor1', {
      extraPlugins: 'autogrow',
      removePlugins: 'resize'
    });
    
    CKEDITOR.replace( 'editor2', {
      extraPlugins: 'autogrow',
      removePlugins: 'resize'
    });
    
    CKEDITOR.replace( 'editor3', {
      extraPlugins: 'autogrow',
      removePlugins: 'resize'
    });
    
    CKEDITOR.replace( 'editor4', {
      extraPlugins: 'autogrow',
      removePlugins: 'resize'
    });
    
    CKEDITOR.replace( 'editor5', {
      extraPlugins: 'autogrow',
      removePlugins: 'resize'
    });
    
    CKEDITOR.replace( 'editor6', {
      extraPlugins: 'autogrow',
      removePlugins: 'resize'
    });
    
    //CKEDITOR.replace( 'editor7', {
      //extraPlugins: 'autogrow',
      //removePlugins: 'resize'
    //});

    $('.autosize').autosize();
  });
  
    </script>

    <!-- <script src="../../assets/js/docs.min.js"></script> -->
  
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='sadatetimepicker1' class="deipickaars">
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='sadatetimepicker1' class="deipickaars">
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='sadatetimepicker1' class="deipickaars">
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

        <script type="text/javascript">
            $(function () {
                $('.deipickaars').datetimepicker();
            });
        </script> 
  
  </body>
</html>