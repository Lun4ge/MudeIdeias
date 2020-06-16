<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/pedidoOrcamentos.css')}}">
    <title>Pedido de Orçamentos</title>
  </head>
  <body>
    <a href="/"><img src="images/logo.png" class="imagem" alt="logo" height="90"></a>
    <section>
      <br><br><br>
      <div class="container; margem">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="container">
                    <form>
                        <h2>PEDIDO DE <br> ORÇAMENTOS</h2>
                        <br><br>
                        <div class="form-group">
                            <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Titulo <input type="text" class="tamanhoInput1" id="Titulo"></h4>
                        </div>
                        <br>
                        <div class="form-group">
                            <h4>Mensagem <textarea id="w3mission" rows="6" class="tamanhoInput2" id="Mensagem"></textarea></h4>
                        </div>
                        <button type="submit" class="upload"><img src="images/upload.png" alt="upload"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="botao">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
      </div>
    </section>
    <br><br><br><br><br>
    <br><br><br><br><br>
    @include('layouts/footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>