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
                        <h2>Indoor Test Bill({!!$year!!})</h2>
                    </center>
					<div class="col-md-12">
						<table class="table">
                        <thead>
                            <tr>
                            	<th>Month</th>
                                <th>Digital X-Ray</th>
                                <th>Ultra</th>
                                <th>Ecg</th>  
                                <th>Digital Ecg</th>
                                <th>Endoscopy</th>
                                <th>Blood Grouping</th>
                                <th>Blood CS</th>
                                <th>Blood CBC</th>  
                                <th>Urine</th>
                                <th>HBS Ag(Normal)</th>
                                <th>CT Scan</th>
                                <th>Stool</th>
                                <th>Operation</th>
                                <th>Dr.</th>  
                                <th>Service</th>
                                <th>Medicine</th>
                                <th>Cabin</th>
                                <th>Other's</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($xrays as $index=>$xray)
                                <tr>
                                	<td>{!! $months[$index] !!}</td>
                                    <td>{!! $xray !!}</td>
                                    <td>{!! $ultras[$index] !!}</td>
                                    <td>{!! $ecgs[$index] !!}</td>
                                    <td>{!! $digital_ecgs[$index] !!}</td>
                                    <td>{!! $endos[$index] !!}</td>
                                    <td>{!! $blood_groups[$index] !!}</td>
                                    <td>{!! $blood_css[$index] !!}</td>
                                    <td>{!! $blood_cbcs[$index] !!}</td>
                                    <td>{!! $urines[$index] !!}</td>
                                    <td>{!! $hbs_ags[$index] !!}</td>
                                    <td>{!! $cts[$index] !!}</td>
                                    <td>{!! $stools[$index] !!}</td>
                                    <td>{!! $operations[$index] !!}</td>
                                    <td>{!! $drs[$index] !!}</td>
                                    <td>{!! $services[$index] !!}</td>
                                    <td>{!! $medicines[$index] !!}</td>
                                    <td>{!! $cabins[$index] !!}</td>
                                    <td>{!! $others[$index] !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button onclick="myFunction()" style="margin-left:1030px;">Print this page</button>
					</div>
				</div>
			</div>
	</body>
</html>