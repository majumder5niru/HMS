@extends('master/master')
<div class="container nav">
	<div class="row">
		@include('master/navbar')
	</div>
	<div class="row">
		<center>
			<p><h4>The Lab Aid Medical Center and Hospital</h4>
            <h5>Sonaimuri,Noakhali</h5></p>
			<h2>Bill Report</h2><br>
		</center>
		<div class="col-md-12">
			<table class="table">
				<tr>
					<td class="info">Pateint Name</td>
					<td class="success">{!!ucwords($indoor_report->patient_name)!!}</td>
					<td class="info">Father's Name</td>
					<td class="success">{!!$indoor_report->father_name!!}</td>
				</tr>
				<tr>
					<td class="info">Consulting Dr. Name</td>
					<td class="success">{!!$indoor_report->consult_dr!!}</td>
					<td class="info">Pateint ID</td>
					<td class="success">{!!$indoor_report->ind_patient_id!!}</td>
				</tr>
				<tr>
					<td class="info">Address</td>
					<td class="success">{!!$indoor_report->address!!}</td>
					<td class="info">Mobile</td>
					<td class="success">{!!$indoor_report->phone_number!!}</td>
				</tr>
				<tr>
					<td class="info">Gender</td>
					<td class="success">{!!$indoor_report->gender!!}</td>
					<td class="info">Age</td>
					<td class="success">{!!$indoor_report->age!!}</td>
				</tr>
				<tr>
					<td class="info">Arrival Time</td>
					<td class="success">{!!$indoor_report->arrival_time!!}</td>
					<td class="info">Arrival Date</td>
					<td class="success">{!!$indoor_report->arrival_date!!}</td>
				</tr>
				<tr>
					<td class="info">Cabin No.</td>
					<td class="success">{!!$indoor_report->cabin_no!!}</td>
					<td class="info">Bed No.</td>
					<td class="success">{!!$indoor_report->bed_no!!}</td>
				</tr>
				<tr>
					<td class="info">Ref.By Dr.</td>
					<td class="success">{!!$indoor_report->reffered_dr!!}</td>
					<td class="info">Digital X-Ray</td>
					<td class="success">{!!$indoor_report->digital_xray!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">4D Ultrasonogram</td>
					<td class="success">{!!$indoor_report->ultrasonogram!!} Tk.</td>
					<td class="info">ECG</td>
					<td class="success">{!!$indoor_report->ecg!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Digital ECG</td>
					<td class="success">{!!$indoor_report->digital_ecg!!} Tk.</td>
					<td class="info">Endoscopy/Colonoscopy</td>
					<td class="success">{!!$indoor_report->endoscopy!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Blood Grouping</td>
					<td class="success">{!!$indoor_report->blood_grouping!!} Tk.</td>
					<td class="info">Blood For CS</td>
					<td class="success">{!!$indoor_report->blood_cs!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Blood For CBC</td>
					<td class="success">{!!$indoor_report->blood_cbc!!} Tk.</td>
					<td class="info">Urine Test</td>
					<td class="success">{!!$indoor_report->urine!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">HBS Ag(Normal)</td>
					<td class="success">{!!$indoor_report->hbs_normal!!} Tk.</td>
					<td class="info">CT Scan</td>
					<td class="success">{!!$indoor_report->ct_scan!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Stool Test</td>
					<td class="success">{!!$indoor_report->stool!!} Tk.</td>
					<td class="info">Operation Bill</td>
					<td class="success">{!!$indoor_report->operation_bill!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Dr. Bill</td>
					<td class="success">{!!$indoor_report->dr_bill!!} Tk.</td>
					<td class="info">Service Bill</td>
					<td class="success">{!!$indoor_report->service_bill!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Medicine Bill</td>
					<td class="success">{!!$indoor_report->medicine_bill!!} Tk.</td>
					<td class="info">Cabin Bill</td>
					<td class="success">{!!$indoor_report->cabin_bill!!} Tk.</td>
				</tr>
				<tr>
					<td class="info">Other's Bill</td>
					<td class="success">{!!$indoor_report->others_bill!!} Tk.</td>
					<td class="info">Discharge Time</td>
					<td class="success">{!!$indoor_report->discharge_time!!}</td>
				</tr>
				<tr>
					<td class="info">Discharge Date</td>
					<td class="success">{!!$indoor_report->discharge_date!!}</td>
					<td class="info">Commision</td>
					<td class="success">{!!$indoor_report->commision!!}%</td>
				</tr>
				<tr>
					<td class="info">Discount</td>
					<td class="success">{!! $commision_amount !!} Tk.</td>
					<td class="info">Total Bill</td>
					<td class="success">{!!$total!!} Tk.</td>
				</tr>
			</table>
			<button onclick="myFunction()" class="pull-right">Print this page</button><br><br>
		</div>
	</div>
</div>
