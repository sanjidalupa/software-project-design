<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Form $form)
    {
        return view('questions.create', compact('form'));
    }

    public function update(Form $form, Question $question)
    {
        return view('questions.create', compact('form', 'question'));
    }

    public function destroy(Form $form, Question $question)
    {
        $question->delete();

        return redirect()->route('forms.show', $form);
    }
}
