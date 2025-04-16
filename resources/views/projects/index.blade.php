@extends('layouts.projects')

@section('title', 'Projects')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Content</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->title }}</th>
                    <td>{{ $project->author }}</td>
                    <td>{{ $project->category }}</td>
                    <td>{{ $project->content }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project) }}">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex gap-3">
        <a class="btn btn-primary" href="{{ route('projects.create') }}">Aggiungi Progetto</a>

    </div>
@endsection
