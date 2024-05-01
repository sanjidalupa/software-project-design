@extends('layouts.form')

@section('content')
    <div class="container">
        @livewire('feedback-form', ['form' => $form])
    </div>
@endsection

