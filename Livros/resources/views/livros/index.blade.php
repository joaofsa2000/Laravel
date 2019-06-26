@extends('master')

@section('content')
        @foreach($livros as $livro)
        <p> 
            {{$livro->titulo}} - {{$livro->autor}} da editora: {{$livro->editora}}

        </p>


        @endforeach


@endsection