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
   	
    <!-- Custom Fonts -->
    <link href="dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="dashboard/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="dashboard/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="dashboard/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="dashboard/css/forms.css" rel="stylesheet">
    
    
    <script src="dashboard/jquery/jquery.js"></script>
  	<script src="dashboard/jquery/jquery-ui.js"></script>
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
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
		var pass2=document.getElementById("password2").value;
		var pass1=document.getElementById("password1").value;
		if(pass1!=pass2)
			document.getElementById("password2").setCustomValidity("Both Passwords Don't Match");
		else
			document.getElementById("password2").setCustomValidity('');	 
		//empty string means no validation error
		}
	</script>
  		
  </head>
  <body>



  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 
	                 <a href="{{ URL::to('/home') }}"><img src="dashboard/images/STEPS_header_3.png" class="img-responsive" alt="/" height="110" width="125" style="margin-top:3px;" /></a>
	              </div>
	           </div>
	           
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="{{ URL::to('/logout') }}"><b><font color="#fdca00">Logout</font><!-- class="dropdown-toggle" data-toggle="dropdown" <b class="caret"> --></b></a>
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
	                         <a href="{{ URL::to('/home') }}">
	                            <i class="glyphicon glyphicon-dashboard"></i>Dashboard
	                            <span class="caret pull-right"></span>
	                         </a>
	                         <!-- Sub menu -->
	                         <ul>
	                            <li><a href="#">Home</a></li>
	                            <li><a href="#">About</a></li>
	                            <li><a href="#">Support</a></li>
	                            <li><a href="#">Settings</a></li>
	                            <li><a href="{{ URL::to('/logout') }}">Logout</a></li>
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
							              	<h2 class="panel-title" style="color:black;"><b>{{ $student['firstname']." ".$student['lastname'] }} </b></h2>
							              	<div class="panel-options">
							              		<a href="#" data-rel="reload" style="color:black" title="View Profile"><i class="glyphicon glyphicon-user"></i></a>
												<a href="#" data-rel="reload" style="color:black" title="Edit Profile" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-cog"></i></a>
											</div>
							            </div>
							            <div class="panel-body">
										    <div class="row">
										    
										    	<a href="#" data-rel="reload" style="color:black" title="My Avatar" data-toggle="modal" data-target="#myModalForPicture">
										    		<div class="col-md-4 col-lg-4 " align="center"> 
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
										        </a>

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
	    			if($student['picture']=="")
	    			{
	    			?>
	    			<img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-rounded img-responsive" style="margin:0px auto 0px auto;"> 
	    			<?php
	    			}
	    			else
	    			{
	    			?>
	    			<img alt="User Pic" src="<?php echo "profilepics/".$student['picture']; ?>" class="img-rounded img-responsive" style="margin:0px auto 0px auto;"> 
	    			<?php
	    			}
	    			?>
		    		
		 		</div>
		 		<div style="margin-top:10px;">
		 			{{ Form::open(array('url' => '/edittransfereeavatar', 'enctype' => 'multipart/form-data')) }}
		 				<table>
		 					<tr>
		 						<td><label>Change Avatar</label></td>
		 						<td>
		 							<input type="file" name="file" required="">
		 							<input type="hidden" name="get_userid" value="{{ $student['userid'] }}">
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h3 class="modal-title" id="myModalLabel">Edit Profile</h3>
      		</div>
      		<form method="post" action="/edittransfereeprofile">
		    <div class="modal-body">
		      	
					<div class="form-group">
					    <label for="exampleInputEmail1">First Name</label>
					    <input type="text" name="editfirstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John" required="" value="{{ $student['firstname'] }}">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Middle Name</label>
					    <input type="text" name="editmiddlename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Moe" required="" value="{{ $student['middlename'] }}">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Last Name</label>
					    <input type="text" name="editlastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Doe" required="" value="{{ $student['lastname'] }}">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">User Name</label>
					    <input type="text" name="editusername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="johndoe" required="" value="{{ $student['username'] }}">
					</div>

					<div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="editpassword" class="form-control" id="password1" placeholder="Password1234*">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Confirm Password</label>
					    <input type="password" name="editcpassword" class="form-control" id="password2" placeholder="Password1234*">
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">Email Address</label>
					    <input type="text" name="editemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="johnmoedoe@mail.com" required="" value="{{ $student['email'] }}">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					
					<div class="form-group">
					    <label for="exampleInputEmail1">Birth Date</label>
					    <input type="text" name="editbirthdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Los Angeles California, USA" required="" value="{{ $student['birthdate'] }}">
					    
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">Birth Place</label>
					    <input type="text" name="editbirthplace" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Los Angeles California, USA" required="" value="{{ $student['birthplace'] }}">
					    
					</div>
					<div class="form-group">
						<table>
							<tr>
								<td>
									{{ Form::label('gender-label', 'Gender', array('class' => '')) }}
			                        <select name="editgender" class="birthfield" required="">
			                        	<option value="Male"  <?php if($student['gender']=="Male"){ echo 'selected=""'; } ?>>Male</option>
										<option value="Female" <?php if($student['gender']=="Female"){ echo 'selected=""'; } ?>>Female</option>
									</select>
								</td>
								<td style="width:100px;">
									&nbsp;
								</td>
								<td>
									<label for="exampleInputEmail1">Civil Status</label>
									<select name="editcivilstatus" class="birthfield" required="">
			                        	<option value="Single" <?php if($student['civilstatus']=="Single"){ echo 'selected=""'; } ?>>Single</option>
										<option value="Married" <?php if($student['civilstatus']=="Married"){ echo 'selected=""'; } ?>>Married</option>
										<option value="Separated" <?php if($student['civilstatus']=="Separated"){ echo 'selected=""'; } ?>>Separated</option>
										<option value="Widowed" <?php if($student['civilstatus']=="Widowed"){ echo 'selected=""'; } ?>>Widowed</option>
										<option value="Divorced" <?php if($student['civilstatus']=="Divorced"){ echo 'selected=""'; } ?>>Divorced</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
					
					<div class="form-group">
					    <label for="exampleInputEmail1">Contact</label>
					    <input type="text" name="editcontact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="101223487553" required="" value="{{ $student['contact'] }}">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Home Address</label>
					    <input type="text" name="edithomeaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="" value="{{ $student['homeaddress'] }}">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Provincial Address</label>
					    <input type="text" name="editprovincialaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="" value="{{ $student['provincialaddress'] }}">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Term Entered</label>
					    <input type="text" name="edityear-entered" class="semester-class" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="School Year (ex. 2017)" style="border-radius:2px;" required="" value="{{ $student['schoolyear'] }}">
					    <select name="editsemester" class="semester-class" required="">
			                <option value="1st Semester" <?php if($student['semester']=="1st Semester"){ echo 'selected=""'; } ?>>1st Semester</option>
							<option value="2nd Semester" <?php if($student['semester']=="2nd Semester"){ echo 'selected=""'; } ?>>2nd Semester</option>
							<option value="Summer" <?php if($student['semester']=="Summer"){ echo 'selected=""'; } ?>>Summer</option>
							
						</select>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Course To Enroll</label>
					    <select name="edittocourse" class="semester-class" style="width:100%;" required="">
					    	<option value="" selected="">Choose a course</option>
			                <option value="Bachelors of Science in Computer Science" <?php if($transferee['tocourse']=="Bachelors of Science in Computer Science"){ echo 'selected=""'; } ?>>Bachelors of Science in Computer Science</option>
							<option value="Bachelors of Science in Information Technology" <?php if($transferee['tocourse']=="Bachelors of Science in Information Technology"){ echo 'selected=""'; } ?>>Bachelors of Science in Information Technology</option>
							
						</select>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Previous Course</label>
					    <select name="editfromcourse" class="semester-class" style="width:100%;" required="">
					    	<option value="" selected="">Choose a course</option>
			                <option value="Bachelors of Science in Computer Science" <?php if($transferee['fromcourse']=="Bachelors of Science in Computer Science"){ echo 'selected=""'; } ?>>Bachelors of Science in Computer Science</option>
							<option value="Bachelors of Science in Information Technology" <?php if($transferee['fromcourse']=="Bachelors of Science in Information Technology"){ echo 'selected=""'; } ?>>Bachelors of Science in Information Technology</option>
						</select>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Previous School</label>
					    <input type="text" name="editfromschool" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="University of California Los Angeles" required="" value="{{ $transferee['fromschool'] }}">
					    <small id="emailHelp" class="form-text text-muted">Kindly state the name of your previous school</small>
					</div>
				
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <input type="hidden" name="get_userid" value="{{ $student['userid'] }}">
		        <input type="submit" class="btn btn-primary" value="Save" name="editstudentprofilebutton">
		    </div>
		    </form>
    	</div>
  	</div>
</div>
<!--End of Modal for registration -->							
							<div class="row" style="margin-top:10px;"> <!--row for the morris chart -->
								
								<div class="col-md-1"></div>
								<div class="col-md-10">
						        	<div class="card" style="border: 1px solid  #eee;/*box-shadow: 5px 5px 5px #eee;*/ border-radius: 5px;">
							            <ul class="nav nav-tabs" role="tablist">
							                <!--
							                <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab">STEPS</a></li>
											-->
							                <?php if($student['step_number']==1 OR 1<=$student['step_number'] AND $student['step_number']<=8){ ?><li <?php if($student['step_number']==1){ echo 'class="active"'; } else{ echo  'style="background-color: #52be80;"'; } ?>><a data-toggle="tab" href="#step1">STEP 1</a></li><?php } ?>

										    <?php if($student['step_number']==2 OR 2<=$student['step_number'] AND $student['step_number']<=8){ ?><li <?php if($student['step_number']==2){ echo 'class="active"'; } if($student['step_number']!=2 AND $requirements['NSO']=="true" AND $requirements['COT']=="true" AND $requirements['GM']=="true" AND $requirements['TOR']=="true" AND $requirements['RF']=="true"){ echo  'style="background-color: #52be80;"'; }else{ echo 'style="background-color: #cd6155;"'; } ?>><a data-toggle="tab" href="#step2">STEP 2</a></li><?php } ?>

										    <?php if($student['step_number']==3 OR 3<=$student['step_number'] AND $student['step_number']<=8){ ?><li <?php if($student['step_number']==3){ echo 'class="active"'; } else{ echo  'style="background-color: #52be80;"'; } ?>><a data-toggle="tab" href="#step3">STEP 3</a></li><?php } ?>

										    <?php if($student['step_number']==4 OR 4<=$student['step_number'] AND $student['step_number']<=8){ ?><li <?php if($student['step_number']==4){ echo 'class="active"'; } else{ echo  'style="background-color: #52be80;"'; } ?>><a data-toggle="tab" href="#step4">STEP 4</a></li><?php } ?>

										    <?php if($student['step_number']==5 OR 5<=$student['step_number'] AND $student['step_number']<=8){ ?><li <?php if($student['step_number']==5){ echo 'class="active"'; } else{ echo  'style="background-color: #52be80;"'; } ?>><a data-toggle="tab" href="#step5">STEP 5</a></li><?php } ?>

										    <?php if($student['step_number']==6 OR 6<=$student['step_number'] AND $student['step_number']<=8){ ?><li <?php if($student['step_number']==6){ echo 'class="active"'; } else{ echo  'style="background-color: #52be80;"'; } ?>><a data-toggle="tab" href="#step6">STEP 6</a></li><?php } ?>

										    <?php if($student['step_number']==7 OR 7<=$student['step_number'] AND $student['step_number']<=8){ ?><li <?php if($student['step_number']==7){ echo 'class="active"'; } else{ echo  'style="background-color: #52be80;"'; } ?>><a data-toggle="tab" href="#step7">STEP 7</a></li><?php } ?>

										    <?php if($student['step_number']==8 OR 8<=$student['step_number'] AND $student['step_number']<=8){ ?><li <?php if($student['step_number']==8){ echo 'class="active"'; } ?>><a data-toggle="tab" href="#step8">STEP 8</a></li><?php } ?>
							            </ul>

							            <!-- Tab panes -->
							                <div class="tab-content" style="height:auto;">

							                	<?php 
											    if($student['step_number']==1 OR 1<$student['step_number'] AND $student['step_number']<=8)
											    {
											    ?>
											    <?php if($student['step_number']==1){ ?><div id="step1" class="tab-pane active"> <?php } else{ ?> <div id="step1" class="tab-pane fade"> <?php } ?>
											    	<div class="row">
														<div class="col-md-1"></div>
														<div class="col-md-10" style="height:auto;">
														
															<div id="step1and1_div">
														        <label class="control-label" id="step_label">Step 1</label>
														        <label class="control-label" id="step_name_label">Evaluation</label>
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
																	    	<td><a href="{{ URL::to('/home') }}" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 1/2 of Step 1
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
														</div>
														<div class="col-md-1"></div>			
											    	</div>
											    </div>
											    <?php
											    }
											    ?>


											    <?php 
											    if($student['step_number']==2 OR 1<$student['step_number'] AND $student['step_number']<=8)
											    {
											    ?>
											    <?php if($student['step_number']==2){ ?><div id="step2" class="tab-pane active"> <?php } else{ ?> <div id="step2" class="tab-pane fade"> <?php } ?>
											      	<div class="row">
											      		<div class="col-md-1"></div>
											      		<div class="col-md-10">
											      			<div id="step1and2_div">
														        <label class="control-label" id="step_label">Step 2</label>
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
																	    	<td width="60"><a href="{{ URL::to('/home') }}" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 2/2 of Step 1
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
											      		</div>
											      		<div class="col-md-1"></div>
											      		
											      	</div>
											    </div> <!--End of div id="step2"-->
											    <?php
											    }
											    ?>


											    <?php 
											    if($student['step_number']==3 OR 1<$student['step_number'] AND $student['step_number']<=8)
											    {
											    ?>
											    <?php if($student['step_number']==3){ ?><div id="step3" class="tab-pane active"> <?php } else{ ?> <div id="step3" class="tab-pane fade"> <?php } ?>
											    	<div class="row">
											    		<div class="col-md-1"></div>
											    		<div class="col-md-10">
											    			<div id="step2and1_div">
																<label class="control-label" id="step_label">Step 3</label>
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
																	    	<td><a href="{{ URL::to('/home') }}" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 1/1 of Step 2
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
											    		</div>
											    		<div class="col-md-1"></div>
											    	</div>
											    </div>
											    <?php
											    }
											    ?>


											    <?php 
											    if($student['step_number']==4 OR 1<$student['step_number'] AND $student['step_number']<=8)
											    {
											    ?>
											    <?php if($student['step_number']==4){ ?><div id="step4" class="tab-pane active"> <?php } else{ ?> <div id="step4" class="tab-pane fade"> <?php } ?>
											    	<div class="row">
											    		<div class="col-md-1"></div>
											    		<div class="col-md-10">
											    			<div id="step3and1_div">
														        <label class="control-label" id="step_label">Step 4</label>
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
																	    	<td><a href="{{ URL::to('/home') }}" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 1/2 of Step 3
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
											    		</div>
											    		<div class="col-md-1"></div>
											    		
											    	</div>
											    </div>
											    <?php
											    }
											    ?>


											    <?php 
											    if($student['step_number']==5 OR 1<$student['step_number'] AND $student['step_number']<=8)
											    {
											    ?>
											    <?php if($student['step_number']==5){ ?><div id="step5" class="tab-pane active"> <?php } else{ ?> <div id="step5" class="tab-pane fade"> <?php } ?>
											    	<div class="row">
											    		<div class="col-md-1"></div>
											    		<div class="col-md-10">
													    	<div id="step3and2_div">
														        <label class="control-label" id="step_label">Step 5</label>
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
																		    		<?php
																		    		if($examschedule['schedule']=="")
																		    		{
																		    		?>
																		    		<select name="schedule" style="height:40px; border:1px solid #D8D8D8; border-radius:5px;">
																					    <?php
																		    			foreach($examschedulelist as $examsched)
																		    			{
																		    			?>
																		    			<option value="{{ $examsched->scheduleid }}"><?php echo $examsched->schedule_day." ".$examsched->schedule_date." ".$examsched->schedule_time; ?></option>
																		    			<?php
																		    			}
																		    			?>
																					</select>
																					<?php
																					}
																					else
																					{
																					?>
																						<b>{{ $examschedule['schedule'] }}</b>
																					<?php
																					}
																					?>
																				</td>
																		    </tr>
																		    <?php
																		    if($examschedule['schedule']=="")
																		    {
																		    ?>
																		    <tr>
																		    	<td colspan="2">
																		    		<input type="hidden" name="get_userid" value="{{ $student['userid'] }}">
																		    		<input type="submit" name="submit_schedule" value="Submit Schedule" class="btn btn-success">
																		    	</td>
																		    </tr>
																		    <?php
																			}
																		    ?>
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
																	    	<td><a href="{{ URL::to('/home') }}" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 2/2 of Step 3
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
														</div>
														<div class="col-md-1"></div>
													</div>
												</div>
											    <?php
											    }
											    ?>


											    <?php 
											    if($student['step_number']==6 OR 1<$student['step_number'] AND $student['step_number']<=8)
											    {
											    ?>
											    <?php if($student['step_number']==6){ ?><div id="step6" class="tab-pane active"> <?php } else{ ?> <div id="step6" class="tab-pane fade"> <?php } ?>
											    	<div class="row">
											    		<div class="col-md-1"></div>
											    		<div class="col-md-10">
											    			<div id="step4and1_div">
														        <label class="control-label" id="step_label">Step 6</label>
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
																	    	<td><a href="{{ URL::to('/home') }}" id="refresh_button">Refresh</a></td>
																	    	<td>
																	    		Part 1/1 of Step 4
																	    	</td>
																	    </tr>
																	</table>
																</div>
															</div>
											    		</div>
											    		<div class="col-md-1"></div>
											    		
											    	</div>
											    </div>
											    <?php
											    }
											    ?>


											    <?php 
											    if($student['step_number']==7 OR 1<$student['step_number'] AND $student['step_number']<=8)
											    {
											    ?>
											    <?php if($student['step_number']==7){ ?><div id="step7" class="tab-pane active"> <?php } else{ ?> <div id="step7" class="tab-pane fade"> <?php } ?>
											    	<div class="row">
											    		<div class="col-md-1"></div>
											    		<div class="col-md-10">
											    			<div id="step5and1_div">
														        <label class="control-label" id="step_label">Step 7</label>
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
																		    <td><a href="{{ URL::to('/home') }}" id="refresh_button">Refresh</a></td>
																		    <td>
																		    	Part 1/1 of Step 5
																		    </td>
																		</tr>
																	</table>
													  			</div>
															</div>
											    		</div>
											    		<div class="col-md-1"></div>
											    		
											    	</div>
											    </div>
											    <?php
											    }
											    ?>


											    <?php 
											    if($student['step_number']==8 OR 1<$student['step_number'] AND $student['step_number']<=8)
											    {
											    ?>
											    <?php if($student['step_number']==8){ ?><div id="step8" class="tab-pane active"> <?php } else{ ?> <div id="step8" class="tab-pane fade"> <?php } ?>
											    	<div class="row">
											    		<div class="col-md-1"></div>
											    		<div class="col-md-10">
											    			<div class="jumbotron">
															    <h1>Thank You for using STEPS!</h1>
															    <p>It's our honor to serve and guide you to the right path. You may now enroll in CIT-University. Once again, thank you! :)</p>
															</div>
															<p><a href="#">CIT-University Handbook</a></p>
															<p><a href="#">CIT-University News</a></p>
											    		</div>
											    		<div class="col-md-1"></div>
											    	</div>
											    </div>
											    <?php
											    }
											    ?>
												
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

	<link href="dashboard/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
	<script src="dashboard/vendors/datatables/js/jquery.dataTables.min.js"></script>
	<script src="dashboard/vendors/datatables/dataTables.bootstrap.js"></script>
	<script src="dashboard/js/tables.js"></script>

	
  </body>
</html>