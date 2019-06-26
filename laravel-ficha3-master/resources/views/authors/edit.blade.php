@extends('master')

@section('content')
    <h1>Editar Autor</h1>
    <form action="/authors/{{ $author->id }}" method="post">
        @csrf
        @method('put')
        <p>Nome: <input type="text" name="name" value="{{ $author->name }}"></p>
        <p>Nacionalidade: <input type="text" name="nationality" value="{{ $author->nationality }}"></p>
        <p><input type="submit" value="Guardar"></p>
    </form>
@endsection