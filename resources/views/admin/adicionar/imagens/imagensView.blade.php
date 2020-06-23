@extends('admin.indexadmin')
@section('conteudo')

<?php 
 $cont = 1;
?>
<div class="row " style="margin-left:12%;">
<div class="sizeImagens card">
  <div style="margin-top: 5%;margin-bottom: 1%;margin-left: 5%;margin-right: 5%;">
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
  <hr>
{{-- </div> --}}
{{-- <div> --}}
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

@if($cont == 1)
<div class="sizeImagens card" style="left:0%;">
@elseif($cont == 2)
<div class="sizeImagens card" style="">
@else
<div class="sizeImagens card" style="right:0%;">
@endif
    <img src="{{asset('/portfolio/'.$item->imagem)}}" alt="imagem" class="sizeImagens" style="position: relative;">

    <form action="/imagens/{{$item->id}}" method="POST" style="right: 1%;bottom:1%;position: absolute;">
        @csrf
        @method('delete')
        <button type="submit" value="X" class="btn tabelaMarcasDelete"><i class="fas fa-trash"></i></button>
    </form>

    <form action="/imagens/estado/{{$item->id}}" method="POST" style="right: 1%;top:1%;position: absolute;">
      @csrf
      @if ($item->estado =='visivel')
      <button type="submit" class="btn tabelaMarcasEstado" value="{{$item->estado}}"><i class="fas fa-eye"></i></button>
      @else
      <button type="submit" class="btn tabelaMarcasEstado" value="{{$item->estado}}"><i class="fas fa-eye-slash"></i></button>
      @endif
    </form>
</div>

<?php $cont++; ?>
@if($cont==3)

</div>
 <div class="row" style="margin-left:12%;">

 <?php $cont=0; ?>
@endif

@endforeach

</div>
</div>
@endsection