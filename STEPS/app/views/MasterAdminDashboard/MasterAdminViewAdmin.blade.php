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
	                 
	                 <a href="{{ URL::to('/masteradminhome') }}"><img src="admin/AdminDashboardDesign/images/STEPS_header_3.png" class="img-responsive" alt="/" height="110" width="125" style="margin-top:3px;" /></a>
	              </div>
	           </div>
	           
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="{{ URL::to('/masteradminlogout') }}"><b><font color="#fdca00">Logout</font><!-- class="dropdown-toggle" data-toggle="dropdown" <b class="caret"> --></b></a>
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
	                         <a href="{{ URL::to('/masteradminhome') }}">
	                            <i class="glyphicon glyphicon-dashboard"></i>Dashboard
	                            <span class="caret pull-right"></span>
	                         </a>
	                         <!-- Sub menu -->
	                         <ul>
	                            <li><a href="{{ URL::to('/masteradminhome') }}">Home</a></li>
	                            <li><a href="#">About</a></li>
	                            <li><a href="#">Support</a></li>
	                            <li><a href="{{ URL::to('/masteradminlogout') }}">Logout</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="#"><i class="glyphicon glyphicon-calendar"></i>School Calendar</a></li>
                    </ul>
             	</div>
		  	</div>
		  	
		  	<div class="col-md-10">
		  		<div class="panel-heading" style="background-color:#89333c;">
			        <h3 class="panel-title" style="color:#fdca00"><b>{{ $masteradmin['department'] }}</b></h3>
				</div>
				<div class="content-box-large" >
					<div class="panel panel-info" style=" border:1px solid #eee; margin:10px 0px 0px 0px; border-radius:10px;">
			            <div class="panel-heading" style="background-color:#fefefe; border:none;">
			              	<h3 class="panel-title" style="color:black"><b>{{ $admin['firstname']." ".$admin['lastname'] }}</b></h3>
			              	<div class="panel-options">
								<a href="#" data-rel="reload" style="color:black" title="Edit User" data-toggle="modal" data-target="#myModalforMasterAdminEditAdmin"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
			            </div>
			            <div class="panel-body">
						    <div class="row">
						    	
						    	<a href="#" data-rel="reload" style="color:black" title="My Avatar" data-toggle="modal" data-target="#myModalForMasterEditAdminPicture">
						    	<div class="col-md-4 col-lg-4 " align="center" >
						    		<?php
					    			if($admin['picture']=="")
					    			{
					    			?>
					    			<img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-circle img-responsive" > 
					    			<?php
					    			}
					    			else
					    			{
					    			?>
					    			<img alt="User Pic" src="<?php echo "profilepics/".$admin['picture']; ?>" class="img-circle img-responsive" > 
					    			<?php
					    			}
					    			?>
						    	</div>
						        </a>

						        <div class=" col-md-8 col-lg-8 "> 
						            <table class="table table-user-information">
						                <tbody>
						                    <tr>
						                        <td>User ID</td>
						                        <td>
						                        {{ $admin['adminid'] }}
						                        </td>
						                    </tr>
						                    <tr>
						                    	<td>Username</td>
						                    	<td>
						                    		{{ $admin['username'] }}
						                    	</td>
						                    </tr>
						                    <tr>
						                        <td>Department</td>
						                        <td>{{ $admin['department'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Position</td>
						                        <td>{{ $admin['position'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Date of Birth</td>
						                        <td>{{ $admin['birthdate'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Contact Number</td>
						                        <td>{{ $admin['contact'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Email Address</td>
						                        <td>{{ $admin['email'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Past University</td>
						                        <td>{{ $admin['pastuniversity'] }}</td>
						                    </tr>
						                    <tr>
						                        <td>Education</td>
						                        <td>{{ $admin['education'] }}</td>
						                    </tr>
						                    
						                </tbody>
						            </table>
						            
						          	<table>
						            	<tr>
					                    	<td>&nbsp;</td>
					                    </tr>
					                    <tr>
					                    	<td>
					                    		<a href="{{ URL::to('/masteradminhome') }}" class="btn btn-info" role="button">Back to Admin Page...</a> 
					                    	</td>
					                    	<td>
					                    		<form action="/masterresetadminlogincredential" method="post">
					                    			<input type="hidden" name="get_master_admin_username" value="{{ $masteradmin['username'] }}">
		 											<input type="hidden" name="get_userid" value="{{ $admin['userid'] }}">
									          		<input type="submit" name="resetaccountlogin" value="Reset Login Credentials" class="btn btn-success" onclick="return confirm('Reset login credentials for {{ $admin->firstname.' '.$admin->lastname }}?')">
									          	</form>
					                    	</td>
					                    </tr>
						            </table>  
						        </div><!-- col-md-8 col-lg-8-->
						    </div><!--class row-->
						    
						</div><!--panel-body-->
					</div><!--panel panel-info-->

					
				</div>
				  	
		  	</div>
		</div>
    </div>

<div class="modal fade" id="myModalForMasterEditAdminPicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
	    			if($admin['picture']=="")
	    			{
	    			?>
	    			<img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-rounded img-responsive" style="margin:0px auto 0px auto;"> 
	    			<?php
	    			}
	    			else
	    			{
	    			?>
	    			<img alt="User Pic" src="<?php echo "profilepics/".$admin['picture']; ?>" class="img-rounded img-responsive" style="margin:0px auto 0px auto;"> 
	    			<?php
	    			}
	    			?>
		 		</div>
		 		<div style="margin-top:10px;">
		 			{{ Form::open(array('url' => '/masteradmineditadminavatarpost', 'enctype' => 'multipart/form-data')) }}
		 				<table>
		 					<tr>
		 						<td><label>Change Avatar</label></td>
		 						<td>
		 							<input type="file" name="file" required="">
		 							<input type="hidden" name="get_master_admin_username" value="{{ $masteradmin['username'] }}">
		 							<input type="hidden" name="get_userid" value="{{ $admin['userid'] }}">
		 							<input type="hidden" name="get_position" value="{{ $admin['position'] }}">
		 							<input type="hidden" name="get_department" value="{{ $admin['department'] }}">
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
<div class="modal fade" id="myModalforMasterAdminEditAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<form method="post" action="/masteradmineditadminpost">
  	<div class="modal-dialog" role="document">
    	
    	<div class="modal-content">
    		
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h4 class="modal-title" id="myModalLabel">Edit Administrator Profile</h4>
      		</div>
      		
		    <div class="modal-body">
		      	
					<div class="form-group">
					    <label for="exampleInputEmail1">First Name</label>
					    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John" required="" value="{{ $admin['firstname'] }}">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Middle Name</label>
					    <input type="text" name="middlename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Moe" required="" value="{{ $admin['middlename'] }}">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Last Name</label>
					    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Doe" required="" value="{{ $admin['lastname'] }}">
					    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text" name="username" class="form-control" id="uname" aria-describedby="emailHelp" placeholder="johndoe123" required="" value="{{ $admin['username'] }}">
					    <b><span id="result"></span></b>
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
					    <label for="exampleInputEmail1">Birthdate</label>
					    <input type="text" name="editbirthdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Los Angeles California, USA" required="" value="{{ $admin['birthdate'] }}">
					    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Email Address</label>
					    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="johnmoedoe@mail.com" required="" value="{{ $admin['email'] }}">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Contact</label>
					    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="101223487553" required="" value="{{ $admin['contact'] }}">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Department</label>
						<select id="department" name="department" class="birthfield" required="">
							<option value="" selected="">Choose...</option>
					        <option value="College of Computer Studies" <?php if($admin['department']=="College of Computer Studies"){ echo 'selected=""'; } ?>>College of Computer Studies</option>
                            <option value="College of Engineering" <?php if($admin['department']=="College of Engineering"){ echo 'selected=""'; } ?>>College of Engineering</option>
                            <option value="College of Nursing" <?php if($admin['department']=="College of Nursing"){ echo 'selected=""'; } ?>>College of Nursing</option>
                            <option value="Student Affairs Office" <?php if($admin['department']=="Student Affairs Office"){ echo 'selected=""'; } ?>>Student Affairs Office</option>
                            <option value="Office of Academic Scholarship" <?php if($admin['department']=="Office of Academic Scholarship"){ echo 'selected=""'; } ?>>Office of Academic Scholarship</option>
                            <option value="Guidance Office" <?php if($admin['department']=="Guidance Office"){ echo 'selected=""'; } ?>>Guidance Office</option>
                            <option value="ETO" <?php if($admin['department']=="ETO"){ echo 'selected=""'; } ?>>ETO</option>
                            <option value="STEPS" <?php if($admin['department']=="STEPS"){ echo 'selected=""'; } ?>>STEPS</option>
					    </select>
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">Position</label>
					    <select name="position" class="birthfield">
					    	<option value="">Choose One</option>
					    	<option value="College Dean" <?php if($admin['position']=="College Dean"){ echo 'selected=""'; } ?>>College Dean</option>
                            <option value="College Chairperson" <?php if($admin['position']=="College Chairperson"){ echo 'selected=""'; } ?>>College Chairperson</option>
                            <option value="Faculty" <?php if($admin['position']=="Faculty"){ echo 'selected=""'; } ?>>Faculty</option>
                            <option value="Department Head" <?php if($admin['position']=="Department Head"){ echo 'selected=""'; } ?>>Department Head</option>
                            <option value="Department Assistant" <?php if($admin['position']=="Department Assistant"){ echo 'selected=""'; } ?>>Department Assistant</option>
                            <option value="Department Secretary" <?php if($admin['position']=="Department Secretary"){ echo 'selected=""'; } ?>>Department Secretary</option>
                            <option value="Working Staff" <?php if($admin['position']=="Working Staff"){ echo 'selected=""'; } ?>>Working Staff</option>
                            <option value="Master Administrator" <?php if($admin['position']=="Master Administrator"){ echo 'selected=""'; } ?>>Master Administrator</option>
                            <option value="Publisher" <?php if($admin['position']=="Publisher"){ echo 'selected=""'; } ?>>Publisher</option>
					    </select>
					</div>
					
					<div class="form-group">
					    <label for="exampleInputEmail1">Past University</label>
					    <input type="text" name="pastuniversity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="" value="{{ $admin['pastuniversity'] }}">
					    <small><font color="#85363c">(If many, please separate using comma ",")</font></small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Education Attained</label>
					    <input type="text" name="education" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="" value="{{ $admin['education'] }}">
					    <small><font color="#85363c">(If many, please separate using comma ",")</font></small>
					</div>
			</div>

		    <div class="modal-footer">
		    	<input type="hidden" name="master_admin_username" value="{{ $masteradmin['username'] }}">
		    	<input type="hidden" name="get_userid" value="{{ $admin['userid'] }}">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <input type="submit" class="btn btn-primary" value="Edit Profile" name="editadmin">
		    </div>
		    
    	</div>
    </div>
  	</form>
</div>    


<!--End of MasterAdminEditAdmin Modal-->


    <script src="admin/AdminDashboardDesign/js/custom.js"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/AdminDashboardDesign/bootstrap/js/bootstrap.min.js"></script>

    <link href="admin/AdminDashboardDesign/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
	<script src="admin/AdminDashboardDesign/vendors/datatables/js/jquery.dataTables.min.js"></script>
	<script src="admin/AdminDashboardDesign/vendors/datatables/dataTables.bootstrap.js"></script>
	<script src="admin/AdminDashboardDesign/js/tables.js"></script>



	
  </body>
</html>