@extends('admin.indexadmin')
@section('conteudo')
<div class="tabelamarcas">
  
<table class="table table-list-search">
    <thead class="tabelaMarcasTop">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Marca</th>
          <th scope="col"><input class="form-control" id="system-search" name="q" placeholder="Procurar" style="" required></th>
          <th scope="col">
            <a class="btn" data-toggle="collapse" href="#AdicionarMarca" role="button" aria-expanded="false" id="tabelaMarcasCreate" aria-controls="collapseExample">Criar Marca</a>
        </tr>
      </thead>
     
      <tbody class="tabelaMarcasBottom">
        <tr id="AdicionarMarca" class="collapse">

          <form method="POST" action="{{url('marcas/criar')}}" enctype="multipart/form-data"> 
              @csrf
              <th scope="row"></th>
              <td></td>
              <td><input type="text" class="form-control" id="marca" name="marca" placeholder="Nome da Marca"></td>
              <td><input type="submit" value="Criar" class="btn confirmButton"></td></form>

        </tr>
    @foreach ($all as $item)
        <tr>
          <th scope="row" class="tabelaMarcasText">{{$item->id}}</th>
          <td class="tabelaMarcasText">{{$item->nome}}</td>
          <td></td>
          <td>
            <form action="/marcas/{{$item->id}}" method="POST">
              <input onClick="window.location.href='/marcas/{{$item->id}}/edit'" class="btn tabelaMarcasEdit" type="button" Value="Editar">
              @csrf
              @method('delete')
              <input type="submit" value="Eliminar" class="btn tabelaMarcasDelete">
            </form>
          </td>
        </tr>
    @endforeach
    </tbody>
        </table>  
      </div>
@endsection