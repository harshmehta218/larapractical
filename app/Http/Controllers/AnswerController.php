<?php

namespace App\Http\Controllers;

use App\Http\Requests\Answer\create;
use App\Models\Answer;
use App\Models\Question;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AnswerController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $questions = Question::get();
        return view('answer.create', compact('questions'));
    }

    public function store(create $request)
    {
        try {
            $answer = Answer::create([
                'question_id' => $request->question_id,
                'answer' => $request->answer
            ]);

            if ($answer) {
                return redirect()->route('questions');
            }
        } catch (Exception $e) {
            Log::info($e);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
