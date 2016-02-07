<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indoor_patient extends Model
{
      protected $fillable = ['patient_name', 'ind_patient_id', 'address', 'phone_number', 'gender','age','admission_date','reffered_dr','status','digital_xray','ultrasonogram','ecg','digital_ecg','endoscopy','blood_grouping','blood_cs','blood_cbc','urine','hbs_normal','stool','commision','total','discount','consult_dr','father_name','cabin_no','bed_no','ct_scan','operation_bill','dr_bill','service_bill','medicine_bill','cabin_bill','others_bill','arrival_time','arrival_date','discharge_time','discharge_date',];
}
