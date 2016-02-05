<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['month', 'year', 'status','starting_date','ending_date'];
}
