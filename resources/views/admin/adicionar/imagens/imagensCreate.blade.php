@extends('admin.indexadmin')
@section('conteudo')
<div class="container">
    <form method="POST" action="{{url('imagens/criar')}}" enctype="multipart/form-data"> 
        @csrf

    <input type="file" class="form-control-file" id="imagem" name="imagem">
    <select class="form-control" name="tipo" id="tipo">
      <option>Identidade Visual</option>
      <option>Viaturas</option>
      <option>Montras</option>
      <option>Lonas/ Expositores</option>
      <option>Placas/ Reclamos</option>
      <option>Sinalética</option>
      <option>Texteis</option>
      <option>Bandeiras</option>
      <option>Carros</option>
      <option>Motas</option>
      <option>Tratores</option>
      <option>Bicicletas</option>
    </select>

    <a href="/imagens" class="btn">Voltar</a>
    <input type="submit" value="Confirmar" class="btn">
  </form>
</div>

@endsection