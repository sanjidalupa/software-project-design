<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Form;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $query = Feedback::whereHas('form', fn ($query) => $query->where('user_id', auth()->id()))
            ->when($request->has('form_id'), fn ($query) => $query->where('form_id', $request->get('form_id')));

        $feedbacks = $query->with('form')->latest()->paginate(10)->withQueryString();
        $forms = Form::where('user_id', auth()->id())->get();

        $totalCount = $query->count();

        return view('feedbacks.index', compact('feedbacks', 'totalCount', 'forms'));
    }

    public function show(Feedback $feedback)
    {
        $feedback->load('answers.question');

        return view('feedbacks.show', compact('feedback'));
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('feedbacks.index');
    }
}
