<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'GalleryLinkArticleController@all');
/*function () {


    return View::make('welcome')

});*/

//contact
Route::get('contact_us', 'ContactController@getContact');


//image of gallary
Route::get('gallery_all', 'GalleryController@all');
Route::post('admin/uploadImage', 'GalleryController@upload');
Route::get('admin/removeImage/{id}', 'GalleryController@remove');



//question
Route::get('question_all', 'QuestionController@all');
Route::post('question_store',  'QuestionController@store');
Route::get('question_update/{question}', ['as' => 'answer.edit', 'uses' => 'QuestionController@edit']);//to edit answer by admin
Route::get('question/storeAns/{id}',  'QuestionController@storeAns');
Route::get('admin/removeQuestion/{id}',  'QuestionController@remove');


//article
Route::get('article_all', 'ArticleController@all');
Route::get('article/{article_id}', ['as' => 'article.show', 'uses' => 'ArticleController@show']);
Route::post('admin/uploadArticle', 'ArticleController@upload');
Route::get('admin/removeArticle/{id}', 'ArticleController@remove');
Route::get('admin/article/edit/{article}', ['as' => 'article.edit', 'uses' => 'ArticleController@edit']);


//link
Route::post('admin/uploadLink', 'LinkController@upload');
Route::get('admin/removeLink/{id}', 'LinkController@remove');


Route::post('getmsg','AjaxController@index');

//authentication
Route::auth();
Route::get('admin', 'UserController@index');


//edit user profile
//Route::post('/edithoto', 'UserController@editPhoto');
Route::post('user/editInfo', 'UserController@editBaseInfo');
Route::post('user/editPass', 'UserController@editPass');



//Not Found 404
Route::get('not_found', function () {


    return View::make('not_found');

});





