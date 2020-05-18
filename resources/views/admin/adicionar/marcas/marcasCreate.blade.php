@extends('admin.indexadmin')
@section('conteudo')
<div class="container">
    <form method="POST" action="{{url('marcas/criar')}}" enctype="multipart/form-data"> 
        @csrf
        <form>
            <input type="text" class="form-control" id="marca" name="marca" placeholder="Nome da Marca">
            <input type="submit" value="Confirmar" class="btn">
  </form>
</div>
@endsection