<!DOCTYPE html>
<html>
<head>
<title>STEPS</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lumber Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--css-->
<link href="website/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="website/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="website/css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="website/css/chocolat.css" type="text/css">
<!--css-->
<!-- js -->
<script type="text/javascript" src="website/js/jquery-2.1.4.min.js"></script>
<script src="website/js/bootstrap.min.js"></script>
<!-- //js -->
<script type="text/javascript" src="website/js/jquery.devrama.slider-0.9.4.js"></script>
<link href='//fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
<script src="website/js/jquery.chocolat.js"></script>
		<!--lightboxfiles-->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<!--script-->
<script src="website/js/modernizr.custom.97074.js"></script>

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
			
			if(name.length > 1)
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
						<a href="{{ URL::to('/') }}"><img src="website/images/STEPS.jpg" class="img-responsive" /></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav ">
							<li><a href="{{ URL::to('/') }}">Home </a></li>
							<li><a href="{{ URL::to('/about') }}">About</a></li>
							<li class="active"><a href="{{ URL::to('/facility') }}">Facility</a></li>
							<li><a href="{{ URL::to('/activities') }}">Activities</a></li>
							<li><a  href="{{ URL::to('/contact') }}">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
						        <!-- <li><p class="navbar-text">Already have an account?</p></li> -->
						        <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#89343b;"><b>Login</b> <span class="caret"></span></a>
									<ul id="login-dp" class="dropdown-menu">
										<li>
											 <div class="row">
													<div class="col-md-12">
														<h4 style="color:#89343b;">Login to STEPS</h4>
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
					
					<div class="clearfix"></div>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
<!-- //header -->
	<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="http://localhost:8000/">Home</a> / <span>Facility</span></h3>
		</div>
	</div>
<!-- //banner -->
	<!--welcome-->
		<div class="content">
			<div class="gallery">
			<div class="container">
				<h2 class="tittle">Our Facility</h2>
				<div class="gallery-grids">
					<section>
						<ul id="da-thumbs" class="da-thumbs">
							<li>
								<a href="website/images/facility1.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="website/images/facility1.jpg" alt="" />
									<div>
										<h5>CIT University Front Gate</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="website/images/facility2.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="website/images/facility2.jpg" alt="" />
									<div>
										<h5>CIT University Architecture Building</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="website/images/facility4.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="website/images/facility4.jpg" alt="" />
									<div>
										<h5>CIT University ST Building</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="website/images/facility3.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="website/images/facility3.jpg" alt="" />
									<div>
										<h5>CIT University Quadrangle</h5>
									</div>
								</a>
							</li>
							<li>	
								<a href="website/images/facility5.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="website/images/facility5.jpg" alt="" />
									<div>
										<h5>CIT University Gymnasium</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="website/images/facility6.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="website/images/facility6.jpg" alt="" />
									<div>
										<h5>CIT University Auditorium</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="website/images/facility7.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="website/images/facility7.jpg" alt="" />
									<div>
										<h5>CIT University Volleyball Court</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="website/images/facility8.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="website/images/facility8.jpg" alt="" />
									<div>
										<h5>CIT University Field</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="website/images/facility9.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="website/images/facility9.jpg" alt="" />
									<div>
										<h5>CIT University Main Building</h5>
									</div>
								</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</section>
				</div>
				<script type="text/javascript" src="website/js/jquery.hoverdir.js"></script>	
				<script type="text/javascript">
					$(function() {
						$('#da-thumbs > li').each( function() { $(this).hoverdir(); } );
					});
				</script>
			</div>
		</div>
<!-- //gallery -->

		</div>
		<div class="copy-section">
			<div class="container">
					<p>&copy; 2017 STEPS . All rights reserved | Design by <a href="#">STEPS CIT-University</a></p>
			</div>
		</div>

<!-- Modal for registration -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<form method="post" action="/register">
  	<div class="modal-dialog" role="document">
    	
    	<div class="modal-content">
    		
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h4 class="modal-title" id="myModalLabel">Sign up STEPS</h4>
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
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <input type="submit" class="btn btn-primary" value="Sign Up" name="signup">
		    </div>
		    
    	</div>
    </div>
  	</form>
</div>
<!--
<script type="text/javascript">
    $(document).ready(function(){
        $("#studenttype").change(function(){
            $( "select option:selected").each(function(){
                
                if($(this).attr("value")=="Transferee"){
                    $("#Freshmen").hide();
	            	$("#Graduate").hide();
	                $("#Transferee").show();
                }
                else if($(this).attr("value")=="Freshmen"){
                    $("#Transferee").hide();
	            	$("#Graduate").hide();
	                $("#Freshmen").show();
                }
                else if($(this).attr("value")=="Graduate"){
                    $("#Freshmen").hide();
	            	$("#Transferee").hide();
	                $("#Graduate").show();
                }
                else{
                	$("#Freshmen").hide();
	            	$("#Graduate").hide();
	                $("#Transferee").hide();
                }
            });
        }).change();
    });
</script>
-->
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
</body>
</html>