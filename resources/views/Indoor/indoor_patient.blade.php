@extends('master/master')
	
		<div class="container nav">
		<div class="row">
			@include('master/navbar')
		</div>
		<div class="row">
			<div class="col-md-3">
				<form action="{!! action('IpatientsController@store_data') !!}" method="post">
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
								<label class="allLabel">Patient Id*</label>
								<input type="text" name="ind_patient_id" class="form-control" value="{{Request::old('ind_patient_id')}}">
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
								    	<input type="radio" name="gender"  value="Male" id="option1"selected required <?php if(Request::old('gender')== "Male") { echo 'checked="checked"'; } ?>>Male
								  	</label>
								  	<label>
								    	<input type="radio" name="gender"  value="Female" required <?php if(Request::old('gender')== "Female") { echo 'checked="checked"'; } ?>>Female
								  	</label>
								   	<label>
								    	<input type="radio" name="gender"  value="Other" required <?php if(Request::old('gender')== "Other") { echo 'checked="checked"'; } ?>>Others
								  </label>
								</div>
							</div>	
							<div class="form-group">
								<label class="allLabel">Age</label>
								<input type="text" name="age" class="form-control" value="{{Request::old('age')}}">
							</div>
							<div class="form-group">
								<label class="allLabel">Cabin No.</label>
									<select class="form-control" name="cabin_no">
										<option>Select Cabin</option>
										<option value="cabin-001">cabin-001</option>
										<option value="cabin-002">cabin-002</option>
										<option value="cabin-003">cabin-003</option>
										<option value="cabin-004">cabin-004</option>
										<option value="cabin-005">cabin-005</option>
										<option value="cabin-006">cabin-006</option>
										<option value="cabin-007">cabin-007</option>
										<option value="cabin-008">cabin-008</option>
										<option value="cabin-009">cabin-009</option>
										<option value="cabin-010">cabin-010</option>
									</select>	
							</div>
							<div class="form-group">
								<label class="allLabel">Bed No.</label>
									<select class="form-control" name="bed_no">
										<option>Select Bed</option>
										<option value="bed-c11">bed-c11</option>
										<option value="bed-c12">bed-c12</option>
										<option value="bed-c21">bed-c21</option>
										<option value="bed-c22">bed-c22</option>
										<option value="bed-c31">bed-c31</option>
										<option value="bed-c32">bed-c32</option>
										<option value="bed-c41">bed-c41</option>
										<option value="bed-c42">bed-c42</option>
										<option value="bed-c51">bed-c51</option>
										<option value="bed-c52">bed-c52</option>
										<option value="bed-c61">bed-c61</option>
										<option value="bed-c62">bed-c62</option>
										<option value="bed-c71">bed-c71</option>
										<option value="bed-c72">bed-c72</option>
										<option value="bed-c81">bed-c81</option>
										<option value="bed-c82">bed-c82</option>
										<option value="bed-c91">bed-c91</option>
										<option value="bed-c92">bed-c92</option>
										<option value="bed-c101">bed-c101</option>
										<option value="bed-c102">bed-c102</option>
									</select>	
							</div>
							<div class="form-group">
								<label class="allLabel">Ref.By Dr.</label>
									<input type="text" name="reffered_dr" class="form-control" value="{{Request::old('reffered_dr')}}">
							</div>			
			</div>
			<div class="col-md-5 col-md-offset-1" id="div1" >
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="hidden" name="digital_xray" value="0">
							<input type="checkbox" name="digital_xray"  value="400" <?php if(Request::old('digital_xray')== "400") { echo 'checked="checked"'; } ?>> Digital X-Ray &nbsp;
						</div>
						<div class="form-group">
							<input type="hidden" name="ultrasonogram" value="0">
							<input type="checkbox" name="ultrasonogram"  value="300" <?php if(Request::old('ultrasonogram')== "300") { echo 'checked="checked"'; } ?>> 4D Ultrasonogram
						</div>
						<div class="form-group">
							<input type="hidden" name="ecg" value="0">
							<input type="checkbox" name="ecg"  value="800" <?php if(Request::old('ecg')== "800") { echo 'checked="checked"'; } ?>> ECG &nbsp;
						</div>
						<div class="form-group">
							<input type="hidden" name="digital_ecg" value="0">
							<input type="checkbox" name="digital_ecg"  value="1000" <?php if(Request::old('digital_ecg')== "1000") { echo 'checked="checked"'; } ?>> Digital ECG
						</div>
						<div class="form-group">
							<input type="hidden" name="endoscopy" value="0">
							<input type="checkbox" name="endoscopy"  value="1000" <?php if(Request::old('endoscopy')== "1000") { echo 'checked="checked"'; } ?>> Endoscopy/Colonoscopy &nbsp;
						</div>
						<div class="form-group">
							<input type="hidden" name="blood_grouping" value="0">
							<input type="checkbox" name="blood_grouping"  value="150" <?php if(Request::old('blood_grouping')== "150") { echo 'checked="checked"'; } ?>> Blood Grouping
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="hidden" name="blood_cs" value="0">
							<input type="checkbox" name="blood_cs"  value="300" <?php if(Request::old('blood_cs')== "300") { echo 'checked="checked"'; } ?>> Blood For CS &nbsp;
						</div>
						<div class="form-group">
							<input type="hidden" name="blood_cbc" value="0">
							<input type="checkbox" name="blood_cbc"  value="350" <?php if(Request::old('blood_cbc')== "350") { echo 'checked="checked"'; } ?>> Blood For CBC
						</div>
						<div class="form-group">
							<input type="hidden" name="urine" value="0">
							<input type="checkbox" name="urine"  value="200" <?php if(Request::old('urine')== "200") { echo 'checked="checked"'; } ?>> Urine Test &nbsp;
						</div>
						<div class="form-group">
							<input type="hidden" name="hbs_normal" value="0">
							<input type="checkbox" name="hbs_normal"  value="250" <?php if(Request::old('hbs_normal')== "250") { echo 'checked="checked"'; } ?>> HBS Ag(Normal)
						</div>
						<div class="form-group">
							<input type="hidden" name="ct_scan" value="0">
							<input type="checkbox" name="ct_scan"  value="1000" <?php if(Request::old('ct_scan')== "1000") { echo 'checked="checked"'; } ?>> CT Scan &nbsp;
						</div>
						<div class="form-group">
							<input type="hidden" name="stool" value="0">
							<input type="checkbox" name="stool"  value="450" <?php if(Request::old('stool')== "450") { echo 'checked="checked"'; } ?>> Stool Test
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div class="form-group">
					<label class="allLabel">Operation Bill</label>
					<input type="number" name="operation_bill" class="form-control" value="{{Request::old('operation_bill')}}">
				</div>
				<div class="form-group">
					<label class="allLabel">Dr. Bill</label>
					<input type="number" name="dr_bill" class="form-control" value="{{Request::old('dr_bill')}}">
				</div>
				<div class="form-group">
					<label class="allLabel">Service Bill</label>
					<input type="number" name="service_bill" class="form-control" value="{{Request::old('service_bill')}}">
				</div>
				<div class="form-group">
					<label class="allLabel">Medicine Bill</label>
					<input type="number" name="medicine_bill" class="form-control" value="{{Request::old('medicine_bill')}}">
				</div>
				<div class="form-group">
					<label class="allLabel">Cabin Bill</label>
					<input type="number" name="cabin_bill" class="form-control" value="{{Request::old('cabin_bill')}}">
				</div>
				<div class="form-group">
					<label class="allLabel">Other's Bill</label>
					<input type="number" name="others_bill" class="form-control" value="{{Request::old('others_bill')}}">
				</div>
				<div class="form-group">
					<label class="allLabel">Arrival Time</label>
					<input type="text" name="arrival_time" class="form-control" value="{{Request::old('arrival_time')}}" placeholder="07:40 PM">
				</div>
				<div class="form-group">
					<label class="allLabel">Arrival Date*</label>
					<div class="input-group input-append date" id="datePicker">
                		<input type="text" name="arrival_date" class="form-control" id = "date"value="{{Request::old('arrival_date')}}">
                		<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            		</div>
				</div>
				<div class="form-group">
					<label class="allLabel">Discharge Time</label>
					<input type="text" name="discharge_time" class="form-control" value="{{Request::old('discharge_time')}}" placeholder="07:40 PM">
				</div>
				<div class="form-group">
					<label class="allLabel">Discharge Date</label>
					<div class="input-group input-append date" id="datePicker1">
                		<input type="text" name="discharge_date" class="form-control" id = "date"value="{{Request::old('discharge_date')}}">
                		<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            		</div>
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

