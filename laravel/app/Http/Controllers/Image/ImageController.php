<?php

namespace App\Http\Controllers\Image;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    //To show all image from all category

    public functtion all(){

    	$allImage = Image::all();
    	return view("gallery\all")->with("images", allImage);
    }
}