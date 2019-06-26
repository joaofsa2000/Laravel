@extends('master')

@section('content')
<p><a href="/products/create">Novo</a></p>
    <h2>Lista</h2>

    @foreach($products as $product)
        <p>
            {{$product->name }} - {{$product->preco}}€
            <a href="/products/{{$product->id}}/edit">Editar</a>
            <form action="/products/{{$product->id}}" method="post">
            @csrf
            @method('delete')
            <input type="Submit" value="Eliminar">
            </form>
        </p>
    @endforeach
@endsection
