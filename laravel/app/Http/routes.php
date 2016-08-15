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

Route::get('/', function () {
    return view('welcome');
});

//image of gallary
Route::get('/gallery/all', 'ImageController@all');


//question
Route::get('/question/all', 'QuestionController@all');
Route::get('/question/create', ['as' => 'question.create', 'uses' => 'QuestionController@create']);
Route::post('/question/create', ['as' => 'question.store', 'uses' => 'QuestionController@store']);
Route::get('/admin/answer/edit/{question}', ['as' => 'answer.edit', 'uses' => 'QuestionController@edit']);//to edit answer by admin



//article
Route::get('/article/all', 'ArticleController@all');
Route::get('/admin/article/create', ['as' => 'article.create', 'uses' => 'ArticleController@create']);
Route::post('/admin/article/create', ['as' => 'article.store', 'uses' => 'ArticleController@store']);
Route::get('/admin/article/edit/{article}', ['as' => 'article.edit', 'uses' => 'ArticleController@edit']);









Route::auth();

Route::get('/home', 'HomeController@index');
