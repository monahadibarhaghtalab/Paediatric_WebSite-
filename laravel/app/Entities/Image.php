<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey = 'image_id';
    //All Image belongs to one doctor

    public function doctor()
    {
    	return $this->belongsTo('App\Model\Doctor');
    }
}
