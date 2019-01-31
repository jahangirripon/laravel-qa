<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function index()
    {   

        // \DB::enableQueryLog();
        $questions = Question::with('user')->latest()->paginate(5);

        return view('questions.index', compact('questions'));
        // view('questions.index', compact('questions'))->render();

        // dd(\DB::getQueryLog());
    }


    public function create()
    {
        $question = new Question();

        return view('questions.create', compact('question'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Question $question)
    {
        //
    }


    public function edit(Question $question)
    {
        //
    }


    public function update(Request $request, Question $question)
    {
        //
    }


    public function destroy(Question $question)
    {
        //
    }
}
