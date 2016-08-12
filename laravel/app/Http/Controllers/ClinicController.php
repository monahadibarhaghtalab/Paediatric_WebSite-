<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClinicController extends Controller
{
    //Get all article
	public function allArticle(){
		$articles = Article::all();
	}
}
