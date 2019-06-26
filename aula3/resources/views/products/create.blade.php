@extends('master')

@section('content')

<h2>Novo Produto</h2>
<form action="/products" method="post">
    @csrf
    Nome:<input type="text" name="name" ><br/>
    Preço: <input type="text" name="price" ><br/>
    Descrição:<br/>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Guardar">
</form>

@endsection