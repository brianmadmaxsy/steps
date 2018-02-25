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
    
    

  	<script src="newsandevents/jquery/jquery.min.js"></script>
  	<script src="admin/AdminDashboardDesign/jquery/jquery-ui.js"></script>
    <script src="newsandevents/js/moment.min.js"></script>

	<link rel="stylesheet" type="text/css" href="newsandevents/css/fullcalendar.min.css">

	<script type="text/javascript" src="newsandevents/js/fullcalendar.min.js"></script>

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
		  			<h3 class="panel-title" style="color:#fdca00"><b>School Calendar</b></h3>
				</div>
				
				<div class="content-box-large" >
					<div id='calendar'></div>
				</div>
		  </div>
		</div>
    </div>


    
    <script type="text/javascript">
		var calendar = $('#calendar');

		$.get( "{{ URL::to('/load_events') }}", function( data ) {
		  $.each(data, function( index, value ) {
			  	calendar.fullCalendar( 'renderEvent', value, true);
			});

		});

		$('#calendar').fullCalendar({
			firstDay: 1,
			dayClick: function(date) {
				console.log(date.format());

				var add_dialog = $('<p>Add Event On '+date.format()+'<br><form>Event Name: <input type="text" style="z-index:10000" name="addEventName" value="New Event! '+date.format()+'"></form>').dialog({
	                    buttons: {
	                    	"Add": function() {
						        $.post( "{{ URL::to('/add_event') }}", { title: $('input[name="addEventName"]').val(), start: date.format() }, function( data ) {

								  if(data) {
		                    		var event = {
		                    			id: data, 
		                    			title: $('input[name="addEventName"]').val(), 
		                    			start: date.format()
		                    		};
							        calendar.fullCalendar( 'renderEvent', event, true);
								  }
								});

	                    		add_dialog.dialog('close');
	                    	},
	                    	"Cancel": function() { add_dialog.dialog('close'); }
	                    }
	                });
		    },

		    eventClick: function(calEvent) {
                var dialog = $('<p>Event: ' + calEvent.title +'</p>').dialog({
                    buttons: {
                        "Edit": function() {
                        	console.log(calEvent);
                        	dialog.dialog('close');
                        	 var edit_dialog = $('<p>Edit Event?<br><form>Event Name: <input type="text" style="z-index:10000" name="editEventName" value="'+calEvent.title+'"></form>').dialog({
			                    buttons: {
			                    	"Edit": function() {
			                    		calEvent.title = $('input[name="editEventName"]').val();

			                    		$.post( "{{ URL::to('/edit_event') }}", { id: calEvent.id, start: calEvent.start._i, title: $('input[name="editEventName"]').val() }, function( data ) {

										  if(data) {
										  	calendar.fullCalendar('updateEvent', calEvent);
										  }
										});

			                    		edit_dialog.dialog('close');
			                    	},
			                    	"Cancel": function() { edit_dialog.dialog('close'); }
			                    }
			                });
                        },
                        "Delete":  function() {
                        	dialog.dialog('close');
                        	 var delete_dialog = $('<p>Remove Event?<br>Event: ' + calEvent.title +'</p>').dialog({
			                    buttons: {
			                    	"Remove": function() {
			                    		$.post( "{{ URL::to('/delete_event') }}", { id: calEvent.id }, function( data ) {

										  if(data)
										  	calendar.fullCalendar('removeEvents', calEvent._id);
										});

			                    		delete_dialog.dialog('close');
			                    	},
			                    	"Cancel": function() { delete_dialog.dialog('close'); }
			                    }
			                });
                        },
                        "Cancel":  function() {
                            dialog.dialog('close');
                        }
                    }
                });


				// if (confirm("Remove event?"))
			 //    	calendar.fullCalendar('removeEvents', calEvent._id);

		    }
	        // put your options and callbacks here
	    });

		
	</script>

   
    


    <script src="admin/AdminDashboardDesign/js/custom.js"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/AdminDashboardDesign/bootstrap/js/bootstrap.min.js"></script>

    <link href="admin/AdminDashboardDesign/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
	<script src="admin/AdminDashboardDesign/vendors/datatables/js/jquery.dataTables.min.js"></script>
	<script src="admin/AdminDashboardDesign/vendors/datatables/dataTables.bootstrap.js"></script>
	<script src="admin/AdminDashboardDesign/js/tables.js"></script>



	
  </body>
</html>