<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //A question belong to one patient
     public function patients()
  	{
  		return $this->belongsTo('App\Model\Patient');
  	}
}
