<?php

namespace App\Http\Controllers\Image;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    //To show all image from all category

    public function all(){

    	$allImage = Image::all();
    	return view("gallery\all")->with("images", allImage);
    }
}
