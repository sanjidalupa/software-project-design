@extends('layouts.layout')

@section('content')

<h1>Feedbacks</h1>

<form action="{{ route('feedbacks.index') }}" class="mb-5 mt-5" method="GET">
    <div class="row">
        <div class="col-3">
            <label for="survey" class="form-label">Survey form:</label>
        </div>
        <div class="col-7">
            <select class="form-select" aria-label="Default select example" name="form_id">
                <option selected>Select a survey form</option>
                @foreach ($forms as $form)
                <option value="{{ $form->id }}">{{ $form->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <button class="btn btn-secondary">Search</button>
        </div>
    </div>
    
</form>

<div class="row">
    <div class="col-3">
        <h2>{{ $totalCount }}</h2>
        <span>Total feedback entries</span>
    </div>
    <div class="col-9 feedback-feed mb-5">
        {{ $feedbacks->links() }}
        @foreach ($feedbacks as $feedback)
        <div class="row feedback mb-1 border p-2 rounded-3">
            <div class="col-2 form-avatar-container">
                <div class="form-avatar mt-2">
                    <i class="fa-solid fa-message"></i>
                </div>
                <div class="satisfaction">
                    @if ($feedback->satisfaction_ratio) {{ $feedback->satisfaction_ratio }}% @else <i class="fa-regular fa-circle-xmark"></i> @endif
                </div>
            </div>
            {{-- Survey summary --}}
            <div class="col-10 feedback-content">
                <div class="feedback-content__header">
                    <h3>Feedback #{{ $feedback->id }} - {{ $feedback->form->name }}</h3>
                </div>
                <div class="feedback-content__body d-flex justify-content-between align-items-center">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <i class="fa-regular fa-clock"></i>
                            {{ $feedback->completed_time ?? '---' }}
                        </li>
                        <li class="list-group-item">
                            @if ($feedback->completed_at)
                            <i class="fa-solid fa-check"></i>
                            @else 
                            <i class="fa-regular fa-circle-xmark"></i>
                            @endif
                        </li>
                        <li>
                        </li>
                    </ul>
                    <a href="{{ route('feedbacks.show', ['feedback' => $feedback->id]) }}" class="btn btn-secondary float-right">View details</a>
                </div>
                <div class="feedback-content__footer mt-2">
                    {{-- @foreach ($feedback->attributeValues as $attributeValue)
                    <span class="badge rounded-pill text-bg-secondary">{{ $attributeValue->attribute->name }}: {{ $attributeValue->value }}</span>
                    @endforeach --}}
                    {{-- <span class="badge rounded-pill text-bg-secondary">Age: 10</span>
                    <span class="badge rounded-pill text-bg-secondary">Profession: teacher</span> --}}
                </div>
            </div>
        </div>  
        @endforeach
    </div>

    {{-- Pagination --}}
    {{ $feedbacks->links() }}
    <div class="clearfix mt-5"></div>
</div>

@endsection

@push('customCss')
    <style>
        .form-avatar {
            font-size: 24px;
            text-align: center;
            display: block;
            width: 50px;
            height: 50px;
            background: #7e31cb;
            border-radius: 50px;
            line-height: 50px;
            color: white;
            margin: auto;          
        }

        .form-avatar-container {
            position: relative;
        }

        .satisfaction {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 15px;
            color: #000;
            background: #fdc553;
            width: 50px;
            text-align: center;
            border-radius: 7px;
        }
    </style>    
@endpush