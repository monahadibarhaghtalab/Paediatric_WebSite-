<?php
/**
 * Created by PhpStorm.
 * User: mona
 * Date: 11/14/2016 AD
 * Time: 14:27
 */

namespace App\Http\Controllers;


use App\Http\Requests;

use App\Entities\Article;
use App\Entities\Image;
use App\Entities\Link;

class GalleryLinkArticleController extends Controller
{



    //return all
    public function all(){

        $allLink = Link::all();
        $allImage = Image::all();
        $imageZardi = User::find('1');
        
        foreach ($allImage as $image){


        }
        $allArticle = Article::all();

        return view("welcome")->with("linked_links", $allLink)
            ->with("articles", $allArticle)
            ->with('images',$allImage);
    }
}