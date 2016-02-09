<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
		 <style>
		 	.form-control{
		 		width:100%;
		 	}
		 	.allLabel{
		 		color:#009999;
		 	}
			.btn-primary{
				width:100%;
			}
			
			h2 {
    			color: #FF0000;
    			font-family: Comic Sans MS;
			}
			h3 {
  				color: #7d8e51;
  				font-family: Comic Sans MS;
			}
		 	
		 </style>
	</head>
	<body>
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					      	<li><a href = "{!! action('PatientsController@index') !!}">Home </a></li>
					      	<li><a href = "{!! action('PatientsController@create_patient') !!}">Outdoor Patient </a></li>
					        <li><a href = "{!! action('PatientsController@show_all_report') !!}">Outdoor Patient List </a></li>
					        <li><a href = "{!! action('IpatientsController@create_indoor_patient') !!}">Indoor Patient </a></li>
					        <li><a href = "{!! action('IpatientsController@show_all_report') !!}""#">Indoor Patient List </a></li>
					        <li><a href = "{!! action('DoctorsController@create_doctor') !!}">Add Doctor </a></li>
					        <li><a href = "{!! action('DoctorsController@show_all_dr') !!}">Doctor's List </a></li>
					        <li><a href = "{!! action('ReportsController@search_form') !!}"> Bill Report </a></li>
					      </ul> 
					      <ul class="nav navbar-nav navbar-right">
					      <li><a href="#">Log Out </a></li>
					      </ul>
					    </div>
					  </div>
					</nav>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-4 col-md-offset-1">
						<center class = "header">
							<h2>Insert data Please!!</h2>
						</center>
						<form action="{!! action('PatientsController@search_by_name_id') !!}" method="post">
							<center>
								<input type="hidden" name="_token" value="{!! csrf_token() !!}">
									@if (isset($errors) && $errors->any())
	   									@foreach ($errors->all() as $error)
	        								<p class="alert alert-danger">{{ $error }}</p>
	    								@endforeach
									@endif
									@if (session('status'))
    									<div class="alert alert-success">
        									{{ session('status') }}
    									</div>
									@endif
							<div class="form-group">
								<label class="allLabel">Patient Name</label>
								<input type="text" name="patient_name" class="form-control" placeholder="Search"><br>
								<label class="allLabel">Patient ID</label>
								<input type="text" name="patient_id" class="form-control" placeholder="Search"><br>
								<button type="submit" class="btn btn-primary">Search</button>
							</div>
						</form>
					</div>
					<div class="col-md-3 col-md-offset-1"></div>
					</center>
				</div>
			</div>	
	</body>	
</html>