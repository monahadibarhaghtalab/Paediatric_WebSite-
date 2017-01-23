<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Entities\Question;


//some changes needs 

class QuestionController extends Controller
{


    //To get all answered questions
    public function all(){
        $allAnswered = Question::where('is_answered', '1');
    	return view("question.question")->with("answeredQs", $allAnswered);
    }


    public function create()
    {
        return view('question.create');// not sure if . is correct or \ 

    }

    //store new question
        public function store(Request $request)
    {
        $question = new Question();
        $question->title = $request->post('title');
        $question->body = $request->post('body');
        
        $question->save();

        return view('question.all')->with('answeredQs', getAnsweredQuestion());
    }


    //edit answer
     public function editAnswer($id){
    	$question = Question::find($id);

    	return view('questoin.edit')->with('question', $question);
    }


    public function remove($id){
        
        $question  = Question::find($id);
        $question->delete();

        return Redirect::to(admin);

    }


     public function updateAnswer(Request $request){
         $question = Question::find($request->post('id'));

    	$question->answer = $request->post('answer');
    	$question->is_answered = 1;
    	$question->save();

    	return Redirect::to(admin/question);

    }

}
