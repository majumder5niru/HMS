<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PatientFormRequest;
use App\Patient;
use App\Doctor;
use App\User;
use DB;
use Input;
use Validator;
class PatientsController extends Controller
{
	/*public function __construct(){

        $this->middleware('operator');
    }*/
	public function index(Request $request){
		return view('outdoor.index');
	}
	public function search_by_name_id(Request $request){
		$patient_name = $request->input('patient_name');
		$patient_id = $request->input('patient_id');
		if(!empty($patient_name)&&!empty($patient_id)){
			$all_data = DB::table('patients')->Where('patient_name','LIKE','%'.strtolower($patient_name).'%')->get();
			$all = DB::table('indoor_patients')->Where('patient_name','LIKE','%'.strtolower($patient_name).'%')->get();
			$all_data = DB::table('patients')->Where('patient_id','LIKE','%'.$patient_id.'%')->get();
			$all = DB::table('indoor_patients')->Where('ind_patient_id','LIKE','%'.$patient_id.'%')->get();
		}elseif(!empty($patient_name)){
			$all_data = DB::table('patients')->Where('patient_name','LIKE','%'.strtolower($patient_name).'%')->get();
			//$all_data = DB::table('patients')->Where('patient_name','LIKE','%'.$patient_name.'%')->get();
			$all = DB::table('indoor_patients')->Where('patient_name','LIKE','%'.strtolower($patient_name).'%')->get();
		}elseif (!empty($patient_id)) {
			$all_data = DB::table('patients')->Where('patient_id','LIKE','%'.$patient_id.'%')->get();
			$all = DB::table('indoor_patients')->Where('ind_patient_id','LIKE','%'.$patient_id.'%')->get();
		}else{
			return view('outdoor.msg');
		}
		return view('outdoor.search_result',compact('all_data','all','a'));
	}
   	public function create_patient(){ 
   		$doctors = Doctor::all();
    	return view('outdoor.outdoor_patient',compact('doctors'));
	}
 	public function store_data(PatientFormRequest $request){
	    $patient = new Patient(array(
	        'patient_name' => strtolower($request->get('patient_name')),
	        'patient_id' => $request->get('patient_id'),
	        'father_name'=> $request->get('father_name'),
	        'consult_dr'=> $request->get('consult_dr'),
	        'address' => $request->get('address'),
	        'phone_number' => $request->get('phone_number'),
	        'gender' => $request->get('gender'),
	        'age' => $request->get('age'),
	        'admission_date' => $request->get('admission_date'),
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
	       	'ct_scan'=> $request->get('ct_scan'),
	        'stool' => $request->get('stool'),
	        'commision' => $request->get('commision'),
	    ));
	    $patient->save();
	    return redirect(action('PatientsController@edit_report', $patient->patient_id))->with('status', 'Your Information has been inserted!');
	}
	public function show_all_report(){
		$reports = DB::table('patients')->orderBy('id', 'desc')->get();
    	return view('outdoor.all_report', compact('reports'));
	}
	public function edit_report($patient_id){
		$report = Patient::wherePatient_id($patient_id)->firstOrFail();
		$doctors = Doctor::all();
		$gender = $report->gender;
		$xray = $report->digital_xray;
		$ultra = $report->ultrasonogram;
		$ecg = $report->ecg;
		$decg = $report->digital_ecg;
		$endoccopy = $report->endoscopy;
		$bloodgrp = $report->blood_grouping;
		$bloodcs = $report->blood_cs;
		$bloodcbc = $report->blood_cbc;
		$urine = $report->urine;
		$hbsnrmal = $report->hbs_normal;
		$ctscan = $report->ct_scan;
		$stool = $report->stool;
		$commision = $report->commision;
		
		return view('outdoor.edit_report', compact('report','gender','patient_id','xray','ultra','ecg','decg','endoccopy','bloodgrp','bloodcs','bloodcbc','urine','hbsnrmal','ctscan','stool','doctors'));	
		
	}

	public function update_report($patient_id, Request $request){
		$report = Patient::wherePatient_id($patient_id)->firstOrFail();
		$report->patient_name = strtolower($request->get('patient_name'));
		$report->patient_id = $request->get('patient_id');
		$report->father_name = $request->get('father_name');
	    $report->consult_dr = $request->get('consult_dr');
        $report->address = $request->get('address');
        $report->phone_number = $request->get('phone_number');
        $report->gender = $request->get('gender');
        $report->age = $request->get('age');
        $report->admission_date = $request->get('admission_date');
        $report->reffered_dr = $request->get('reffered_dr');
        $report->digital_xray = $request->get('digital_xray');
        $report->ultrasonogram = $request->get('ultrasonogram');
        $report->ecg = $request->get('ecg');
        $report->digital_ecg = $request->get('digital_ecg');
        $report->endoscopy = $request->get('endoscopy');
        $report->blood_grouping = $request->get('blood_grouping');
        $report->blood_cs = $request->get('blood_cs');
        $report->blood_cbc = $request->get('blood_cbc');
        $report->urine = $request->get('urine');
        $report->hbs_normal = $request->get('hbs_normal');
        $report->ct_scan = $request->get('ct_scan');
        $report->commision = $request->get('commision');
        $report->stool = $request->get('stool');
        $total = $report->digital_xray+$report->ultrasonogram+$report->ecg+$report->digital_ecg+$report->endoscopy+$report->blood_grouping+$report->blood_cs+$report->blood_cbc+$report->urine+$report->hbs_normal+$report->ct_scan+$report->stool;
        
        $report->total = $total;
        if($report->commision<=0){
        	$commision_amount = 0;
        	$report->discount = 0;
        	$report->total = $total;
        }else{
        	$commision_amount = ($total*$report->commision)/100;
        	$total = $total-$commision_amount;
        	$report->discount = $commision_amount;
        	$report->total = $total;
        }
        $report->save();
        return redirect(action('PatientsController@show_report', $report->patient_id))->with('status', 'The data  has been updated!');
	}

	public function show_report($patient_id){
		$patient = Patient::wherePatient_id($patient_id)->firstOrFail();
		$total = $patient->total;
		$commision = $patient->commision;
		$commision_amount = $patient->discount;
		if($commision<=0){
			$commision_amount = '0';
			return view('outdoor.show_report', compact('patient','total','commision','commision_amount','patient_id'));
		}else{
			return view('outdoor.show_report', compact('patient','total','commision','commision_amount','patient_id'));
		}
    	
	}

}
