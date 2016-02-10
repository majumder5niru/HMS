<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Http\Requests\IpatientFormRequest;
use App\Indoor_patient;
use App\User;
use Validator;
use Input;
use DB;
use Auth;

class IpatientsController extends Controller
{
	/*public function __construct(){

        $this->middleware('operator');
    }*/
    public function create_indoor_patient(){
    	$doctors = Doctor::all();
    	return view('Indoor.indoor_patient',compact('doctors'));
    }
    public function store_data(IpatientFormRequest $request){
    	 $indoor_patient = new Indoor_patient(array(
	        'patient_name' => strtolower($request->get('patient_name')),
	        'ind_patient_id' => $request->get('ind_patient_id'),
	        'father_name'=> $request->get('father_name'),
	        'consult_dr'=> $request->get('consult_dr'),
	        'address' => $request->get('address'),
	        'phone_number' => $request->get('phone_number'),
	        'gender' => $request->get('gender'),
	        'age' => $request->get('age'),
	        'cabin_no' => $request->get('cabin_no'),
	        'bed_no' => $request->get('bed_no'),
	        'reffered_dr' => $request->get('reffered_dr'),
	        'digital_xray' => $request->get('digital_xray'),
	        'ultrasonogram' => $request->get('ultrasonogram'),
	        'ecg' => $request->get('ecg'),
	        'digital_ecg' => $request->get('digital_ecg'),
	        'endoscopy' => $request->get('endoscopy'),
	        'blood_grouping' => $request->get('blood_grouping'),
	        'blood_cs' => $request->get('blood_cs'),
	        'blood_cbc' => $request->get('blood_cbc'),
	        'urine' => $request->get('urine'),
	        'hbs_normal' => $request->get('hbs_normal'),
	        'ct_scan' => $request->get('ct_scan'),
	        'stool' => $request->get('stool'),
	        'operation_bill' => $request->get('operation_bill'),
	        'dr_bill' => $request->get('dr_bill'),
	        'service_bill' => $request->get('service_bill'),
	        'medicine_bill' => $request->get('medicine_bill'),
	        'cabin_bill' => $request->get('cabin_bill'),
	        'others_bill' => $request->get('others_bill'),
	        'hbs_normal' => $request->get('hbs_normal'),
	        'arrival_time' => $request->get('arrival_time'),
	        'arrival_date' => $request->get('arrival_date'),
	        'discharge_time' => $request->get('discharge_time'),
	        'discharge_date' => $request->get('discharge_date'),
	        'commision' => $request->get('commision'),
	        
	    ));
	    $indoor_patient ->save();
	    return redirect(action('IpatientsController@edit_indoor_patient_report', $indoor_patient ->id))->with('status', 'Your Information has been inserted!');
    }
    public function edit_indoor_patient_report($id){
    	$indoor_report = Indoor_patient::whereId($id)->firstOrFail();
    	$doctors = Doctor::all();
		$gender = $indoor_report->gender;
		$xray = $indoor_report->digital_xray;
		$ultra = $indoor_report->ultrasonogram;
		$ecg = $indoor_report->ecg;
		$decg = $indoor_report->digital_ecg;
		$endoccopy = $indoor_report->endoscopy;
		$bloodgrp = $indoor_report->blood_grouping;
		$bloodcs = $indoor_report->blood_cs;
		$bloodcbc = $indoor_report->blood_cbc;
		$urine = $indoor_report->urine;
		$hbsnrmal = $indoor_report->hbs_normal;
		$ctscan = $indoor_report->ct_scan;
		$stool = $indoor_report->stool;
		$operation_bill = $indoor_report->operation_bill;
		$dr_bill = $indoor_report->dr_bill;
		$service_bill = $indoor_report->service_bill;
		$medicine_bill = $indoor_report->medicine_bill;
		$cabin_bill = $indoor_report->cabin_bill;
		$others_bill = $indoor_report->others_bill;
		return view('Indoor.edit_report', compact('indoor_report','total','commision_amount','gender','ind_patient_id','xray','ultra','ecg','decg','endoccopy','bloodgrp','bloodcs','bloodcbc','urine','hbsnrmal','ctscan','stool','doctors','id'));
		
    }
   public function update_indoor_report($id, Request $request){
        $indoor_report = Indoor_patient::whereId($id)->firstOrFail();
		$indoor_report->patient_name = strtolower($request->get('patient_name'));
		$indoor_report->ind_patient_id = $request->get('ind_patient_id');
		$indoor_report->father_name = $request->get('father_name');
	    $indoor_report->consult_dr = $request->get('consult_dr');
        $indoor_report->address = $request->get('address');
        $indoor_report->phone_number = $request->get('phone_number');
        $indoor_report->gender = $request->get('gender');
        $indoor_report->age = $request->get('age');
        $indoor_report->cabin_no = $request->get('cabin_no');
        $indoor_report->bed_no = $request->get('bed_no');
        $indoor_report->reffered_dr = $request->get('reffered_dr');
        $indoor_report->arrival_time = $request->get('arrival_time');
        $indoor_report->arrival_date = $request->get('arrival_date');
        $indoor_report->digital_xray = $request->get('digital_xray');
        $indoor_report->ultrasonogram = $request->get('ultrasonogram');
        $indoor_report->ecg = $request->get('ecg');
        $indoor_report->digital_ecg = $request->get('digital_ecg');
        $indoor_report->endoscopy = $request->get('endoscopy');
        $indoor_report->blood_grouping = $request->get('blood_grouping');
        $indoor_report->blood_cs = $request->get('blood_cs');
        $indoor_report->blood_cbc = $request->get('blood_cbc');
        $indoor_report->urine = $request->get('urine');
        $indoor_report->hbs_normal = $request->get('hbs_normal');
        $indoor_report->ct_scan = $request->get('ct_scan');
        $indoor_report->stool = $request->get('stool');
        $indoor_report->operation_bill = $request->get('operation_bill');
        $indoor_report->dr_bill = $request->get('dr_bill');
        $indoor_report->service_bill = $request->get('service_bill');
        $indoor_report->medicine_bill = $request->get('medicine_bill');
        $indoor_report->cabin_bill = $request->get('cabin_bill');
        $indoor_report->others_bill = $request->get('others_bill');
        $indoor_report->discharge_time = $request->get('discharge_time');
        $indoor_report->discharge_date  = $request->get('discharge_date');
        $indoor_report->commision = $request->get('commision');
        $indoor_report->total = $request->get('total');
        $total = $indoor_report->digital_xray+$indoor_report->ultrasonogram+$indoor_report->ecg+$indoor_report->digital_ecg+$indoor_report->endoscopy+$indoor_report->blood_grouping+$indoor_report->blood_cs+$indoor_report->blood_cbc+$indoor_report->urine+$indoor_report->hbs_normal+$indoor_report->ct_scan+$indoor_report->stool+$indoor_report->operation_bill+$indoor_report->dr_bill+$indoor_report->service_bill+$indoor_report->medicine_bill+$indoor_report->cabin_bill+$indoor_report->others_bill;
        $indoor_report->total = $total;
        if($indoor_report->commision<=0){
        	$commision_amount = 0;
        	$indoor_report->discount = 0;
        	$indoor_report->total = $total;
        }else{
        	$commision_amount = ($total*$indoor_report->commision)/100;
        	$total = $total-$commision_amount;
        	$indoor_report->discount = $commision_amount;
        	$indoor_report->total = $total;
        }
        $indoor_report->save();
        return redirect(action('IpatientsController@show_report', $indoor_report->id))->with('status', 'The data  has been updated!');
	}
    public function show_report($id){
		$indoor_report = Indoor_patient::whereId($id)->firstOrFail();
		$total = $indoor_report->total;
		$commision = $indoor_report->commision;
		$commision_amount = $indoor_report->discount;
		if($commision<=0){
			$commision_amount = '0';
			return view('Indoor.show_indoor_report', compact('indoor_report','total','commision_amount','ind_patient_id'));
		}else{
			return view('Indoor.show_indoor_report', compact('indoor_report','total','commision_amount','ind_patient_id'));
		}
    	
	}
	public function show_all_report(){
		$reports = DB::table('indoor_patients')->orderBy('id', 'desc')->get();
    	return view('Indoor.all_report', compact('reports'));
	}
}
