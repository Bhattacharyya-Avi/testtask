<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Option;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function answer(Request $request)
    {
        // inserting data to the answer table. 
        foreach ($request->options as $key => $option) {
           $userAnswer = Option::find($option);
            Answer::create([
                'user_id' => auth()->user()->id,
                'question_id' => $userAnswer->question_id,
                'option_id' => $userAnswer->id,
                'is_correct' => $userAnswer->correct_answer,
                'point' => $userAnswer->point
            ]);
        }

        // calculating point for a user
        $userInputAnswer = Answer::where('user_id', auth()->user()->id)->get();
        $correctAnswer = 0;
        foreach ($userInputAnswer as $key => $value) {
            $correctAnswer = ($value->is_correct == 1) ? $correctAnswer+$value->point : $correctAnswer+0;
        }

        // inserting point to the user
        User::find(auth()->user()->id)->update([
            'total_mark' => $correctAnswer
        ]);

        // loging out user and sending back to login page
        Auth::logout();
        return redirect()->route('login');
    }
}
