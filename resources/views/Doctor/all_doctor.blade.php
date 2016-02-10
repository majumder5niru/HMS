@extends('master/master')
<div class="container nav">
    <div class="row">
        @include('master/navbar') 
    </div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<center>
                <p><h4>The Lab Aid Medical Center and Hospital</h4>
                <h5>Sonaimuri,Noakhali</h5></p>
                <h2>All Doctors</h2>
            </center>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Doctor ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Designation</th>
                        <th>Mobile</th> 
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{!! $doctor->id !!} </td>
                            <td>{!! $doctor->dr_id !!}</td>
                            <td><a href="{!! action('DoctorsController@show_info', $doctor->dr_id) !!}">{!! $doctor->dr_name !!}</a></td>
                            <td>{!! $doctor->gender !!}</td>
                            <td>{!! $doctor->designation!!}</td>
                            <td>{!! $doctor->phone_number !!}</td> 
                            <td><a href="{!! action('DoctorsController@edit_doctor', $doctor->dr_id) !!}"><button  class=" btn-sm btn btn-primary">Edit</button></a></td>
                            <td><a href="{!! action('DoctorsController@delete_doctor', $doctor->dr_id) !!}" onclick='return check()'><button  class="btn-sm btn btn-danger " >Delete</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
		</div>
	
	</div>
</div>
