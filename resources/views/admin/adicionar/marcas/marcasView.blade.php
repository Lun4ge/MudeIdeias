@extends('admin.indexadmin')
@section('conteudo')
<div>Marcas</div>
<a href="/marcas/criar">HERE</a>

@foreach ($all as $item)
<div>{{$item->nome}}</div>
@endforeach

@endsection