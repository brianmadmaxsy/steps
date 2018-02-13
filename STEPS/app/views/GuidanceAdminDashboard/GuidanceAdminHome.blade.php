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
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example2').DataTable();
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
	                        <a href="{{ URL::to('/guidancelogout') }}"><b><font color="#fdca00">Logout</font><!-- class="dropdown-toggle" data-toggle="dropdown" <b class="caret"> --></b></a>
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
							<li><a href="#tabs-1">Transferee</a></li>
							<li><a href="#tabs-2">Freshmen</a></li>
						    <li><a href="#tabs-3">Account</a></li>
						    
						</ul>
						
						<div id="tabs-1">
						
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    
						        <thead>
						            <tr>
						                <th>Name</th>
						                <th>School Year</th>
						                <th>Semister</th>
						                <th>Course Enrolled</th>
						                <th>Previous Course</th>
						                <th>Previous School</th>
						                <!--<th>Status</th>-->
						                <th>&nbsp;</th>
						            </tr>
						        </thead>
						        <tfoot>
						            <tr>
						                <th>Name</th>
						                <th>School Year</th>
						                <th>Semister</th>
						                <th>Course Enrolled</th>
						                <th>Previous Course</th>
						                <th>Previous School</th>
						                <!--<th>Status</th>-->
						                <th>&nbsp;</th>
						            </tr>
						        </tfoot>
						        <tbody>
							       
								    <?php
								    foreach($transfereestudents as $student)
								    {
								    	$userid=$student->userid;
								    ?>
								        <tr>
								        	<td>{{ $student->firstname.' '.$student->middlename.' '.$student->lastname }}</td>
								        	<td>{{ $student->schoolyear }}</td>
								        	<td>{{ $student->semester }}</td>
								        	<td>{{ $student->tocourse }}</td>
								        	<td>{{ $student->fromcourse }}</td>
								            <td>{{ $student->fromschool }}</td>
								            <!--<td>{{ $student->steps_status }}</td>-->
								            <td>
								            <form method="post" action="/guidancegettransfereeuserid">
								            	<input name="get_userid" type="hidden" value="{{ $userid }}">
								            	<input type="hidden" name="from_link" value="/guidancehome">
								                <input type="submit" name="open" value="Open" >
								            </form>
								            </td>
								        </tr>
								    <?php
								    	$userid="";
								    }
								    ?>   
							    </tbody>
							</table>
				  		
				  			
						</div> <!-- End of tabs-1 -->

						<div id="tabs-2">
						
							<table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    
						        <thead>
						            <tr>
						                <th>Name</th>
						                <th>School Year</th>
						                <th>Semister</th>
						                <th>Course to Enroll</th>
						                <th>Secondary School</th>
						                <!--<th>Status</th>-->
						                <th>&nbsp;</th>
						            </tr>
						        </thead>
						        <tfoot>
						            <tr>
						                <th>Name</th>
						                <th>School Year</th>
						                <th>Semister</th>
						                <th>Course To Enroll</th>
						                <th>Secondary School</th>
						                <!--<th>Status</th>-->
						                <th>&nbsp;</th>
						            </tr>
						        </tfoot>
						        <tbody>
							       
								    <?php
								    foreach($freshmenstudents as $student)
								    {
								    	$userid=$student->userid;
								    ?>
								        <tr>
								        	<td>{{ $student->firstname.' '.$student->middlename.' '.$student->lastname }}</td>
								        	<td>{{ $student->schoolyear }}</td>
								        	<td>{{ $student->semester }}</td>
								        	<td>{{ $student->tocourse }}</td>
								            <td>{{ $student->highschool }}</td>
								            <!--<td>{{ $student->steps_status }}</td>-->
								            <td>
								            <form method="post" action="/guidancegetfreshmenuserid">
								            	<input name="get_userid" type="hidden" value="{{ $userid }}">
								            	<input type="hidden" name="from_link" value="/guidancehome">
								                <input type="submit" name="open" value="Open" >
								            </form>
								            </td>
								        </tr>
								    <?php
								    	$userid="";
								    }
								    ?>   
							    </tbody>
							</table>
				  		
				  			
						</div> <!-- End of tabs-2 -->

						<div id="tabs-3">
							<div class="row">
						  		<div class="col-md-1">
						  			<!--no content just to provide space -->
						  		</div>
							  	<div class="col-md-10">
								    <div class="panel panel-info" style=" border:1px solid #eee; margin:10px 0px 0px 0px; border-radius:10px;">
							            <div class="panel-heading" style="background-color:#fefefe; border:none;">
							              	<h3 class="panel-title" style="color:black"><b>{{ $guidance['firstname'].' '.$guidance['middlename'].' '.$guidance['lastname'] }} </b></h3>
							              	<div class="panel-options">
							              		<a href="#" data-rel="reload" style="color:black" title="View Profile"><i class="glyphicon glyphicon-user"></i></a>
												<a href="#" data-rel="reload" style="color:black" title="Edit Profile"><i class="glyphicon glyphicon-cog"></i></a>
											</div>
							            </div>
							            <div class="panel-body">
										    <div class="row">
										    
										    	<a href="#" data-rel="reload" style="color:black" title="My Avatar" data-toggle="modal" data-target="#myModalForPicture">
										    	<div class="col-md-4 col-lg-4 " align="center" > 
										    		<?php
									    			if($guidance['picture']=="")
									    			{
									    			?>
									    			<img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-circle img-responsive" > 
									    			<?php
									    			}
									    			else
									    			{
									    			?>
									    			<img alt="User Pic" src="<?php echo "profilepics/".$guidance['picture']; ?>" class="img-circle img-responsive" > 
									    			<?php
									    			}
									    			?>
										    	</div>
										    	</a>
										        
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
						</div><!--End of tabs-3 -->
<div class="modal fade" id="myModalForPicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h3 class="modal-title" id="myModalLabel">My Avatar</h3>
      		</div>
		    <div class="modal-body">
		    	<div>
		    		<?php
	    			if($guidance['picture']=="")
	    			{
	    			?>
	    			<img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-rounded img-responsive" style="margin:0px auto 0px auto;"> 
	    			<?php
	    			}
	    			else
	    			{
	    			?>
	    			<img alt="User Pic" src="<?php echo "profilepics/".$guidance['picture']; ?>" class="img-rounded img-responsive" style="margin:0px auto 0px auto;"> 
	    			<?php
	    			}
	    			?>
		 		</div>
		 		<div style="margin-top:10px;">
		 			{{ Form::open(array('url' => '/editadminavatar', 'enctype' => 'multipart/form-data')) }}
		 				<table>
		 					<tr>
		 						<td><label>Change Avatar</label></td>
		 						<td>
		 							<input type="file" name="file" required="">
		 							<input type="hidden" name="get_userid" value="{{ $guidance['userid'] }}">
		 							<input type="hidden" name="get_position" value="{{ $guidance['position'] }}">
		 							<input type="hidden" name="get_department" value="{{ $guidance['department'] }}">
		 						</td>
		 						<td><input type="submit" name="upload" value="Upload" class="btn btn-primary"></td>
		 					</tr>
		 				</table>
		 			{{ Form::close() }}
				</div>
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		    </div>
		</div>
	</div>
</div>
						
					</div><!--End of tabs -->
				</div><!--content-box-large -->
		  </div>
		</div>
    </div>


    


   
    


    <script src="admin/AdminDashboardDesign/js/custom.js"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/AdminDashboardDesign/bootstrap/js/bootstrap.min.js"></script>



    <link href="admin/AdminDashboardDesign/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
	<script src="admin/AdminDashboardDesign/vendors/datatables/js/jquery.dataTables.min.js"></script>
	<script src="admin/AdminDashboardDesign/vendors/datatables/dataTables.bootstrap.js"></script>
	<script src="admin/AdminDashboardDesign/js/tables.js"></script>



	
  </body>
</html>