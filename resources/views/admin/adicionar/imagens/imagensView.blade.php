@extends('admin.indexadmin')
@section('conteudo')

<div class="row" style="margin-left: auto;margin-right: auto;">

<div class="sizeImagens card" sty>
  <div style="margin: 10%">
    <form method="POST" action="{{url('imagens/criar')}}" enctype="multipart/form-data"> 
        @csrf

    <input type="file" class="form-control-file" id="imagem" name="imagem">
    <br>
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
    </select><br>

    <input type="submit" value="Confirmar" class="btn">
  </form>
</div>
</div>

@foreach ($all as $item)
<div class="sizeImagens card">
    <img src="{{asset('/portfolio/'.$item->imagem)}}" alt="imagem" class="sizeImagens" style="position: relative;">

    <form action="/imagens/{{$item->id}}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="X" class="btn tabelaMarcasDelete" style="right: 1%;bottom:1%;position: absolute;">
      </form>
</div>
@endforeach

</div>

@endsection