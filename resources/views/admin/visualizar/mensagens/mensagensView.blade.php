@extends('admin.indexadmin')
@section('conteudo')

{{-- 
     <br>
     <div class="container" style="with:100%;text-align: center;background-color:#c0d80f;padding-top:1%;padding-bottom:1%;"><b style="">Mensagens</b></div><br>
     <div class="row" style="margin-left:10%;margin-right:10%;">
      @foreach ($all as $item)
      @if($contmensagem == 1)
      <div class="col-5" style="">
      <button class="mensagemClick" style="" id="button{{$item->id}}" onclick="document.getElementById('mensagem{{$item->id}}').style.display='block'">{{$item->titulo}} <i class="fas fa-sort-down" style="margin-left:80%;"></i></button><br>

      <div id="mensagem{{$item->id}}" style="display: none;padding-right:5%;padding-left:5%;padding-top:1%;background-color:gray; width: 100%;color:white;">
        {{$item->nome}}<br>
        {{$item->email}}<br>
        <div style="padding-bottom:2%;">{{$item->mensagem}}<br></div>
      </div>

      </div>
      <div class="col-2" style="background-color:#c0d80f;height:100%;padding-left:5%;padding-right:5%;padding-top:2%;padding-bottom:2%;height:100%;"></div>
      @else
      <div class="col-5">
        <button class="mensagemClick" onclick="document.getElementById('mensagem{{$item->id}}').style.display='block'">{{$item->titulo}} <i class="fas fa-sort-down" style="margin-left:80%;"></i></button>

        <div id="mensagem{{$item->id}}" style="display: none;padding-right:5%;padding-left:5%;padding-top:1%;background-color:gray; width: 100%;color:white;">
          {{$item->nome}}<br>
          {{$item->email}}<br>
          <div style="padding-bottom:2%;">{{$item->mensagem}}<br></div>
        </div>

      </div>
     </div><br>
     <div class="row" style="margin-left:10%;margin-right:10%;">
      @endif
      @endforeach
    </div>
@endsection --}}



{{-- 
<br>
<div class="row">
<div class="col-2"></div>
<div class="col-8"> 
  <table class="table" style="">

      <thead>
        <tr>
          <th scope="col" style="background-color: #c0d80f;text-align:center;font-size:25px;">
            <b>Mensagens</b></th>
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
                  <div style="text-align:left;">{{$item->id}} {{$item->titulo}}<i class="fas fa-sort-down" style="float:right;"></i></div>
                </button>
              </th>
          </tr>
        <tr scope="row" id="pedido{{$item->id}}" style="display:none;background-color:#f5f5f5;">
          <th>
           <div class="row">
              <div class="col-8">
              <input type="text" value="{{$item->titulo}}" style="width:100%;margin-bottom:3%;"><br>
              <textarea name="" id="" style="width: 100%" cols="50" rows="10">{{$item->mensagem}}</textarea>
              @foreach ($allimgs as $itemim)
                  @if($itemim->orcamentoid == $item->id)
                  {
                    <a href="{{asset('/imagenspedidos/'.$itemim->imagem)}}" download>
                      <img src="{{asset('/imagenspedidos/'.$itemim->imagem)}}" alt="W3Schools" width="104" height="142">
                    </a>
                  }
                  @endif
              @endforeach
              <textarea name="" id="" style="width: 100%" cols="50" rows="10">{{$item->mensagem}}</textarea>


              </div>
              <div class="col-4">
                
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
@endsection --}}