@extends('admin.indexadmin')
@section('conteudo')

<div class="container">
    @foreach ($all as $item)
        <a href="/pedidos/{{$item->id}}/unico">
          <b style="margin-right:5%">{{$item->titulo}}</b>
        </a>
    @endforeach
</div>

@endsection