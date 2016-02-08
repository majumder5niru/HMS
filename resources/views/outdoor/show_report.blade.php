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
					<div class="col-md-4">
						<p>Pateint Name : {!!ucwords($patient->patient_name)!!}</p><br>
						<p>Father's Name : {!!$patient->father_name!!}</p><br>
						<p>Consulting Dr. Name : {!!$patient->consult_dr!!}</p><br>
						<p>Pateint ID : {!!$patient->patient_id!!}</p><br>
						<p>Address : {!!$patient->address!!}</p><br>
						<p>Mobile : {!!$patient->phone_number!!}</p><br>
						<p>Gender : {!!$patient->gender!!}</p><br>
						<p>Age : {!!$patient->age!!}</p><br>
						
					</div>
					<div class="col-md-4">
						<p>Admission Date : {!!$patient->admission_date!!}</p><br>
						<p>Ref.By Dr. : {!!$patient->reffered_dr!!}</p><br>
						<p>Digital X-Ray : {!!$patient->digital_xray!!} Tk.</p><br>
						<p>4D Ultrasonogram : {!!$patient->ultrasonogram!!} Tk.</p><br>
						<p>ECG : {!!$patient->ecg!!} Tk.</p><br>
						<p>Digital ECG : {!!$patient->digital_ecg!!} Tk.</p><br>
						<p>Endoscopy/Colonoscopy : {!!$patient->endoscopy!!} Tk.</p><br>
						<p>Blood Grouping : {!!$patient->blood_grouping!!} Tk.</p><br>
						
					</div>
					<div class="col-md-4">
						<p>Blood For CS : {!!$patient->blood_cs!!} Tk.</p><br>
						<p>Blood For CBC : {!!$patient->blood_cbc!!} Tk.</p><br>
						<p>Urine Test : {!!$patient->urine!!} Tk.</p><br>
						<p>HBS Ag(Normal) : {!!$patient->hbs_normal!!} Tk.</p><br>
						<p>Stool Test : {!!$patient->stool!!} Tk.</p><br>
						<p>Commision : {!!$patient->commision!!}%</p><br>
						<p>Discount : {!! $commision_amount !!} Tk.</p><br>
						<p>Total Bill : {!!$total!!} Tk.</p><br>
						<button onclick="myFunction()">Print this page</button><br><br>
					</div>
				</div>
			</div>
	</body>
</html>