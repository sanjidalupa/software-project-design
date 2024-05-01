<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Question;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('forms.create');
    }

    public function show(Form $form)
    {
        $questions = Question::where('form_id', $form->id)->get();

        return view('forms.show', compact('form', 'questions'));
    }

    public function loadForm(Form $form)
    {
        $form->load('questions.metas');

        return view('forms.feedback-form', compact('form'));
    }

    public function share(Form $form)
    {
        return view('forms.share', compact('form'));
    }

    public function destroy(Form $form)
    {
        $form->delete();

        return redirect()->route('dashboard');
    }
}
