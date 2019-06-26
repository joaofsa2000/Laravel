@extends('master')

@section('content')
    <h1>Novo Livro</h1>
    <form action="/books" method="post">
        @csrf
        <p>ISBN: <input type="text" name="isbn"></p>
        <p>Titulo: <input type="text" name="title"></p>
        <p>Género: <input type="text" name="genre"></p>
        <p>Autor: 
        <select name="author_id">
            @foreach ($authors as $author)
            <option value="{{$author->id}}">
                {{$author->name}}
            </option>
            @endforeach
        </select>
        </p>
        <p>Editora: <input type="text" name="publisher"></p>
        <p><input type="submit" value="Criar"></p>
    </form>
@endsection