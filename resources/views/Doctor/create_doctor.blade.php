@extends('master/master')
	
		<div class="container nav">
			<div class="row">
				@include('master/navbar')
			</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<form action="{!! action('DoctorsController@store_data') !!}" method="post">
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
						<label class="allLabel">Dr. Name</label>
						<input type="text" name="dr_name" class="form-control" value="{{Request::old('dr_name')}}" >
					</div>
					<div class="form-group">
						<label class="allLabel">Dr. ID</label>
						<input type="text" name="dr_id" class="form-control" value="{{Request::old('dr_id')}}" >
					</div>
					<div class="form-group">
						<label class="allLabel">Designation</label>
						<textarea type="text" name="designation" class="form-control" >{{Request::old('designation')}}</textarea>
					</div>
					<div class="form-group">
						<label class="allLabel">Address</label>
						<input type="text" name="address" class="form-control" value="{{Request::old('address')}}">
					</div>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<div class="form-group">
					<label class="allLabel">Mobile</label>
					<input type="text" name="phone_number" class="form-control" value="{{Request::old('phone_number')}}">
				</div>
				<div class="form-group">
					<label class="allLabel">Gender</label>
					<div class="radio">
						<label>
							<input type="radio" name="gender"  value="Male" id="option1"selected required <?php if(Request::old('gender')== "Male") { echo 'checked="checked"'; } ?>>Male
						</label>
						<label>
							<input type="radio" name="gender"  value="Female" required <?php if(Request::old('gender')== "Female") { echo 'checked="checked"'; } ?>>Female
						</label>
						<label>
							<input type="radio" name="gender"  value="Other" required <?php if(Request::old('gender')== "other") { echo 'checked="checked"'; } ?>>Others
						</label>
					</div>
				</div>	
				<div class="form-group">
					<label class="allLabel">About Dr.</label>
					<textarea type="text" name="about_dr" class="form-control" >{{Request::old('about_dr')}}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>		
			</div>
			
		</div>	
	</div>

