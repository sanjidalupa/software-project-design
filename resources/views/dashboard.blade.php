@extends('layouts.layout')

@section('content')
  <section>
    <div class="row mb-5">
      <div class="col-md-12">
        <a href="{{ route('forms.create') }}" class="btn btn-primary mt-5">Create New Form</a>
      </div>
    </div>
    <div class="row">
    @if($forms->isEmpty())
        <div class="col-md-12">
          <div class="alert alert-warning" role="alert">
            No forms found
          </div>
        </div>
    @endif
    @foreach ($forms as $form)
        <div class="col-md-3">
          <div class="card mb-5" style="width: 18rem;">
            <img src="https://s3-eu-west-1.amazonaws.com/feedier-production/carriers/cover_11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $form->name }}</h5>
              <p class="card-text">Created: {{ $form->created_at->diffForHumans() }}</p>
              <a href="{{ route('forms.show', ['form' => $form->id]) }}" class="btn btn-primary">Edit</a>
              <a href="{{ route('forms.delete', ['form' => $form->id]) }}" class="btn btn-danger">Delete</a>
              <a href="{{ route('feedbacks.index', ['form_id' => $form->id]) }}" class="btn btn-secondary"><i class="fa-regular fa-eye"></i></a>
            </div>
          </div>
        </div>
    @endforeach
      </div>
  </section>
@endsection