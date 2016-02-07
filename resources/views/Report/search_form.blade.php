<!DOCTYPE HTml>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap.min.css') !!}">
	    
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
					      	<li><a href = "{!! action('IpatientsController@show_all_report') !!}">Indoor Patient List </a></li>
					      	<li><a href = "{!! action('DoctorsController@show_all_dr') !!}">Doctor's List </a></li>
					        <li><a href = "{!! action('ReportsController@yearly_report') !!}">Yearly Report(Both) </a></li>
					        <li><a href = "{!! action('ReportsController@total_bill_in_range') !!}">Total Bill(Range) </a></li>
					        <li><a href = "{!! action('ReportsController@monthly_outdoor_test_report') !!}">Outdoor Test Report(Monthly) </a></li>
					        <li><a href = "{!! action('ReportsController@monthly_indoor_test_report') !!}">Indoor Test Report(Monthly) </a></li>
					        <li><a href = "{!! action('ReportsController@outdoor_test_report_range') !!}">Outdoor Test Report(Range) </a></li>
					        <li><a href = "{!! action('ReportsController@indoor_test_report_range') !!}">Indoor Test Report(Range) </a></li>
					        <li><a href = "{!! action('ReportsController@yearly_outdoor_test_report') !!}">Outdoor Test Report(Yearly) </a></li>
					        <li><a href = "{!! action('ReportsController@yearly_indoor_test_report') !!}">Indoor Test Report(Yearly) </a></li>
					         <li><a href="#">Log Out </a></li>
					      </ul>
					    </div>
					  </div>
					</nav>
				</div>
			<div class="row">
				<div class="col-md-6">
					<form action="{!! action('ReportsController@search_option') !!}" method="post">
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
							<label class="allLabel">Month</label>
								<select class="form-control" name="month">

									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>	
						</div>
						<div class="form-group">
							<label class="allLabel">Year</label>
								<select class="form-control" name="year">
									<option>Select Year</option>
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
								</select>	
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>	
				</div>
				<div class="col-md-6"></div>
			</div>	
		</div>
	</div>
	
	</body>	
</html>