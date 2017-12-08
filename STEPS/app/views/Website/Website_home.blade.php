
<!DOCTYPE html>
<html>
<head>
	<title>STEPS</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->

	<!--css-->
	<link href="website/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="website/css/bootstrap-social.css" rel="stylesheet" type="text/css" media="all" />
	<link href="website/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="website/css/owl.carousel.css" rel="stylesheet">
	<!--css-->

	<!-- js -->
	<script type="text/javascript" src="website/js/jquery-2.1.4.min.js"></script>
	<script src="website/js/bootstrap.min.js"></script>
	<!-- //js -->

	<script type="text/javascript" src="website/js/jquery.devrama.slider-0.9.4.js"></script>
	
	<link href='//fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>

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

	<script type="text/javascript">
	$(document).ready(function()
	{    
		$("#name").keyup(function()
		{		
			var name = $(this).val();	
			
			if(name.length > 3)
			{		
				$("#result").html('checking...');
				
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
	</script>
	

	
</head>



<body>
<?php
$message=Session::get('message');
if($message!="" AND $message=="user not found")
{
?>
<div class="alert alert-danger">
	<strong>Login Error: </strong>Account not found!
</div>
<?php
}
else if($message!="" AND $message=="registration successful")
{
?>
<div class="alert alert-success">
	<strong>Registration Successful: </strong>Thank you for registering!
</div>
<?php
}
else if($message!="" AND $message=="username already existed")
{
?>
<div class="alert alert-danger">
	<strong>Registration Failed: </strong>Username already existed!
</div>
<?php	
}
Session::forget('message');
?>
<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<a href="http://localhost:8000/"><img src="website/images/STEPS.jpg" class="img-responsive" /></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="http://localhost:8000/"><span data-hover="Home">Home</span></a></li>
							<li><a href="http://localhost:8000/about"><span data-hover="About">About</span></a></li>
							<li><a href="http://localhost:8000/facility"><span data-hover="Timbers">Facility</span></a></li>
							<li><a href="http://localhost:8000/activities"><span data-hover="Enquiries">Activities</span></a></li>
							 <li><a  href="http://localhost:8000/contact"><span data-hover="Contact">Contact</span></a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
						        <!-- <li><p class="navbar-text">Already have an account?</p></li> -->
						        <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#89343b;"><b>Login</b> <span class="caret"></span></a>
									<ul id="login-dp" class="dropdown-menu">
										<li>
											 <div class="row">
											 		<div class="col-md-12">
														<h4 style="color:#89343b; size:5;"><b>Login to STEPS</b></h4>
														<div style="margin-top:5px;">
															 <form class="form" role="form" method="post" action="/login" accept-charset="UTF-8" id="login-nav">
																	<div class="form-group">
																		 <label class="sr-only" for="exampleInputEmail2">Username</label>
																		 <input name="login_username" type="text" class="form-control" id="exampleInputEmail2" placeholder="Username" required>
																	</div>
																	<div class="form-group">
																		 <label class="sr-only" for="exampleInputPassword2">Password</label>
																		 <input name="login_password" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
							                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
																	</div>
																	<div class="form-group">
																		 <input type="submit" class="btn btn-primary btn-block" name="login" value="Sign In" style="background-color: #89343b; border:1px solid #89343b;">
																	</div>
																	<div class="checkbox">
																		 <label>
																		 <input type="checkbox"> keep me logged-in
																		 </label>
																	</div>
															 </form>
														</div> 
													</div>
													<div class="bottom text-center">
														New here ? <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color:#89343b; border: 1px solid #89343b;"><b>Sign Up Now!</b></a>
													</div>
											 </div>
										</li>
									</ul><!--end of <ul id="login-dp" class="dropdown-menu"> -->
						        </li><!--end of <li class="dropdown"> -->
						</ul>
					</nav>
					<div class="social-icons">
						
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
<!-- //header -->

<!-- Modal for registration -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h4 class="modal-title" id="myModalLabel">Sign up STEPS</h4>
      		</div>
      		<form method="post" action="/register">
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
					    <span id="result"></span>
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
			                <option value="1st Semister">1st Semister</option>
							<option value="2nd Semister">2nd Semister</option>
							<option value="Summer">Summer</option>
							
						</select>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Course To Enroll</label>
					    <select name="tocourse" class="semester-class" style="width:100%;" required="">
					    	<option value="" selected="">Choose a course</option>
			                <option value="Bachelors of Science in Computer Science">Bachelors of Science in Computer Science</option>
							<option value="Bachelors of Science in Information Technology">Bachelors of Science in Information Technology</option>
							
						</select>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Previous Course</label>
					    <select name="fromcourse" class="semester-class" style="width:100%;" required="">
					    	<option value="" selected="">Choose a course</option>
			                <option value="Bachelors of Science in Computer Science">Bachelors of Science in Computer Science</option>
							<option value="Bachelors of Science in Information Technology">Bachelors of Science in Information Technology</option>
							
						</select>
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Previous School</label>
					    <input type="text" name="fromschool" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="University of California Los Angeles" required="">
					    <small id="emailHelp" class="form-text text-muted">Kindly state the name of your previous school</small>
					</div>
				
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <input type="submit" class="btn btn-primary" value="Sign Up" name="signup">
		    </div>
		    </form>
    	</div>
  	</div>
</div>
<!--End of Modal for registration -->

<!-- banner -->
	<div class="example-animation">
		<div data-lazy-background="website/images/banner.jpg" class="banner">
			<div class="container">
				<div class="banner-info">
					<h3>Student and Teachers friendly</h3>
					<p>CIT University maintained a student and teachers friendly environment for a better facility to learn</p>
				</div>
			</div>
		</div>
		<div data-lazy-background="website/images/banner1.jpg" class="banner2">
			<div class="container">
				<div class="banner-info">
					<h3>Center of Excellence!</h3>
					<p>In 2007, CIT was awarded by the Commission on Higher Education as Center of Excellence in Information Technology Education, one out of nine schools in the Philippines.</p>
					<p>In 2006, Government Recognition for the Master in Computer Science was granted by CHED.</p>
				</div>
			</div>
		</div>
		<div data-lazy-background="website/images/banner3.jpg" class="banner3">
			<div class="container">
				<div class="banner-info">
					<h3>Competition Ready!</h3>
					<p>CIT University is ready to win any competitions out there! hahaha</p>
				</div>
			</div>
		</div>

		
	</div>
			<script type="text/javascript">       
				$(document).ready(function(){
					$('.example-animation').DrSlider(); //Yes! that's it!
				});
			</script>
<!-- //banner -->
	<!--welcome-->
		<div class="content" >
			<div class="welcome">
				<div class="container">
					<div class="welcome-head">
						<h2 class="tittle">Student, Transferee Enrollment Processing System</h2>
							<p>Fast, convenient and accessible transferee processing system. <br/>Started with a STEP, ended with success!</p>
					</div>
					<div class="welcome-grids">
						<div class="col-md-3 welcome-grid test1">
						<img src="website/images/w.jpg" class="img-responsive" alt="/">
							<div class="textbox">
								<h4>Vision</h4>
								<p>A top academic institution continuously developing Values-driven, highly Competent, and Innovative Technologian.</p>
							</div>
						</div>
						<div class="col-md-3 welcome-grid test1" >
						<img src="website/images/classroom.jpg" class="img-responsive" alt="/">
							<div class="textbox">
								<h4 style="margin-top:-50px;">Mission</h4>
								<p>To ensure quality instruction, research, and community extension for the total development of Technologians commited in practicing professionalism and in meeting the demands of local, national and global communities.</p>
							</div>
						</div>
						<div class="col-md-3 welcome-grid test1">
						<img src="website/images/citu-image.jpg" class="img-responsive" alt="/">
							<div class="textbox">
								<h4 style="margin-top:-70px;">State of Core Competency</h4>
								<p>Science & Technology is a way of academic life among administrators, faculty, and students. In the design, administration, and implementation of curricular programs, technology is embedded, articulated and actuated.</p>
							</div>
						</div>
						<div class="col-md-3 welcome-grid test1">
						<img src="website/images/citu-image.jpg" class="img-responsive" alt="/">
							<div class="textbox">
								<h4>Core Values</h4>
								<p>SPIRITT (Spirit of Altruism, Passion for Excellence, Integrity, Responsibility, Innovativeness, Teamwork, Tenacity.</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>	
			<!--End of welcome --><!-- XL LG MD S XS -->

			<div class="col-md-12 steps">
				<h2 align="center" style="color: #89343b;">It takes just 5 minutes to get started.</h2>
				<h4 align="center" style="color: #89343b;">Use STEPS along the process to be well guided. Fast process, early enrollment!</h4>
				<img src="website/images/steps-5mins.jpg" class="img-responsive" alt="/" style="margin-left:auto; margin-right:auto;">
			</div>
		<!--about-->
		
			<div class="services">
				<div class="container">
					<h3 class="tittle">Our Services</h3>
					<div class="services-grids">
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
										<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
									</div>
								<div class="right-grid">
									<h4>Student Monitoring</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
										<i class="glyphicon glyphicon-list" aria-hidden="true"></i>
									</div>
								<div class="right-grid">
									<h4>Enrollment Guidance</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
									<i class="glyphicon glyphicon-th-large" aria-hidden="true"></i>
									</div>
								<div class="right-grid">
									<h4>Web Portal</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="clearfix"></div>
					</div>
					<div class="services-grids">
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
										<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
									</div>
								<div class="right-grid">
									<h4>News and WhatsUp</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
										<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
									</div>
								<div class="right-grid">
									<h4>School Events</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
									<i class="glyphicon glyphicon-phone" aria-hidden="true"></i>
									</div>
								<div class="right-grid">
									<h4>Mobile Responsive</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="test">
				<div class="container">
					<h3 class="tittle">our clients say</h3>
					<div class="test-grids">
						<div class="col-md-3 test-grid">
							<div class="test-text" style="height:250px">
								<h4>Gian Carlo Gilos</h4>
								<p>The system is well made and perfectly planned! I started with STEPS and enrolled with a smile on my face.</p>
							</div>
							<div class="text-img" style="margin-top:30px">
							<img src="website/images/happyclients/gian.jpg" class="img-responsive" alt=""/>
							</div>
						</div>
						<div class="col-md-3 test-grid">
							<div class="test-text" style="height:250px">
								<h4>MJ Caballero</h4>
								<p>It only took me 2 days to process my transferee application. I am very well guided using this app! Proud to be Technologian!</p>
							</div>
							<div class="text-img" style="margin-top:30px">
							<img src="website/images/happyclients/mjc.jpg" class="img-responsive" alt=""/>
							</div>
						</div>
						<div class="col-md-3 test-grid">
							<div class="test-text" style="height:250px">
								<h4>Larmie Feliscuzo</h4>
								<p>STEPS! Only in CIT University! As the chairperson of the CS Department, it made my work easy during enrollment days.</p>
							</div>
							<div class="text-img" style="margin-top:30px">
							<img src="website/images/happyclients/larmie.jpg" class="img-responsive" alt=""/>
							</div>
						</div>
						<div class="col-md-3 test-grid">
							<div class="test-text" style="height:250px">
								<h4>Gretchen Lizarez Tormis</h4>
								<p>Very convinient for both students and school admin. Enrollment is easy! -CIT University Registrar</p>
							</div>
							<div class="text-img" style="margin-top:30px">
							<img src="website/images/happyclients/glt.jpg" class="img-responsive" alt=""/>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="what-section">
				<div class="container">
					<div class="what-grids">
						<div class="col-md-6 test-list">
							<h3 class="tittle1">What we do</h3>
							<div class="tab1 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">Olypian quarrel  gorilla congolium</li>
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
							</div>
							<div class="tab2 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">Defacto lingo est igpay atinlay quee</li>
								
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
							</div>
							<div class="tab3 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">How to install Wordpress</li>
									
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
							</div>
							<div class="tab4 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">Epsum factorial non deposit </li>
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
							</div>
							<div class="tab5 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">Quid pro quo hic escorol</li>
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
							</div>
							<div class="tab6 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">Can the Theme be translated?</li>
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>

							</div>
						</div>
						<!-- script for tabs -->
							<script>
								$(document).ready(function(){
									$(".tab1 p").hide();
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
									$(".tab1 ul").click(function(){
										$(".tab1 p").slideToggle(300);
										$(".tab2 p").hide();
										$(".tab3 p").hide();
										$(".tab4 p").hide();
										$(".tab5 p").hide();
										$(".tab6 p").hide();
									})
									$(".tab2 ul").click(function(){
										$(".tab2 p").slideToggle(300);
										$(".tab1 p").hide();
										$(".tab3 p").hide();
										$(".tab4 p").hide();
										$(".tab5 p").hide();
										$(".tab6 p").hide();
									})
									$(".tab3 ul").click(function(){
										$(".tab3 p").slideToggle(300);
										$(".tab4 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
										$(".tab5 p").hide();
										$(".tab6 p").hide();
									})
									$(".tab4 ul").click(function(){
										$(".tab4 p").slideToggle(300);
										$(".tab3 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
										$(".tab5 p").hide();
										$(".tab6 p").hide();									
									})	
									$(".tab5 ul").click(function(){
										$(".tab5 p").slideToggle(300);
										$(".tab3 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
										$(".tab4 p").hide();
										$(".tab6 p").hide();									
									})
									$(".tab6 ul").click(function(){
										$(".tab6 p").slideToggle(300);
										$(".tab3 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
										$(".tab5 p").hide();
										$(".tab4 p").hide();									
									})
								});
							</script>
						<!-- script for tabs -->
						<div class="col-md-6 development">
								<h3 class="tittle1">Video Instruction</h3>
								<div class="embed-responsive embed-responsive-4by3">
									<iframe src="https://www.youtube.com/embed/bKSdZJavesM" allowfullscreen></iframe>
								</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="copy-section">
			<div class="container">
					<p>&copy; 2017 STEPS . All rights reserved | Design by <a href="#">STEPS CIT-University</a></p>
			</div>
		</div>
</body>
</html>