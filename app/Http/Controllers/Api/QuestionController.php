<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\QuestionService;
use App\Http\Resources\QuestionResource;

class QuestionController extends Controller
{
    private $service;

    public function __construct(QuestionService $questionService)
    {
        $this->service = $questionService;
    }

    public function index(Request $request)
    {
        $data = $this->service->collection($request);
        return new QuestionResource($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
