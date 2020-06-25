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
            <img src="{{asset('images/logo.png')}}" alt="logo" height="60"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{asset('images/20anos.png')}}" class="imagem" alt="20anos" height="25">
          </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <div class="row">
                <div class="col-sm-10">
                    <h6><br>(+351) 91 406 94 72 | (+351) 243 581 581 | geral@mudedideias.com <br> <font style="color:#c0d80f">Soluções para publicidade!</font></h6>
                </div>
                <div class="col-sm-2">
                    <div class="w3-dropdown-hover">
                        <button class="w3-button w3-white"><img src="{{asset('images/mais.png')}}" alt="mais" height="60"></button>
                        <div class="w3-dropdown-content w3-bar-block">
                            <a href="/quemsomos" class="w3-bar-item w3-button" style="text-decoration:none">QUEM SOMOS</a>
                            <a href="/oquefazemos" class="w3-bar-item w3-button" style="text-decoration:none">O QUE FAZEMOS</a>
                            <a href="/contacto" class="w3-bar-item w3-button" style="text-decoration:none">CONTACTO</a>
                            <a href="/ondeEstamos" class="w3-bar-item w3-button" style="text-decoration:none">ONDE ESTAMOS</a>
                        </div>
                    </div>
                </div>
            </div>
          </ul>
      </div>
    </div>
    </nav>
    <img src="{{asset('images/inicial.jpg')}}" alt="incio" width="100%" height="auto">
    <div class="row">
      <div class="col-sm 2"></div>
      <div class="col-md 1">
        <a href="/"><img src="{{asset('images/identidadeVisual.png')}}" id="primeiro" class="tamanho" alt="identidadeVisual">
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/viaturas"><img src="{{asset('images/viaturas.png')}}" id="segundo" class="tamanho" alt="viaturas"></a>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/montras"><img src="{{asset('images/montras.png')}}" id="terceiro" class="tamanho" alt="montras"></a>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/lonas"><img src="{{asset('images/lonas.png')}}" id="quarto" class="tamanho" alt="lonas"></a>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/placas"><img src="{{asset('images/placasReclamos.png')}}" id="quinto" class="tamanho" alt="placasReclamos"></a>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/sinaletica"><img src="{{asset('images/sinaletica.png')}}" id="sexto"class="tamanho" alt="montras"></a>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/texteis"><img src="{{asset('images/texteis.png')}}" id="setimo" class="tamanho" alt="texteisis"></a>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/bandeiras"><img src="{{asset('images/bandeiras.png')}}" id="oitavo" class="tamanho" alt="bandeiras"></a>
      </div>
      <div class="col-sm 2"></div>
    </div>
    {{-----------------------------------------------------------------------------------------------------------------------}}
    <div id="one">
      <a href="/"><img src="{{asset('images/circuloCinza.png')}}" id="img1"></a>
    </div>
    <script>
      primeiro.onmouseover = function () {
        one.classList.toggle('show');
      }
      primeiro.onmouseout = function () {
        one.classList.toggle('show');
      }
    </script>
    {{-----------------------------------------------------------------------------------------------------------------------}}
    <div id="two">
      <a href="/portfolio/viaturas"><img src="{{asset('images/circuloCinza.png')}}" id="img2"></a>
    </div>
    <script>
      segundo.onmouseover = function () {
        two.classList.toggle('show');
      }
      segundo.onmouseout = function () {
        two.classList.toggle('show');
      }
    </script>
    {{-----------------------------------------------------------------------------------------------------------------------}}
    <div id="three">
      <a href="/portfolio/montras"><img src="{{asset('images/circuloCinza.png')}}" id="img3"></a>
    </div>
    <script>
      terceiro.onmouseover = function () {
        three.classList.toggle('show');
      }
      terceiro.onmouseout = function () {
        three.classList.toggle('show');
      }
    </script>
    {{-----------------------------------------------------------------------------------------------------------------------}}
    <div id="four">
      <a href="/portfolio/lonas"><img src="{{asset('images/circuloCinza.png')}}" id="img4"></a>
    </div>
    <script>
      quarto.onmouseover = function () {
        four.classList.toggle('show');
      }
      quarto.onmouseout = function () {
        four.classList.toggle('show');
      }
    </script>
    {{-----------------------------------------------------------------------------------------------------------------------}}
    <div id="five">
      <a href="/portfolio/placas"><img src="{{asset('images/circuloCinza.png')}}" id="img5"></a>
    </div>
    <script>
      quinto.onmouseover = function () {
        five.classList.toggle('show');
      }
      quinto.onmouseout = function () {
        five.classList.toggle('show');
      }
    </script>
    {{-----------------------------------------------------------------------------------------------------------------------}}
    <div id="six">
      <a href="/portfolio/sinaletica"><img src="{{asset('images/circuloCinza.png')}}" id="img6"></a>
    </div>
    <script>
      sexto.onmouseover = function () {
        six.classList.toggle('show');
      }
      sexto.onmouseout = function () {
        six.classList.toggle('show');
      }
    </script>
    {{-----------------------------------------------------------------------------------------------------------------------}}
    <div id="seven">
      <a href="/portfolio/texteis"><img src="{{asset('images/circuloCinza.png')}}" id="img7"></a>
    </div>
    <script>
      setimo.onmouseover = function () {
        seven.classList.toggle('show');
      }
      setimo.onmouseout = function () {
        seven.classList.toggle('show');
      }
    </script>
    {{-----------------------------------------------------------------------------------------------------------------------}}
    <div id="eight">
      <a href="/portfolio/bandeiras"><img src="{{asset('images/circuloCinza.png')}}" id="img8"></a>
    </div>
    <script>
      oitavo.onmouseover = function () {
        eight.classList.toggle('show');
      }
      oitavo.onmouseout = function () {
        eight.classList.toggle('show');
      }
    </script>
    {{-----------------------------------------------------------------------------------------------------------------------}}
    <br>
    <div class="row">
      <div class="col-sm 2"></div>
      <div class="col-md 1">
        <h6>IDENTIDADE VISUAL</h6>
      </div>
      <div class="col-sm 1">
        <h6>VIATURAS</h6>
      </div>
      <div class="col-sm 1">
        <h6>MONTRAS</h6>
      </div>
      <div class="col-sm 1">
        <h6>LONAS/EXPOSITORES</h6>
      </div>
      <div class="col-sm 1">
        <h6>PLACAS/RECLAMOS</h6>
      </div>
      <div class="col-sm 1">
        <h6>SINALÉTICA</h6>
      </div>
      <div class="col-sm 1">
        <h6>TEXTEIS</h6>
      </div>
      <div class="col-sm 1">
        <h6>BANDEIRAS</h6>
      </div>
      <div class="col-sm 2"></div>
    </div> 
    <br><br>
    <div class="div">
      @foreach ($all as $item)
        <img src="{{asset('/portfolio/'.$item->imagem)}}" alt="imagem" class="sizeImagem" style="position: relative;" onclick="document.getElementById('id' + $item->id).style.display='block'">
        
        <div id="id" class="w3-modal">
          <div class="w3-modal-content" id="assetmargemZoom">
            <span onclick="document.getElementById('id' + $item->id).style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div>
              <img src="{{asset('/portfolio/'.$item->imagem)}}" alt="imagem" id="imageZoom">
            </div>
          </div>
        </div>
      @endforeach
      
      <br>
    </div>
    <br><br>
    <div class="footer">
      <br>
        <div class="container">
            <br>
            <p><img src="{{asset('images/telefone.png')}}" alt="telefone" id="telefone">&nbsp;&nbsp;(+351) 91 405 94 72 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (+351) 243 581 581</p> 
            <img src="{{asset('images/redesSociais.png')}}" alt="redesSociais" id="redesSociais" >
            <p><img src="{{asset('images/correio.png')}}" alt="correio" id="correio">&nbsp;&nbsp;geral@mudedideias.com <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mudedideias@gmail.com</p>
            <p><img src="{{asset('images/localizacao.png')}}" alt="localizacao" id="localizacao">&nbsp;&nbsp;Zona Industrial - Lote 14 B <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2125 - 363 Muge</p>
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