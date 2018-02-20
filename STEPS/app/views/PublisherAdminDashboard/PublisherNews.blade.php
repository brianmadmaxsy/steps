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
		  			<h3 class="panel-title" style="color:#fdca00"><b>News</b></h3>
				</div>
				
				<div class="content-box-large" >
					<table class="table">
						<thead>
							<td>Title</td>
							<td>Description</td>
							<td>Date</td>
							<td><a href="#" class="add btn btn-success" style="float:right" data-toggle="modal" data-target="#add">Add</a></td>
						</thead>
						<tbody>
							@foreach($news as $new)
							<tr>
								<td>{{ $new['title'] }}</td>
								<td>{{ $new['description'] }}</td>
								<td>{{ $new['date'] }}</td>
								<td>
									<a href="#" class="edit btn btn-primary" style ="float:right" data-id="{{ $new['id'] }}" data-toggle="modal" data-target="#edit">Edit</a>
									<a href="#" class="delete btn btn-danger" style ="float:right" data-id="{{ $new['id'] }}" data-toggle="modal" data-target="#delete">Delete</a>

									<!-- <a href="{{ url('/publish/delete/'. $new['id']) }}" class="delete btn btn-danger">Delete</a> -->
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
		  </div>
		</div>
    </div>


<!-- Add Modal -->
  <div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add news</h4>
        </div>
        	<form method="POST" enctype="multipart/form-data" action="{{ URL::to('/publisher_add_news') }}" >
	        	<div class="modal-body">
				  <div class="form-group">
				    <label>Title:</label>
				    <input type="text" class="form-control" name="title">
				  </div>
				  <div class="form-group">
				    <label>Description:</label>
				    <input type="text" class="form-control" name="description">
				  </div>


                <div class="input-group date" data-provide="datepicker">
                	<label>Date:</label>
				    <input type="text" class="form-control datepicker" name="date">
				</div>
				<br>
				<div class="input-group" data-provide="datepicker">
                	<label>Image:</label>
				    <input type="file" name="image" onchange="readURL(this);">
				    <img src="http://placehold.it/180" alt="your image" class="img-responsive blah"/>
				</div>
	        </div>
	        <div class="modal-footer">
	        	<button type="submit" class="btn btn-default">Submit</button>
	          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
        </form>
      </div>
      
    </div>
  </div>

  <!-- EDIT MODAL -->

  <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit news</h4>
        </div>
        	<form method="POST" enctype="multipart/form-data" action="{{ URL::to('/publisher_edit_news') }}" >
	        	<div class="modal-body">
	        		<input type="hidden" name="id" value="" class="id">
				  <div class="form-group">
				    <label for="title">Title:</label>
				    <input type="text" class="form-control title" name="title">
				  </div>
				  <div class="form-group">
				    <label for="description">Description:</label>
				    <input type="text" class="form-control description" name="description">
				  </div>


                <div class="input-group date" data-provide="datepicker">
                	<label for="date">Date:</label>
				    <input type="text" class="form-control datepicker date" name="date">
				</div>
				<br>
				<div class="input-group" data-provide="datepicker">
                	<label for="date">Image:</label>
				    <input type="file" name="image" onchange="readURL(this);">
				    <img src="http://placehold.it/180" alt="your image" class="img-responsive blah image"/>
				</div>
	        </div>
	        <div class="modal-footer">
	        	<button type="submit" class="btn btn-default">Submit</button>
	          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
        </form>
      </div>
      
    </div>
  </div>

  <!-- DELETE MODAL -->

  <div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure you want to delete this?</h4>
        </div>
        	<form method="POST" enctype="multipart/form-data" action="{{ URL::to('/publisher_edit_news') }}" >
	        	<div class="modal-body">
	        		<input type="hidden" name="id" value="" class="id">
				  <div class="form-group">
				    <label for="title">Title:</label>
				    <input type="text" class="form-control title" name="title" disabled>
				  </div>
				  <div class="form-group">
				    <label for="description">Description:</label>
				    <input type="text" class="form-control description" name="description" disabled>
				  </div>


                <div class="input-group date" data-provide="datepicker">
                	<label for="date">Date:</label>
				    <input type="text" class="form-control datepicker date" name="date" disabled>
				</div>
				<br>
				<div class="input-group" data-provide="datepicker">
                	<label for="date">Image:</label>
				    <input type="file" name="image" onchange="readURL(this);" disabled>
				    <img src="http://placehold.it/180" alt="your image" class="img-responsive blah image"/>
				</div>
	        </div>
	        <div class="modal-footer">
	        	<a href="" class="delete-btn btn btn-danger">Delete</a>
	          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
        </form>
      </div>
      
    </div>
  </div>



    
    <script type="text/javascript">
    	$('.datepicker').datepicker();
		var calendar = $('#calendar');

		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".add, .edit, .delete").on("click", function(e){
        	$('.blah').attr('src', "http://placehold.it/180");
        });


        $(".edit, .delete").on("click", function(e){
        	var id = $(this).data("id");
        	$.get( "{{ URL::to('/get_singe_news') }}", {id: id}, function( data ) {
        		$(".id").val(id);
        		$(".title").val(data.title);
				$(".description").val(data.description);
				$(".date").val($.datepicker.formatDate('mm/dd/yy', new Date(data.date)));
				$(".image").attr('src', "{{ URL::to('/images/') }}/" + data.image);
			  	$(".delete-btn").attr("href", "{{ url('/publish/delete/') }}/" + id);
			});
        });
	</script>

   
    


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