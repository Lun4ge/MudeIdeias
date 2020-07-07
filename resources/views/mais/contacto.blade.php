<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/contacto.css')}}">
    <title>Contacto</title>
  </head>
  <body>
    <a href="/"><img src="images/logo.png" class="imagem" alt="logo" id="logo"></a>
    <section>
      <br><br><br>
      <div class="container; margem">
        <div class="row">
          <div class="col-md-8">
            <p id="texto">
              <img src="images/telefone.png" alt="telefone" height="30">&nbsp;&nbsp;(+351) 91 405 94 72 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (+351) 243 581 581 <br><br>
              <img src="images/correio.png" alt="correio" height="30">&nbsp;&nbsp;geral@mudedideias.com <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mudedideias@gmail.com <br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Segunda a Sexta-Feira das <strong>9h00</strong> às <strong>13h00</strong> | <strong>14h30</strong> às <strong>18h30</strong>
            </p>
            <center><hr style="height:1px;color:#c0d80f;background-color:#c0d80f" width="55%"></center>
            <div class="container">
              <form method="POST" action="{{url('mensagens/criar')}}" enctype="multipart/form-data">
                <p id="ajudar">PODEMOS AJUDAR</p><br>
                <div class="form-group">
                  <p><label for="Nome" id="Nome" class="nome" style="background:#c0d80f; color:white">
                    &nbsp;Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  <input type="text" class="inputNome"></p>
                </div>
                <div class="form-group">
                  <p><label for="Email" id="Email" class="email" style="background:#c0d80f; color:white">
                    &nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  <input type="text" class="inputEmail"></p>
                </div>
                <div class="form-group">
                  <p><label for="tituloMensagem" id="tituloMensagem" class="titulo" style="background:#c0d80f; color:white">
                    &nbsp;Titulo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  <input type="text" class="inputTitulo"></p>
                    </div>
                <div class="form-group">
                  <p><label for="Mensagem" id="Mensagem" class="mensagem" style="background:#c0d80f; color:white; vertical-align:top">&nbsp;Mensagem:&nbsp;</label>
                  <textarea id="mensagem" cols="50" rows="4" class="inputMensagem"></textarea></p>
                </div>
                <button type="submit" class="botao">Enviar</button>
              </form>
            </div>
          </div>
          <div class="col-md-1; linha"></div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-2">
            @include('layouts/menuMais')
          </div>
        </div>
      </div>
    </section>
    @include('layouts/footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>