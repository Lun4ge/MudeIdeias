<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link href="{{asset('images/admin/logo.png')}}" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Mudedideias</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" >
            <img src="{{asset('images/logo.png')}}" alt="logo" height="60"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{asset('images/20anos.png')}}" class="imagem" alt="20anos" height="25">
          </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <div class="row">
                <div class="col-sm-8" style="margin-left: -2%">
                    <h6><br><br>(+351) 91 406 94 72 | (+351) 243 581 581 | geral@mudedideias.com <br> <font style="color:#c0d80f">Soluções para publicidade!</font></h6>
                </div>
                <div class="col-sm-2">
                    <div class="w3-dropdown-hover">
                        <button class="w3-button w3-white"><img src="{{asset('images/mais.png')}}" alt="mais" height="60"></button>
                        <div class="w3-dropdown-content w3-bar-block">
                            <a href="/quemsomos" class="w3-bar-item w3-button" style="text-decoration:none">QUEM SOMOS</a>
                            <a href="/oquefazemos" class="w3-bar-item w3-button" style="text-decoration:none">O QUE FAZEMOS</a>
                            <a href="/contacto" class="w3-bar-item w3-button" style="text-decoration:none">CONTACTO</a>
                            <a href="/ondeEstamos" class="w3-bar-item w3-button" style="text-decoration:none">ONDE ESTAMOS</a>
                            <a href="/pedidos/criar" class="w3-bar-item w3-button" style="text-decoration:none">ORÇAMENTOS</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1" style="margin-left: -3%">
                  @guest
                  <div class="w3-dropdown-hover">
                    <button class="w3-button w3-white"><img src="{{asset('images/register.png')}}" alt="mais" height="60"></button>
                    <div class="w3-dropdown-content w3-bar-block">
                        <a href="/login" class="w3-bar-item w3-button" style="text-decoration:none">ENTRAR</a>
                        <a href="/register" class="w3-bar-item w3-button" style="text-decoration:none">REGISTAR-SE</a>
                    </div>
                </div>
                  @endguest
                </div>
            </div>
          </ul>
      </div>
    </div>
    </nav>
    <img src="{{asset('images/inicial.jpg')}}" alt="incio" width="100%" height="auto">
    <div class="row" style="margin-bottom:10%;">
      <div class="col-sm 2"></div>
      <div class="col-md 1">
        <a href="/">
        <span class="circle">
          <img src="{{asset('images/identidadeVisual.png')}}" alt="identidadeVisual">
        </span></a>
        <br>
        <div style="color: grey;font-weight: bold;position: absolute;top: 50%;left: 18%;margin-top:95%;">
          IDENTIDADE VISUAL
        </div>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/viaturas">
        <span class="circle">
          <img src="{{asset('images/viaturas.png')}}" alt="viaturas">
        </span></a>
        <br>
        <div style="color: grey;font-weight: bold;position: absolute;top: 50%;left: 36%;margin-top:95%;">
          VIATURAS
        </div>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/montras">
        <span class="circle">
          <img src="{{asset('images/montras.png')}}" alt="montras">
        </span></a>
        <br>
        <div style="color: grey;font-weight: bold;position: absolute;top: 50%;left: 35%;margin-top:95%;">
          MONTRAS
        </div>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/lonas">
        <span class="circle">
          <img src="{{asset('images/lonas.png')}}" alt="lonas">
        </span></a>
        <br>
        <div style="color: grey;font-weight: bold;position: absolute;top: 50%;left: 18%;margin-top:95%;">
          LONAS/EXPOSITORES
        </div>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/placas">
        <span class="circle">
          <img src="{{asset('images/placasReclamos.png')}}" alt="placasReclamos">
        </span></a>
        <br>
        <div style="color: grey;font-weight: bold;position: absolute;top: 50%;left: 18%;margin-top:95%;">
          PLACAS/RECLAMOS
        </div>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/sinaletica">
        <span class="circle">
          <img src="{{asset('images/sinaletica.png')}}" alt="montras">
        </span></a>
        <br>
        <div style="color: grey;font-weight: bold;position: absolute;top: 50%;left: 33%;margin-top:95%;">
          SINALÉTICA
        </div>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/texteis">
        <span class="circle">
          <img src="{{asset('images/texteis.png')}}" alt="texteisis">
        </span></a>
        <br>
        <div style="color: grey;font-weight: bold;position: absolute;top: 50%;left: 41%;margin-top:95%;">
          TEXTEIS
        </div>
      </div>
      <div class="col-sm 1">
        <a href="/portfolio/bandeiras">
        <span class="circle">
          <img src="{{asset('images/bandeiras.png')}}" alt="bandeiras">
        </span></a>
        <br>
        <div style="color: grey;font-weight: bold;position: absolute;top: 50%;left: 35%;margin-top:95%;">
          BANDEIRAS
        </div>
      </div>
      <div class="col-sm 2"></div>
    </div>
    <br><br>
    {{-- <div class="row" style="">
      <div class="col-sm 2"></div>
      <div class="col-md 1" style="text-align:center;color: grey;font-weight: bold;">
        IDENTIDADE VISUAL
      </div>
      <div class="col-sm 1" style="text-align:center;color: grey;font-weight: bold;">
        VIATURAS
      </div>
      <div class="col-sm 1" style="text-align:center;color: grey;font-weight: bold;">
        MONTRAS
      </div>
      <div class="col-sm 1" style="text-align:center;color: grey;font-weight: bold;">
       LONAS/EXPOSITORES
      </div>
      <div class="col-sm 1" style="text-align:center;color: grey;font-weight: bold;">
       PLACAS/RECLAMOS
      </div>
      <div class="col-sm 1" style="text-align:center;color: grey;font-weight: bold;">
        SINALÉTICA
      </div>
      <div class="col-sm 1" style="text-align:center;color: grey;font-weight: bold;">
       TEXTEIS
      </div>
      <div class="col-sm 1" style="text-align:center;color: grey;font-weight: bold;">
        BANDEIRAS
      </div>
      <div class="col-sm 1"></div>
    </div> 
    <br><br> --}}
    <div class="div">
      @foreach ($all as $item)
        <img src="{{asset('/portfolio/'.$item->imagem)}}" alt="imagem" class="sizeImagem" style="position: relative;" onclick="document.getElementById('id{{$item->id}}').style.display='block'">
        
        <div id="id{{$item->id}}" class="w3-modal">
          <div class="w3-modal-content" id="assetmargemZoom">
            <span onclick="document.getElementById('id{{$item->id}}').style.display='none'" class="w3-button w3-display-topright">&times;</span>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>