<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>


	    <link href="{!! asset('css/datepicker.css') !!}" rel="stylesheet">
	    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
	    <script>
		    $(function(){
		        $('#datePicker')
		            .datepicker({
		            format: 'yyyy/mm/dd'
		        })
		    });
	    </script>
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
			#date{
				width:250px;
			}
			.input-group.input-append.date {
	  			width: 250px;
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
				<div class="col-md-4">
					<form action="{!! action('PatientsController@store_data') !!}" method="post">
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
									<input type="text" name="patient_name" class="form-control" value="{{Request::old('patient_name')}}" >
								</div>
								<div class="form-group">
									<label class="allLabel">Father's Name</label>
									<input type="text" name="father_name" class="form-control" value="{{Request::old('father_name')}}" >
								</div>
								<div class="form-group">
									<label class="allLabel">Consulting Dr. Name</label>
										<select class="form-control" name="consult_dr">
											<option>Select Doctor</option>
											@foreach($doctors as $doctor)
												<option value="{!! $doctor->dr_name !!}">{!! $doctor->dr_name !!}</option>
											@endforeach
										</select>	
								</div>
								
								<div class="form-group">
									<label class="allLabel">Patient Id</label>
									<input type="text" name="patient_id" class="form-control" value="{{Request::old('patient_id')}}">
								</div>
								<div class="form-group">
									<label class="allLabel">Address</label>
									<input type="text" name="address" class="form-control" value="{{Request::old('address')}}">
								</div>
								<div class="form-group">
									<label class="allLabel">Mobile</label>
									<input type="text" name="phone_number" class="form-control" value="{{Request::old('phone_number')}}">
								</div>
								<div class="form-group">
									<label class="allLabel">Gender</label>
									<div class="radio">
										<label>
									    	<input type="radio" name="gender"  value="male" id="option1"selected required>Male
									  	</label>
									  	<label>
									    	<input type="radio" name="gender"  value="female" required >Female
									  	</label>
									   	<label>
									    	<input type="radio" name="gender"  value="other" required>Others
									  </label>
									</div>
								</div>	
								<div class="form-group">
									<label class="allLabel">Age</label>
									<input type="text" name="age" class="form-control" value="{{Request::old('age')}}">
								</div>
								
							
				</div>
					<div class="col-md-4 date" id="div1">
						<div class="form-group">
							<label class="allLabel">Admission Date</label>
							<div class="input-group input-append date" id="datePicker">
	                			<input type="text" name="admission_date" class="form-control" id = "date"value="{{Request::old('admission_date')}}">
	                			<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
	            			</div>
						</div>
				
					<div class="form-group">
						<label class="allLabel">Ref.By Dr.</label>
						<input type="text" name="reffered_dr" class="form-control" value="{{Request::old('reffered_dr')}}">
					</div>
					<div class="form-group">
						<input type="hidden" name="digital_xray" value="0">
						<input type="checkbox" name="digital_xray"  value="400"> Digital X-Ray &nbsp;
						<input type="hidden" name="ultrasonogram" value="0">
						<input type="checkbox" name="ultrasonogram"  value="300"> 4D Ultrasonogram
					</div>
					<div class="form-group">
						<input type="hidden" name="ecg" value="0">
						<input type="checkbox" name="ecg"  value="800"> ECG &nbsp;
						<input type="hidden" name="digital_ecg" value="0">
						<input type="checkbox" name="digital_ecg"  value="1000"> Digital ECG	
					</div>
						<div class="form-group">
						<input type="hidden" name="endoscopy" value="0">
						<input type="checkbox" name="endoscopy"  value="1000"> Endoscopy/Colonoscopy &nbsp;
						<input type="hidden" name="blood_grouping" value="0">
						<input type="checkbox" name="blood_grouping"  value="150"> Blood Grouping
					</div>
					<div class="form-group">
						<input type="hidden" name="blood_cs" value="0">
						<input type="checkbox" name="blood_cs"  value="300"> Blood For CS &nbsp;
						<input type="hidden" name="blood_cbc" value="0">
						<input type="checkbox" name="blood_cbc"  value="350"> Blood For CBC
					</div>
					
					<div class="form-group">
						<input type="hidden" name="urine" value="0">
						<input type="checkbox" name="urine"  value="200"> Urine Test &nbsp;
						<input type="hidden" name="hbs_normal" value="0">
						<input type="checkbox" name="hbs_normal"  value="250"> HBS Ag(Normal)
					</div>
					
					<div class="form-group">
						<input type="hidden" name="ct_scan" value="0">
						<input type="checkbox" name="ct_scan"  value="1000"> CT Scan &nbsp;
						<input type="hidden" name="stool" value="0">
						<input type="checkbox" name="stool"  value="450"> Stool Test
					</div>
					<div class="form-group">
						<label class="allLabel">Commision(%)</label>
						<input type="number" name="commision" class="form-control" value="{{Request::old('commision')}}">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				</form>
			</div>
		</div>
		</div>
	</body>	
</html>