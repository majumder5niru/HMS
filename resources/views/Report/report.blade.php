@extends('master/master')
<div class="container nav">
	<div class="row">
		@include('master/navbar')
	</div>
	<div class="row">
		<center>
			<p><h4>The Lab Aid Medical Center and Hospital</h4>
            <h5>Sonaimuri,Noakhali</h5></p>
			<h2>Total Bill Report({!!$month!!},{!!$year!!})</h2>
		</center>

		<div class="col-md-7 col-md-offset-3">
			<table class="table">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Total Outdoor(Month)</th>
                    <th>Total Discount(Outdoor)</th>
                    <th>Total Indoor(Month)</th>
                    <th>Total Discount(Indoor)</th> 
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{!! $month !!} </td>
                        <td>{!! $year !!}</td>
                        <td>{!! $total_outdoor !!}</td>
                        <td>{!! $discount_outdoor !!}</td>
                        <td>{!! $total_indoor !!}</td>
                        <td>{!! $discount_indoor !!}</td>
                    </tr>
            </tbody>
        </table>
        <button onclick="myFunction()" class="pull-right">Print this page</button><br><br>
		</div>
	</div>
</div>
