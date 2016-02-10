@extends('master/master')
<div class="container nav">
	<div class="row">
		@include('master/navbar')
	</div>
	<div class="row">
		<div class="col-md-4"></div>
			<div class="col-md-3 col-md-offset-1">
				<center class = "header">
						<h2>The Lab Aid Medical Center and Hospital</h2>
						<h3>Sonaimuri,Noakhali</h3><br><br>
					</center>
					<center>
					<form action="{!! action('PatientsController@search_by_name_id') !!}" method="post">
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
								<input type="text" name="patient_name" class="form-control" placeholder="Search" ><br>
								<label class="allLabel">Patient ID</label>
								<input type="text" name="patient_id" class="form-control" placeholder="Search"><br>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Search</button>
							</div>
					</form>	
			</div>
			<div class="col-md-3 col-md-offset-1"></div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<center>
                <h2 style="color:#CD5C5C">Outdoor Patients</h2>
            </center>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Patient ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Visiting Date</th>
                            <th>Mobile</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_data as $data)
                            <tr>
                                <td>{!! $data->id !!} </td>
                                <td>{!! $data->patient_id !!}</td>
                                <td>{!! ucwords($data->patient_name)!!}</td>
                                <td>{!! $data->gender !!}</td>
                                <td>{!! $data->age !!}</td>
                                <td>{!! $data->admission_date !!}</td>
                                <td>{!! $data->phone_number !!}</td>	
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                
		</div>
		<div class="col-md-6">
			<center>
                <h2 style="color:#CD5C5C">Indoor Patients</h2>
            </center>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Patient ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Visiting Date</th>
                           <th>Mobile</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($all as $data)
                            <tr>
                                <td>{!! $data->id !!} </td>
                                <td>{!! $data->ind_patient_id !!}</td>
                                <td>{!! ucwords($data->patient_name) !!}</td>
                                <td>{!! $data->gender !!}</td>
                                <td>{!! $data->age !!}</td>
                                <td>{!! $data->arrival_date !!}</td>
                                <td>{!! $data->phone_number !!}</td>	
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button onclick="myFunction()" class="pull-right">Print this page</button><br><br>
		</div>
	</div>
</div>
