<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //A doctor has many patients

  	public function patient()
  	{
  		return $this->hasMany('App\Model\Patient');
  	}

  	//A doctor has many articles

  	 public function article()
  	{
  		return $this->hasMany('App\Model\Article');
  	}


    public function image()
    {
      return $this->hasMany('App\Model\Image');
    }
}
