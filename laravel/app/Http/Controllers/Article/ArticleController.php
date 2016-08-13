<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //To show all article
        public functtion all(){

    	$allArticle = Article::all();
    	return view("article\all")->with("aricles", allArticle);
    }

}
