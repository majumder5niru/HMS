@extends('master/master')

	<div class="container nav">
		<div class="row">
			@include('master/navbar')
		</div>
		<div class="row">
			<center>
				<p><h4>The Lab Aid Medical Center and Hospital</h4>
                <h5>Sonaimmuri,Noakhali</h5></p>
				<h2>Bill Report</h2>
			</center>
			<div class="col-md-12">
				<table class="table">
					<tr>
						<td class="info">Pateint Name</td>
						<td class="success">{!!ucwords($patient->patient_name)!!}</td>
						<td class="info">Father's Name</td>
						<td class="success">{!!$patient->father_name!!}</td>
					</tr>
					<tr>
						<td class="info">Consulting Dr. Name</td>
						<td class="success">{!!$patient->consult_dr!!}</td>
						<td class="info">Pateint ID</td>
						<td class="success">{!!$patient->patient_id!!}</td>
					</tr>
					<tr>
						<td class="info">Address</td>
						<td class="success">{!!$patient->address!!}</td>
						<td class="info">Mobile</td>
						<td class="success">{!!$patient->phone_number!!}</td>
					</tr>
					<tr>
						<td class="info">Gender</td>
						<td class="success">{!!$patient->gender!!}</td>
						<td class="info">Age</td>
						<td class="success">{!!$patient->age!!}</td>
					</tr>
					<tr>
						<td class="info">Admission Date</td>
						<td class="success">{!!$patient->admission_date!!}</td>
						<td class="info">Ref.By Dr.</td>
						<td class="success">{!!$patient->reffered_dr!!}</td>
					</tr>
					<tr>
						<td class="info">Digital X-Ray</td>
						<td class="success">{!!$patient->digital_xray!!} Tk.</td>
						<td class="info">4D Ultrasonogram</td>
						<td class="success">{!!$patient->ultrasonogram!!} Tk.</td>
					</tr>
					<tr>
						<td class="info">ECG</td>
						<td class="success">{!!$patient->ecg!!} Tk.</td>
						<td class="info">Digital ECG</td>
						<td class="success">{!!$patient->digital_ecg!!} Tk.</td>
					</tr>
					<tr>
						<td class="info">Endoscopy/Colonoscopy</td>
						<td class="success">{!!$patient->endoscopy!!} Tk.</td>
						<td class="info">Blood Grouping</td>
						<td class="success">{!!$patient->blood_grouping!!} Tk.</td>
					</tr>
					<tr>
						<td class="info">Blood For CS</td>
						<td class="success">{!!$patient->blood_cs!!} Tk.</td>
						<td class="info">Blood For CBC</td>
						<td class="success">{!!$patient->blood_cbc!!} Tk.</td>
					</tr>
					<tr>
						<td class="info">Urine Test</td>
						<td class="success">{!!$patient->urine!!} Tk.</td>
						<td class="info">HBS Ag(Normal)</td>
						<td class="success">{!!$patient->hbs_normal!!} Tk.</td>
					</tr>
					<tr>
						<td class="info">CT Scan</td>
						<td class="success">{!!$patient->ct_scan!!} Tk.</td>
						<td class="info">Stool Test</td>
						<td class="success">{!!$patient->stool!!} Tk.</td>
					</tr>
					<tr>
						<td class="info">Commision</td>
						<td class="success">{!!$commision!!}%</td>
						<td class="info">Discount</td>
						<td class="success">{!! $commision_amount !!} Tk.</td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="success"></td>
						<td class="info">Total Bill</td>
						<td class="success">{!!$total!!} Tk.</td>
					</tr>
				</table>
					<button onclick="myFunction()" class="pull-right">Print this page</button><br><br>
			</div>
		</div>
	</div>
