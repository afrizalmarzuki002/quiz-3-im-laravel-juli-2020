@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
        <h1 class="mt-3">Project Details</h1>
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{$project->name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$project->description}}</h6>
              <p class="card-text">Start Date: {{$project->start_date}}</p>
              <p class="card-text">End Date: {{$project->end_date}}</p>
              <a href="{{$project->id}}/edit" class="btn btn-primary">Edit</a>
              <form action="/proyek/{{$project->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/proyek" class="card-link">Back</a>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection