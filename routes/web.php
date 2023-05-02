<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use Psy\TabCompletion\AutoCompleter;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[AuthController::class, 'login'])->name('login');
Route::post('postlogin', [AuthController::class, 'postLogin'])->name('postlogin');

//questions answer module
Route::get('questions',[QuestionController::class, 'index'])->name('questions');
Route::get('create/question',[QuestionController::class, 'create'])->name('create.question');
Route::post('store/question',[QuestionController::class, 'store'])->name('store.question');
Route::get('edit/questionanswer/{id}', [QuestionController::class, 'edit'])->name('edit.questionanswer');
Route::post('update/questionanswer/{id}', [QuestionController::class, 'update'])->name('update.questionanswer');
Route::post('delete/questionanswer/{id}', [QuestionController::class, 'destroy'])->name('delete.questionanswer');


//answer module
Route::get('create/answer', [AnswerController::class, 'create'])->name('create.answer');
Route::post('store/answer', [AnswerController::class, 'store'])->name('store.answer');


