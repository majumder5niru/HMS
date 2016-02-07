<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap.min.css') !!}">
        <script>
            function check(){
                return confirm('Are you sure you want to delete this doctors history?');
            }
        </script>
	</head>
	<body>
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
                        <li><a href = "{!! action('DoctorsController@create_doctor') !!}">Add Doctor </a></li>
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
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<center>
                        <p><h4>The Lab Aid Medical Center and Hospital</h4>
                        <h5>Sonaimuri,Noakhali</h5></p>
                        <h2>All Doctors</h2>
                    </center>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Doctor ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Designation</th>
                                <th>Mobile</th> 
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doctors as $doctor)
                                <tr>
                                    <td>{!! $doctor->id !!} </td>
                                    <td>{!! $doctor->dr_id !!}</td>
                                    <td><a href="{!! action('DoctorsController@show_info', $doctor->dr_id) !!}">{!! $doctor->dr_name !!}</a></td>
                                    <td>{!! $doctor->gender !!}</td>
                                    <td>{!! $doctor->designation!!}</td>
                                    <td>{!! $doctor->phone_number !!}</td> 
                                    <td><a href="{!! action('DoctorsController@edit_doctor', $doctor->dr_id) !!}"><button  class=" btn-sm btn btn-primary">Edit</button></a></td>
                                    <td><a href="{!! action('DoctorsController@delete_doctor', $doctor->dr_id) !!}" onclick='return check()'><button  class="btn-sm btn btn-danger " >Delete</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</body>
</html>