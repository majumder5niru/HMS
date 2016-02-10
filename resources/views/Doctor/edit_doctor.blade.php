@extends('master/master')
			<div class="container nav">
			<div class="row">
				@include('master/navbar')
			</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<form action="{!! action('DoctorsController@update_dr_info',$doctor->dr_id) !!}" method="post">
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
						<input type="text" name="dr_name" class="form-control" value="{!! $doctor->dr_name !!}" >
					</div>
					<div class="form-group">
						<label class="allLabel">Dr. ID</label>
						<input type="text" name="dr_id" class="form-control" value="{!! $doctor->dr_id !!}" >
					</div>
					<div class="form-group">
						<label class="allLabel">Designation</label>
						<textarea type="text" name="designation" class="form-control" >{!! $doctor->designation !!}</textarea>
					</div>
					<div class="form-group">
						<label class="allLabel">Address</label>
						<input type="text" name="address" class="form-control" value="{!! $doctor->address !!}">
					</div>
			</div>
			<div class="col-md-3 col-md-offset-1">
			
				<div class="form-group">
					<label class="allLabel">Mobile</label>
					<input type="text" name="phone_number" class="form-control" value="{!! $doctor->phone_number!!}">
				</div>
				<div class="form-group">
					<label class="allLabel">Gender</label>
					<div class="radio">
						<label>
							<input type="radio" name="gender"  value="Male" id="option1" <?php if($gender == "Male") { echo 'checked="checked"'; } ?>>Male
						</label>
						<label>
							<input type="radio" name="gender"  value="Female" <?php if($gender == "Female") { echo 'checked="checked"'; } ?> >Female
						</label>
						<label>
							<input type="radio" name="gender"  value="Other" <?php if($gender == "Other") { echo 'checked="checked"'; } ?>>Others
						</label>
					</div>
				</div>	
				<div class="form-group">
					<label class="allLabel">About Dr.</label>
					<textarea type="text" name="about_dr" class="form-control" >{!! $doctor->about_dr !!}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
				</form>		
			</div>
			
		</div>	
	</div>

