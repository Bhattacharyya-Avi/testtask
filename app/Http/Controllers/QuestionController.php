<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function questionList()
    {
        $questions = Question::with('option')->get();
        // dd($questions);
        return view('question.question',compact('questions'));
    }
}
