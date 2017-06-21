
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
      
      //$('textarea').autosize();
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
  
  	// Placeholder was used, try to figure out how to make it work
    //$('input, textarea').placeholder();
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


    // TODO: Make CKEDITOR replace functions dynamic 'editor' + index
    /*
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
    */

    $('.autosize').autosize();
  });