	var dmp = new diff_match_patch();
	function launch(source_id1, source_id2, destiny_id3) {

		//var text1 = document.getElementById(source_id1).value;
		var text1 = document.getElementById(source_id1).innerHTML ;
		//var str = '<div>Sample <u>HTML</u> <b>Text</b> with <i>tags</i></div>';
		//console.log(text1);
		var text11  = $(text1).text();
		//console.log(text11);
		//text11 = Replace(text11, "¶", "");
		//text11 = Replace(text11, "&para;", "");
		//var text111 = text11.replace("N", 'P');
		var text111 = text11.replace(/\266/g, 'P');
		
		//console.log($("#outputdiv-0").replace(/¶/g, 'P'));
	
		
		
		//<div id="outputdiv-0" class="paneldiffoutput"><span>Lorem ipsum </span><ins style="background: rgb(230, 255, 230);">POVO </ins><span>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol</span><ins style="background: rgb(230, 255, 230);"> POVO </ins><span>ore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><ins style="background: rgb(230, 255, 230);"> MARC¶<br>¶<br>POVO POVO&nbsp; POVO POVO POVO POVO POVO POVO POVO POVO POVO POVO ¶<br>¶<br>POVO¶<br>¶<br>POVO</ins></div>
		
		
		//var str = '<div>Sample <u>HTML</u> <b>Text</b> with <i>tags</i></div>';
		//console.log($(str).text());
		
		//var text2 = document.getElementById(source_id2).value;
		
		
		var text2 = document.getElementById(source_id2).innerHTML ;
		var text22  = $(text2).text();
		//console.log(text22);
		//text22 = Replace(text22, "¶", "");
		//text22 = Replace(text22, "&para;", "");
		
		//var text222 = text22.replace(/\&para;/g, 'P');
		var text222 = text22.replace(/\266/g, 'P');
		//var text222 = text22.replace("N", 'P');

		dmp.Diff_Timeout = parseFloat(document.getElementById('timeout').value);
		//dmp.Diff_EditCost = parseFloat(document.getElementById('editcost').value);
		dmp.Diff_EditCost = 4;

		var ms_start = (new Date()).getTime();
		//var d = dmp.diff_main(text11, text22);
		var d = dmp.diff_main(text111, text222);
		
		//alert()
		//alert("differences:"+d);
		//document.write('<div>'+d+'</div>');
		//0,I am the very model of a ,-1,m,1,carto,0,o,-1,der,0,n ,-1,Major-Ge,1,i,0,n,-1,er,1,dividu,0,al, ,-1,I've,1,My,0, ,-1,i,1,a,0,n,-1,for,1,i,0,mation,1,'s,0, ,-1,veget,1,comic,0,a,-1,b,0,l,-1,e,0,, ,-1,a,1,u,0,n,-1,im,1,usu,0,al, and ,1,whi,0,m,1,s,0,i,-1,ner,1,c,0,al, I,1,'m,0, ,-1,know,1,quite,0, ,1,adep,0,t,-1,he,0, ,-1,kings,1,at,0, ,-1,o,0,f,-1, E,1,u,0,n,1,ny ,0,g,-1,l,0,a,-1,nd,1,gs,0,, ,-1,and I qu,1,c,0,o,-1,t,1,m,0,e,1,dic,0, the,1,ory,0, ,-1,fig,1,I ,0,h,-1,ts,1,ave,0, ,-1,histo,0,r,-1,ic,1,e,0,a,-1,l,1,d,0,, From ,-1,Mar,1,wicked puns ,0,a,1,nd s,0,t,-1,h,1,upid j,0,o,-1,n,1,kes,0, to ,-1,W,1,anvils th,0,at,-1,e,1, d,0,r,-1,l,0,o,1,p ,0,o,-1,, i,0,n ,1,y,0,o,-1,rde,1,u,0,r ,-1,cat,1,h,0,e,-1,goric,0,a,-1,l,1,d,0,.
		var ms_end = (new Date()).getTime();

		dmp.diff_cleanupSemantic(d);
		/*if (document.getElementById('semantic').checked) {
		}
		if (document.getElementById('efficiency').checked) {
		dmp.diff_cleanupEfficiency(d);
		}*/
		var ds = dmp.diff_prettyHtml(d);
		//document.getElementById('outputdiv').innerHTML = ds + '<BR>Time: ' + (ms_end - ms_start) / 1000 + 's';
		//document.getElementById(destiny_id3).innerHTML = ds + '<BR>Time: ' + (ms_end - ms_start) / 1000 + 's';
		document.getElementById(destiny_id3).innerHTML = ds;
	  
	}

	
	function initializeEditors() {  
		//alert("initializeEditors");
		// Elements with class richtext (Edit/Update page)
		var richtexts = $('.richtext');
		if (richtexts.length) { // implies *not* zero
			//alert("richtexts.length");
			
			richtexts.each(function(index, value) {
				//console.log('editor-'+ (index+1));
				var indexplusone = index + 1;
				//console.log('editor-'+ indexplusone);
				
				CKEDITOR.replace( 'editor'+indexplusone, {
					extraPlugins: 'autogrow',
					removePlugins: 'resize'
				});
				
			});
		}
		
		// Elements with class richtexteditadmin (ADMIN Edit/Update page)
		var richtexteditadmin = $('.richtexteditadmin');
		if (richtexteditadmin.length) { // implies *not* zero
			alert("richtexteditadmin.length");
			
			richtexteditadmin.each(function(index, value) {		
				var indexplusone = index + 1;			
				CKEDITOR.replace( 'editor'+indexplusone, {
					extraPlugins: 'autogrow',
					removePlugins: 'resize'
				});
				
			});
		}
		
		// Elements with class richtexteditor (Check / Validation page)
		if ($('.richtexteditor').length) { // implies *not* zero
			//alert("richtexteditor.length");
			
			var richtexteditors = $('.richtexteditor');
			if (richtexteditors.length) { // implies *not* zero		
				richtexteditors.each(function(index, value) {
					//console.log('editor-new-updated-'+index);
					CKEDITOR.replace( 'editor-new-updated-'+index, {
						extraPlugins: 'autogrow',
						removePlugins: 'resize'
					});
				});
			
			}		
		}		
		
	}
	
	

	
	function initializeThings()	{
		
		// Styling and customizing the datatables elements
		$(".dataTables_filter input").attr("placeholder", "Enter text to filter").addClass("form-control placeholder");
		
		$("<span class='filter_label'>Filter COD Files:</span>").prependTo("#table_demo_filter");
		$("<span class='filter_label'>Filter COD Files:</span>").prependTo("#table_demo_admin_filter");
		$("<span class='filter_label'>Filter COD Files:</span>").prependTo("#table_demo_super_admin_filter");
		
		$('input, textarea').placeholder();
		
		$('.datetimepickaa').datetimepicker({
			pickTime: false
			//orientation: "auto left"
		});
		
		$("input.datetimepickaa").on("click", function () {
			$(this).show();
		});
		
		$(".dataTables_length select").addClass("selectpicker").attr("data-width", "70px");	
		
		$(".select_filter").addClass("selectpicker");
		//.attr("data-width", "70px");	
		
		$('.selectpicker').selectpicker();
		
		
		$("button.removee").each(function(i,el) {
		
			$(this).unbind();
			var id = $(this).attr('id'),
				$el = $(el).confirm({
					text: "Are you sure you want to delete this Trilogue?",
					title: "Confirmation required",
					confirm: function() {
						$.ajax({
							//type: 'POST',
							type: 'GET',
							url: 'delete.asp',
							data: 'iddelete=' + id,
							success: function() {
								$el.closest(".conteiner").fadeOut(500, function() { 
									$(this).remove(); 
									var n = $("button.removee").length;
									$(".box-number").each(function(index, value) { 
										$(this).text(n - index);
									});
								});
							},
							error: function() {
								$el.closest(".conteiner").fadeOut(500, function() { $(this).remove(); });
							}
						});
					},
					cancel: function() {
						// do something
					},
					confirmButton: "Yes, Delete the Trilogue",
					cancelButton: "No, Don't Delete the Trilogue",
					post: false
				});
		});
		
		$('.autosize').autosize();
	}

	$(document).ready(function() {
	
		/*$("#toggleext").click(function(){
		  //$(this).button('toggle');
		  if ($(this).text()==" Closed"){
			$("#toggleext #toggleint").text(" Open");
		  } else {
			$("#toggleext #toggleint").text(" Closed");
		  }
		});*/
		

		
		$(".toggleext").click(function(){
		  //$(this).button('toggle');
		  if ($(this).text().indexOf("Show") > -1) {
			//console.log($(this).text());
			$($(this).find(".toggleint")).html("<strong>Hide</strong> last and new version");
			$($(this).find(".toggleicon")).attr('class', 'toggleicon glyphicon glyphicon-chevron-up');
		  } else {
			//console.log($(this).text());
			$($(this).find(".toggleint")).html("<strong>Show</strong> last and new version");
			$($(this).find(".toggleicon")).attr('class', 'toggleicon glyphicon glyphicon-chevron-down');
		  }
		});

		
		//outputs the ids of every paneldiffoutput on the web page
		//ie - panel_validated01, panel_updated01, outputdiv01
		$(".paneldiffoutput").each(function(index, value) {
			//console.log('panel-validated-' + index , 'panel-updated-'+index, 'outputdiv-' + index);
			launch('panel-validated-' + index , 'panel-updated-'+index, 'outputdiv-' + index);			
			$("#outputdiv-" + index).html($("#outputdiv-" + index).html().replace(/¶/g, ''));
			if ($("#panel-validated-" + index).text() === $("#panel-updated-" + index).text()) { 
				//console.log('yep'); 
				$("#outputdiv-" + index).html("<h4>There are no changes between the last validated and the new updated versions</h4>");
			};
		});
		
		
		
		// Options for the table in the demo part
		$('#table_demo').dataTable( {
			"order": [[ 6, "asc" ]],
			"aoColumnDefs": [
				  { "bSearchable": false, "aTargets": [ 10 ] }
				],
			"aoColumns": [ // IMPORTANT!!! Which columns are sortable.. Remember to add a row here if you add new column in HTML
				null,
				null,
				null,
				null,
				null,
				null,
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
		} );
		
		// Options for the table in the administration part
		$('#table_demo_admin').dataTable( {
			"order": [[ 6, "desc" ]],
			"aoColumns": [ // IMPORTANT!!! Which columns are sortable.. Remember to add a row here if you add new column in HTML
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				{ "bSortable": false },
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
		} );
		
		// Options for the table in the SUPER administration part
		$('#table_demo_super_admin').dataTable( {
			"order": [[ 1, "desc" ]],
			"aoColumns": [ // IMPORTANT!!! Which columns are sortable.. Remember to add a row here if you add new column in HTML
				null,
				null,
				null,
				null,
				null,				
				{ "bSortable": false }
			],
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
				  
			},
			"iDisplayLength": -1
		//} ).columnFilter();
		} ).columnFilter({aoColumns:[
				{ sSelector: "#sessionFilter", type:"select"  },
				{ },
				{ },
				{ sSelector: "#stagereachedFilter", type:"select" },
				{ sSelector: "#procdescrFilter", type:"select" }
				//{ sSelector: "#engineVersionFilter", type:"number-range" },
				//{ sSelector: "#cssGradeFilter", type:"select", values : ["A", "B", "C"] }
				]}
			);


		// SUPERADMIN: Functionality to Check checkboxes BY SESSION
		/*
		EXPLANATION: all the checkboxes in the SESSIONS part have the class "checksessions". We execute this code if there are changes on any of them (checked/unchecked).
		Then we store the name of the session (for example "Mar 2014") from the element that is next to the next element.
		We use an IF ELSE Condition to see it it's checked or not
		If its checked we compare both names of the session to check the ones that correspond in the table. We also highlight the row adding a CSS class		
		*/
		$('.checksessions').click(function() {
			$namesessionfiltered = $(this).next().next().text();
			if ($(this).is(':checked')) {
				$(".name-session").each(function() {
					var $namesess = $(this);
					if ($namesess.text() == $namesessionfiltered) {
						$namesess.parent().find(".awesomecheckbox").prop('checked', true);
						$namesess.closest("tr").addClass("selected");
					}
				});
			} else {
				$(".name-session").each(function() {
					var $namesess = $(this);
					if ($namesess.text() == $namesessionfiltered) {
						$namesess.parent().find(".awesomecheckbox").prop('checked', false);
						$namesess.closest("tr").removeClass("selected");
					}
				});
			} 
		});
		
		// SUPERADMIN: Functionality to Check or Uncheck all input checkboxes
		$("#checkboxall").click(function(){			
			if ($(this).is(':checked')) {
				$(".awesomecheckbox").each(function() {
					$(this).prop('checked', true);
					$(this).closest("tr").addClass("selected");
				});
			} else {
				$(".awesomecheckbox").each(function() {
					$(this).prop('checked', false);
					$(this).closest("tr").removeClass("selected");
				});
			}
		});
		
		// SUPERADMIN: Highlight graphically the row when file is checked
		$('.awesomecheckbox').change(function() {
			if ($(this).is(':checked')) {
				$(this).closest("tr").addClass("selected");
			} else {
				$(this).closest("tr").removeClass("selected");
			} 
		});
		
		initializeThings();
		initializeEditors();


		// NOT WORKING
		$("#table_demo").highlight($(".dataTables_filter input").val());
		//$(".dataTables_filter input").val()
		

		$('[data-toggle="popover"]').popover({trigger: 'hover'});
		$('[data-toggle="tooltip"]').tooltip();
		
		
        $("#add").click(function() {
            var intId = $("#buildyourform div.row").length + 1,			
				row = '\
					<div class="panel panel-default conteiner">\
                        <div class="panel-heading">New Trilogue</div>\
                        <div class="panel-body">\
							<div class="form-group">\
								<div class="row">\
									<div class="col-md-2">\
										<label for="dateofthetrilogue">Date:</label>\
										<div class="input-group date datetimepickaa"  id="datetimepicker_added'+ intId +'" data-date-format="DD/MM/YYYY">\
										<input name="dateCommentTriloguesNew" type="text" class="form-control datetimepickaa" placeholder="Enter the date..." data-date-format="DD/MM/YYYY" />\
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>\
										</div>\
									</div>\
									<div class="col-md-9">\
										<label for="notesaboutthetrilogue">Notes:</label>\
										<textarea name="txtCommentTriloguesNew" class="form-control autosize"></textarea>\
									</div>\
									<div style="" class="col-md-1">\
									<button type="button" class="removee btn btn-danger btn-md pull-right" style="margin-top:25px"><span class="glyphicon glyphicon-remove"></span> Delete</button>\
									</div>\
								</div>\
							</div>\
                        </div>\
                    </div>';

			$(row).appendTo("#buildyourform").hide().fadeIn(500);			
			initializeThings();
        });	
    });