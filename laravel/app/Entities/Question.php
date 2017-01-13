<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $primaryKey = 'question_id';
    //A question belong to one patient
     public function patients()
  	{
  		return $this->belongsTo('App\Model\Patient');
  	}
}
