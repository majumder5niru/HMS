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
                        <h5>Sonaimmuri,Noakhali</h5></p>
						<h2>Bill Report</h2>
					</center>
					<div class="col-md-12">
						<table class="table">
							<tr>
								<td class="info">Pateint Name</td>
								<td class="success">{!!ucwords($patient->patient_name)!!}</td>
								<td class="info">Father's Name</td>
								<td class="success">{!!$patient->father_name!!}</td>
							</tr>
							<tr>
								<td class="info">Consulting Dr. Name</td>
								<td class="success">{!!$patient->consult_dr!!}</td>
								<td class="info">Pateint ID</td>
								<td class="success">{!!$patient->patient_id!!}</td>
							</tr>
							<tr>
								<td class="info">Address</td>
								<td class="success">{!!$patient->address!!}</td>
								<td class="info">Mobile</td>
								<td class="success">{!!$patient->phone_number!!}</td>
							</tr>
							<tr>
								<td class="info">Gender</td>
								<td class="success">{!!$patient->gender!!}</td>
								<td class="info">Age</td>
								<td class="success">{!!$patient->age!!}</td>
							</tr>
							<tr>
								<td class="info">Admission Date</td>
								<td class="success">{!!$patient->admission_date!!}</td>
								<td class="info">Ref.By Dr.</td>
								<td class="success">{!!$patient->reffered_dr!!}</td>
							</tr>
							<tr>
								<td class="info">Digital X-Ray</td>
								<td class="success">{!!$patient->digital_xray!!} Tk.</td>
								<td class="info">4D Ultrasonogram</td>
								<td class="success">{!!$patient->ultrasonogram!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">ECG</td>
								<td class="success">{!!$patient->ecg!!} Tk.</td>
								<td class="info">Digital ECG</td>
								<td class="success">{!!$patient->digital_ecg!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Endoscopy/Colonoscopy</td>
								<td class="success">{!!$patient->endoscopy!!} Tk.</td>
								<td class="info">Blood Grouping</td>
								<td class="success">{!!$patient->blood_grouping!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Blood For CS</td>
								<td class="success">{!!$patient->blood_cs!!} Tk.</td>
								<td class="info">Blood For CBC</td>
								<td class="success">{!!$patient->blood_cbc!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Urine Test</td>
								<td class="success">{!!$patient->urine!!} Tk.</td>
								<td class="info">HBS Ag(Normal)</td>
								<td class="success">{!!$patient->hbs_normal!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">CT Scan</td>
								<td class="success">{!!$patient->ct_scan!!} Tk.</td>
								<td class="info">Stool Test</td>
								<td class="success">{!!$patient->stool!!} Tk.</td>
							</tr>
							<tr>
								<td class="info">Commision</td>
								<td class="success">{!!$commision!!}%</td>
								<td class="info">Discount</td>
								<td class="success">{!! $commision_amount !!} Tk.</td>
							</tr>
							<tr>
								<td class="info"></td>
								<td class="success"></td>
								<td class="info">Total Bill</td>
								<td class="success">{!!$total!!} Tk.</td>
							</tr>
						</table>
							<button onclick="myFunction()" style="margin-left:1030px;">Print this page</button><br><br>
					</div>
				</div>
			</div>
	</body>
</html>