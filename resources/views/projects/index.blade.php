@extends('layouts.projects')

@section('title', 'Projects')

@section('table')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->title }}</th>
                    <td>{{ $project->author }}</td>
                    <td>{{ $project->category }}</td>
                    <td>{{ $project->content }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
