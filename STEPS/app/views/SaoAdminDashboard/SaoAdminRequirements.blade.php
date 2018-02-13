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
	                 
	                 <a href="{{ URL::to('/saohome') }}"><img src="admin/AdminDashboardDesign/images/STEPS_header_3.png" class="img-responsive" alt="/" height="110" width="125" style="margin-top:3px;" /></a>
	              </div>
	           </div>
	           
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="{{ URL::to('/saologout') }}"><b><font color="#fdca00">Logout</font><!-- class="dropdown-toggle" data-toggle="dropdown" <b class="caret"> --></b></a>
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
	                         <a href="{{ URL::to('/saohome') }}">
	                            <i class="glyphicon glyphicon-dashboard"></i>Dashboard
	                            <span class="caret pull-right"></span>
	                         </a>
	                         <!-- Sub menu -->
	                         <ul>
	                            <li><a href="{{ URL::to('/saohome') }}">Home</a></li>
	                            <li><a href="#">About</a></li>
	                            <li><a href="#">Support</a></li>
	                            <li><a href="{{ URL::to('/saologout') }}">Logout</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="#"><i class="glyphicon glyphicon-calendar"></i>School Calendar</a></li>
                    </ul>
             	</div>
		  	</div>
		  	
		  	<div class="col-md-10">
		  		<div class="panel-heading" style="background-color:#89333c;">
			        <h3 class="panel-title" style="color:#fdca00"><b>{{ $sao['department'] }}</b></h3>
				</div>
				<div class="content-box-large" >
					<div class="panel panel-info" style=" border:1px solid #eee; margin:10px 0px 0px 0px; border-radius:10px;">
			            <div class="panel-heading" style="background-color:#fefefe; border:none;">
			              	<h3 class="panel-title" style="color:black"><b>{{ $student['firstname']." ".$student['lastname'] }}</b></h3>
			              	<div class="panel-options">
			              		<a href="#" data-rel="reload" style="color:black" title="View Profile"><i class="glyphicon glyphicon-user"></i></a>
								<a href="#" data-rel="reload" style="color:black" title="Edit Profile"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
			            </div>
			            <div class="panel-body">
						    <div class="row">
						    
						    	<div class="col-md-4 col-lg-4 " align="center" >
						    		<?php
					    			if($student['picture']=="")
					    			{
					    			?>
					    			<img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-circle img-responsive" > 
					    			<?php
					    			}
					    			else
					    			{
					    			?>
					    			<img alt="User Pic" src="<?php echo "profilepics/".$student['picture']; ?>" class="img-circle img-responsive" > 
					    			<?php
					    			}
					    			?>
						    	</div>
						        
						        <div class=" col-md-8 col-lg-8 "> 
						            <table class="table table-user-information">
						                <tbody>
						                	<tr>
						                		<td>Student Type</td>
						                		<td>{{ $student['studenttype'] }}</td>
						                	</tr>
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
						                        <td>{{ $transferee['tocourse'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Previous School</td>
						                        <td>{{ $transferee['fromschool'] }}</td>
						                    </tr>
						                    <tr>
						                    	<td>Status</td>
						                    	<?php
						                    	if($student['steps_status']!="Officially Enrolled")
						                    	{
						                    	?>
						                    	<td class="alert alert-info">{{ ucfirst($student['steps_status']) }}</td>
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
						                    <?php
						                    if($requirements['requirements_comment']!="")
						                    {
						                    ?>
						                    <tr>
												<td><h4>Requirements Feedback</h4></td>
												<td class="alert alert-info">{{ $requirements['requirements_comment'] }}</td>
											</tr>
											<?php
											}
											?>
						                     
						                </tbody>
						            </table>
						            <?php
						            if($student['steps_status']=="requirements")
						            {
						            ?>
							          	<div style="height:auto;">
							          	<?php
							          	if($requirements['NSO']=="true" || $requirements['COT']=="true" || $requirements['GM']=="true" || $requirements['TOR']=="true" || $requirements['RF']=="true")
							          	{
							          	?>
							          		<table>
							          			<tr>
							          				<td colspan="2"><h3 style="color:green;">Submitted Requirements</h3></td>
							          			</tr>
							          			<?php
												if($requirements['NSO']=="true")
												{
												?>
													<tr id="student_sao_table">
													    <td width="300">NSO Birth Certificate</td>
													</tr>
												<?php
												}
												?>

												<?php
												if($requirements['COT']=="true")
												{
												?>
													<tr id="student_sao_table">
													    <td width="300">Certificate of Transfer</td>
													</tr>
												<?php
												}
												?>

												<?php
												if($requirements['GM']=="true")
												{
												?>
													<tr id="student_sao_table">
													    <td width="300">Good Moral Certificate</td>
													</tr>
												<?php
												}
												?>

												<?php
												if($requirements['TOR']=="true")
												{
												?>
													<tr id="student_sao_table">
													    <td width="300">Transcript of Records (TOR)</td>
													</tr>
												<?php
												}
												?>

												<?php
												if($requirements['RF']=="true")
												{
												?>
													<tr id="student_sao_table">
													    <td width="300">CIT University Residency Form</td>
													</tr>
												<?php
												}
												?>
											</table>
										<?php
										}
										?>	

											<?php
								          	if($requirements['NSO']=="false" || $requirements['COT']=="false" || $requirements['GM']=="false" || $requirements['TOR']=="false" || $requirements['RF']=="false")
								          	{
								          	?>
											<form method="post" action="/submitrequirements">
												<table>
													<tr>
								          				<td colspan="2"><h3 style="color:green;">Incomplete Requirements</h3></td>
								          			</tr>
								          			<?php
													if($requirements['NSO']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>NSO Birth Certificate</label>
														    	
														    </td>
														    <td>
														    	<input type="checkbox" name="nso" value="nso">
														    </td>

														</tr>
													<?php
													}
													?>

													<?php
													if($requirements['COT']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>Certificate of Transfer</label>
														    	
														    </td>
														    <td>
														    	<input type="checkbox" name="cot" value="cot">
														    </td>
														</tr>
													<?php
													}
													?>

													<?php
													if($requirements['GM']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>Good Moral Certificate</label>
														    	
														    </td>
														    <td>
														    	<input type="checkbox" name="gm" value="gm">
														    </td>
														</tr>
													<?php
													}
													?>

													<?php
													if($requirements['TOR']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>Transcript of Records (TOR) </label>
														    </td>
														    <td>
														    	<input type="checkbox" name="tor" value="tor">
														    </td>
														</tr>
													<?php
													}
													?>

													<?php
													if($requirements['RF']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>CIT University Residency Form</label>
														    	
														    </td>
														    <td>
														    	<input type="checkbox" name="rf" value="rf">
														    </td>
														</tr>
													<?php
													}
													?>	

														<tr>
															<td colspan="2">
																<input type="hidden" name="get_userid" value="{{ $student['userid'] }}">
																<input type="hidden" name="get_sao_username" value="{{ $sao['username'] }}">
																<input type="submit" name="submit" value="Submit Requirement/s">
															</td>
														</tr>
												</table>
											</form>
											<?php
											}
											?>

											<div style="margin-top:10px;">
											<form method="post" action="/submittedrequirements">
												<table>
													<tr>
														<td><h4>Student ID</h4></td>
														<td><input type="text" name="studentid" value="" class="form-control" placeholder="Enter Student ID" required=""></td>
													</tr>
													<tr>
														<td><h4>Comment</h4></td>
														<td><textarea name="requirements_comment" class="form-control" placeholder="Textarea" rows="5" style="width:500px;"></textarea></td>
													</tr>
													<tr>
														<td>&nbsp;</td>
													</tr>
													<tr>
														<td colspan="3">
															<input type="hidden" name="get_userid" value="{{ $student['userid'] }}">
															<input type="hidden" name="get_sao_username" value="{{ $sao['username'] }}">
															<input type="submit" name="submitted_button" class="btn btn-success btn-lg" value="Approve">
															<input type="submit" name="submitted_button" class="btn btn-danger btn-lg" value="Decline">
														</td>
													</tr>
													<tr>
														<td>&nbsp;</td>
													</tr>
												</table>	
											</form>
												
											</div>
							          	</div>

						          	<?php
						          	}
						          	elseif($student['steps_status']!="evaluation" && $student['steps_status']!="requirements") //if steps_status is not "evaluation"(Step1) and not "requirements"(Step2) show this
						          	{
						          	?>
						          		<?php
							          	if($requirements['NSO']=="false" || $requirements['COT']=="false" || $requirements['GM']=="false" || $requirements['TOR']=="false" || $requirements['RF']=="false")
							          	{
							          	?>
											<form method="post" action="/submitrequirements">
												<table>
													<tr>
								          				<td colspan="2"><h3 style="color:green;">Incomplete Requirements</h3></td>
								          			</tr>
								          			<?php
													if($requirements['NSO']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>NSO Birth Certificate</label>
														    	
														    </td>
														    <td>
														    	<input type="checkbox" name="nso" value="nso">
														    </td>

														</tr>
													<?php
													}
													?>

													<?php
													if($requirements['COT']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>Certificate of Transfer</label>
														    	
														    </td>
														    <td>
														    	<input type="checkbox" name="cot" value="cot">
														    </td>
														</tr>
													<?php
													}
													?>

													<?php
													if($requirements['GM']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>Good Moral Certificate</label>
														    	
														    </td>
														    <td>
														    	<input type="checkbox" name="gm" value="gm">
														    </td>
														</tr>
													<?php
													}
													?>

													<?php
													if($requirements['TOR']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>Transcript of Records (TOR) </label>
														    </td>
														    <td>
														    	<input type="checkbox" name="tor" value="tor">
														    </td>
														</tr>
													<?php
													}
													?>

													<?php
													if($requirements['RF']=="false")
													{
													?>
														<tr id="student_sao_table">
														    <td width="300">
														    	<label>CIT University Residency Form</label>
														    	
														    </td>
														    <td>
														    	<input type="checkbox" name="rf" value="rf">
														    </td>
														</tr>
													<?php
													}
													?>	

														<tr>
															<td colspan="2">
																<input type="hidden" name="get_userid" value="{{ $student['userid'] }}">
																<input type="hidden" name="get_sao_username" value="{{ $sao['username'] }}">
																<input type="submit" name="submit" value="Submit Requirement/s">
															</td>
														</tr>

														
												</table>
											</form>
										<?php
										}
										?>
						          	<?php
						          	}
						          	?>  
						          	<a href="{{ URL::to('/saohome') }}" class="btn btn-info" role="button">Back to Admin Home...</a>
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