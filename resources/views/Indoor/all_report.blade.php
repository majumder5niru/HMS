@extends('master/master')
<div class="container nav">
    <div class="row">
        @include('master/navbar')    
    </div>
	<div class="row">
		<div class="col-md-12">
			<center>
                <p><h4>The Lab Aid Medical Center and Hospital</h4>
                <h5>Sonaimuri,Noakhali</h5></p>
                <h2>All Reports</h2>
            </center>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Arrival Date</th>
                        <th>Mobile</th>
                        <th>Commmision</th>
                        <th>Discount</th> 
                        <th>Total</th> 
                       <th>Discharge Date</th>
                       <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                        <tr>
                            <td>{!! $report->id !!} </td>
                            <td>{!! $report->ind_patient_id !!}</td>
                            <td><a href="{!! action('IpatientsController@show_report', $report->id) !!}">{!! ucwords($report->patient_name) !!}</a></td>
                            <td>{!! $report->gender !!}</td>
                            <td>{!! $report->age !!}</td>
                            <td>{!! $report->arrival_date !!}</td>
                            <td>{!! $report->phone_number !!}</td>
                            <td>{!! $report->commision !!}</td>
                            <td>{!! $report->discount !!}</td>
                            <td>{!! $report->total !!}</td>
                            <td>{!! $report->discharge_date !!}</td>
                            <td><a href="{!! action('IpatientsController@edit_indoor_patient_report', $report->id) !!}"><button  class=" btn-sm btn btn-primary">Edit</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
		</div>
	</div>
</div>

