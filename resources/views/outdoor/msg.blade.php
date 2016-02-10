@extends('master/master')
<div class="container nav">
	<div class="row">
		@include('master/navbar')
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3 col-md-offset-2">
			<center class = "header">
				<h2 class="msg">Insert data Please!!</h2>
			</center>
			<form action="{!! action('PatientsController@search_by_name_id') !!}" method="post">
				<center>
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
					<input type="text" name="patient_name" class="form-control" placeholder="Search"><br>
					<label class="allLabel">Patient ID</label>
					<input type="text" name="patient_id" class="form-control" placeholder="Search"><br>
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</form>
		</div>
		<div class="col-md-3 col-md-offset-1"></div>
		</center>
	</div>
</div>	
