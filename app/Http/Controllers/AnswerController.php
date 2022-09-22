<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function answer(Request $request)
    {
        dd($request->all());
    }
}
