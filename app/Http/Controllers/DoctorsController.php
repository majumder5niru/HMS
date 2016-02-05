<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorFormRequest;
use App\User;
use App\Doctor;
use Validator;
use DB;
use Auth;

class DoctorsController extends Controller
{
	/*public function __construct(){

        $this->middleware('operator');
    }*/
    public function create_doctor(){
    	return view('Doctor.create_doctor');
    }
    public function store_data(DoctorFormRequest $request){
    	
	    $doctor = new Doctor(array(
	        'dr_name' => $request->get('dr_name'),
	        'dr_id' => $request->get('dr_id'),
	        'designation'=> $request->get('designation'),
	        'address' => $request->get('address'),
	        'phone_number' => $request->get('phone_number'),
	        'gender' => $request->get('gender'),
	        'about_dr' => $request->get('about_dr'),
	        
	    ));
	    $doctor->save();
	    return redirect(action('DoctorsController@edit_doctor',$doctor->dr_id))->with('status', 'Your Information has been inserted!');
	}
	public function edit_doctor($dr_id){
		$doctor = Doctor::whereDr_id($dr_id)->firstOrFail();
		$gender = $doctor->gender;
		return view('Doctor.edit_doctor', compact('doctor','gender','dr_id'));
	}
	public function update_dr_info($dr_id,Request $request){
		$validator = Validator::make($request->all(), [
            'dr_name' => 'required',
            'dr_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('all_doctors')
                        ->withErrors($validator)
                        ->withInput();
        }
		$doctor = Doctor::whereDr_id($dr_id)->firstOrFail();
		$doctor->dr_name = $request->get('dr_name');
		$doctor->dr_id = $request->get('dr_id');
		$doctor->designation = $request->get('designation');
	    $doctor->address = $request->get('address');
        $doctor->phone_number = $request->get('phone_number');
        $doctor->gender = $request->get('gender');
        $doctor->about_dr = $request->get('about_dr');
        $doctor->save();
        return redirect(action('DoctorsController@show_info', $doctor->dr_id))->with('status', 'The information  has been updated!');
	}
	public function show_info($dr_id){
		$doctor = Doctor::whereDr_id($dr_id)->firstOrFail();
		return view('Doctor.show_info', compact('doctor','dr_id'));	
	}
	public function show_all_dr(){
		$doctors = DB::table('doctors')->orderBy('id', 'desc')->get();
    	return view('Doctor.all_doctor', compact('doctors'));
	}
	public function delete_doctor($dr_id){
		$doctor = Doctor::whereDr_id($dr_id)->firstOrFail();
	    $doctor->delete();
	    return redirect('/all_doctors')->with('status', 'Information of doctor has been deleted!');
	}
}
