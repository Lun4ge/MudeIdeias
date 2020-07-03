@extends('admin.indexadmin')
@section('conteudo')
<div class="tabelamarcas row">
<div class="col-8">
<table class="table table-list-search">
    <thead class="tabelaMarcasTop" >
        <tr>
          <th scope="col" style="baseline;">ID</th>
          <th scope="col">Marca</th>
          <th scope="col"><input class="form-control" id="system-search" name="q" placeholder="Procurar" size="2" style="margin-rigth: 5%" required></th>
        </tr>
      </thead>
     
      <tbody class="tabelaMarcasBottom">
    @foreach ($all as $item)
        <tr>
          <th scope="row" class="tabelaMarcasText">{{$item->id}}</th>
          <td class="tabelaMarcasText">{{$item->nome}}</td>
          <td>
              <div style="margin-left:60%;margin-right:auto;">
              <button onClick="window.location.href='/marcas/{{$item->id}}/edit'" class="btn tabelaMarcasEdit" type="button" style="padding-left: 15%;padding-right:15%;"><i class="fas fa-pen"></i></button>
              <button onClick="window.location.href='/marcas/{{$item->id}}/delete'" type="submit" value="Eliminar" class="btn tabelaMarcasDelete" style="padding-left: 15%;padding-right:15%;"><i class="fas fa-trash-alt"></i></button>
              </div>
          </td>
        </tr>
    @endforeach
    </tbody>
        </table>
  </div> 
  <div class="col-4">
    <table class="table">
      <thead class="tabelaMarcasTop" style="text-align:center;"><tr><th scope="col" colspan="3">Criar Marca</th></tr></thead>
            <tbody class="tabelaMarcasBottom">
            <form method="POST" action="{{url('marcas/criar')}}" enctype="multipart/form-data"> 
              @csrf
              <th scope="row"><input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Marca"></th>
              <th><input type="submit" value="Criar" class="btn confirmButton" style="width: 100%"></th></form>
            </tbody>
    </table>
  </div>
      </div>
@endsection