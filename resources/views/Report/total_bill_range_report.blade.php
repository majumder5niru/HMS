@extends('master/master')
<div class="container nav">
<div class="row">
	@include('master/navbar')
</div>
	<div class="row">
		<center>
			<p><h4>The Lab Aid Medical Center and Hospital</h4>
            <h5>Sonaimuri,Noakhali</h5></p>
			<h2>Total Bill Report({!!$starting_date!!} to {!!$ending_date!!})</h2><br>
		</center>
		<div class="col-md-8 col-md-offset-3">
			<table class="table">
            <thead>
                <tr>
                    <th>Starting Date</th>
                    <th>Ending Date</th>
                    <th>Total Outdoor(Range)</th>
                    <th>Total Discount(Outdoor)</th>
                    <th>Total Indoor(Range)</th>
                    <th>Total Discount(Indoor)</th> 
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{!! $starting_date !!} </td>
                        <td>{!! $ending_date !!}</td>
                        <td>{!! $out_amnt !!}</td>
                        <td>{!! $out_discount !!}</td>
                        <td>{!! $in_amnt !!}</td>
                        <td>{!! $in_discount !!}</td>
                    </tr>
            </tbody>
        </table>
        <button onclick="myFunction()" class="pull-right">Print this page</button>
		</div>
	</div>
</div>
