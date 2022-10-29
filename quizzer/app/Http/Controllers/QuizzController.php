<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizzController extends Controller
{



    function index($id)
    {

$question=Question::find($id);
        return view('question',[
            "question"=>$question
        ]);

    }

    function check(Request $request)
    {

        $question_id=$request["question_id"];
        $userChoiceId=$request["answerr"];
        $correctChoiceId=Answer::where('question_id','=',$question_id)->where('is_true','=',1)->first()->id;

        if ($correctChoiceId==$userChoiceId)
        {

           $userScore= Session::get("user_score");
           $userScore++;
            Session::put("user_score",$userScore);


        }else{

            $userScore= Session::get("user_score");
            $userScore--;
            Session::put("user_score",$userScore);

        }


        if ($question_id < Session::get("count")){

            $question_id++;
            return redirect("/question/$question_id");

        }else{

            return view('final',[]);

        }



    }



}
