@extends('admin.indexadmin')
@section('conteudo')

<br>
<div class="row">
<div class="col-2"></div>
<div class="col-8"> 
  <table class="table" style="">

      <thead>
        <tr>
          <th scope="col" style="background-color: #c0d80f;text-align:center;font-size:25px;">
            <b>Pedidos de Orçamentos</b></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($all as $item)
          <tr>
              <th scope="row" style="background-color: #cccccc;">
                <button style="width: 100%;height:100%;background-color: #cccccc;border:none;color:#404040;padding-left:2%;"
                 onclick="if(getElementById('pedido{{$item->id}}').style.display=='block'){
                  document.getElementById('pedido{{$item->id}}').style.display='none'}else{
                    document.getElementById('pedido{{$item->id}}').style.display='block'}">
                    @foreach ($alluser as $user)
                        @if ($user->id == $item->userid)
                        <div style="text-align:left;">{{$user->name}} - {{$user->email}}<i class="fas fa-sort-down" style="float:right;"></i></div>
                        @endif
                    @endforeach
                </button>
              </th>
          </tr>
        <tr scope="row" id="pedido{{$item->id}}" style="display:none;background-color:#f5f5f5;">
          <th>
            <div class="row">
              <div class="col-10">
                <input type="text" value=" Titulo : {{$item->titulo}}" style="width:100%;margin-bottom:1%;margin-top:3%;margin-left:3%;" class="infoboxes" disabled><br>
                <textarea name="" id="" style="width: 100%;margin-left:3%;margin-bottom:3%;" cols="180" rows="10" disabled class="infoboxes"> Mensagem : {{$item->mensagem}}</textarea>
              </div>
              <div class="col-2">
                <div style="margin-top: 20%;">
                  @if ($item->estado == "Por Responder")
                  <i class="fas fa-circle" style="color:#ffe20a;float:right;margin-right:10%;" title="{{$item->estado}}"></i>
                  @else
                  <i class="fas fa-circle" style="color:#0bd900;float:right;margin-right:10%;" title="{{$item->estado}}"></i>
                  @endif
                  <br>
                  <div style="float:right;margin-right:10%;margin-top:10%;">
            </div>
            </div>
            <button style="margin-left:25%;" class="btnresponder" onClick="window.location.href='/pedidos/{{$item->id}}/unico'">Responder</button>
              </div>
            </div>
           </div>
          </th>
          </tr>
          @endforeach
      </tbody>
  
    </table>
  </div>
    <div class="col-2"></div>
  </div>

  <div style="position:fixed;">
<form method="POST" action="/enviados/{{$only->id}}/criar" enctype="multipart/form-data">
    @csrf
    <input type="text" name="titulo" id="titulo"><br>
    <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea><br>
    <input type="text" name="preco" id="preco"><br>
    <input type="file" name="ficheiro" id="ficheiro" multiple>
    <input type="submit" value="Introduzir">
</form> 
  </div>
@endsection


