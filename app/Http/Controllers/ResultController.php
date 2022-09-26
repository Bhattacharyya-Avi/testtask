<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result()
    {
        $users = User::with('department')->orderBy('total_mark','desc')->get();
        $resultCount = User::count('total_mark');
        return view('result.result',compact('users','resultCount'));
    }
}
