<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Mudedideias</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <img src="images/logo.png" alt="logo" height="60"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="images/20anos.png" class="imagem" alt="20anos" height="25">
          </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <div class="row">
                <div class="col-sm-10">
                    <h6><br>(+351) 91 406 94 72 | (+351) 243 581 581 | geral@mudedideias.com <br> <font style="color:#c0d80f">Soluções para publicidade!</font></h6>
                </div>
                <div class="col-sm-2">
                    <div class="w3-dropdown-hover">
                        <button class="w3-button w3-white"><img src="images/mais.png" alt="mais" height="60"></button>
                        <div class="w3-dropdown-content w3-bar-block">
                            <a href="/quemsomos" class="w3-bar-item w3-button">QUEM SOMOS</a>
                            <a href="/oquefazemos" class="w3-bar-item w3-button">O QUE FAZEMOS</a>
                            <a href="/contacto" class="w3-bar-item w3-button">CONTACTO</a>
                            <a href="/ondeEstamos" class="w3-bar-item w3-button">ONDE ESTAMOS</a>
                            @guest
                            @else
                            <a href="/pedidos/criar" class="w3-bar-item w3-button">ORÇAMENTOS</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
          </ul>
      </div>
    </div>
    </nav>
    <img src="images/inicial.jpg" alt="incio" width="100%" height="auto">
    <div class="row">
      <div class="col-sm 2"></div>
      <div class="col-md 1">
        <a href="portfolio/identidadevisual"><img src="images/identidadeVisual.png" class="tamanho" onmouseover="this.src='images/circuloCinza.png'" onmouseout="this.src='images/identidadeVisual.png'" alt="identidadeVisual"></a>
        <b style=" text-align: center;">EHEHE</b>
      </div>
      <div class="col-sm 1">
        <a href="portfolio/viaturas"><img src="images/viaturas.png" class="tamanho" alt="viaturas" onmouseover="this.src='images/circuloCinza.png'" onmouseout="this.src='images/viaturas.png'"></a>
      </div>
      <div class="col-sm 1" class="texto">
       <a href="portfolio/montras"><img src="images/montras.png" class="tamanho" alt="montras" onmouseover="this.src='images/circuloCinza.png'" onmouseout="this.src='images/montras.png'"></a> 
      </div>
      <div class="col-sm 1" class="texto">
        <a href="portfolio/lonas"><img src="images/lonas.png" class="tamanho" alt="lonas" onmouseover="this.src='images/circuloCinza.png'" onmouseout="this.src='images/lonas.png'"></a>
      </div>
      <div class="col-sm 1" class="texto">
        <a href="portfolio/placas"><img src="images/placasReclamos.png" class="tamanho" alt="placasReclamos" onmouseover="this.src='images/circuloCinza.png'" onmouseout="this.src='images/placasReclamos.png'"></a>
      </div>
      <div class="col-sm 1" class="texto">
        <a href="portfolio/sinaletica"><img src="images/sinaletica.png" class="tamanho" alt="sinaletica" onmouseover="this.src='images/circuloCinza.png'" onmouseout="this.src='images/sinaletica.png'"></a>
      </div>
      <div class="col-sm 1" class="texto">
        <a href="portfolio/texteis"><img src="images/texteis.png" class="tamanho" alt="texteis" onmouseover="this.src='images/circuloCinza.png'" onmouseout="this.src='images/texteis.png'"></a>
      </div>
      <div class="col-sm 1" class="texto">
        <a href="portfolio/bandeiras"><img src="images/bandeiras.png" class="tamanho" alt="bandeiras" onmouseover="this.src='images/circuloCinza.png'" onmouseout="this.src='images/bandeiras.png'"></a>
      </div>
      <div class="col-sm 2"></div>
    </div>
    <br>
    <div class="footer">
      <br>
        <div class="container">
            <br>
            <p><img src="images/telefone.png" alt="telefone" height="30">&nbsp;&nbsp;(+351) 91 405 94 72 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (+351) 243 581 581</p> 
            <img src="images/redesSociais.png" alt="redesSociais" class="redesSociais" height="30">
            <p><img src="images/correio.png" alt="correio" height="30">&nbsp;&nbsp;geral@mudedideias.com <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mudedideias@gmail.com</p>
            <p><img src="images/localizacao.png" alt="localizacao" height="30">&nbsp;&nbsp;Zona Industrial - Lote 14 B <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2125 - 363 Muge</p>
            <br><br>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>