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
    <a href="/"><img src="images/logo.png" class="imagem" alt="logo" height="90"></a>
    <section>
      <br><br><br>
      <div class="container; margem">
        <div class="row">
          <div class="col-md-8">
            <h6 class="margem2">
              <img src="images/telefone.png" alt="telefone" height="30">&nbsp;&nbsp;(+351) 91 405 94 72 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (+351) 243 581 581 <br><br>
              <img src="images/correio.png" alt="correio" height="30">&nbsp;&nbsp;geral@mudedideias.com <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mudedideias@gmail.com <br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Segunda a Sexta-Feira das <strong>9h00</strong> às <strong>13h00</strong> | <strong>14h30</strong> às <strong>18h30</strong>
            </h6>
            <center><hr style="height:1px;color:#c0d80f;background-color:#c0d80f" width="55%"></center>
            <div class="container; margem3">
              <form>
                <h3>PODEMOS AJUDAR</h3>
                <div class="form-group">  
                  {{--<h6><label for="exampleInputEmail1">Nome:</label></h6>--}}
                  <h5><input type="text" class="tamanhoInput1" id="Nome" placeholder="Nome"></h5>
                </div>
                <div class="form-group">
                  {{--<h6><label for="tituloMensagem">Titulo da Mensagem:</label></h6>--}}
                  <h5><input type="text" class="tamanhoInput2" id="tituloMensagem" placeholder="Titulo da Mensagem"></h5>
                </div>
                <div class="form-group">
                  {{--<h6><label for="Mensagem">Mensagem:</label></h6>--}}
                  <h5><textarea id="w3mission" rows="5" class="tamanhoInput3" id="Mensagem" placeholder="Mensagem"></textarea></h5>
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