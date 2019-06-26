@extends('master')

@section('content')
    <h1>Autor #{{ $author->id }}</h1>
    <p><b>Nome:</b> {{ $author->name }}</p>
    <p><b>Nacionalidade:</b> {{ $author->nationality }}</p>
@endsection