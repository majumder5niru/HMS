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
						<h2>Monthly Indoor Test Report (Month:{!!$month!!})</h2><br>
					</center>
					<div class="col-md-12">
						<table class="table">
							<tr>
								<td class="info">Year</td>
								<td class="success">{!!$year!!}</td>
								<td class="info">Month</td>
								<td class="success">{!!$month!!}</td>
							</tr>
							<tr>
								<td class="info">Digital X-Ray </td>
								<td class="success">{!!$xray!!} Tk.</td>
								<td class="info">Ultrasonogram</td>
								<td class="success">{!!$ultrasonogram!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Ecg</td>
								<td class="success">{!!$ecg!!} Tk.</td>
								<td class="info">Digital Ecg</td>
								<td class="success">{!!$digital_ecg!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Endoscopy</td>
								<td class="success">{!!$endoscopy!!} Tk.</td>
								<td class="info">Blood Grouping</td>
								<td class="success">{!!$blood_grouping!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Blood For CBC</td>
								<td class="success">{!!$blood_cbc!!} Tk.</td>
								<td class="info">Blood For CS</td>
								<td class="success">{!!$blood_cs!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Urine</td>
								<td class="success">{!!$urine!!} Tk.</td>
								<td class="info">HBS Normal</td>
								<td class="success">{!!$hbs_normal!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">CT Scan</td>
								<td class="success">{!!$ct_scan!!} Tk.</td>
								<td class="info">Stool</td>
								<td class="success">{!!$stool!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Operation Bill</td>
								<td class="success">{!!$operation_bill!!} Tk.</td>
								<td class="info">Dr. Bill</td>
								<td class="success">{!!$dr_bill!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Service Bill</td>
								<td class="success">{!!$service_bill!!} Tk.</td>
								<td class="info">Medicine Bill</td>
								<td class="success">{!!$medicine_bill!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Cabin Bill</td>
								<td class="success">{!!$cabin_bill!!} Tk.</td>
								<td class="info">Other's Bill</td>
								<td class="success">{!!$others_bill!!} Tk.</td>
							</tr>
						</table>
						<button onclick="myFunction()" class="pull-right">Print this page</button>
					</div>
				</div>
			</div>
	</body>
</html>