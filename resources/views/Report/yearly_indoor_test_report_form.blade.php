@extends('master/master')
	
		<div class="container nav">
			<div class="row">
				@include('master/navbar')
			</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-5">
				<form action="{!! action('ReportsController@summary_indoor_report_yearly') !!}" method="post">
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
			
		</div>	
	</div>

