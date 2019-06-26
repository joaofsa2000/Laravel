@extends('master')

@section('content')
    <h1>Livro #{{ $book->id }}</h1>
    <p><b>ISBN:</b> {{ $book->isbn }}</p>
    <p><b>Titulo:</b> {{ $book->title }}</p>
    <p><b>Género:</b> {{ $book->genre }}</p>
    <p><b>Autor:</b> {{ $book->author->name }}</p>
    <p><b>Editora:</b> {{ $book->publisher }}</p>
@endsection