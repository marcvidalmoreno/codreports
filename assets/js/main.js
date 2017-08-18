
$(document).ready(function() {
    // onClick Event on Navigation links handled to toggle active class
    $('.navbar-fixed-top li').click(function(){
        var userClicksInNonActivePage = ($(this).hasClass('active') === false);
        if (userClicksInNonActivePage) {
            // We remove active class in current page and add it in clicked page
            $('.navbar-fixed-top li.active').removeClass('active');
            $(this).addClass('active');
        }
    });

    // Options for the table in the demo part
    $('#table_demo').dataTable( {
        "order": [[ 0, "asc" ]],
        /*"aoColumnDefs": [
          { "bSearchable": false, "aTargets": [ 10 ] }
        ],*/
        "aoColumns": [ // IMPORTANT!!! Which columns are sortable.. Remember to add a row here if you add new column in HTML
            null,
            null,
            null,
            null,
            { "bSortable": false },
            { "bSortable": false }
        ],
        //"iDisplayLength": "5",
        "oLanguage": {
            //"sSearch": "Filter COD Files:",
            "sSearch": "",
            "sInfo": "Showing _START_ to _END_ of _TOTAL_ COD Files",
            "sInfoEmpty": "No COD Files to show",
            "sInfoFiltered": " - filtering from _MAX_ COD Files",
            "sZeroRecords": "No COD Files to display",
            "sLengthMenu": 'Display <select>'+
            '<option value="10">10</option>'+
            '<option value="20">20</option>'+
            '<option value="30">30</option>'+
            '<option value="40">40</option>'+
            '<option value="-1">All</option>'+
            '</select> COD Files'
            /*"sLengthMenu": 'Display <select>'+
            '<option value="5">5</option>'+
            '<option value="10">10</option>'+
            '<option value="15">15</option>'+
            '<option value="20">20</option>'+
            '<option value="25">25</option>'+
            '<option value="30">30</option>'+
            '<option value="-1">All</option>'+
            '</select> COD Files'*/          
        }
    });

    // Styling and customizing the datatables elements
    $(".dataTables_filter input").attr("placeholder", "Enter text to filter").addClass("form-control placeholder");

    // Adding label to AJAX filter search for datatables
    $("<span class='filter_label'>Filter COD Files:</span>").prependTo("#table_demo_filter");

    // Select picker
    // https://silviomoreto.github.io/bootstrap-select/
    $(".dataTables_length select").addClass("selectpicker").attr("data-width", "70px"); 
    $(".select_filter").addClass("selectpicker");
    //.attr("data-width", "70px");  
    $('.selectpicker').selectpicker();    
});