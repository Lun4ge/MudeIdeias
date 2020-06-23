@extends('admin.indexadmin')
@section('conteudo')

<div class="container">
    @foreach ($all as $item)
        <a href="/pedidos/{{$item->id}}/unico">
          <b style="margin-right:5%">{{$item->titulo}}</b>{{$only->id}}
        </a>
    @endforeach
</div>

<form method="POST" action="/enviados/{{$only->id}}/criar" enctype="multipart/form-data">
    @csrf
    <input type="text" name="titulo" id="titulo"><br>
    <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea><br>
    <input type="text" name="preco" id="preco"><br>
    <input type="file" name="ficheiro" id="ficheiro" multiple>
    <input type="submit" value="Introduzir">
</form>

@endsection