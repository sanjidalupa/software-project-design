@extends('layouts.layout')

@section('content')
    <div class="row border-bottom pb-3 mt-5">
        <div class="col-10">
            <h1>Feedback #{{ $feedback->id }}</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('feedbacks.delete', ['feedback' => $feedback->id]) }}" class="btn btn-danger">Delete</a>
            <a href="{{ route('feedbacks.index') }}" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-4 feedback-sidebar">
            <div class="feedback-sidebar__satisfaction">
                <h3>@if ($feedback->satisfaction_ratio) {{ $feedback->satisfaction_ratio }}% @else <i class="fa-regular fa-circle-xmark"></i> @endif </h3>
                <p>Satisfaction Ratio</p>
            </div>
            <div class="feedback-sidebar__date">
                <label class="fw-bold mb-3"><i class="fa-regular fa-calendar"></i> Date</label>
                <p>{{ $feedback->created_at->format('d F, Y \a\t H:i') }}</p>
            </div>
            <div class="feedback-sidebar__attributes">
                <label class="fw-bold mb-3">Attributes</label>
                <p>
                    {{-- <span class="badge rounded-pill text-bg-secondary">Name: Sakib</span>
                    <span class="badge rounded-pill text-bg-secondary">Age: 10</span>
                    <span class="badge rounded-pill text-bg-secondary">Profession: teacher</span>
                    <span class="badge rounded-pill text-bg-secondary">Name: Sakib</span>
                    <span class="badge rounded-pill text-bg-secondary">Age: 10</span>
                    <span class="badge rounded-pill text-bg-secondary">Profession: teacher</span> --}}
                </p>
            </div>
        </div>
        <div class="col-8">
            <div class="feedback-questions-wrap">
                <h3>Question answers</h3>

                @foreach ($feedback->answers as $answer)
                    @if ($answer->question->type === 'text')
                        <x-question-answers.text :answer="$answer"></x-question-answers.text>
                    @elseif ($answer->question->type === 'slider')
                        <x-question-answers.rating :answer="$answer"></x-question-answers.rating>
                    @elseif ($answer->question->type === 'nps')
                        <x-question-answers.nps :answer="$answer"></x-question-answers.nps>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection