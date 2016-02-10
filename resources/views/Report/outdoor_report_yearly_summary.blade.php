@extends('master/master')
<div class="container nav">
	<div class="row">
		@include('master/navbar')
	</div>
	<div class="row">
		<center>
			<p><h4>The Lab Aid Medical Center and Hospital</h4>
            <h5>Sonaimuri,Noakhali</h5></p>
			<h2>Outdoor Test Bill({!!$year!!})</h2>
		</center>
		<div class="col-md-12">
			<table class="table">
            <thead>
                <tr>
                	<th>Month</th>
                    <th>Digital X-Ray</th>
                    <th>Ultra</th>
                    <th>Ecg</th>  
                    <th>Digital Ecg</th>
                    <th>Endoscopy</th>
                    <th>Blood Grouping</th>
                    <th>Blood CS</th>
                    <th>Blood CBC</th>  
                    <th>Urine</th>
                    <th>HBS Ag(Normal)</th>
                    <th>CT Scan</th>
                    <th>Stool</th>
                </tr>
            </thead>
            <tbody>
                @foreach($xrays as $index=>$xray)
                    <tr>
                    	<td>{!! $months[$index] !!}</td>
                        <td>{!! $xray !!}</td>
                        <td>{!! $ultras[$index] !!}</td>
                        <td>{!! $ecgs[$index] !!}</td>
                        <td>{!! $digital_ecgs[$index] !!}</td>
                        <td>{!! $endos[$index] !!}</td>
                        <td>{!! $blood_groups[$index] !!}</td>
                        <td>{!! $blood_css[$index] !!}</td>
                        <td>{!! $blood_cbcs[$index] !!}</td>
                        <td>{!! $urines[$index] !!}</td>
                        <td>{!! $hbs_ags[$index] !!}</td>
                        <td>{!! $cts[$index] !!}</td>
                        <td>{!! $stools[$index] !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button onclick="myFunction()" class="pull-right">Print this page</button>
		</div>
	</div>
</div>
