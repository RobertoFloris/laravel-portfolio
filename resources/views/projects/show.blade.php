@extends('layouts.projects')

@section('title', $project->title)

@section('content')
    <h2>
        {{ $project->author }}
    </h2>
    <p>
        {{ $project->category }}
    </p>
    <p>
        {{ $project->content }}
    </p>
@endsection
