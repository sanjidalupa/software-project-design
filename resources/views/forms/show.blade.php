@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-2">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('forms.show', ['form' => $form->id]) }}" class="nav-link active" aria-current="page">
                            Questions
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('forms.share', ['form' => $form->id]) }}" class="nav-link link-dark">
                            Share
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Column 1 content here -->
        </div>
        <div class="col-7">
            <table>
                @foreach ($questions as $question)
                    @livewire('question', ['question' => $question, 'form' => $form])
                @endforeach
            </table>

            <div class="row mt-4">
                <div class="col text-center">
                    <a href="{{ route('questions.create', ['form' => $form->id]) }}" class="btn btn-primary">New Question</a>
                    {{-- <button class="btn btn-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createQuestion">New Question</button> --}}
                </div>
            </div>
            <!-- Column 2 content here -->
        </div>
        <div class="col-3">
            <!-- Column 3 content here -->
        </div>
        {{-- @livewire('nps-question', ['question' => \App\Models\Question::find(2)]) --}}
    </div>
@endsection