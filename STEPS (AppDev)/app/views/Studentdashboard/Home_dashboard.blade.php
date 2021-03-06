<!DOCTYPE html>
<html>
  <head>
    <title>STEPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Bootstrap -->
    <link href="dashboard/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- styles -->
    <link rel="stylesheet" href="dashboard/css/styles.css">
    
    <link rel="stylesheet" href="dashboard/css/jquerycss.css" />
    <link rel="stylesheet" type="text/css" href="dashboard/css/user.css">
   	<link rel="stylesheet" type="text/css" href="dashboard/css/homedashboard.css">
   	<!-- Morris Charts CSS -->
    <link href="dashboard/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="dashboard/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="dashboard/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="dashboard/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="dashboard/css/forms.css" rel="stylesheet">
    
    
    <script src="dashboard/jquery/jquery.js"></script>
  	<script src="dashboard/jquery/jquery-ui.js"></script>


  		
  </head>
  <body>



  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 
	                 <a href="http://localhost:8000/home"><img src="dashboard/images/STEPS_header_3.png" class="img-responsive" alt="/" height="110" width="125" style="margin-top:3px;" /></a>
	              </div>
	           </div>
	           
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="http://localhost:8000/logout"><b><font color="#fdca00">Logout</font><!-- class="dropdown-toggle" data-toggle="dropdown" <b class="caret"> --></b></a>
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
	                            <li><a href="#">Home</a></li>
	                            <li><a href="#">About</a></li>
	                            <li><a href="#">Support</a></li>
	                            <li><a href="http://localhost:8000/logout">Logout</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="#"><i class="glyphicon glyphicon-calendar"></i>School Calendar</a></li>
                    </ul>
             	</div>
		  	</div>
		  	
		  	<div class="col-md-10">
		  		<div class="panel-heading" style="background-color:#89333c;">
			        <h3 class="panel-title" style="color:#fdca00">My Account</h3>
				</div>
				<script src="dashboard/js/tabs.js" ></script>

			  	<div class="content-box-large" >
				  	<div id="tabs">
						<ul>
						    <li><a href="#tabs-1">Account</a></li>
						    
						</ul>
						
						<div id="tabs-1">
							<div class="row">
						  		<div class="col-md-1">
						  			<!--no content just to provide space -->
						  		</div>
							  	<div class="col-md-10">
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
										                    	<td>{{ $student['steps_status'] }}</td>
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
							
							<div class="row" style="margin-top:10px;"> <!--row for the morris chart -->
								
								<div class="col-md-1"></div>
								<div class="col-md-10">
						        	<div class="card" style="border: 1px solid  #eee;/*box-shadow: 5px 5px 5px #eee;*/ border-radius: 5px;">
							            <ul class="nav nav-tabs" role="tablist">
							                <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab">STEPS</a></li>
							                <li role="presentation"><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Log</a></li>
							                
							            </ul>

							            <!-- Tab panes -->
							                <div class="tab-content" style="height:auto;">
							                    <div role="tabpanel" class="tab-pane active" id="home1">
							                    	<div class="row">
												    	<div class="col-md-1"></div>
												    	<div class="col-md-10" style="height:auto;">
												    	<?php
												    	if(strtolower($student['steps_status'])=="evaluation")
												    	{
														?>
												    		<div id="step1and1_div">
														        <label class="control-label" id="step_label">Step 1</label>
														        <label class="control-label" id="step_name_label">Application</label>
														        <div class="content-box-header" style="background-color:#9FF781; padding-left: 0px; color: black;">
												  					<div class="panel-title">College Evaluation</div>
																	
																	<div class="panel-options">
																		
																		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-question-sign" title="Where is it located?"></i></a>
																	</div>
													  			</div>
													  			<div class="content-box-large box-with-header" style="padding-bottom: 20px;">
													  				<table>
																	    <tr>
																	    	<td colspan="2"><h3>College of Computer Studies</h3></td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2">Please proceed to CCS Office...</td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><h3><font color="#FA5858">For Evaluation</font></h3></td>
																	    </tr>
																	    <tr>
																	    	<td width="100">Evaluator:</td>
																	    	<td><b>Mrs. Larmie Santos Feliscuzo</b></td>
																	    </tr>
																	    <tr>
																	    	<td width="100">Status:</td>
																	    	<td><b>Pending for Evaluation</b></td>
																	    </tr>
																	    <tr>
																	    	<td>&nbsp;</td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><font color="red">Note: Please bring a copy of your grades during evaluation.</font></td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><font color="green">Once you're finished with this transaction, kindly refresh this page to proceed to the next step.</font></td>
																	    </tr>
																	    <tr>
																	    	<td><a href="http://localhost:8000/home" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 1/2 of Step 1
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
														<?php
														}
														elseif(strtolower($student['steps_status'])=="requirements")
														{
														?>
															<div id="step1and2_div">
														        <label class="control-label" id="step_label">Step 1</label>
														        <label class="control-label" id="step_name_label">Application</label>
														        <div class="content-box-header" style="background-color:#9FF781; padding-left: 0px; color: black;">
												  					<div class="panel-title">Requirements</div>
																	
																	<div class="panel-options">
																		
																		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-question-sign" title="Where is it located?"></i></a>
																	</div>
													  			</div>
													  			<div class="content-box-large box-with-header" style="padding-bottom: 20px;">
													  				<h3>Transferee Documents</h3>
													  				<div class="alert alert-info" style="margin-left:-10px; margin-right:-10px;">
																	  <strong>To Do!</strong>Kindly submit the following requirements at Students Affair Office!
																	</div>

																<?php
																if($requirements['NSO']=="true" || $requirements['COT']=="true" || $requirements['GM']=="true" || $requirements['TOR']=="true" || $requirements['RF']=="true")
																{
																?>	
																	<table id="submitted_requirements_table">
																		<tr id="student_sao_table">
																		    <td width="300"><font color="#01DF01" size="3"><b>Submitted Requirements</b></font></td>
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
													  				<table id="unsubmitted_requirements_table">
													  					<tr id="student_sao_table">
																	    	<td width="300"><font color="#FA5858" size="3"><b>Please submit the following</b></font></td>
																	    </tr>

																		<?php
																		if($requirements['NSO']=="false")
																		{
																		?>
																			<tr id="student_sao_table">
																			    <td width="300">NSO Birth Certificate</td>
																			</tr>
																		<?php
																		}
																		?>

																		<?php
																		if($requirements['COT']=="false")
																		{
																		?>
																			<tr id="student_sao_table">
																			    <td width="300">Certificate of Transfer</td>
																			</tr>
																		<?php
																		}
																		?>

																		<?php
																		if($requirements['GM']=="false")
																		{
																		?>
																			<tr id="student_sao_table">
																			    <td width="300">Good Moral Certificate</td>
																			</tr>
																		<?php
																		}
																		?>

																		<?php
																		if($requirements['TOR']=="false")
																		{
																		?>
																			<tr id="student_sao_table">
																			    <td width="300">Transcript of Records (TOR)</td>
																			</tr>
																		<?php
																		}
																		?>

																		<?php
																		if($requirements['RF']=="false")
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
																	<table style="margin-top:10px;">
																		<tr>
																	    	<td width="60"><a href="http://localhost:8000/home" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 2/2 of Step 1
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
														<?php
														}
														elseif(strtolower($student['steps_status'])=="payment")
														{
														?>
															<div id="step2and1_div">
																<label class="control-label" id="step_label">Step 2</label>
														        <label class="control-label" id="step_name_label">Accounting</label>
														        <div class="content-box-header" style="background-color:#9FF781; padding-left: 0px; color: black;">
												  					<div class="panel-title">Payment</div>
																	
																	<div class="panel-options">
																		
																		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-question-sign" title="Where is it located?"></i></a>
																	</div>
													  			</div>
													  			<div class="content-box-large box-with-header" style="padding-bottom: 20px;">
													  				<table>
																	    
																	    <tr>
																	    	<td colspan="2"><h2><font color="#FA5858">Transferee Fees</font></h2></td>
																	    </tr>
																	    <tr>
																	    	<td width="150"><h4>Testing Fee</h4></td>
																	    	<td><h4><b>P300.00</b></h4></td>
																	    </tr>
																	    <tr>
																	    	<td width="150"><h4>Digital Picture</h4></td>
																	    	<td><h4><b>P50.00</b></h4></td>
																	    </tr>
																	    <tr>
																	    	<td width="100"><h3><b>Total</b></h3></td>
																	    	<td><h3><b>P350.00</b></h3></td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><h2>Your Student ID# is <b>{{ $student['studentid'] }}</b><h2></td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2" class="alert alert-info"><p><b>Take note of your Student ID#, it is required in the payment process.</b></p></td>

																	    </tr>
																	    <tr>
																	    	<td colspan="2">
																	    		<img src="dashboard/images/CITU_payment.png" class="img-responsive" alt="/">
																	    	</td>
																	    	
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><font color="green">Once you're finished with this transaction, kindly refresh this page to proceed to the next step.</font></td>
																	    </tr>
																	    <tr>
																	    	<td><a href="http://localhost:8000/home" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 1/1 of Step 2
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
														<?php
														}
														elseif(strtolower($student['steps_status'])=="identification")
														{
														?>

															
															<div id="step3and1_div">
														        <label class="control-label" id="step_label">Step 3</label>
														        <label class="control-label" id="step_name_label">OAS</label>
														        <div class="content-box-header" style="background-color:#9FF781; padding-left: 0px; color: black;">
												  					<div class="panel-title">Student Identification</div>
																	
																	<div class="panel-options">
																		
																		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-question-sign" title="Where is it located?"></i></a>
																	</div>
													  			</div>
													  			<div class="content-box-large box-with-header" style="padding-bottom: 20px;">
													  				<table>
																	    <tr>
																	    	<td colspan="2"><b>Please proceed to Office of Academic Scholarship for digital picture...</b></td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2">Located @ Main Building(Near Guidance Office)</td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2">Office Time: 08:00AM-12:00NN and 02:00PM-05:00PM</td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><h3><font color="#FA5858">Claim Your Temporary ID</font></h3></td>
																	    </tr>
																	    
																	    <tr>
																	    	<td>&nbsp;</td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><font color="red"><b>Note: Please present your payment receipt to the personel incharge.</b></font></td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><font color="green">Once you're finished with this transaction, kindly refresh this page to proceed to the next step.</font></td>
																	    </tr>
																	    <tr>
																	    	<td><a href="http://localhost:8000/home" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 1/2 of Step 3
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
														<?php
														}
														elseif($student['steps_status']=="ExamScheduling")
														{
														?>


															<div id="step3and2_div">
														        <label class="control-label" id="step_label">Step 3</label>
														        <label class="control-label" id="step_name_label">OAS</label>
														        <div class="content-box-header" style="background-color:#9FF781; padding-left: 0px; color: black;">
												  					<div class="panel-title">Entrance Exam Scheduling</div>
																	
																	<div class="panel-options">
																		
																		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-question-sign" title="Where is it located?"></i></a>
																	</div>
													  			</div>
													  			<div class="content-box-large box-with-header" style="padding-bottom: 20px;">
													  				<form method="post" action="/studentscheduleexam">
														  				<table style="margin:10px 0px 0px 0px;">
																		    <tr>
																		    	<td width="200" height="50"><b>Choose your Schedule</b></td>
																		    	<td height="50">
																		    		<select name="schedule" style="height:40px; border:1px solid #D8D8D8; border-radius:5px;">
																					    <option>03/27/17 09:00AM-11:00PM</option>
																					    <option>03/27/17 01:00PM-03:00PM</option>
																					    <option>03/27/17 03:00AM-05:00PM</option>
																					</select>
																				</td>
																		    </tr>
																		    <tr>
																		    	<td colspan="2">
																		    		<input type="hidden" name="get_userid" value="{{ $student['userid'] }}">
																		    		<input type="submit" name="submit_schedule" value="Submit Schedule" class="btn btn-success">
																		    	</td>
																		    </tr>
																		</table>
																	</form>

																	<table style="margin:10px 0px 0px 0px;">
																		<tr>
																	    	<td colspan="2"><font color="red"><b>Note: Please present your payment receipt to the personel incharge.</b></font></td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><font color="green">Once you're finished with this transaction, kindly refresh this page to proceed to the next step.</font></td>
																	    </tr>
																	    <tr>
																	    	<td><a href="http://localhost:8000/home" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 2/2 of Step 3
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
														<?php
														}
														elseif($student['steps_status']=="EntranceExam")
														{
														?>
															<div id="step4and1_div">
														        <label class="control-label" id="step_label">Step 4</label>
														        <label class="control-label" id="step_name_label">Entrance Exam</label>
														        <div class="content-box-header" style="background-color:#9FF781; padding-left: 0px; color: black;">
												  					<div class="panel-title">Entrance Examination</div>
																	
																	<div class="panel-options">
																		
																		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-question-sign" title="Where is it located?"></i></a>
																	</div>
													  			</div>
													  			<div class="content-box-large box-with-header" style="padding-bottom: 20px;">
													  				<table>
																	    <tr>
																	    	<td colspan="2">
																	    	<h2><font color="#FA5858">Your exam schedule is on</font></h2>
																	    	</td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2">
																	    		<h2><b>{{ $examschedule['schedule'] }}</b></h2>
																	    	</td>
																	    </tr>
																	    
																	    
																	    <tr>
																	    	<td>&nbsp;</td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><font color="red">Note: Be on time at the Guidance Office (Located at Ground floor CIT-University Main Building near OAS) and please bring your own pencil and eraser.</font></td>
																	    </tr>
																	    <tr>
																	    	<td colspan="2"><font color="green">Once you're finished with this transaction, kindly refresh this page to proceed to the next step.</font></td>
																	    </tr>
																	    <tr>
																	    	<td><a href="http://localhost:8000/home" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 1/1 of Step 4
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
															
														<?php
														}
														elseif($student['steps_status']=="interview")
														{
														?>
															
															<div id="step5and1_div">
														        <label class="control-label" id="step_label">Step 5</label>
														        <label class="control-label" id="step_name_label">Interview</label>
														        <div class="content-box-header" style="background-color:#9FF781; padding-left: 0px; color: black;">
												  					<div class="panel-title">Interview</div>
																	
																	<div class="panel-options">
																		
																		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-question-sign" title="Where is it located?"></i></a>
																	</div>
													  			</div>
													  			<div class="content-box-large box-with-header" style="padding-bottom: 20px;">
													  				
													  				<table>
																		<tr>
																		    <td colspan="2">
																		    	<h2><font color="#FA5858">Entrance Exam Scores</font></h2>
																		    </td>
																		</tr>
																		<tr>
																		    <td width="150"><h4>IQ Test: </h4></td>
																		    <td><h4>{{ $results['IQTest'] }}</h4></td>
																		</tr>
																		<tr>
																		    <td width="150"><h4>Math Test: </h4></td>
																		    <td><h4>{{ $results['MathTest'] }}</h4></td>
																		</tr>
																		<tr>
																		    <td width="150"><h4>English Test: </h4></td>
																		    <td><h4>{{ $results['EnglishTest'] }}</h4></td>
																		</tr>
																		    
																		<tr>
																		    <td colspan="2" class="alert alert-info"><h4>Note: Please proceed to Students Affair Office for your interview</h4></td>
																		</tr>
																		
																	</table>

																	<table style="margin:10px 0px 0px 0px">
																		<!--
																		<tr>
																			<td colspan="2" width="300" class="alert alert-info">
																				<h3>Be on time at Students Affair Office, they are waiting for you!</h3>
																			</td>
																			
																		</tr>
																		-->
																		<tr>
																		    <td colspan="2"><font color="green">Once you're finished with this transaction, kindly refresh this page to proceed to the next step.</font></td>
																		</tr>
																		<tr>
																		    <td><a href="http://localhost:8000/home" id="refresh_button">Refresh</a></td>
																		    <td>
																		    	Part 1/1 of Step 5
																		    </td>
																		</tr>
																	</table>
													  			</div>
															</div>
														<?php
														}
														elseif($student['steps_status']=="Officially Enrolled")
														{
														?>	
															
															
															<div class="jumbotron">
															    <h1>Thank You for using STEPS!</h1>
															    <p>It's our honor to serve and guide you to the right path. You may now enroll in CIT-University. Once again, thank you! :)</p>
															</div>
															<p><a href="#">CIT-University Handbook</a></p>
															<p><a href="#">CIT-University News</a></p>
															
														<?php
														}
														?>
														</div>
												    	<div class="col-md-1"></div>
												    	
												    </div><!--class row-->
										    	</div>
							                    <div role="tabpanel" class="tab-pane activity" id="profile1">
							                    	<table class="table">
													  <thead>
													    <tr>
													      <th>#</th>
													      <th>Event</th>
													      <th>Description</th>
													      <th>Date&Time</th>
													    </tr>
													  </thead>
													  <tbody>
													    <tr>
													      <th scope="row">1</th>
													      <td>Mark</td>
													      <td>Otto</td>
													      <td>@mdo</td>
													    </tr>
													    <tr>
													      <th scope="row">2</th>
													      <td>Jacob</td>
													      <td>Thornton</td>
													      <td>@fat</td>
													    </tr>
													    <tr>
													      <th scope="row">3</th>
													      <td>Larry</td>
													      <td>the Bird</td>
													      <td>@twitter</td>
													    </tr>
													  </tbody>
													</table>

							                    </div>
							                    
							                </div><!--End of tab content-->
							        </div> <!--end of class="card" -->  
						        </div>
						        <div class="col-md-1"></div>
							</div><!--end of row for morris chart -->

						</div><!--End of tabs-1 -->

						
					</div><!--End of tabs -->
				</div><!--content-box-large -->
		  </div>
		</div>
    </div>

<script type="text/javascript">
function aa(){
	alert("success function!");
				
	var table = document.getElementById("myTable");

	// Create an empty <tr> element and add it to the 1st position of the table:
	var row = table.insertRow(-1);

	// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);

	// Add some text to the new cells:
	cell1.innerHTML = "4";
	cell2.innerHTML = "www.porno.com";
	cell3.innerHTML = "madmax";
	cell4.innerHTML = "<input type='button' value='remove' name='delete' />";
}
	
</script>
    


   
    


    <script src="dashboard/js/custom.js"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="dashboard/bootstrap/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="dashboard/js/plugins/morris/raphael.min.js"></script>
    <script src="dashboard/js/plugins/morris/morris.min.js"></script>
    <script src="dashboard/js/plugins/morris/morris-data.js"></script>

    <script src="dashboard/js/plugins/flot/jquery.flot.js"></script>
    <script src="dashboard/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="dashboard/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="dashboard/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="dashboard/js/plugins/flot/flot-data.js"></script>


    <link href="dashboard/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
	<script src="dashboard/vendors/datatables/js/jquery.dataTables.min.js"></script>
	<script src="dashboard/vendors/datatables/dataTables.bootstrap.js"></script>
	<script src="dashboard/js/tables.js"></script>

	
  </body>
</html>