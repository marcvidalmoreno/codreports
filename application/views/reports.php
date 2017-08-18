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
                <a class="navbar-brand" href="<?php echo base_url("index.php/codreports"); ?>">COD Reports</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li style="width:100px">&nbsp;</li>

                    <li class="<?php echo active_link('reports', 'index'); ?>">
                        <a href="<?php echo site_url('reports/index'); ?>">All files</a>
                    </li>

                    <li class="<?php echo active_link('reports', 'myfiles'); ?>">
                        <a href="<?php echo site_url('reports/myfiles'); ?>">My files</a>
                    </li>

                    <li class="<?php echo active_link('reports', 'mycommittee'); ?>">
                        <a href="<?php echo site_url("reports/mycommittee"); ?>">My Committee Files</a>
                    </li>
                </ul>
              
                <form class="navbar-form navbar-right" role="search" action="search.php"?>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter the text to..." name="text">
                    </div>
                    <button type="submit" class="btn btn-md btn-custom-hover">
                        <span class="glyphicon glyphicon-search"></span> Search
                    </button>
                </form>

            </div>
        </div>
    </div><!--/.navbar -->

    <!-- Begin page content -->
    <div class="main-container container">
        <div class="bs-callout bs-callout-warning">
            <p>Tool for the File Coordinators to <strong>assemble and report</strong> all relevant information about the <strong>COD files</strong>.</p>
        </div>

        <!-- Content -->
        <div class="bs-callout bs-callout-info">
            <!-- <a class="close" data-dismiss="bs-callout">×</a> -->
            <h3><span class="glyphicon glyphicon-align-justify"></span> ALL COD Files</h3>
            <p>This is a list of <strong>ALL Reports</strong>. Select one of your files to View its Details or to Edit it.</p>
        </div>

        <!-- IMPORTANT!!! Remember to add a row in the options of the datatables plugin in the footer $('#table_demo').dataTable( {      if you add a new column to the table -->
        <div class="bs-example">
            <table id="table_demo" class="display">
            <!--<table id="table_id" class="table display table-hover">-->
                <thead>
                    <tr>
                        <th>Codreport</th>
                        <th>Committee</th>
                        <th>Session</th>
                        <th>Title</th>
                        <th>View</th>
                        <th>Update</th>
                        <!--
                        <th>Session</th>
                        <th>COD ID</th>
                        <th>Title</th>
                        <th>Committee</th>
                        <th>Rapporteur</th>
                        <th>Stage reached</th>
                        <th>Proc. descr.</th> 
                        <th>Last update</th>
                        <th>F. Coordinator</th>
                        <th>Chef de file</th>
                        <th>View</th>
                        <th>Edit</th>
                        -->
                    </tr>
                </thead>
                <tbody>
                <?php $contextClass = "info" ?>
                <?php //$contextClass = "success" ?>
                <?php //$contextClass = "danger" ?>
                <?php //$contextClass = "warning" ?>
                <?php foreach ($reports as $i => $report) { ?>
                    <tr class="<?php //echo $contextClass ?>"> <!-- Context class seems to not be used in this page -->
                        <td><?php echo $report['id_cod_report'] ?></td>
                        <td><?php echo $report['id_committee'] ?></td>
                        <td><?php echo $report['id_session'] ?></td>
                        <td><?php echo $report['title'] ?></td>

                        <!--<td><%=rs("namesession") %></td>--> <!-- Session -->
                        <!--<td><%=rs("codnr") %></td>--> <!-- COD Number -->
                        <!--<td><%=rs("shorttitle") %></td>--> <!-- Title -->
                        <!--<td><%=rs("abbr") %></td>--> <!-- committee -->
                        <!--<td><%=rs("mepenamn") %></td>--> <!-- Rapporteur -->
                        <!--<td><%=rs("namestagereached") %></td>--> <!-- STage Reached -->
                        <!--<td><%=rs("procdescr") %></td>--> <!-- Proc Descr -->
                         <!--
                         <td><%=Left(rs("dateValidationDLA"),10)  &" at "&Mid(rs("DateValidationDLA"),12,5) %></td>
                        <td> <a href=/ADMIN/STAFF/staff_details.asp?detail=<%=rs("idfc")%>><%=rs("enamn") & ", " &rs("fnamn") %></a></td>
                        <td>EP</td>
                        -->
                        <td style="vertical-align:middle" class="center-y">
                            <!-- Button trigger modal -->
                            <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#myModal<?php echo $i ?>"><span class="glyphicon glyphicon-eye-open"></span> Validated Version</button> <!-- Details -->

                           <!-- Modal -->
                            <div class="modal fade bs-example-modal-lg" id="myModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">

                                    <div class="modal-content panel panel-info"> <!-- default primary -->

                                        <div class="modal-header panel-heading"> 
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <!-- Is it necessary to find out type of doc? -->
                                            <h3 class="modal-title" id="myModalLabel"><strong>Resolution - Type of Document - <?php echo $report['id_cod_report'] ?></strong></h3>
                                            
                                            <h3 class="modal-title"><?php echo $report['title'] ?></h3>
                                            <!-- Do I need also a short title? -->
                                            
                                            <h4 class="modal-title">File coordinator: <strong>Vidal Moreno, Marc</strong>
                                            <a style="margin-left: 10px" href="#" class="btn btn-default btn-xs" role="button"><span class="glyphicon glyphicon-eye-open"></span> See Profile</a></h4>
                                            
                                            <h4 class="modal-title">Committee: <strong><?php echo $report['id_committee'] ?></strong></h4>

                                            <h4 class="modal-title">Rapporteur: <strong>Rapporteur</strong></h4>

                                            <h4 class="modal-title">Stage reached: <strong>Stage reached</strong></h4>

                                            <h4 class="modal-title">Latest Validation: <strong>08/08/2017</strong></h4>
                                            
                                            <!--
                                            <div class="modal-header panel-heading"> 
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            -->
                                        </div>
                          
                                        <div class="modal-body panel-body">

                                            <p><strong>Content:</strong>"commentcontentDLA"</p>
                                            <p><strong>Procedure in committee:</strong>"commentProcCom"</p>
                                            <p><strong>Plenary envisaged:</strong>"CommentIDSession"</p>
                                            <p><strong>Negotiations:</strong>"CommentNegociations"</p>
                                            <p><strong>Procedural issues: (if any)</strong>"CommentProcIssues"</p>
                                            <p><strong>Finalisation:</strong>"CommentFinal"</p>
                                        </div>
                          
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
              
                        <td style="vertical-align:middle">
                            <?php //if in_array(rs("IDCodTableData"), arrCodnumbersByCommittee) Or username = rs("Useridx") { ?>
                                <!--Response.Write rs("IDCodTableData") & " is in the array" & rs("Useridx")-->
                                <a class="btn btn-sm btn-primary" href="edit.php"><span class="glyphicon glyphicon-pencil"></span> Updated Version</a>
                                <!--?idprocedure=<?php //echo $report['id_cod_report'] ?>&idcodtabledata=<?php //echo $report['id_cod_report'] ?>&context=<?php //echo $contextClass ?>"><span class="glyphicon glyphicon-pencil"></span> Updated Version</a>-->
                
                            <?php //} else { ?>
                                <!-- Response.Write rs("IDCodTableData") & " is not in the array" & rs("Useridx") -->
                                <!-- If user doesn't have the right ot edit the file -->
                                <!--<a class="btn btn-sm btn-primary disabled">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span> Not Editable&nbsp;&nbsp;&nbsp;</a>-->
                            <?php //}  ?>              
                        </td>
                    </tr>
                    <?php } ?><!-- /foreach -->
                </tbody>
            </table>
        </div><!-- /.bs-example -->
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