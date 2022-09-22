<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
       $userInput = $request->except('_token');
       if (Auth::attempt($userInput)) {
        return redirect()->route('question.list');
       }
       return redirect()->back();
    }
}
