<?php

namespace app\Http\Controllers;

use Illuminate\Http\Response;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionType;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        dd(Question::all());
        return response()->json(Question::all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        return Question::findOrFail($id)->load('answers');
    }
}
