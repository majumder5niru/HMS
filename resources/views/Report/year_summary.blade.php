@extends('master/master')
<div class="container nav">
	<div class="row">
		@include('master/navbar')
	</div>
	<div class="row">
		<center>
			<p><h4>The Lab Aid Medical Center and Hospital</h4>
            <h5>Sonaimuri,Noakhali</h5></p>
			<h2> Yearly Bill Report({!! $year !!})</h2>
		</center>
		<div class="col-md-12">
			<table class="table">
            <thead>
                <tr>
                	<th>Month</th>
                    <th>Total(Outdoor)</th>
                    <th>Discoutn(Outdoor)</th>
                    <th>Total(Indoor)</th>  
                    <th>Discount(Indoor)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($outdoors as $index=>$outdoor)
                    <tr>
                    	<td>{!! $months[$index] !!}</td>
                        <td>{!! $outdoor !!}</td>
                        <td>{!! $out_discounts[$index] !!}</td>
                        <td>{!! $indoors[$index] !!}</td>
                        <td>{!! $in_discounts[$index] !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button onclick="myFunction()" class="pull-right">Print this page</button>
		</div>
	</div>
</div>
