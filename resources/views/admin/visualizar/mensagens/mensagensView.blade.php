
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
            <b>Mensagens</b></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($all as $item)
          <tr>
              <th scope="row" style="background-color: #cccccc;">
                <button style="width: 100%;height:100%;background-color: #cccccc;border:none;color:#404040;padding-left:2%;"
                 onclick="if(getElementById('mensagem{{$item->id}}').style.display=='block'){
                  document.getElementById('mensagem{{$item->id}}').style.display='none'}else{
                    document.getElementById('mensagem{{$item->id}}').style.display='block'}">
                     <div style="text-align:left;">{{$item->nome}} - {{$item->email}}<i class="fas fa-sort-down" style="float:right;"></i></div>
                </button>
              </th>
          </tr>
        <tr scope="row" id="mensagem{{$item->id}}" style="display:none;background-color:#f5f5f5;">
          <th>
                <input type="text" value=" Titulo : {{$item->titulo}}" style="width:90%;margin-bottom:1%;margin-top:1%;margin-left:5%;" class="infoboxes" disabled><br>
                <textarea style="width: 90%;margin-bottom:1%;margin-left:5%;" cols="180" rows="10" disabled class="infoboxes"> Mensagem : {{$item->mensagem}}</textarea>
          </th>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
    <div class="col-2"></div>
  </div>
@endsection

