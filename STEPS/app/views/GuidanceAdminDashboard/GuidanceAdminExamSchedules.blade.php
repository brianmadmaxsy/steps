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
	</style>
  	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable();
		} );
	</script>	

	<script>
	    $(document).ready(function(){

	    	//To disable the past dates
			var date = new Date();
			date.setDate(date.getDate()-1);

			$('#date').datepicker({ 
			    startDate: date
			});
			var date_input=$('input[name="date"]'); //our date input has the name "date"
	      	var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
	      	var options={
	        	format: 'mm/dd/yyyy',
	        	container: container,
	        	todayHighlight: true,
	        	autoclose: true,
	      	};
	      	
	      	$('#date').change(function (e) {                

			   var eventDate = $('#date').val();

			   var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

			   var date = new Date(eventDate).getDay();

			   var day = weekday[date];               

			  	$('#scheduleday').val(day);
			});
	      	date_input.datepicker(options);
	    })


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
							<li><a href="#tabs-1">Exam Schedules</a></li>
						    <li><a href="#tabs-2">Account</a></li>
						    
						</ul>
						
						<div id="tabs-1">
						
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    	<button type="button" class="btn btn-primary btn-sm" style="margin:0px 0px 5px 0px;" data-toggle="modal" data-target="#myModalForAddSchedule">Add Exam Schedule</button>
						        <thead>
						            <tr>
						                <th>Schedule Date</th>
						                <th>Schedule Time</th>
						                <th>Facilitator</th>
						                <th>&nbsp;</th>
						            </tr>
						        </thead>
						        <tfoot>
						            <tr>
						                <th>Schedule Date</th>
						                <th>Schedule Time</th>
						                <th>Facilitator</th>
						                <th>&nbsp;</th>
						            </tr>
						        </tfoot>
						        <tbody>
						        	<?php
						        	foreach($examschedulelist as $examschedule)
						        	{
						        	?>
							       	<tr>
							        	<td>{{ $examschedule->schedule_date." ".$examschedule->schedule_day }} </td>
							        	<td>{{ $examschedule->schedule_time }}</td>
							        	<td>{{ $examschedule->facilitator }}</td>
							        	<td>
							            <form method="post" action="/getexamscheduleid">
							            	<input name="schedule_id" type="hidden" value="{{ $examschedule->scheduleid }}">
							            	<input name="guidance_username" type="hidden" value="{{ $guidance['username'] }}">
							                <input type="submit" name="exambutton" value="View" >
							                <input type="submit" name="exambutton" value="Remove" onclick="return confirm('Are you sure?')">
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

						
					</div><!--End of tabs -->
				</div><!--content-box-large -->
		  </div>
		</div>
    </div>


<!-- Modal for Add Exam Schedule -->
<div class="modal fade" id="myModalForAddSchedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<form method="post" action="/guidanceaddexam">
  	<div class="modal-dialog" role="document">
    	
    	<div class="modal-content">
    		
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h4 class="modal-title" id="myModalLabel">Add Exam Schedule</h4>
      		</div>
      		
		    <div class="modal-body">
		      	
					<div class="form-group"> <!-- Date input -->
                      	<label class="control-label" for="date">Schedule Date</label>
                    	<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" required="" type="text"/>
                    </div>
                    <div class="form-group">
					    <label for="exampleInputEmail1">Day</label>
					    <input type="text" id="scheduleday" name="scheduleday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Choose a Schedule Date" required="" readonly="">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Schedule Time</label>
					    <select name="scheduletime" class="birthfield" required="">
					    	<option selected="" value="">Choose Time</option>
					    	<option value="08:00AM-10:00AM">08:00AM-10:00AM</option>
					    	<option value="10:00AM-12:00PM">10:00AM-12:00PM</option>
					    	<option value="01:00PM-03:00PM">01:00PM-03:00PM</option>
					    	<option value="03:00PM-05:00PM">03:00PM-05:00PM</option>
					    </select>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Facilitator</label>
					    <select name="facilitator" class="birthfield" required="">
					    	<option selected="" value="">Choose a Facilitator</option>
					    	<?php
					    	foreach($guidance_admins as $guidance_admin)
					    	{
					    	?>
					    		<option value="{{ $guidance_admin->firstname.' '.$guidance_admin->lastname }}">{{ $guidance_admin->firstname.' '.$guidance_admin->lastname }}</option>
					    	<?php
					    	}
					    	?>
					    </select>
					</div>
			</div>

		    <div class="modal-footer">
		    	<input type="hidden" name="guidance_username" value="{{ $guidance['username'] }}">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="return confirm('Do you want to close?')">Close</button>
		        <input type="submit" class="btn btn-primary" value="Add Exam" name="addexamschedule">
		    </div>
		    
    	</div>
    </div>
  	</form>
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