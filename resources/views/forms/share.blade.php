@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-2">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('forms.show', ['form' => $form->id]) }}" class="nav-link" aria-current="page">
                            Questions
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('forms.share', ['form' => $form->id]) }}" class="nav-link active">
                            Share
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Column 1 content here -->
        </div>
        <div class="col-10">
            <h3>Form link: <a href="{{ route('feedback.form', ['form' => $form->id]) }}" target="__blank">{{ route('feedback.form', ['form' => $form->id]) }}</a></h3>
            <!-- Column 2 content here -->
        </div>
    </div>
@endsection