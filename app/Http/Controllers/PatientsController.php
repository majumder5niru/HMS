<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
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
		//$all_data = Patient::orderBy('patient_name')->get();
		$patient_name = $request->input('patient_name');
		$patient_id = $request->input('patient_id');
		if(!empty($patient_name)&&!empty($patient_id)){
			$all_data = DB::table('patients')->Where('patient_name','LIKE','%'.$patient_name.'%')->get();
			$all = DB::table('indoor_patients')->Where('patient_name','LIKE','%'.$patient_name.'%')->get();
			$all_data = DB::table('patients')->Where('patient_id','LIKE','%'.$patient_id.'%')->get();
			$all = DB::table('indoor_patients')->Where('ind_patient_id','LIKE','%'.$patient_id.'%')->get();
		}elseif(!empty($patient_name)){
			$all_data = DB::table('patients')->Where('patient_name','LIKE','%'.$patient_name.'%')->get();
			$all = DB::table('indoor_patients')->Where('patient_name','LIKE','%'.$patient_name.'%')->get();
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
	        'patient_name' => $request->get('patient_name'),
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
	        'commision' => $request->get('commision'),
	        'stool' => $request->get('stool'),
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
		$test1 = $report->digital_xray;
		$test2 = $report->ecg;
		$test3 = $report->digital_ecg;
		$test4 = $report->endoscopy;
		$test5 = $report->blood_grouping;
		$test6 = $report->blood_cs;
		$test7 = $report->blood_cbc;
		$test8 = $report->urine;
		$test9 = $report->hbs_normal;
		$test10 =$report->stool;
		$total = $test1+$test2+$test3+$test4+$test5+$test6+$test7+$test8+$test9+$test10;
		$commision = $report->commision;
		if($commision<=0){
			$commision_amount = '0';
			return view('outdoor.edit_report', compact('report','total','commision_amount','gender','patient_id','xray','ultra','ecg','decg','endoccopy','bloodgrp','bloodcs','bloodcbc','urine','hbsnrmal','ctscan','stool','doctors'));
		}else{
			$commision_amount = ($total*$commision)/100;
			$total = $total-$commision_amount;
			return view('outdoor.edit_report', compact('report','total','commision_amount','gender','patient_id','xray','ultra','ecg','decg','endoccopy','bloodgrp','bloodcs','bloodcbc','urine','hbsnrmal','ctscan','stool','doctors'));
		}
		
	}

	public function update_report($patient_id, Request $request){
		 $validator = Validator::make($request->all(), [
            'patient_name' => 'required',
            'patient_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('all_reports')
                        ->withErrors($validator)
                        ->withInput();
        }
		$report = Patient::wherePatient_id($patient_id)->firstOrFail();
		$report->patient_name = $request->get('patient_name');
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
        $report->ecg = $request->get('ecg');
        $report->digital_ecg = $request->get('digital_ecg');
        $report->endoscopy = $request->get('endoscopy');
        $report->blood_grouping = $request->get('blood_grouping');
        $report->blood_cs = $request->get('blood_cs');
        $report->blood_cbc = $request->get('blood_cbc');
        $report->urine = $request->get('urine');
        $report->hbs_normal = $request->get('hbs_normal');
        $report->commision = $request->get('commision');
        $report->stool = $request->get('stool');
        $report->discount = $request->get('discount');
        $report->total = $request->get('total');
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
			return view('outdoor.show_report', compact('patient','total','commision_amount','patient_id'));
		}else{
			return view('outdoor.show_report', compact('patient','total','commision_amount','patient_id'));
		}
    	
	}

}
