<!DOCTYPE html>
<html>
  <head>
    <title>STEPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Bootstrap -->
    <link href="admin/AdminDashboardDesign/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- styles -->
    <link rel="stylesheet" href="admin/AdminDashboardDesign/css/styles.css">
    
    <link rel="stylesheet" href="admin/AdminDashboardDesign/css/jquerycss.css" />
    <link rel="stylesheet" type="text/css" href="admin/AdminDashboardDesign/css/user.css">
   	<link rel="stylesheet" type="text/css" href="admin/AdminDashboardDesign/css/homedashboard.css">
   	<!-- Morris Charts CSS -->
    <link href="admin/AdminDashboardDesign/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin/AdminDashboardDesign/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="admin/AdminDashboardDesign/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="admin/AdminDashboardDesign/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="admin/AdminDashboardDesign/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="admin/AdminDashboardDesign/css/forms.css" rel="stylesheet">
    
    
    <script src="admin/AdminDashboardDesign/jquery/jquery.js"></script>
  	<script src="admin/AdminDashboardDesign/jquery/jquery-ui.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
</script>
	
	<style type="text/css">
		.back_to_admin_page{
			color:blue;
			margin-left:10px;
			text-decoration: none;
		}
		.back_to_admin_page:hover{
			color:blue;
			
		}
	</style>
  		
  </head>
  <body>



  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 
	                 <a href="http://localhost:8000/oashome"><img src="admin/AdminDashboardDesign/images/STEPS_header_3.png" class="img-responsive" alt="/" height="110" width="125" style="margin-top:3px;" /></a>
	              </div>
	           </div>
	           
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="http://localhost:8000/oaslogout"><b><font color="#fdca00">Logout</font><!-- class="dropdown-toggle" data-toggle="dropdown" <b class="caret"> --></b></a>
	                        <!--
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Settings</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                        -->
	                      </li>
	                    </ul>
	                  </nav>
	              </div><!--end of class="navbar navbar-inverse" -->
	           </div><!--end of class="col-md-2"-->
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  	<div class="col-md-2">
		  		<div class="sidebar content-box" style="display: block;">
                	<ul class="nav">
	                    <!-- Main menu -->
	                    <li class="submenu">
	                         <a href="http://localhost:8000/home">
	                            <i class="glyphicon glyphicon-dashboard"></i>Dashboard
	                            <span class="caret pull-right"></span>
	                         </a>
	                         <!-- Sub menu -->
	                         <ul>
	                            <li><a href="http://localhost:8000/oashome">Home</a></li>
	                            <li><a href="#">About</a></li>
	                            <li><a href="#">Support</a></li>
	                            <li><a href="http://localhost:8000/oaslogout">Logout</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="#"><i class="glyphicon glyphicon-calendar"></i>School Calendar</a></li>
                    </ul>
             	</div>
		  	</div>
		  	
		  	<div class="col-md-10">
		  		<div class="panel-heading" style="background-color:#89333c;">
			        <h3 class="panel-title" style="color:#fdca00"><b>{{ $oas['department'] }}</b></h3>
				</div>
				<div class="content-box-large" >
					<div class="panel panel-info" style=" border:1px solid #eee; margin:10px 0px 0px 0px; border-radius:10px;">
			            <div class="panel-heading" style="background-color:#fefefe; border:none;">
			              	<h3 class="panel-title" style="color:black">{{ $student['firstname']." ".$student['lastname'] }} </h3>
			              	<div class="panel-options">
			              		<a href="#" data-rel="reload" style="color:black" title="View Profile"><i class="glyphicon glyphicon-user"></i></a>
								<a href="#" data-rel="reload" style="color:black" title="Edit Profile"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
			            </div>
			            <div class="panel-body">
						    <div class="row">
						    
						    	<div class="col-md-4 col-lg-4 " align="center" > <img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-circle img-responsive" > </div>
						        
						        <div class=" col-md-8 col-lg-8 "> 
						            <table class="table table-user-information">
						                <tbody>
						                    <tr>
						                        <td>Student ID</td>
						                        <td>
						                        <?php 
						                        	if($student['studentid']=="")
						                        	{
						                        		echo "N/A";
						                        	}
						                        	else
						                        	{
						                        		echo $student['studentid'];
						                        	}
						                        ?>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>Date of Birth</td>
						                        <td>{{ $student['birthdate'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Gender</td>
						                        <td>{{ $student['gender'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Civil Status</td>
						                        <td>{{ $student['civilstatus'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Contact Number</td>
						                        <td>{{ $student['contact'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Home Address</td>
						                        <td>{{ $student['homeaddress'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Provincial Address</td>
						                        <td>{{ $student['provincialaddress'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Course to Enroll</td>
						                        <td>{{ $student['tocourse'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Previous School</td>
						                        <td>{{ $student['fromschool'] }}</td>
						                    </tr>
						                    <tr>
						                    	<td>Status</td>
						                    	<?php
						                    	if($student['steps_status']=="payment")
						                    	{
						                    	?>
						                    		<td class="alert alert-warning">{{ ucfirst($student['steps_status']) }}</td>
						                    	<?php
						                    	}
						                    	else
						                    	{
												?>
													<td class="alert alert-success">{{ ucfirst($student['steps_status']) }}</td>
						                    	<?php
						                    	}
						                    	?>
						                    </tr>
						                    	
						                </tbody>
						            </table>

						            <form method="post" action="/oasscheduleexam">
							            <table style="margin:10px 0px 0px 0px;">
							            	<tr>
							            		<td><h4>Choose Entrance Exam schedule</h4></td>
							            		<td>
							            			<select name="examschedule" style="height:30px; width:300px; background-color:#E6E6E6;">
												    	<option>03/27/17 09:00AM-11:00PM</option>
												    	<option>03/27/17 01:00PM-03:00PM</option>
												    	<option>03/27/17 03:00AM-05:00PM</option>
													</select>
							            		</td>
							            	</tr>
							            	<tr>
							            		<td colspan="2">
						          					<input type="hidden" name="get_userid" value="{{ $student['userid'] }}">
								          			
								          			<input type="submit" name="chooseschedulebutton" class="btn btn-success btn-lg" value="Choose Schedule">
													<input type="submit" name="chooseschedulebutton" class="btn btn-danger btn-lg" value="Decline">
						          				</td>
							            	</tr>
							            </table>
						            </form>

						          	<a href="http://localhost:8000/oashome" class="back_to_admin_page">Back to Admin Page...</a>  
						        </div><!-- col-md-8 col-lg-8-->
						    </div><!--class row-->
						    
						</div><!--panel-body-->
					</div><!--panel panel-info-->

					
				</div>
				  	
		  	</div>
		</div>
    </div>


    


   
    


    <script src="admin/AdminDashboardDesign/js/custom.js"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/AdminDashboardDesign/bootstrap/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="admin/AdminDashboardDesign/js/plugins/morris/raphael.min.js"></script>
    <script src="admin/AdminDashboardDesign/js/plugins/morris/morris.min.js"></script>
    <script src="admin/AdminDashboardDesign/js/plugins/morris/morris-data.js"></script>

    <script src="admin/AdminDashboardDesign/js/plugins/flot/jquery.flot.js"></script>
    <script src="admin/AdminDashboardDesign/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="admin/AdminDashboardDesign/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="admin/AdminDashboardDesign/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="admin/AdminDashboardDesign/js/plugins/flot/flot-data.js"></script>


    <link href="admin/AdminDashboardDesign/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
	<script src="admin/AdminDashboardDesign/vendors/datatables/js/jquery.dataTables.min.js"></script>
	<script src="admin/AdminDashboardDesign/vendors/datatables/dataTables.bootstrap.js"></script>
	<script src="admin/AdminDashboardDesign/js/tables.js"></script>



	
  </body>
</html>