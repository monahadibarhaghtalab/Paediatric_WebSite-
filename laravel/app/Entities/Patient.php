<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //A patient has one doctor!
     public function doctor()
  	{
  		return $this->belongsTo('App\Model\Doctor');
  	}

  	//Patient has many questions 
  	 public function question()
  	{
  		return $this->hasMany('App\Model\Question');
  	}
}
