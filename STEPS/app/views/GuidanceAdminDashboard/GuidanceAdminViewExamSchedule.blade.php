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
    
    <script src="admin/AdminDashboardDesign/jquery/jquery1-11-3.min.js"></script>
  	<script src="admin/AdminDashboardDesign/jquery/jquery-ui.js"></script>

    <!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="admin/AdminDashboardDesign/bootstrap/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="admin/AdminDashboardDesign/bootstrap/css/bootstrap-datepicker3.css">
    
    
  	<style type="text/css">
		.birthfield,.semester-class{
			
		  	height: 34px;
		  	padding: 6px 12px;
		  	font-size: 14px;
		  	line-height: 1.42857143;
		  	color: #555;
		  	background-color: #fff;
		  	background-image: none;
		  	border: 1px solid #ccc;
		  	border-radius: 4px;
			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
			       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		}
		.table caption button{
		    float:right;
		}
		.table caption{
		    border: inherit; 
		    background-color: lightgrey;
		}
	</style>

  	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable();
		} );
	</script>	

	
  </head>
  <body>



  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 
	                 <a href="{{ URL::to('/guidancehome') }}"><img src="admin/AdminDashboardDesign/images/STEPS_header_3.png" class="img-responsive" alt="/" height="110" width="125" style="margin-top:3px;" /></a>
	              </div>
	           </div>
	           
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="{{ URL::to('/guidancehome') }}"><b><font color="#fdca00">Logout</font><!-- class="dropdown-toggle" data-toggle="dropdown" <b class="caret"> --></b></a>
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
	                         <a href="{{ URL::to('/guidancehome') }}">
	                            <i class="glyphicon glyphicon-dashboard"></i>Dashboard
	                            <span class="caret pull-right"></span>
	                         </a>
	                         <!-- Sub menu -->
	                         <ul>
	                            <li><a href="{{ URL::to('/guidancehome') }}">Home</a></li>
	                            <li><a href="#">About</a></li>
	                            <li><a href="#">Support</a></li>
	                            <li><a href="{{ URL::to('/guidancelogout') }}">Logout</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="{{ URL::to('/examschedules') }}"><i class="glyphicon glyphicon-calendar"></i>Exam Schedules</a></li>
                    </ul>
             	</div>
		  	</div>
		  	
		  	<div class="col-md-10">
		  		<div class="panel-heading" style="background-color:#89333c;">
			        <h2 class="panel-title" style="color:#fdca00"><b>{{ $guidance['department'] }}</b></h2>
				</div>
				<script src="dashboard/js/tabs.js" ></script>

			  	<div class="content-box-large" >
				  	<div id="tabs">
						<ul>
							<li><a href="#tabs-1">Students</a></li>
						    <li><a href="#tabs-2">Account</a></li>
						    
						</ul>
						
						<div id="tabs-1">
							<table>
								<tr>
									<td width="100"><h5><b>Schedule</b></h5></td>
									<td><h5>{{ $examschedule['schedule_date']." ".$examschedule['schedule_day']." ".$examschedule['schedule_time'] }}</h5></td>
								</tr>
								
								<tr>
									<td width="100"><h5><b>Facilitator</b></h5></td>
									<td><h5>{{ $examschedule['facilitator'] }}</h5></td>
								</tr>
							</table>
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    	<caption>
						            <span><strong><font size="4">Entrace Examinees</font></strong></span>
						            <button type="button" id="printBtn" class="btn btn-default btn-sm" title="Print">
						                <span class="glyphicon glyphicon-print"></span>
						            </button>
					       		</caption>
						        <thead>
						            <tr>
						                <th>Name</th>
						                <th>School Year</th>
						                <th>Semester</th>
						                <th>Course Enrolled</th>
						                <th>Student Type</th>
						                <!--<th>Status</th>-->
						                <th>&nbsp;</th>
						            </tr>
						        </thead>
						        <tfoot>
						            <tr>
						                <th>Name</th>
						                <th>School Year</th>
						                <th>Semester</th>
						                <th>Course Enrolled</th>
						                <th>Student Type</th>
						                <!--<th>Status</th>-->
						                <th>&nbsp;</th>
						            </tr>
						        </tfoot>
						        <tbody>
						        	<?php
						        	foreach($exam_transferee_students as $student)
						        	{
						        	?>
							       	<tr>
							        	<td>{{ $student->firstname." ".$student->middlename." ".$student->lastname }} </td>
							        	<td>{{ $student->schoolyear }}</td>
							        	<td>{{ $student->semester }}</td>
							        	<td>{{ $student->tocourse }}</td>
							        	<td>{{ $student->studenttype }}</td>
							        	<td>
							            <form method="post" action="/guidancegettransfereeuserid">
							            	<input name="get_userid" type="hidden" value="{{ $student->userid }}">
							            	<input type="hidden" name="from_link" value="/guidanceviewexamschedule">
							            	<input type="submit" name="open" value="Open" >
							            </form>
							            </td>
							        </tr>
							       	<?php
							       	}
							       	?>
							       	<?php
						        	foreach($exam_freshmen_students as $student)
						        	{
						        	?>
							       	<tr>
							        	<td>{{ $student->firstname." ".$student->middlename." ".$student->lastname }} </td>
							        	<td>{{ $student->schoolyear }}</td>
							        	<td>{{ $student->semester }}</td>
							        	<td>{{ $student->tocourse }}</td>
							        	<td>{{ $student->studenttype }}</td>
							        	<td>
							            <form method="post" action="/guidancegetfreshmenuserid">
							            	<input name="get_userid" type="hidden" value="{{ $student->userid }}">
							            	<input type="hidden" name="from_link" value="/guidanceviewexamschedule">
							            	<input type="submit" name="open" value="Open" >
							            </form>
							            </td>
							        </tr>
							       	<?php
							       	}
							       	?>
								</tbody>
							</table>
				  		
				  			
						</div> <!-- End of tabs-1 -->

						<div id="tabs-2">
							<div class="row">
						  		<div class="col-md-1">
						  			<!--no content just to provide space -->
						  		</div>
							  	<div class="col-md-10">
								    <div class="panel panel-info" style=" border:1px solid #eee; margin:10px 0px 0px 0px; border-radius:10px;">
							            <div class="panel-heading" style="background-color:#fefefe; border:none;">
							              	<h3 class="panel-title" style="color:black">{{ $guidance['firstname'].' '.$guidance['middlename'].' '.$guidance['lastname'] }} </h3>
							              	<div class="panel-options">
							              		<a href="#" data-rel="reload" style="color:black" title="View Profile"><i class="glyphicon glyphicon-user"></i></a>
												<a href="#" data-rel="reload" style="color:black" title="Edit Profile"><i class="glyphicon glyphicon-cog"></i></a>
											</div>
							            </div>
							            <div class="panel-body">
										    <div class="row">
										    
										    	<div class="col-md-4 col-lg-4 " align="center" > <img alt="User Pic" src="admin/AdminDashboardDesign/images/userpc.jpg" class="img-circle img-responsive" > </div>
										        
										        <div class=" col-md-8 col-lg-8 "> 
										            <table class="table table-user-information">
										                <tbody>
										                	<tr>
										                        <td>Position</td>
										                        <td>{{ $guidance['position'] }}</td>
										                    </tr>
										                    <tr>
										                        <td>Admin ID</td>
										                        <td>
										                        {{ $guidance['adminid'] }}
										                        </td>
										                    </tr>
										                    
										                    <tr>
										                        <td>Email</td>
										                        <td>{{ $guidance['email'] }}</td>
										                    </tr>
										                    
										                    <tr>
										                        <td>Contact Number</td>
										                        <td>{{ $guidance['contact'] }}</td>
										                    </tr>
										                    <tr>
										                        <td>Birthdate</td>
										                        <td>{{ $guidance['birthdate'] }}</td>
										                    </tr>
										                    <tr>
										                        <td>Education</td>
										                        <td>{{ $guidance['education'] }}</td>
										                    </tr>
										                    <tr>
										                        <td>Past University</td>
										                        <td>{{ $guidance['pastuniversity'] }}</td>
										                    </tr>
										                    
										                    
										                     
										                </tbody>
										            </table>
										            
										        </div><!-- col-md-8 col-lg-8-->
										    </div><!--class row-->
										    
									    </div><!--panel-body-->
									    
								    </div><!--panel panel-info-->
							    </div><!--col-md-10 -->
							    <div class="col-md-1">
							  		<!--no content just to provide space -->
							  	</div>
							</div><!--row-->
						</div><!--End of tabs-2 -->

						
						<a href="{{ URL::to('/examschedules') }}" class="btn btn-info" role="button" style="margin:0px 0px 10px 20px; color:white;">Back to Exam Schedules...</a>
						
					</div><!--End of tabs -->
				</div><!--content-box-large -->
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