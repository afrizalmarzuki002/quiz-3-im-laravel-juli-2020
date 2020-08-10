@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Add Project</h1>
            <form method="post" action="/proyek">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Insert Project Name" name="title" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Insert Description" name="description" value="{{ old('description') }}">
                    @error('description')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="text" class="form-control @error('start_date') is-invalid @enderror" id="start_date" placeholder="Insert Start Date" name="start_date" value="{{ old('start_date') }}">
                    @error('start_date')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="text" class="form-control @error('end_date') is-invalid @enderror" id="end_date" placeholder="Insert End Date" name="end_date" value="{{ old('end_date') }}">
                    @error('end_date')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Project</button>
            </form>
        </div>
    </div>
</div>
@endsection