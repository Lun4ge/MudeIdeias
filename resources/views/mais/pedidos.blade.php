<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/contacto.css')}}">
    <title>Orçamento</title>
  </head>
  <body>

    <form method="POST" action="{{url('pedidos/criar')}}" enctype="multipart/form-data"> 
        @csrf
          <h5><input type="text" class="tamanhoInput2" id="tituloMensagem" name="tituloMensagem" placeholder="Titulo da Mensagem"></h5>
          <h5><textarea rows="5" class="tamanhoInput3" id="Mensagem" name="Mensagem" placeholder="Mensagem"></textarea></h5>
          
          <div class="row">
          <input type="file" name="imagema" id="imagema">
          <input type="file" name="imagemb" id="imagemb">
          <input type="file" name="imagemc" id="imagemc">
          <input type="file" name="imagemd" id="imagemd">
          <input type="file" name="imageme" id="imageme">
          </div>
          
        <button type="submit" class="botao">Enviar</button>
      </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>