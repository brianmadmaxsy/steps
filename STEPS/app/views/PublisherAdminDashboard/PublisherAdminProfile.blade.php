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
    
    

  	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="admin/AdminDashboardDesign/jquery/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js"></script>

  </head>
  <body>



  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 
	                 <a href="{{ URL::to('/publisherhome') }}"><img src="admin/AdminDashboardDesign/images/STEPS_header_3.png" class="img-responsive" alt="/" height="110" width="125" style="margin-top:3px;" /></a>
	              </div>
	           </div>
	           
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="{{ URL::to('/publisherlogout') }}"><b><font color="#fdca00">Logout</font><!-- class="dropdown-toggle" data-toggle="dropdown" <b class="caret"> --></b></a>
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
	                    <li><a href="{{ URL::to('/publisherhome') }}"><i class="glyphicon glyphicon-calendar"></i>School Calendar</a></li>
	                    <li><a href="{{ URL::to('/publishernews') }}"><i class="fa fa-newspaper-o"></i>News</a></li>
	                    <li><a href="{{ URL::to('/publisherprofile') }}"><i class="glyphicon glyphicon-dashboard"></i>Profile</a></li>
                    </ul>
             	</div>

		  	</div>
		  	
		  	<div class="col-md-10">
		  		<div class="panel-heading" style="background-color:#89333c;">
		  			<h3 class="panel-title" style="color:#fdca00"><b>Profile</b></h3>
				</div>
				
				<div class="content-box-large" >

					<div class="panel panel-info" style=" border:1px solid #eee; margin:10px 0px 0px 0px; border-radius:10px;">
						
						<div class="panel-heading" style="background-color:#fefefe; border:none;">
			              	<h2 class="panel-title" style="color:black;"><b>{{ $profile['firstname']." ".$profile['middlename']." ".$profile['lastname'] }} </b></h2>
			              	<div class="panel-options">
			              		<a href="#" data-rel="reload" style="color:black" title="View Profile"><i class="glyphicon glyphicon-user"></i></a>
								<a href="#" data-rel="reload" style="color:black" title="Edit User" data-toggle="modal" data-target="#myModalforEditPUBLISHERprofile"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
			              	
			            </div>

						<div class="panel-body">
							<div class="row">
								<a href="#" data-rel="reload" style="color:black" title="My Avatar" data-toggle="modal" data-target="#myModalForPicture">
								<div class="col-md-3 col-lg-3" align="center">
									<?php
					    			if($profile['picture']=="")
					    			{
					    			?>
					    			<img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-circle img-responsive" > 
					    			<?php
					    			}
					    			else
					    			{
					    			?>
					    			<img alt="User Pic" src="<?php echo "profilepics/".$profile['picture']; ?>" class="img-circle img-responsive" > 
					    			<?php
					    			}
					    			?>
								</div>
								</a>

								<div class="col-md-9 col-lg-9">
									<table class="table table-user-information">
										<tbody>
											<tr>
												<td>Email</td>
												<td>{{ $profile['email'] }}</td>
											</tr>

											<tr>
												<td>Position</td>
												<td>{{ $profile['position'] }}</td>
											</tr>

											<tr>
												<td>Department</td>
												<td>{{ $profile['department'] }}</td>
											</tr>

											<tr>
												<td>Date of Birth</td>
												<td>{{ $profile['birthdate'] }}</td>
											</tr>


											<tr>
												<td>Contact Number</td>
												<td>{{ $profile['contact'] }}</td>
											</tr>
											<tr>
												<td>Education</td>
												<td>{{ $profile['education'] }}</td>
											</tr>

											<tr>
												<td>Previous School</td>
												<td>{{ $profile['pastuniversity'] }}</td>
											</tr>


										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
		  </div>
		</div>
    </div>

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
	    			if($profile['picture']=="")
	    			{
	    			?>
	    			<img alt="User Pic" src="dashboard/images/userpc.jpg" class="img-rounded img-responsive" style="margin:0px auto 0px auto;"> 
	    			<?php
	    			}
	    			else
	    			{
	    			?>
	    			<img alt="User Pic" src="<?php echo "profilepics/".$profile['picture']; ?>" class="img-rounded img-responsive" style="margin:0px auto 0px auto;"> 
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
		 							<input type="hidden" name="get_userid" value="{{ $profile['userid'] }}">
		 							<input type="hidden" name="get_position" value="{{ $profile['position'] }}">
		 							<input type="hidden" name="get_department" value="{{ $profile['department'] }}">
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

<div class="modal fade" id="myModalforEditPUBLISHERprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<form method="post" action="/editadminprofile">
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
					    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John" required="" value="{{ $profile['firstname'] }}">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Middle Name</label>
					    <input type="text" name="middlename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Moe" required="" value="{{ $profile['middlename'] }}">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Last Name</label>
					    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Doe" required="" value="{{ $profile['lastname'] }}">
					    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">User Name</label>
					    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="johndoe" required="" value="{{ $profile['username'] }}">
					    
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
					    <input type="text" name="editbirthdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Los Angeles California, USA" required="" value="{{ $profile['birthdate'] }}">
					    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Email Address</label>
					    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="johnmoedoe@mail.com" required="" value="{{ $profile['email'] }}">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Contact</label>
					    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="101223487553" required="" value="{{ $profile['contact'] }}">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Department</label>
						<select id="department" name="department" class="birthfield" required="">
							<option value="" selected="">Choose...</option>
					        <option value="College of Computer Studies" <?php if($profile['department']=="College of Computer Studies"){ echo 'selected=""'; } ?>>College of Computer Studies</option>
                            <option value="College of Engineering" <?php if($profile['department']=="College of Engineering"){ echo 'selected=""'; } ?>>College of Engineering</option>
                            <option value="College of Nursing" <?php if($profile['department']=="College of Nursing"){ echo 'selected=""'; } ?>>College of Nursing</option>
                            <option value="Student Affairs Office" <?php if($profile['department']=="Student Affairs Office"){ echo 'selected=""'; } ?>>Student Affairs Office</option>
                            <option value="Office of Academic Scholarship" <?php if($profile['department']=="Office of Academic Scholarship"){ echo 'selected=""'; } ?>>Office of Academic Scholarship</option>
                            <option value="Guidance Office" <?php if($profile['department']=="Guidance Office"){ echo 'selected=""'; } ?>>Guidance Office</option>
                            <option value="ETO" <?php if($profile['department']=="ETO"){ echo 'selected=""'; } ?>>ETO</option>
                            <option value="STEPS" <?php if($profile['department']=="STEPS"){ echo 'selected=""'; } ?>>STEPS</option>
					    </select>
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">Position</label>
					    <select name="position" class="birthfield">
					    	<option value="">Choose One</option>
					    	<option value="College Dean" <?php if($profile['position']=="College Dean"){ echo 'selected=""'; } ?>>College Dean</option>
                            <option value="College Chairperson" <?php if($profile['position']=="College Chairperson"){ echo 'selected=""'; } ?>>College Chairperson</option>
                            <option value="Faculty" <?php if($profile['position']=="Faculty"){ echo 'selected=""'; } ?>>Faculty</option>
                            <option value="Department Head" <?php if($profile['position']=="Department Head"){ echo 'selected=""'; } ?>>Department Head</option>
                            <option value="Department Assistant" <?php if($profile['position']=="Department Assistant"){ echo 'selected=""'; } ?>>Department Assistant</option>
                            <option value="Department Secretary" <?php if($profile['position']=="Department Secretary"){ echo 'selected=""'; } ?>>Department Secretary</option>
                            <option value="Working Staff" <?php if($profile['position']=="Working Staff"){ echo 'selected=""'; } ?>>Working Staff</option>
                            <option value="Master Administrator" <?php if($profile['position']=="Master Administrator"){ echo 'selected=""'; } ?>>Master Administrator</option>
                            <option value="Publisher" <?php if($profile['position']=="Publisher"){ echo 'selected=""'; } ?>>Publisher</option>
					    </select>
					</div>
					
					<div class="form-group">
					    <label for="exampleInputEmail1">Past University</label>
					    <input type="text" name="pastuniversity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="" value="{{ $profile['pastuniversity'] }}">
					    <small><font color="#85363c">(If many, please separate using comma ",")</font></small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Education Attained</label>
					    <input type="text" name="education" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="" value="{{ $profile['education'] }}">
					    <small><font color="#85363c">(If many, please separate using comma ",")</font></small>
					</div>
			</div>

		    <div class="modal-footer">
		    	<input type="hidden" name="get_userid" value="{{ $profile['userid'] }}">
				<input type="hidden" name="get_position" value="{{ $profile['position'] }}">
				<input type="hidden" name="get_department" value="{{ $profile['department'] }}">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <input type="submit" class="btn btn-primary" value="Edit Profile" name="editadmin">
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