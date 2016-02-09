<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap.min.css') !!}">
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
    			color: #008000;
    			font-family: Comic Sans MS;
			}
			h3 {
  				color: #7d8e51;
  				font-family: Comic Sans MS;
			}	
		 </style>
		 <script>
			function myFunction() {
    		window.print();
			}
		</script>
	</head>
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
			<div class="col-md-4"></div>
				<div class="col-md-3 col-md-offset-1">
					<center class = "header">
							<h2>The Lab Aid Medical Center and Hospital</h2>
							<h3>Sonaimuri,Noakhali</h3><br><br>
						</center>
						<center>
						<form action="{!! action('PatientsController@search_by_name_id') !!}" method="post">
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
									<input type="text" name="patient_name" class="form-control" placeholder="Search" ><br>
									<label class="allLabel">Patient ID</label>
									<input type="text" name="patient_id" class="form-control" placeholder="Search"><br>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Search</button>
								</div>
						</form>	
				</div>
				<div class="col-md-3 col-md-offset-1"></div>
		</div>
		<div class="row">
			<div class="col-md-6">
			<center>
                    <h2 style="color:#CD5C5C">Outdoor Patients</h2>
                </center>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patient ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Visiting Date</th>
                                <th>Mobile</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all_data as $data)
                                <tr>
                                    <td>{!! $data->id !!} </td>
                                    <td>{!! $data->patient_id !!}</td>
                                    <td>{!! ucwords($data->patient_name)!!}</td>
                                    <td>{!! $data->gender !!}</td>
                                    <td>{!! $data->age !!}</td>
                                    <td>{!! $data->admission_date !!}</td>
                                    <td>{!! $data->phone_number !!}</td>	
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    
			</div>
			<div class="col-md-6">
				<center>
                    <h2 style="color:#CD5C5C">Indoor Patients</h2>
                </center>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patient ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Visiting Date</th>
                               <th>Mobile</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($all as $data)
                                <tr>
                                    <td>{!! $data->id !!} </td>
                                    <td>{!! $data->ind_patient_id !!}</td>
                                    <td>{!! ucwords($data->patient_name) !!}</td>
                                    <td>{!! $data->gender !!}</td>
                                    <td>{!! $data->age !!}</td>
                                    <td>{!! $data->arrival_date !!}</td>
                                    <td>{!! $data->phone_number !!}</td>	
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button onclick="myFunction()" style="margin-left:430px;">Print this page</button><br><br>
			</div>
		</div>
	</div>
</html>