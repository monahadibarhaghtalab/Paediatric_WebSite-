<?php

namespace App\Http\Controllers;


use App\Http\Requests;



use App\Entities\Link;
use Illuminate\Http\Request;

//use App\Http\Controllers\Controller;

class LinkController extends Controller
{


    //return all
    public function all(){

       // return Link::all();
        $allLink = Link::all();
        return view("welcome")->with("linked_links", $allLink);
    }


    public function getAll(){
        return Link::all();
    }

    public function upload(Request $request){

        $link = new Link();
        $link->title = $request->title;
        $link->url = $request->url;
        $link->save();

        $request->session()->flash('alert-success', 'لینک به درستی ثبت شد');
        return redirect('/admin');


    }

    public function remove($id){

        $link = Link::find($id);
        $link->delete();

        return redirect('/admin');
    }

}