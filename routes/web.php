<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::controller(LoginController::class)->group(function(){
    Route::get('/','login')->name('login');
    Route::post('/do_login','doLogin')->name('do.login');
});

Route::middleware('auth')->group(function(){
    Route::controller(QuestionController::class)->group(function(){
        Route::get('/list',"questionList")->name('question.list');
    });
    Route::controller(AnswerController::class)->group(function(){
        Route::post('answer','answer')->name('answer.submit');
    });
});
