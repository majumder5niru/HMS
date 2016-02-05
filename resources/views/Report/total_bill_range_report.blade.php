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
			function myFunction() {
    		window.print();
			}
		</script>
		<style>
			.col-md-4  {
  				line-height: 8px;
			}
			button {
 			 height: 30px;
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
				      	<li><a href = "{!! action('PatientsController@index') !!}">Home</a></li>
				      	<li><a href = "{!! action('PatientsController@create_patient') !!}">Outdoor Patient </a></li>
				        <li><a href = "{!! action('PatientsController@show_all_report') !!}">Outdoor Patient List </a></li>
				        <li><a href = "{!! action('IpatientsController@create_indoor_patient') !!}">Indoor Patient </a></li>
				        <li><a href = "{!! action('IpatientsController@show_all_report') !!}">Indoor Patient List </a></li>
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
					<center>
						<p><h4>The Lab Aid Medical Center and Hospital</h4>
                        <h5>Sonaimuri,Noakhali</h5></p>
						<h2>Total Bill Report({!!$starting_date!!} to {!!$ending_date!!})</h2><br>
					</center>
					<div class="col-md-12">
						<table class="table">
                        <thead>
                            <tr>
                                <th>Starting Date</th>
                                <th>Ending Date</th>
                                <th>Total Outdoor(Range)</th>
                                <th>Total Discount(Outdoor)</th>
                                <th>Total Indoor(Range)</th>
                                <th>Total Discount(Indoor)</th> 
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{!! $starting_date !!} </td>
                                    <td>{!! $ending_date !!}</td>
                                    <td>{!! $out_amnt !!}</td>
                                    <td>{!! $out_discount !!}</td>
                                    <td>{!! $in_amnt !!}</td>
                                    <td>{!! $in_discount !!}</td>
                                </tr>
                        </tbody>
                    </table>
                    <button onclick="myFunction()" style="margin-left:1030px;">Print this page</button>
					</div>
				</div>
			</div>
	</body>
</html>