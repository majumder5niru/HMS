<!DOCTYPE HTml>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap.min.css') !!}">
	 <style>
	 	.form-control{
	 		width:250px;
	 	}
	 	.allLabel{
	 		color:#009999;
	 	}
	 	.radio > label {
  			padding-right: 31px;
		}
		.btn-primary{
			width:250px;
		}
	 	
	 </style>
	</head>
	<body>
		<div class="well">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					      	<li><a href = "{!! action('PatientsController@index') !!}">Home</a></li>
					      	<li><a href = "{!! action('PatientsController@create_patient') !!}">Outdoor Patient </a></li>
					        <li><a href = "{!! action('PatientsController@show_all_report') !!}">Outdoor Patient List </a></li>
					        <li><a href = "{!! action('IpatientsController@create_indoor_patient') !!}">Indoor Patient </a></li>
					        <li><a href = "{!! action('IpatientsController@show_all_report') !!}">Indoor Patient List </a></li>
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
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form action="{!! action('DoctorsController@update_dr_info',$doctor->dr_id) !!}" method="post">
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
							<label class="allLabel">Dr. Name</label>
							<input type="text" name="dr_name" class="form-control" value="{!! $doctor->dr_name !!}" >
						</div>
						<div class="form-group">
							<label class="allLabel">Dr. ID</label>
							<input type="text" name="dr_id" class="form-control" value="{!! $doctor->dr_id !!}" >
						</div>
						<div class="form-group">
							<label class="allLabel">Designation</label>
							<textarea type="text" name="designation" class="form-control" >{!! $doctor->designation !!}</textarea>
						</div>
						<div class="form-group">
							<label class="allLabel">Address</label>
							<input type="text" name="address" class="form-control" value="{!! $doctor->address !!}">
						</div>
						<div class="form-group">
							<label class="allLabel">Mobile</label>
							<input type="text" name="phone_number" class="form-control" value="{!! $doctor->phone_number!!}">
						</div>
						<div class="form-group">
							<label class="allLabel">Gender</label>
							<div class="radio">
								<label>
									<input type="radio" name="gender"  value="male" id="option1" <?php if($gender== "male") { echo 'checked="checked"'; } ?>>Male
								</label>
								<label>
									<input type="radio" name="gender"  value="female" <?php if($gender== "female") { echo 'checked="checked"'; } ?> >Female
								</label>
								<label>
									<input type="radio" name="gender"  value="other" <?php if($gender== "other") { echo 'checked="checked"'; } ?>>Others
								</label>
							</div>
						</div>	
						<div class="form-group">
							<label class="allLabel">About Dr.</label>
							<textarea type="text" name="about_dr" class="form-control" >{!! $doctor->about_dr !!}</textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</form>		
				</div>
				<div class="col-md-4"></div>
			</div>	
		</div>
	</div>
	
	</body>	
</html>