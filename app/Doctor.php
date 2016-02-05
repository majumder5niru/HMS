<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['dr_name', 'dr_id', 'designation','address', 'phone_number', 'gender','about_dr','status'];
}
