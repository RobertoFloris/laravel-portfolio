@extends('layouts.projects')

@section('title', 'Modifica progetto')

@section('content')
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $project->author }}">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $project->category }}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" name="content">{{ $project->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection
