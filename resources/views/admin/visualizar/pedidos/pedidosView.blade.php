@extends('admin.indexadmin')
@section('conteudo')

{{-- <div class="container">
    @foreach ($all as $item)
        <a href="/pedidos/{{$item->id}}/unico">
          <b style="margin-right:5%">{{$item->titulo}}</b>
        </a>
    @endforeach
</div> --}}

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
                @foreach ($allimgs as $itemim)
                  @if($itemim->orcamentoid == $item->id)
                    <a href="{{asset('/imagenspedidos/'.$itemim->imagem)}}" download style="margin-left:3%;">
                      <i class="fas fa-download" style="text-align: center;"></i>
                    </a><br>
                  @endif
              @endforeach
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
@endsection