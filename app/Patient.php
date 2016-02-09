<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	//protected $table='patients';
    protected $fillable = ['patient_name', 'patient_id', 'address', 'phone_number', 'gender','age','admission_date','reffered_dr','status','digital_xray','ultrasonogram','ecg','digital_ecg','endoscopy','blood_grouping','blood_cs','blood_cbc','urine','hbs_normal','ct_scan','stool','commision','total','discount','consult_dr','father_name'];
}
