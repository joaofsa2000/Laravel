@extends('master')

@section('content')

<h2>Editar Produto {{$product->id}}</h2>
<form action="/products/{{$product->id}}" method="post">
    @csrf
    @method('put')
    Nome:<input type="text" name="name" value="{{$product->name}}"><br/>
    Preço: <input type="text" name="price" value="{{$product->preco}}"><br/>
    Descrição:<br/>
    <textarea name="description" id="" cols="30" rows="10" >{{$product->description}}</textarea>
    <input type="submit" value="Guardar">
</form>

@endsection