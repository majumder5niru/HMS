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
  				line-height: 7px;
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
						<h2>Bill Report</h2><br>
					</center>
					<div class="col-md-4">
						<p>Pateint Name : {!!ucwords($indoor_report->patient_name)!!}</p><br>
						<p>Father's Name : {!!$indoor_report->father_name!!}</p><br>
						<p>Consulting Dr. Name : {!!$indoor_report->consult_dr!!}</p><br>
						<p>Pateint ID : {!!$indoor_report->ind_patient_id!!}</p><br>
						<p>Address : {!!$indoor_report->address!!}</p><br>
						<p>Mobile : {!!$indoor_report->phone_number!!}</p><br>
						<p>Gender : {!!$indoor_report->gender!!}</p><br>
						<p>Age : {!!$indoor_report->age!!}</p><br>
						<p>Arrival Time : {!!$indoor_report->arrival_time!!} </p><br>
						<p>Arrival Date : {!!$indoor_report->arrival_date!!} </p><br>
						<p>Cabin No. : {!!$indoor_report->cabin_no!!}</p><br>
						<p>Bed No. : {!!$indoor_report->bed_no!!}</p><br>
						<p>Ref.By Dr. : {!!$indoor_report->reffered_dr!!}</p><br>
						
					</div>
					<div class="col-md-4">
						<p>Digital X-Ray : {!!$indoor_report->digital_xray!!} Tk.</p><br>
						<p>4D Ultrasonogram : {!!$indoor_report->ultrasonogram!!} Tk.</p><br>
						<p>ECG : {!!$indoor_report->ecg!!} Tk.</p><br>
						<p>Digital ECG : {!!$indoor_report->digital_ecg!!} Tk.</p><br>
						<p>Endoscopy/Colonoscopy : {!!$indoor_report->endoscopy!!} Tk.</p><br>
						<p>Blood Grouping : {!!$indoor_report->blood_grouping!!} Tk.</p><br>
						<p>Blood For CS : {!!$indoor_report->blood_cs!!} Tk.</p><br>
						<p>Blood For CBC : {!!$indoor_report->blood_cbc!!} Tk.</p><br>
						<p>Urine Test : {!!$indoor_report->urine!!} Tk.</p><br>
						<p>HBS Ag(Normal) : {!!$indoor_report->hbs_normal!!} Tk.</p><br>
						<p>CT Scan : {!!$indoor_report->ct_scan!!} Tk.</p><br>
						<p>Stool Test : {!!$indoor_report->stool!!} Tk.</p><br>
						
					</div>
					<div class="col-md-4">
						<p>Operation Bill : {!!$indoor_report->operation_bill!!} Tk.</p><br>
						<p>Dr. Bill : {!!$indoor_report->dr_bill!!} Tk.</p><br>
						<p>Service Bill : {!!$indoor_report->service_bill!!} Tk.</p><br>
						<p>Medicine Bill : {!!$indoor_report->medicine_bill!!} Tk.</p><br>
						<p>Cabin Bill : {!!$indoor_report->cabin_bill!!} Tk.</p><br>
						<p>Other's Bill : {!!$indoor_report->others_bill!!} Tk.</p><br>
						<p>Discharge Time : {!!$indoor_report->discharge_time!!} </p><br>
						<p>Discharge Date : {!!$indoor_report->discharge_date!!} </p><br>
						<p>Commision : {!!$indoor_report->commision!!}%</p><br>
						<p>Discount : {!! $commision_amount !!} Tk.</p><br>
						<p>Total Bill : {!!$total!!} Tk.</p><br>
						<button onclick="myFunction()">Print this page</button><br><br>
					</div>
				</div>
			</div>
	</body>
</html>