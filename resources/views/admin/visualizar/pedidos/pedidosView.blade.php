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
                  <div style="text-align:left;">{{$item->id}} {{$item->titulo}}<i class="fas fa-sort-down" style="float:right;"></i></div>
                </button>
              </th>
          </tr>
        <tr scope="row" id="pedido{{$item->id}}" style="display:none;background-color:#f5f5f5;">
          <th>
              <input type="text" value="Titulo : {{$item->titulo}}" style="width:90%;margin-bottom:3%;"><br>
              <textarea name="" id="" style="width: 100%" cols="50" rows="10" readonly>Mensagem : {{$item->mensagem}}</textarea>
              @foreach ($allimgs as $itemim)
                  @if($itemim->orcamentoid == $item->id)
                    <a href="{{asset('/imagenspedidos/'.$itemim->imagem)}}" download>
                      <i class="fas fa-download"></i>
                      {{-- <img src="{{asset('/imagenspedidos/'.$itemim->imagem)}}" alt="" width="104" height="142"> --}}
                    </a>
                  @endif
              @endforeach
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