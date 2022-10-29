<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    function index(){

        $countOfQuestion=Question::all()->count();
        Session::put("count",$countOfQuestion);
        Session::put("user_score",0);
        return view('welcome',[]);


    }


}
