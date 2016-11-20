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

}