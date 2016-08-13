<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


//some changes needs 

class QuestionController extends Controller
{
    //To get all answered questions
        public functtion allAnswered(){

        for ($i=0; $i < Question::; $i++) { 
        	if (condition) {
        		# code...
        		$allAnswered = Image::all();
        	}
        	# code...
        }
    	
    	return view("question\allAnsweredQuestion")->with("answeredQs", allAnswered);
    }


    public function submit()
    {
        return view('question.sumbit');// not sure if . is correct or \ 

    }
}
