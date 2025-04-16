@extends('layouts.projects')

@section('title', 'Aggiungi un progetto')

@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
@endsection
