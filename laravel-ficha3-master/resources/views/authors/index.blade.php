@extends('master')

@section('content')
    <h1>Lista de Autores</h1>
    <div>
        <a href="/authors/create">Criar Novo</a>
        @foreach ($authors as $author)
            <p>
                Nome: <a href="/authors/{{ $author->id }}">{{ $author->name }}</a> | Ações: <a href="/authors/{{ $author->id }}/edit">Editar</a>
                <form action="/authors/{{ $author->id }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar">
                </form>
            </p>
        @endforeach
    </div>
@endsection