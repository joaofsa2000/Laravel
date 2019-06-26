@extends('master')

@section('content')
    <h1>Editar Livro</h1>
    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('put')
        <p>ISBN: <input type="text" name="isbn" value="{{ $book->isbn }}"></p>
        <p>Titulo: <input type="text" name="title" value="{{ $book->title }}"></p>
        <p>Género: <input type="text" name="genre" value="{{ $book->genre }}"></p>
        <p>Autor: 
       <select name="author_id">
            @foreach($authors as $author)
            <option value="{{ $author->id }}" {{ ($author->id == $book->author_id)?'selected':''  }}>
                {{$author->name}}
            </option>
            @endforeach
        </select>
        </p>
        <p>Editora: <input type="text" name="publisher" value="{{ $book->publisher }}"></p>
        <p><input type="submit" value="Guardar"></p>
    </form>
@endsection