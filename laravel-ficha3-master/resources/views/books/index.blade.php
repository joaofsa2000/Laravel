@extends('master')

@section('content')
    <h1>Lista de Livros</h1>
    <div>
        <a href="/books/create">Criar Novo</a>
        @foreach ($books as $book)
            <p>
                Titulo: <a href="/books/{{ $book->id }}">{{ $book->title }}</a> | Ações: <a href="/books/{{ $book->id }}/edit">Editar</a>
                Autor: {{$book->author->name}}
                <form action="/books/{{ $book->id }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar">
                </form>
            </p>
        @endforeach
    </div>
@endsection