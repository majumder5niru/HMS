@extends('master/master')
<div class="container nav">
	<div class="row">
		@include('master/navbar')
	</div>
	<div class="row">
		<center>
			<p><h4>The Lab Aid Medical Center and Hospital</h4>
            <h5>Sonaimuri,Noakhali</h5></p>
			<h2> Indoor Test Balance({!!$start_date!!} to {!!$end_date!!})</h2>
		</center><br><br>
		<div class="col-md-12">
			<table class="table">
				<tr>
					<td class="info">Starting Date</td>
					<td class="success">{!!$start_date!!}</td>
					<td class="info">Ending Date</td>
					<td class="success">{!!$end_date!!}</td>
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
				<tr>
					<td class="info">Operation Bill</td>
					<td class="success">{!!$operation_bill!!} Tk.</td>
					<td class="info">Dr. Bill</td>
					<td class="success">{!!$dr_bill!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Service Bill</td>
					<td class="success">{!!$service_bill!!} Tk.</td>
					<td class="info">Medicine Bill</td>
					<td class="success">{!!$medicine_bill!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Cabin Bill</td>
					<td class="success">{!!$cabin_bill!!} Tk.</td>
					<td class="info">Other's Bill</td>
					<td class="success">{!!$others_bill!!} Tk.</td>
				</tr>
			</table>
			<button onclick="myFunction()" class="pull-right">Print this page</button>
		</div>
	</div>
</div>
