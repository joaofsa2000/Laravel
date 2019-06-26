@extends('master')

@section('content')
    <h2>Detalhes do Produto</h2>
    <p>
    <b>Nome: </b> {{$product->name}}
    </p>
    <p>
    <b>Preço: </b> {{$product->preco}}
    </p>
    <p>
    <b>Descrição: </b> {{$product->description}}
    </p>
    
@endsection