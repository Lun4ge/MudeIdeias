@extends('admin.indexadmin')
@section('conteudo')

<div class="row" style="margin-left: auto;margin-right: auto;">

<div class="sizeImagens card">
  <div style="margin: 10%">
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

    <input type="submit" value="Confirmar" class="btn">
  </form>
<br>
  <form method="GET" action="{{url('imagens/procurar')}}" enctype="multipart/form-data"> 
    @csrf
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
<input type="submit" value="Procurar" class="btn">
</form>
</div>
</div>

@foreach ($all as $item)
<div class="sizeImagens card">
    <img src="{{asset('/portfolio/'.$item->imagem)}}" alt="imagem" class="sizeImagens" style="position: relative;">

    <form action="/imagens/{{$item->id}}" method="POST" style="right: 1%;bottom:1%;position: absolute;">
        @csrf
        @method('delete')
        <input type="submit" value="X" class="btn tabelaMarcasDelete">
    </form>

    <form action="/imagens/estado/{{$item->id}}" method="POST" style="right: 1%;top:1%;position: absolute;">
      @csrf
    <input type="submit" class="btn tabelaMarcasEstado" value="{{$item->estado}}">
    </form>

</div>
@endforeach

</div>

@endsection