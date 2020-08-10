@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
        <h1 class="mt-3">PROJECTS</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <a href="/proyek/create" class="btn btn-primary my-3">Add Project</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Projects</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$project->name}}</td>
                    <td>
                        <a href="/proyek/{{$project->id}}" class="badge badge-info">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush