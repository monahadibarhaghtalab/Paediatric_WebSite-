<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //To show all article
        public function all(){

    	$allArticle = Article::all();
    	return view("article\all")->with("aricles", allArticle);
    }


     public function creat()
    {
        return view('article.create');// not sure if . is correct or \ 

    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->post('title');
        $article->body = $request->post('body');
        $article-> image_article_addr= input::file('image');
        $article->cat = $request->post('cat');
        
        $article->save();

        return view('article.create');
    }


    public function edit($id){
    	$article = Article::find($id);

    	return view('atricle.edit')->with('article', $article);
    }

    public function update(Request $request){
    	$article = Aricle::find($request ->post('id'));
    	$article->title = $request->post('title');
    	$article->body = $request->post('body');

    	$article->save();

    	return Redirect::to('admin/article');


    }
}
