<?php

namespace App\Http\Controllers;

use App\Entities\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator, Input;
//use App\Http\Controllers\Controller;
//use phpDocumentor\Reflection\Types\Integer;

class ArticleController extends Controller
{
    //To show all article
        public function all(){

    	$allArticle = Article::all();
    	return view("article.all")->with("articles", $allArticle);
    }

    public function show( $id){

        $article = Article::find($id);
        return view("article.show")->with("article", $article);
    }

     public function creat()
    {
        return view('article.create');// not sure if . is correct or \ 

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

    public function upload (Request $request){

        $article = new Article();
            
        $destinationPath = 'Article'; // upload path
        $test = $request->input('title-article');
        $extension = Input::file('image-article')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        Input::file('image-article')->move($destinationPath, $fileName); // uploading file to given path


        $article->title = $request->input('title-article');
        $article->body = $request->input('body-article');
        $article->image_article_addr = $destinationPath.'/' . $fileName;
        $article->save();
        // sending back with message
        $request->session()->flash('alert-success', 'ثبت مطالب آموزشی با موفقیت انجام شد');
        return redirect('/admin');
    }


    public function remove($id){
        $article = Article::find($id);
        $article->delete();

        return redirect('/admin');
    }
}
