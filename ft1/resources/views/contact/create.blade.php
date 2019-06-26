@extends('template')

@section("form")
<p>Morada - {{$morada}}</p>
<form action="" method="post">
@csrf
<p>Nome:<input type="text" name="nome"></p>
<p>Email:<input type="email" name="email" id=""></p>
<p>Mensagem:</p><textarea name="mensagem" id="" cols="30" rows="10"></textarea>
<p><input type="submit" value="Submit"><p>
</form>
@endsection


