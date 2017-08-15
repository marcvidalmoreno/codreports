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


<!-- NEW BEGINNING -->

    <!-- Begin page content -->
    <div class="container" style="padding-bottom: 30px">






    <div class="bs-callout bs-callout-warning">
        <p>Tool for the File Coordinators to <strong>assemble and report</strong> all relevant information about the <strong>COD files</strong>.</p>
    </div>

<!-- NEW END -->









        <div class="page-header">
            <!-- <h1>Sticky footer with fixed navbar</h1> -->
            <h1>Management and reporting system for the COD files</h1>
            <p>The file coordinators will assemble all relevant information about their COD-files.</p>
        
        </div>
        <!-- <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
        <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p> -->

    
        <div class="bs-example">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>id_cod_report</th>
                        <th>id_committee</th>
                        <th>id_session</th>
                        <th>title</th>

                        <th>View</th>
                        <th>Update Comment</th>

                        <!--
                        <th>Session</th>
                        <th>Week final trilogue</th>
                        <th>COD ID</th>
                        <th>Title</th>
                        <th>Rapporteur</th>
                        <th>Stage reached</th>
                        <th>Proc. descr.</th>
                        <th>Last update</th>
                        <th>File coordinator</th>
                        <th>Chef de file</th>
                        <th>View</th>
                        <th>Update Comment</th>
                        -->
                    </tr>
                </thead>

                <tbody>

                <?php foreach ($reports as $i => $report) { ?>
                    <tr class="<?php //echo $contextClass ?>">
                        <td><?php echo $report['id_cod_report'] ?></td>
                        <td><?php echo $report['id_committee'] ?></td>
                        <td><?php echo $report['id_session'] ?></td>
                        <td><?php echo $report['title'] ?></td>

                        <!--
                        <td><%=rs("namesession") %></td>
                        <td><?php //echo sessionName; ?></td>
                        <td></td>
                        <td><?php //echo "codnr" ?></td>
                        <td><?php //echo "shorttitle" ?></td>
                        <td><?php //echo "mepenamn" ?></td>
                        <td><?php //echo "abbrstatut" ?></td>
                        <td><?php //echo "procdescr" ?></td>
                        <td>last update</td>             
                        <td> <a href=/ADMIN/STAFF/staff_details.asp?detail=XXXX</a></td>
                        <%=rs("idtjm")%>><%=rs("enamn") & ", " &rs("fnamn") %>
                        <td>chef de file</td>
                        -->
                        
                        <td style="vertical-align:middle" class="center-y">

                            <!-- Button trigger modal -->
                            <button class="btn btn-sm btn-default" 
                                    data-toggle="modal" 
                                    data-target="#myModal<?php echo $i ?>">
                                <span class="glyphicon glyphicon-eye-open"></span> Details
                            </button>
                      
                            <!-- Modal -->
                                <div id="myModal<?php echo $i ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content panel panel-<?php echo $contextClass ?>">
                                            <div class="modal-header panel-heading"> 
                                    
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h3 class="modal-title" id="myModalLabel">Details - <%=rs("codnr") %></h3>
                                      <h3 class="panel-title">Panel title</h3>
                                    </div>
                                    <div class="modal-body panel-body">
                                        <h4><strong>Legislation - Resolution - <%=rs("shorttitle") %></strong></h4>
                                        <hr/>                  
                                        <p><strong>Content:</strong> In a few lines: What is the background and purpose of the COM proposal and what are the major elements of the proposal.</p>
                                        <p><strong>Procedure in committee:</strong> Time-table. / Date of adoption of report (indicating final vote +, -, abstentions in format (49:2:4) and, if relevant, which groups voted against). Number of amendments tabled and adopted. Important narrow votes and issues likely to be raised again at plenary stage. Relevant key points discussed in committee (if any). Is committee position clear after the vote ? Is the cooling-off period respected ?</p>
                                        <p><strong>Plenary envisaged:</strong> If specific date required for legal or political reasons, please indicate.</p>
                                        <p><strong>Negotiations:</strong> 
                                        Within Parliament. With/within Council and Commission. Outcome of trilogues so far. Date for next trilogue.
                                        In case there are no negotiations or no agreement: What are the reasons ? Crucial: Important points for EP.</p>
                                        <p><strong>Procedural issues: (if any)</strong></p>
                                        <p><strong>Finalisation:</strong> (if pertinent and if agreement sought) Expected approximate length of the agreed text.</p>
                                        <p><strong>Urgency:</strong> Time-table in case of urgency. Are adoption/ LEX signature / publication needed by a specific date? Specific date of entry into force needed ? Only in that case: How many days after publication does the act enter into force? Do COM or MS need time to adopt further acts based on the COD after entry into force ? (E.g. delegated acts. E.g. implementation in national law.)
                                        For first reading files treated urgently or by simplified procedure (Rule 46), always check if the deadline for national Parliaments is respected. 
                                        For all first reading files and when a new COM proposal is published: Check if the legal basis requires opinions by EESC and CoR, and say in the relevant EESC/CoR column of the COD table which deadline was set by the EP to the EESC/CoR for their opinion. (This deadline must suit the desired timetable in the EP.)
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </td>
                        <!-- <td><button class="btn btn-sm btn-primary">Update</button></td> -->
                        <!-- <td><a class="btn btn-sm btn-primary" href="#"><i class="icon-upload-alt"></i> Update</a></td> -->

                        <td style="vertical-align:middle"><a class="btn btn-sm btn-primary" href="edit.asp">
                            <span class="glyphicon glyphicon-pencil"></span> Update</a>
                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
    
  </div><!-- /example -->

  
  
  
<div class="highlight">Aliquam blandit magna dolor, in interdum dolor imperdiet a. In blandit rutrum lorem. Duis gravida nibh enim, vitae scelerisque orci volutpat sit amet. Nunc vitae neque sit amet risus blandit molestie ut eget metus. Proin eu sapien quis magna posuere luctus eget hendrerit magna. Nunc luctus orci eget mauris luctus ornare at vitae ante. Suspendisse at sollicitudin eros, at congue urna. Duis elementum sodales feugiat. Quisque nec purus a massa imperdiet rhoncus. Sed convallis orci quis imperdiet feugiat. Donec nec adipiscing velit. Suspendisse lobortis velit at lacus convallis tempor. In vehicula pharetra nulla.
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