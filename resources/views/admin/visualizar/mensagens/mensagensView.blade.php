@extends('admin.indexadmin')
@section('conteudo')

<div class="tabelamarcas">
  <table class="table table-list-search">
      <thead class="tabelaMarcasTop">
          <tr>
            <th scope="col">Mensagem</th>
        </thead>
       
        <tbody class="tabelaMarcasBottom">
          <tr id="AdicionarMarca" class="collapse">
  
          </tr>
      @foreach ($all as $item)
          <tr>
            <a data-toggle="collapse" href="#{{$item->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
            <th scope="row" class="tabelaMarcasText">{{$item->titulo}}
              <form action="/mensagens/{{$item->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="X" class="btn tabelaMarcasDelete">
              </form>
            </th></a>

            {{-- <th id="{{$item->id}}">
              {{$item->mensagem}}
            </th> --}}

          </tr><br>
      @endforeach
      </tbody>
          </table>  
        </div>



@endsection