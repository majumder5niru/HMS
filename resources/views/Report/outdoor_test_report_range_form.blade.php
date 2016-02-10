@extends('master/master')
	
		<div class="container nav">
			<div class="row">
				@include('master/navbar')
			</div>
		<div class="row">
			<div class="col-md-6">
				<form action="{!! action('ReportsController@outdoor_test_summary_range') !!}" method="post">
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
			<div class="col-md-3 col-md-offset-5">	
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

