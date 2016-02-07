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
						<h2>Outdoor Test Balance({!!$start_date!!} to {!!$end_date!!})</h2>
					</center><br><br>
					<div class="col-md-6">
						<p>Starting Date : {!!$start_date!!} </p><br>
						<p>Ending Date : {!!$end_date!!} </p><br>
						<p>Digital X-Ray : {!!$xray!!} Tk.</p><br>
						<p>Ultrasonogram : {!!$ultrasonogram!!} Tk.</p><br>
						<p>Ecg : {!!$ecg!!} Tk.</p><br>
						<p>Digital Ecg : {!!$digital_ecg!!} Tk.</p><br>
						<p>Endoscopy : {!!$endoscopy!!} Tk.</p><br>
					</div>
					<div class="col-md-6">
						<p>Blood Grouping : {!!$blood_grouping!!} Tk.</p><br>
						<p>Blood For CBC : {!!$blood_cbc!!} Tk.</p><br>
						<p>Blood For CS : {!!$blood_cs!!} Tk.</p><br>
						<p>Urine : {!!$urine!!} Tk.</p><br>
						<p>HBS Normal : {!!$hbs_normal!!} Tk.</p><br>
						<p>CT Scan : {!!$ct_scan!!} Tk.</p><br>
						<p>Stool : {!!$stool!!} Tk.</p><br>
						<button onclick="myFunction()" >Print this page</button>
					</div>
				</div>
			</div>
	</body>
</html>