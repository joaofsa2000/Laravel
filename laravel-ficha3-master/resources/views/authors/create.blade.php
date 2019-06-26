@extends('master')

@section('content')
    <h1>Novo Autor</h1>
    <form action="/authors" method="post">
        @csrf
        <p>Nome: <input type="text" name="name"></p>
        <p>Nacionalidade: <input type="text" name="nationality"></p>
        <p><input type="submit" value="Criar"></p>
    </form>
@endsection