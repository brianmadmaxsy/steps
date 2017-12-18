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
	                            <li><a href="#">Settings</a></li>
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
							              	<h2 class="panel-title" style="color:black;"><b>{{ $student['firstname']." ".$student['lastname'] }} </b></h2>
							              	<div class="panel-options">
							              		<a href="#" data-rel="reload" style="color:black" title="View Profile"><i class="glyphicon glyphicon-user"></i></a>
												<a href="#" data-rel="reload" style="color:black" title="Edit Profile" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-cog"></i></a>
											</div>
							            </div>
							            <div class="panel-body">
										    <div class="row">
										    
										    	<div class="col-md-4 col-lg-4 " align="center" > <img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-circle img-responsive" > </div>
										        
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
										                        <td>{{ $freshmen['tocourse'] }}</td>
										                    </tr>
										                    <tr>
										                        <td>Secondary School</td>
										                        <td>{{ $freshmen['highschool'] }}</td>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
      		</div>
      		<form method="post" action="/editfreshmenprofile">
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
			                <option value="Bachelors of Science in Computer Science" <?php if($freshmen['tocourse']=="Bachelors of Science in Computer Science"){ echo 'selected=""'; } ?>>Bachelors of Science in Computer Science</option>
							<option value="Bachelors of Science in Information Technology" <?php if($freshmen['tocourse']=="Bachelors of Science in Information Technology"){ echo 'selected=""'; } ?>>Bachelors of Science in Information Technology</option>
							
						</select>
					</div>
					
					<div class="form-group">
					    <label for="exampleInputEmail1">Secondary School</label>
					    <input type="text" name="edithighschool" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="University of California Los Angeles" required="" value="{{ $freshmen['highschool'] }}">
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