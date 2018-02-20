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
    
    

  	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="admin/AdminDashboardDesign/jquery/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js"></script>
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
	                            <li><a href="{{ URL::to('/home') }}">Home</a></li>
	                            <li><a href="#">About</a></li>
	                            <li><a href="#">Support</a></li>
	                            <li><a href="#">Settings</a></li>
	                            <li><a href="{{ URL::to('/logout') }}">Logout</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="{{ URL::to('/viewcalendar') }}"><i class="glyphicon glyphicon-calendar"></i>School Calendar</a></li>
	                    <li><a href="{{ URL::to('/viewnews') }}"><i class="fa fa-newspaper-o"></i>News</a></li>
                    </ul>
             	</div>
		  	</div>
		  	
		  	<div class="col-md-10">
		  		<div class="panel-heading" style="background-color:#89333c;">
		  			<h3 class="panel-title" style="color:#fdca00"><b>CIT University News</b></h3>
				</div>
				<div class="content-box-large" >
					<center>
			  			<img src="{{ URL::to('/') . '/images/CIT_logo1_sm.png' }}" class="img-responsive">
			  		</center>
			  		<hr>
					<div class="row" id='news'>
						@foreach($news as $new)
							<div class="col-md-12" style="border-bottom: 1px solid black;">
								<h1>{{ $new['title'] }}</h1><p>{{ date_format(new DateTime($new['date']), 'g:ia \o\n l jS F Y'); }}</p>
								<div class="col-md-4">
									<p><img class="img-responsive" src="{{ URL::to('/') . '/images/' . $new['image'] }}"></p>
								</div>
								<div class="col-md-8">
									<p>{{ $new['description'] }}</p>
								</div>
							</div>
						@endforeach
					</div>
				</div>
		  </div>
		</div>
    </div>


    



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