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
	    <script>
		    $(function(){
		        $('#datePicker1')
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
					        <li><a href = "{!! action('ReportsController@yearly_report') !!}">Yearly Report(Both) </a></li>
					        <li><a href = "{!! action('ReportsController@monthly_outdoor_test_report') !!}">Outdoor Test Report(Monthly) </a></li>
					        <li><a href = "{!! action('ReportsController@monthly_indoor_test_report') !!}">Indoor Test Report(Monthly) </a></li>
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
				<div class="col-md-6">
					<form action="{!! action('ReportsController@indoor_test_summary_range') !!}" method="post">
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
					
				</div>
				<div class="col-md-6">	
					<div class="form-group">
						<label class="allLabel">From</label>
						<div class="input-group input-append date" id="datePicker">
	                		<input type="text" name="starting_date" class="form-control" id = "date"value="{{Request::old('starting_date')}}">
	                		<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
	            		</div>
					</div>
					<div class="form-group">
						<label class="allLabel">To</label>
						<div class="input-group input-append date" id="datePicker1">
	                		<input type="text" name="ending_date" class="form-control" id = "date"value="{{Request::old('ending_date')}}">
	                		<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
	            		</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>	
					</form>	
				</div>
			</div>	
		</div>
	</div>
	
	</body>	
</html>