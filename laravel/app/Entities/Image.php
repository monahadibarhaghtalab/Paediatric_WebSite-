<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //All Image belongs to one doctor

    public function doctor()
    {
    	return $this->belongsTo('App\Model\Doctor');
    }
}
