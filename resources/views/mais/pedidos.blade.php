<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/pedidoOrcamentos.css')}}">
    <script src="https://kit.fontawesome.com/397dd051b1.js" crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    
    <title>Pedido de Orçamentos</title>
  </head>
  <body>
    <a href="/"><img src="{{asset('images/logo.png')}}" class="imagem" alt="logo" height="90"></a>
    <div class="container">
      <h2>PEDIDO DE <br> ORÇAMENTOS</h2><br>
      <form method="POST" action="{{url('pedidos/criar')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-25">
            <label for="tituloMensagem" style="margin-left: 70%;">Titulo</label>
          </div>
          <div class="col-75">
            <input type="text" id="tituloMensagem" name="tituloMensagem">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="Mensagem" style="margin-left: 55%;">Mensagem</label>
          </div>
          <div class="col-75">
            <textarea id="Mensagem" name="Mensagem" style="height:200px"></textarea>
          </div>
        </div><br>
        
        <div class="row">
          <div class="col-75"></div>
          <div class="col-25a">
            <div class="form-group row">
            {{-- <button type="file" class="upload" style="margin-left: 28%;"><i class="fas fa-upload"></i></button> --}}

               <label class="upload" style="margin-left: 28%;  background-color: #c0d80f;
               color: gray;
               border: none;
               border-radius: 4px;
             
               padding-left: 8%;
               padding-right: 8%;
               /* padding-top: 6%;
               padding-bottom: 6%; */
               height:100%;">
               {{-- Nao funciona com css ... --}}
                 <i class="fas fa-upload"></i><input type="file" style="display: none;" name="imagem[]" multiple> 
                  </label> 

          <button type="submit" class="botao"><b>Enviar</b></button>
          </div> 
           </div>
          </div>

      </form>
    </div>


 <div style="margin-top:5%;">
    @include('layouts/footer')
  </div>

<script>

</script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>