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
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example2').DataTable();
		} );
	</script>
	<script type="text/javascript">
	        $(document).ready(function()
	        {    
	            $("#uname").keyup(function()
	            {       
	                var name = $(this).val();   
	                
	                if(name.length > 1)
	                {       
	                    $("#result").html('checking...');
	                    
	                    /*$.post("username-check.php", $("#reg-form").serialize())
	                        .done(function(data){
	                        $("#result").html(data);
	                    });*/
	                    
	                    $.ajax({
	                        
	                        type : 'POST',
	                        url  : 'checkadminusername.php',
	                        data : $(this).serialize(),
	                        success : function(data)
	                                  {
	                                     $("#result").html(data);
	                                  }
	                        });
	                        return false;
	                    
	                }
	                else
	                {
	                    $("#result").html('');
	                }
	            });
	            
	        });
	        $(document).ready(function()
			{    
				$("#name").keyup(function()
				{		
					var name = $(this).val();	
					
					if(name.length > 1)
					{		
						$("#result2").html('checking...');
						
						/*$.post("username-check.php", $("#reg-form").serialize())
							.done(function(data){
							$("#result").html(data);
						});*/
						
						$.ajax({
							
							type : 'POST',
							url  : 'username-check.php',
							data : $(this).serialize(),
							success : function(data)
									  {
								         $("#result2").html(data);
								      }
							});
							return false;
						
					}
					else
					{
						$("#result2").html('');
					}
				});
				
			});
	</script>
  		
  </head>
  <body>



  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 
	                 <a href="http://localhost:8000/guidancehome"><img src="admin/AdminDashboardDesign/images/STEPS_header_3.png" class="img-responsive" alt="/" height="110" width="125" style="margin-top:3px;" /></a>
	              </div>
	           </div>
	           
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="http://localhost:8000/masteradminlogout"><b><font color="#fdca00">Logout</font><!-- class="dropdown-toggle" data-toggle="dropdown" <b class="caret"> --></b></a>
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
	                            <li><a href="http://localhost:8000/guidancehome">Home</a></li>
	                            <li><a href="#">About</a></li>
	                            <li><a href="#">Support</a></li>
	                            <li><a href="http://localhost:8000/masteradminlogout">Logout</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="#"><i class="glyphicon glyphicon-calendar"></i>School Calendar</a></li>
                    </ul>
             	</div>
		  	</div>
		  	
		  	<div class="col-md-10">
		  		<div class="panel-heading" style="background-color:#89333c;">
			        <h2 class="panel-title" style="color:#fdca00"><b>{{ $masteradmin['department'] }}</b></h2>
				</div>
				<script src="dashboard/js/tabs.js" ></script>

			  	<div class="content-box-large" >
				  	<div id="tabs">
						<ul>
							<li><a href="#tabs-1">Administrators</a></li>
							<li><a href="#tabs-2">Students</a></li>
						    <li><a href="#tabs-3">Account</a></li>
						    
						</ul>
						
						<div id="tabs-1">
						
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    	<!--<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" style="margin:0px 0px -35px 200px;">Add Administrator</button>-->
						    	<button type="button" class="btn btn-primary btn-sm" style="margin:0px 0px 5px 0px;" data-toggle="modal" data-target="#myModalForAddAdmin">Add Administrator</button>
						        <thead>
						            <tr>
						                <th>Name</th>
						                <th>Username</th>
						                <th>Department</th>
						                <th>Position</th>
						                <th>&nbsp;</th>
						                <th>&nbsp;</th>
						            </tr>
						        </thead>
						        <tfoot>
						            <tr>
						                <th>Name</th>
						                <th>Username</th>
						                <th>Department</th>
						                <th>Position</th>
						                <th>&nbsp;</th>
						                <th>&nbsp;</th>
						            </tr>
						        </tfoot>
						        <tbody>
							       
								    <?php
								    foreach($admins as $admin)
								    {
								    	$userid=$admin->userid;
								    ?>
								        <tr>
								        	<td>{{ $admin->firstname.' '.$admin->middlename.' '.$admin->lastname }}</td>
								        	<td>{{ $admin->username }}</td>
								        	<td>{{ $admin->department }}</td>
								        	<td>{{ $admin->position }}</td>
								            <td>
								            <form method="post" action="/mastergetadminuserid">
								            	<input type="hidden" name="master_admin_username" value="{{ $masteradmin['username'] }}">
								            	<input name="get_userid" type="hidden" value="{{ $userid }}">
								                <input type="submit" name="open" value="Open" >
								            </form>
								            </td>
								            <td>
								            <form method="post" action="/masterremoveadmin">
								            	<input type="hidden" name="master_admin_username" value="{{ $masteradmin['username'] }}">
								            	<input name="get_userid" type="hidden" value="{{ $userid }}">
								                <input type="submit" name="remove" value="Remove" onclick="return confirm('Delete {{ $admin->firstname.' '.$admin->lastname }}?')">
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
						    	<button type="button" class="btn btn-primary btn-sm" style="margin:0px 0px 5px 0px;" data-toggle="modal" data-target="#myModalForAddStudent">Add Student</button>
						        <thead>
						            <tr>
						                <th>Name</th>
						                <th>School Year</th>
						                <th>Semister</th>
						                <th>Department</th>
						                <th>Student Type</th>
						                <th>Step Number</th>
						                <th>Enrollment Status</th>
						                <th>&nbsp;</th>
						                <th>&nbsp;</th>
						            </tr>
						        </thead>
						        <tfoot>
						            <tr>
						                <th>Name</th>
						                <th>School Year</th>
						                <th>Semister</th>
						                <th>Department</th>
						                <th>Student Type</th>
						                <th>Step Number</th>
						                <th>Enrollment Status</th>
						                <th>&nbsp;</th>
						                <th>&nbsp;</th>
						            </tr>
						        </tfoot>
						        <tbody>
							       
								    <?php
								    foreach($students as $student)
								    {
								    	$userid=$student->userid;
								    ?>
								        <tr>
								        	<td>{{ $student->firstname.' '.$student->middlename.' '.$student->lastname }}</td>
								        	<td>{{ $student->schoolyear }}</td>
								        	<td>{{ $student->semester }}</td>
								        	<td>{{ $student->department }}</td>
								            <td>{{ $student->studenttype }}</td>
								            <td>{{ $student->step_number }}</td>
								            <td>{{ $student->steps_status }}</td>
								            <td>
								            <form method="post" action="/mastergetstudentuserid">
								            	<input type="hidden" name="master_admin_username" value="{{ $masteradmin['username'] }}">
												<input name="get_userid" type="hidden" value="{{ $userid }}">
								                <input type="submit" name="open" value="Open" >
								            </form>
								            </td>
								            <td>
								            <form method="post" action="/masterremovestudent">
								            	<input type="hidden" name="get_studenttype" value="{{ $student->studenttype }}">
								            	<input type="hidden" name="master_admin_username" value="{{ $masteradmin['username'] }}">
								            	<input name="get_userid" type="hidden" value="{{ $userid }}">
								                <input type="submit" name="remove" value="Remove" onclick="return confirm('Delete {{ $student->firstname.' '.$student->lastname }}?')">
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
							              	<h3 class="panel-title" style="color:black">{{ $masteradmin['firstname'].' '.$masteradmin['middlename'].' '.$masteradmin['lastname'] }} </h3>
							              	<div class="panel-options">
							              		<a href="#" data-rel="reload" style="color:black" title="Edit User" data-toggle="modal" data-target="#myModalforMasterAdminEditProfile"><i class="glyphicon glyphicon-cog"></i></a>
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
										                        <td>{{ $masteradmin['position'] }}</td>
										                    </tr>
										                    <tr>
										                        <td>Admin ID</td>
										                        <td>
										                        {{ $masteradmin['adminid'] }}
										                        </td>
										                    </tr>
										                    
										                    <tr>
										                        <td>Email</td>
										                        <td>{{ $masteradmin['email'] }}</td>
										                    </tr>
										                    
										                    <tr>
										                        <td>Contact Number</td>
										                        <td>{{ $masteradmin['contact'] }}</td>
										                    </tr>
										                    <tr>
										                        <td>Birthdate</td>
										                        <td>{{ $masteradmin['birthdate'] }}</td>
										                    </tr>
										                    <tr>
										                        <td>Education</td>
										                        <td>{{ $masteradmin['education'] }}</td>
										                    </tr>
										                    <tr>
										                        <td>Past University</td>
										                        <td>{{ $masteradmin['pastuniversity'] }}</td>
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

						
					</div><!--End of tabs -->
				</div><!--content-box-large -->
		  </div>
		</div>
    </div>



<!-- Modal for Add Administrator -->
<div class="modal fade" id="myModalForAddAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<form method="post" action="/masteraddadmin">
  	<div class="modal-dialog" role="document">
    	
    	<div class="modal-content">
    		
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h4 class="modal-title" id="myModalLabel">Add Administrator</h4>
      		</div>
      		
		    <div class="modal-body">
		      	
					<div class="form-group">
					    <label for="exampleInputEmail1">First Name</label>
					    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John" required="">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Middle Name</label>
					    <input type="text" name="middlename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Moe" required="">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Last Name</label>
					    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Doe" required="">
					    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text" name="username" class="form-control" id="uname" aria-describedby="emailHelp" placeholder="johndoe123" required="">
					    <b><span id="result"></span></b>
					</div>
					
					<div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="password" class="form-control" id="password1" placeholder="Password1234*" required="">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Confirm Password</label>
					    <input type="password" name="confirmpassword" class="form-control" id="password2" placeholder="Password1234*" required="">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Birthdate</label>
					    <!--
					    {{ Form::select('birth-month', array('January' => 'January','February' => 'February','March' => 'March','April' => 'April','May' => 'May','June' => 'June','July' => 'July','August' => 'August','September' => 'September','October' => 'October','November' => 'November','December' => 'December' )) }}
					    -->
					    <select name="birth-month" class="birthfield" required="">
							<option> - Month - </option>
							<option value="January">January</option>
							<option value="Febuary">Febuary</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select>
					    <select name="birth-day" class="birthfield" required="">
							<option> - Day - </option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					    <input type="text" name="birth-year" class="birthfield" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1994" style="" required="">
					    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Email Address</label>
					    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="johnmoedoe@mail.com" required="">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Contact</label>
					    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="101223487553" required="">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Department</label>
						<select id="department" name="department" class="birthfield" required="">
							<option value="" selected="">Choose...</option>
					        <option value="College of Computer Studies">College of Computer Studies</option>
                            <option value="College of Engineering">College of Engineering</option>
                            <option value="College of Nursing">College of Nursing</option>
                            <option value="Student Affairs Office">Student Affairs Office</option>
                            <option value="Office of Academic Scholarship">Office of Academic Scholarship</option>
                            <option value="Guidance Office">Guidance Office</option>
                            <option value="ETO">ETO</option>
                            <option value="STEPS">STEPS</option>
					    </select>
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">Position</label>
					    <select name="position" class="birthfield">
					    	<option value="">Choose One</option>
					    	<option value="College Dean">College Dean</option>
                            <option value="College Chairperson">College Chairperson</option>
                            <option value="Faculty">Faculty</option>
                            <option value="Department Head">Department Head</option>
                            <option value="Department Assistant">Department Assistant</option>
                            <option value="Department Secretary">Department Secretary</option>
                            <option value="Working Staff">Working Staff</option>
                            <option value="Master Administrator">Master Administrator</option>
                            <option value="Publisher">Publisher</option>
					    </select>
					</div>
					
					<div class="form-group">
					    <label for="exampleInputEmail1">Past University</label>
					    <input type="text" name="pastuniversity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="">
					    <small><font color="#85363c">(If many, please separate using comma ",")</font></small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Education Attained</label>
					    <input type="text" name="education" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="">
					    <small><font color="#85363c">(If many, please separate using comma ",")</font></small>
					</div>
			</div>

		    <div class="modal-footer">
		    	<input type="hidden" name="master_admin_username" value="{{ $masteradmin['username'] }}">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <input type="submit" class="btn btn-primary" value="Add" name="signup">
		    </div>
		    
    	</div>
    </div>
  	</form>
</div>




<!-- Modal for Add Student -->
<div class="modal fade" id="myModalForAddStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<form method="post" action="/masteraddstudent">
  	<div class="modal-dialog" role="document">
    	
    	<div class="modal-content">
    		
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h4 class="modal-title" id="myModalLabel">Add Student</h4>
      		</div>
      		
		    <div class="modal-body">
		      	
					<div class="form-group">
					    <label for="exampleInputEmail1">First Name</label>
					    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John" required="">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Middle Name</label>
					    <input type="text" name="middlename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Moe" required="">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Last Name</label>
					    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Doe" required="">
					    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text" name="username" class="form-control" id="name" aria-describedby="emailHelp" placeholder="johndoe123" required="">
					    <b><span id="result2"></span></b>
					</div>
					
					<div class="form-group">
					    <label for="exampleInputEmail1">Email Address</label>
					    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="johnmoedoe@mail.com" required="">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="password" class="form-control" id="password1" placeholder="Password1234*" required="">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Confirm Password</label>
					    <input type="password" name="cpassword" class="form-control" id="password2" placeholder="Password1234*" required="">
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Birthdate</label>
					    <!--
					    {{ Form::select('birth-month', array('January' => 'January','February' => 'February','March' => 'March','April' => 'April','May' => 'May','June' => 'June','July' => 'July','August' => 'August','September' => 'September','October' => 'October','November' => 'November','December' => 'December' )) }}
					    -->
					    <select name="birth-month" class="birthfield" required="">
							<option> - Month - </option>
							<option value="January">January</option>
							<option value="Febuary">Febuary</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select>
					    <select name="birth-day" class="birthfield" required="">
							<option> - Day - </option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					    <input type="text" name="birth-year" class="birthfield" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1994" style="" required="">
					    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Birth Place</label>
					    <input type="text" name="birthplace" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Los Angeles California, USA" required="">
					    
					</div>
					<div class="form-group">
						<table>
							<tr>
								<td>
									{{ Form::label('gender-label', 'Gender', array('class' => '')) }}
			                        <select name="gender" class="birthfield" required="">
			                        	<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</td>
								<td style="width:100px;">
									&nbsp;
								</td>
								<td>
									<label for="exampleInputEmail1">Civil Status</label>
									<select name="civilstatus" class="birthfield" required="">
			                        	<option value="Single">Single</option>
										<option value="Married">Married</option>
										<option value="Separated">Separated</option>
										<option value="Widowed">Widowed</option>
										<option value="Divorced">Divorced</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
					
					<div class="form-group">
					    <label for="exampleInputEmail1">Contact</label>
					    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="101223487553" required="">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Home Address</label>
					    <input type="text" name="homeaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Provincial Address</label>
					    <input type="text" name="provincialaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Orange County Los Angeles California USA" required="">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Term Entered</label>
					    <input type="text" name="year-entered" class="semester-class" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="School Year (ex. 2017)" style="border-radius:2px;" required="">
					    <select name="semester" class="semester-class" required="">
			                <option value="1st Semester">1st Semester</option>
							<option value="2nd Semester">2nd Semester</option>
							<option value="Summer">Summer</option>
							
						</select>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Student Type</label>
						<select id="studenttype" name="studenttype" class="birthfield" required="">
							<option value="" selected="">Choose...</option>
					        <option value="Freshmen">Freshmen</option>
					        <option value="Transferee">Transferee</option>
					        <option value="Graduate">Graduate</option>
					    </select>
					</div>
					
					<div id="Freshmen" style="display: none;">
						<div class="form-group">
						    <label for="exampleInputEmail1">Secondary School</label>
						    <input type="text" name="freshmen_highschool" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="University of California Los Angeles">
						    <small id="emailHelp" class="form-text text-muted">Kindly state the name of your previous school</small>
						</div>

						<div class="form-group">
						    <label for="exampleInputEmail1">Course To Enroll</label>
						    <select name="freshmen_tocourse" class="semester-class" style="width:100%;">
						    	<option value="" selected="">Choose a course</option>
				                <option value="Bachelors of Science in Computer Science">Bachelors of Science in Computer Science</option>
								<option value="Bachelors of Science in Information Technology">Bachelors of Science in Information Technology</option>
								
							</select>
						</div>
					</div><!--End of div id="Freshmen" -->

					<div id="Transferee" style="display:none;">	
						<div class="form-group">
						    <label for="exampleInputEmail1">Course To Enroll</label>
						    <select name="tocourse" class="semester-class" style="width:100%;">
						    	<option value="" selected="">Choose a course</option>
				                <option value="Bachelors of Science in Computer Science">Bachelors of Science in Computer Science</option>
								<option value="Bachelors of Science in Information Technology">Bachelors of Science in Information Technology</option>
								
							</select>
						</div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Previous Course</label>
						    <select name="fromcourse" class="semester-class" style="width:100%;">
						    	<option value="" selected="">Choose a course</option>
				                <option value="Bachelors of Science in Computer Science">Bachelors of Science in Computer Science</option>
								<option value="Bachelors of Science in Information Technology">Bachelors of Science in Information Technology</option>
								
							</select>
						</div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Previous School</label>
						    <input type="text" name="fromschool" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="University of California Los Angeles">
						    <small id="emailHelp" class="form-text text-muted">Kindly state the name of your previous school</small>
						</div>
					</div>
					
					<div id="Graduate" style="display:none;">
						Graduate
					</div>
			</div>

		    <div class="modal-footer">
		    	<input type="hidden" name="master_admin_username" value="{{ $masteradmin['username'] }}">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <input type="submit" class="btn btn-primary" value="Add" name="signup">
		    </div>
		    
    	</div>
    </div>
  	</form>
</div>


<script type="text/javascript">
    $(function () {
        $("#studenttype").change(function () {

        	if ($(this).val() == "Transferee")
            {
            	$("#Freshmen").hide();
            	$("#Graduate").hide();
                $("#Transferee").show();
            } 
            else if ($(this).val() == "Freshmen")
            {
            	$("#Transferee").hide();
            	$("#Graduate").hide();
                $("#Freshmen").show();
            }
            else if ($(this).val() == "Graduate")
            {
            	$("#Freshmen").hide();
            	$("#Transferee").hide();
                $("#Graduate").show();
            }
            else {
            	$("#Freshmen").hide();
            	$("#Graduate").hide();
                $("#Transferee").hide();
            }
        });
    });
</script>

<!--End of Modal for Add Student -->

   
    


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