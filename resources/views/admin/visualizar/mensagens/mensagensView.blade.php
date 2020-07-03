@extends('admin.indexadmin')
@section('conteudo')
<?php $contmensagem = 0; ?>

     <br>
     <div class="container" style="with:100%;text-align: center;background-color:#c0d80f;padding-top:1%;padding-bottom:1%;"><b style="">Mensagens</b></div><br>
     <div class="row" style="margin-left:10%;margin-right:10%;">
      @foreach ($all as $item)
      <?php $contmensagem++; ?>
      @if($contmensagem == 1)
      <div class="col-5" style="">
      <button class="mensagemClick" style="">{{$item->titulo}} <i class="fas fa-sort-down" style="margin-left:80%;"></i></button>

      <div id="mensagem{{$item->id}}" style="display: none;">
        {{$item->nome}}<br>
        {{$item->email}}<br>
      </div>

      <script>
       
      </script>
      
      </div>
      <div class="col-2" style="background-color:#c0d80f;height:100%;padding-left:5%;padding-right:5%;padding-top:2%;padding-bottom:2%"></div>
      @else
      <div class="col-5">
        <button class="mensagemClick" onclick="document.getElementById('mensagem{{$item->id}}').style.display='block'">{{$item->nome}} <i class="fas fa-sort-down" style="margin-left:80%;"></i></button>

        <div id="mensagem{{$item->id}}" style="display: none;">
          {{$item->nome}}<br>
          {{$item->email}}<br>
        </div>
  
        <script>
          // function()
        </script>

      </div>
     </div><br>
     <div class="row" style="margin-left:10%;margin-right:10%;">
     <?php $contmensagem=0; ?>
      @endif
      @endforeach
    </div>
@endsection