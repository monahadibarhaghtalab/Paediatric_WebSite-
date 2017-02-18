<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\Image;
use Validator, Input;

class GalleryController extends Controller
{
    //To show all image from all category

    public function all(){

    	$allImage = Image::all();
    	return view("gallery.all")->with("images", $allImage);
    }


    public function getAll(){
        return Image::all();
    }

    public function upload(Request $request){




        // getting all of the post data
        $file = array('image' => Input::file('image'));
          // setting up rules
//          $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
//          // doing the validation, passing post data, rules and the messages
//        $validator = Validator::make($file, $rules);
//         if ($validator->fails()) {
//      // send back to the page with the input data and errors
//            return Redirect::to('upload')->withInput()->withErrors($validator);
//  }
//  else {
      // checking file is valid.
//      if (Input::file('image')->isValid()) {


        $destinationPath = 'Gallery'; // upload path
        $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

        $image = new Image();

        $image->title = $request->input('title');
        $image->caption = $request->input('caption');
        $image->image_gallery_addr = $destinationPath.'/' . $fileName;
        $image->save();
          // sending back with message
        $request->session()->flash('alert-success', 'Upload successfully');
          return redirect('/admin');
//      }
//      else {
//          // sending back with error message.
//          Session::flash('error', 'uploaded file is not valid');
//          return Redirect::to('upload');
//      }


    }

    public function remove($id){
        $image = Image::find($id);
        $image->delete();

        return redirect('/admin');

    }
}
