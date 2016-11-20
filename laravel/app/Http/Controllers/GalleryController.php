<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\Image;

class GalleryController extends Controller
{
    //To show all image from all category

    public function all(){

    	$allImage = Image::all();
    	return view("gallery\all")->with("images", $allImage);
    }


    public function getAll(){
        return Image::all();
    }
}
