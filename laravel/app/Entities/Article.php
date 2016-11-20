<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'article_id';
  //  protected $fillable = [];

    //Each article belong to one doctor
    public function doctor()
    {
    	return $this->belongsTo('App\Model\Doctor');
    }
}
