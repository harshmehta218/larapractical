<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\create;
use App\Http\Requests\Question\update;
use App\Models\Answer;
use App\Models\Question;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::with('answers')->get();
        return view('questions.list', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(create $request)
    {
        try {
            $questions = Question::create([
                'questions' => $request->question
            ]);

            if ($request->answer) {
                foreach ($request->answer as $answer) {
                    $answer = Answer::create([
                        'question_id' => $questions->id,
                        'answer' => $answer
                    ]);
                }
            }

            if ($questions && $answer) {
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
        $question = Question::with('answers')->find($id);
        return view('questions.edit', compact('question'));
    }

    public function update(update $request, $id)
    {
        try {
            $questions = Question::create([
                'question' => $request->question
            ]);
            if ($request->answer) {
                foreach ($request->answer as $answer) {
                    $answer = Answer::create([
                        'question_id' => $questions->id,
                        'answer' => $answer
                    ]);
                }
            }

            if ($questions && $answer) {
                return redirect()->route('questions');
            }
        } catch (Exception $e) {
            Log::info($e);
        }
    }

    public function destroy($id)
    {
        dd($id);
    }
}
