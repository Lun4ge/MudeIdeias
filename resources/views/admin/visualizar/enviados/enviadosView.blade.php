@extends('admin.indexadmin')
@section('conteudo')

<br>
<div class="row">
<div class="col-2"></div>
<div class="col-8"> 
  <table class="table" style="">

      <thead>
        <tr>
          <th scope="col" style="background-color: #c0d80f;padding-left:3%;font-size:25px;font-weight:normal;">Pedidos Respondidos</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($allpedidos as $item)
          @foreach ($all as $itemenviados)
          @if($itemenviados->pedidoid == $item->id)
          <tr>
              <th scope="row" style="background-color: #cccccc;">
                <button style="width: 100%;height:100%;background-color: #cccccc;border:none;outline:none;color:#404040;padding-left:2%;"
                 onclick="if(getElementById('enviado{{$itemenviados->id}}').style.display=='block'){
                  document.getElementById('enviado{{$itemenviados->id}}').style.display='none'}else{
                    document.getElementById('enviado{{$itemenviados->id}}').style.display='block'}">
                    @foreach ($alluser as $user)
                        @if ($user->id == $item->userid)
                        <div style="text-align:left;font-weight:normal;">
                          {{$user->name}} - {{$user->email}}<i class="fas fa-sort-down" style="float:right;"></i></div>
                        @endif
                    @endforeach
                </button>
              </th>
          </tr>
        <tr scope="row" id="enviado{{$itemenviados->id}}" style="display:none;background-color:#f5f5f5;">
          <th>
            <div class="row">
               <div class="col-6">
                 <div style="margin-left:3%;">Pedido do Cliente</div>
                <input type="text" value=" Titulo : {{$item->titulo}}" style="width:90%;margin-bottom:1%;margin-top:3%;margin-left:3%;font-weight:normal;" class="infoboxes" disabled><br>
                <textarea name="" id="" style="width: 90%;margin-left:3%;margin-bottom:3%;font-weight:normal;" cols="180" rows="10" disabled class="infoboxes"> Mensagem : {{$item->mensagem}}</textarea>
               </div>
               <div class="col-6">
                <div style="margin-left:3%;">Orçamento Enviado</div>
                <input type="text" value=" Titulo : {{$itemenviados->titulo}}" style="width:90%;margin-bottom:1%;margin-top:3%;margin-left:3%;font-weight:normal;" class="infoboxes" disabled><br>
                <textarea name="" id="" style="width: 90%;margin-left:3%;margin-bottom:3%;font-weight:normal;" cols="180" rows="10" disabled class="infoboxes"> Mensagem : {{$itemenviados->mensagem}}</textarea>
               </div>
            </div>
          </th>
          </tr>
          @endif
          @endforeach
          @endforeach
      </tbody>
  
    </table>
  </div>
    <div class="col-2"></div>
  </div>
@endsection