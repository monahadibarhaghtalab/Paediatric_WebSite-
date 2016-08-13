<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


//some changes needs 

class QuestionController extends Controller
{

	private function getAnsweredQuestion(){

		for ($i=0; $i < Question::; $i++) { 
        	if (condition) {
        		# code...
        		$allAnswered = Image::all();
        	}
        	# code...
        }
    	

		return $allAnswered
	}
    //To get all answered questions
        public functtion allAnswered(){

    	
    	return view("question\allAnsweredQuestion")->with("answeredQs", getAnsweredQuestion());
    }


    public function create()
    {
        return view('question.create');// not sure if . is correct or \ 

    }

        public function store(Request $request)
    {
        $question = new Question();
        $question->title = $request->post('title');
        $question->body = $request->post('body');
        
        $question->save();

        return view('question.all')->with('answeredQs', getAnsweredQuestion());
    }


     public function editAnswer($id){
    	$question = Question::find($id);

    	return view('questoin.edit')->with('question', $question);
    }



     public function updateAnswer(Request $request){
    	$question = Question::find($requset->post('id'));

    	$question->answer = $request->post('answer');
    	$question->is_confirmed = 1;
    	$question->save();

    	return Redirect::to(admin/quesiotn);

    }

}
