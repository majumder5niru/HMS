@extends('master/master')
	
		<div class="container nav">
			<div class="row">
				@include('master/navbar')
			</div>
		<div class="row">
			<div class="col-md-3">
				<form action="{!! action('PatientsController@update_report',$report->patient_id) !!}" method="post">
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
								<label class="allLabel">Patient Name*</label>
								<input type="text" name="patient_name" class="form-control" value="{!! $report->patient_name !!}" required>
							</div>
							<div class="form-group">
								<label class="allLabel">Father's Name</label>
								<input type="text" name="father_name" class="form-control" value="{!! $report->father_name !!}" >
							</div>
							<div class="form-group">
								<label class="allLabel">Patient Id*</label>
								<input type="text" name="patient_id" class="form-control" value="{!! $report->patient_id !!}" required>
							</div>
							<div class="form-group">
								<label class="allLabel">Consulting Dr. Name</label>
									<select class="form-control" name="consult_dr">
										<option value="{!! $report->consult_dr !!}">{!! $report->consult_dr !!}</option>
										@foreach($doctors as $doctor)
											<option value="{!! $doctor->dr_name !!}">{!! $doctor->dr_name !!}</option>
										@endforeach
									</select>	
							</div>
							<div class="form-group">
								<label class="allLabel">Address</label>
								<input type="text" name="address" class="form-control" value="{!! $report->address !!}" >
							</div>
							<div class="form-group">
								<label class="allLabel">Mobile</label>
								<input type="text" name="phone_number" class="form-control" value="{!! $report->phone_number !!}" >
							</div>
							<div class="form-group">
								<label class="allLabel">Gender</label>
								<div class="radio">
									<label>
								    <input type="radio" name="gender"  value="Male" <?php if($gender== "Male") { echo 'checked="checked"'; } ?>>Male
								  	</label>
								  	<label>
								    	<input type="radio" name="gender"  value="Female" <?php if($gender== "Female") { echo 'checked="checked"'; } ?>>Female
								  	</label>
								   	<label>
								    	<input type="radio" name="gender"  value="Otehr" <?php if($gender== "Other") { echo 'checked="checked"'; } ?>>Others
								  </label>
								</div>
							</div>	
							<div class="form-group">
								<label class="allLabel">Age</label>
								<input type="text" name="age" class="form-control" value="{!! $report->age !!}" >
							</div>
							<div class="form-group">
								<label class="allLabel">Admission Date*</label>
								<div class="input-group input-append date" id="datePicker">
		                			<input type="text" name="admission_date" class="form-control" id = "date" value="{!! $report->admission_date !!}" required>
		                			<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
		            			</div>
							</div>
							<div class="form-group">
								<label class="allLabel">Reffred Dr.</label>
								<input type="text" name="reffered_dr" class="form-control" value="{!! $report->reffered_dr !!}" >
							</div>		
			</div>
			<div class="col-md-3 col-md-offset-3" id="div1">
				<div class="form-group">
					<input type="hidden" name="digital_xray" value="0">
					<input type="checkbox" name="digital_xray"  value="400" <?php if($xray== "400") { echo 'checked="checked"'; } ?>> Digital X-Ray &nbsp;
					<input type="hidden" name="ultrasonogram" value="0">
					<input type="checkbox" name="ultrasonogram"  value="300" <?php if($ultra== "300") { echo 'checked="checked"'; } ?>> 4D Ultrasonogram
				</div>
				<div class="form-group">
					<input type="hidden" name="ecg" value="0">
					<input type="checkbox" name="ecg"  value="800" <?php if($ecg== "800") { echo 'checked="checked"'; } ?>> ECG &nbsp;
					<input type="hidden" name="digital_ecg" value="0">
					<input type="checkbox" name="digital_ecg"  value="1000" <?php if($decg== "1000") { echo 'checked="checked"'; } ?>> Digital ECG	
				</div>
				<div class="form-group">
					<input type="hidden" name="endoscopy" value="0">
					<input type="checkbox" name="endoscopy"  value="1000" <?php if($endoccopy== "1000") { echo 'checked="checked"'; } ?>> Endoscopy/Colonoscopy &nbsp;
					<input type="hidden" name="blood_grouping" value="0">
					<input type="checkbox" name="blood_grouping"  value="150" <?php if($bloodgrp== "150") { echo 'checked="checked"'; } ?>> Blood Grouping
				</div>
				<div class="form-group">
					<input type="hidden" name="blood_cs" value="0">
					<input type="checkbox" name="blood_cs"  value="300" <?php if($bloodcs== "300") { echo 'checked="checked"'; } ?>> Blood For CS &nbsp;
					<input type="hidden" name="blood_cbc" value="0">
					<input type="checkbox" name="blood_cbc"  value="350" <?php if($bloodcbc== "350") { echo 'checked="checked"'; } ?>> Blood For CBC
				</div>
				
				<div class="form-group">
					<input type="hidden" name="urine" value="0">
					<input type="checkbox" name="urine"  value="200" <?php if($urine== "200") { echo 'checked="checked"'; } ?>> Urine Test &nbsp;
					<input type="hidden" name="hbs_normal" value="0">
					<input type="checkbox" name="hbs_normal"  value="250" <?php if($hbsnrmal== "250") { echo 'checked="checked"'; } ?>> HBS Ag(Normal)
				</div>
				
				<div class="form-group">
					<input type="checkbox" name="ct_scan"  value="1000" <?php if($ctscan== "1000") { echo 'checked="checked"'; } ?>> CT Scan &nbsp;
					<input type="hidden" name="stool" value="0">
					<input type="checkbox" name="stool"  value="450" <?php if($stool== "450") { echo 'checked="checked"'; } ?>> Stool Test
				</div><br>
				<div class="form-group">
					<label class="allLabel">Commision(%)</label>
					<input type="number" name="commision" class="form-control" value="{!! $report->commision !!}">
				</div>
				<div class="form-group">
					<button type="submit"  class="btn btn-primary">Update</button>	
				</div>
			</div>
			</form>
			
		</div>
	</div>

	