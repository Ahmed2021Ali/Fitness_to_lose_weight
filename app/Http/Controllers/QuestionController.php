<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionResource;
use App\Models\Question;

class QuestionController extends Controller
{
    public function show()
    {
        $questions = Question::get();
        return response()->json(['status' => true, 'questions' => QuestionResource::collection($questions)]);
    }
}
