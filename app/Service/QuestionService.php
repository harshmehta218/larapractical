<?php 

namespace App\Service;

use App\Models\Question;
use GuzzleHttp\Psr7\Request;

class QuestionService
{
    private $model;

    public function __construct(Question $questionModel)
    {
        $this->model = $questionModel;
    }

    public function collection($request)
    {
        $collection = '';
        $questions = Question::with('answers');

        if($request->page == -1)
        {
            $collection = $questions->get();
        }else{
            $collection = $questions->paginate(5);
        }
        return $collection;
    }
}