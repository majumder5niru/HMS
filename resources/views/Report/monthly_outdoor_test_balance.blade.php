@extends('master/master')
<div class="container nav">
	<div class="row">
		@include('master/navbar')
	</div>
	<div class="row">
		<center>
			<p><h4>The Lab Aid Medical Center and Hospital</h4>
            <h5>Sonaimuri,Noakhali</h5></p>
			<h2>Monthly Outdoor Test Report (Month:{!!$month!!})</h2>
		</center>
		<div class="col-md-12">
			<table class="table">
				<tr>
					<td class="info">Year</td>
					<td class="success">{!!$year!!}</td>
					<td class="info">Month</td>
					<td class="success">{!!$month!!}</td>
				</tr>
				<tr>
					<td class="info">Digital X-Ray </td>
					<td class="success">{!!$xray!!} Tk.</td>
					<td class="info">Ultrasonogram</td>
					<td class="success">{!!$ultrasonogram!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Ecg</td>
					<td class="success">{!!$ecg!!} Tk.</td>
					<td class="info">Digital Ecg</td>
					<td class="success">{!!$digital_ecg!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Endoscopy</td>
					<td class="success">{!!$endoscopy!!} Tk.</td>
					<td class="info">Blood Grouping</td>
					<td class="success">{!!$blood_grouping!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Blood For CBC</td>
					<td class="success">{!!$blood_cbc!!} Tk.</td>
					<td class="info">Blood For CS</td>
					<td class="success">{!!$blood_cs!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Urine</td>
					<td class="success">{!!$urine!!} Tk.</td>
					<td class="info">HBS Normal</td>
					<td class="success">{!!$hbs_normal!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">CT Scan</td>
					<td class="success">{!!$ct_scan!!} Tk.</td>
					<td class="info">Stool</td>
					<td class="success">{!!$stool!!} Tk.</td>
				</tr>
			</table>
			<button onclick="myFunction()" class="pull-right">Print this page</button>
		</div>
	</div>
</div>
