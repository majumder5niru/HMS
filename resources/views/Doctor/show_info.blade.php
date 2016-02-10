@extends('master/master')
<div class="container nav">
	<div class="row">
		@include('master/navbar')
	</div>
	<div class="row">
		<center>
			<p><h4>The Lab Aid Medical Center and Hospital</h4>
			<h5>Sonaimuri,Noakhali</h5></p><h2>Doctor's Information</h2><br>
		</center>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table">
				<tr>
					<td class="info">Doctor's Name</td>
					<td class="success">{!!$doctor->dr_name!!}</td>
					<td class="info">Doctor's ID</td>
					<td class="success">{!!$doctor->dr_id!!}</td>
				</tr>
				<tr>
					<td class="info">Designation </td>
					<td class="success">{!!$doctor->designation!!}</td>
					<td class="info">Address</td>
					<td class="success">{!!$doctor->address!!}</td>
				</tr>
				<tr>
					<td class="info">Mobile</td>
					<td class="success">{!!$doctor->phone_number!!}</td>
					<td class="info">Gender</td>
					<td class="success">{!!$doctor->gender!!}</td>
				</tr>
				<tr>
					<td class="info">About Dr.</td>
					<td class="success">{!!$doctor->about_dr!!}</td>
					<td class="info"></td>
					<td class="success"></td>
				</tr>
			</table>
		</div>
		
	</div>
</div>
