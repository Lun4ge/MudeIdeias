<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/oquefazemos.css')}}">
    <link href="{{asset('images/admin/logo.png')}}" rel="icon">
    <title>O Que Fazemos</title>
  </head>
  <body>
    <a href="/"><img src="images/logo.png" class="imagem" alt="logo" id="logo"></a>
    <section>
      <br>
      <div class="container-fluid; margem">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-3">
                <img src="images/identidadeVisual.png" alt="identidadeVisual" class="image1"><br><br>
                <p class="p1"><strong>IDENTIDADE VISUAL</strong></p> <br>
                <p class="p2">&bull; Concepção gráfica de logotipos / marcas <br>	&bull; Cartões de visita <br>	&bull; Papel de Carta e envelopes <br> &bull; Capas e porta documentos</p>
              </div>
              <div class="col-md-1; linhaPequena1"></div>
              <div class="col-md-3">
                <img src="images/viaturas.png" alt="viaturas" class="image1"><br><br>
                <p class="p1"><strong>VIATURAS</strong></p> <br>
                <p class="p2">&bull; Decoração vinil recorte <br> &bull; Decoração vinil impresso + laminação UV <br> &bull; Decoração vinil reflector especial viaturas prioritárias</p>
              </div>
              <div class="col-md-1; linhaPequena1"></div>
              <div class="col-md-3">
                <img src="images/montras.png" alt="montras" class="image1"><br><br>
                <p class="p1"><strong>MONTRAS</strong></p> <br>
                <p class="p2">&bull; Decoração vinil recorte <br> &bull; Decoração vinil impresso + laminação UV <br> &bull; Decoração vinil impresso micro-perfurado <br> &bull; Decoração vinil imitação vidro fosco</p>
              </div>
              <div class="col-md-1; linhaPequena1"></div>
              <div class="col-md-2">
                <img src="images/lonas.png" alt="lonas" class="image3"><br><br>
                <p class="p1"><strong>LONAS / EXPOSITORES</strong></p> 
                <p class="p2">&bull; Impressão digital <br> &bull; Coladas vinil recorte especial BANNER <br> &bull; Roll Ups <br> &bull; Pop Ups / Stands</p>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <img src="images/placasReclamos.png" alt="placasReclamos2" class="image2"><br><br>
                <p class="p1"><strong>PLACAS / RECLAMOS</strong></p> <br>
                <p class="p2">&bull; Luminosos <br> &bull; Flat / Placas <br> &bull; Luz indirecta <br> &bull; Frente em Telas <br> &bull; DIBON / Acrílico / PVC</p>
              </div>
              <div class="col-md-1; linhaPequena2"></div>
              <div class="col-md-3">
                <img src="images/sinaletica.png" alt="sinaletica" class="image2"><br><br>
                <p class="p1"><strong> SINALÉTICA</strong></p> <br>
                <p class="p2">&bull; Indetificação <br> &bull; Obrigatória <br> &bull; Direcção</p>
              </div>
              <div class="col-md-1; linhaPequena2"></div>
              <div class="col-md-3">
                <img src="images/texteis.png" alt="texteis" class="image2"><br><br>
                <p class="p1"><strong>TEXTEIS</strong></p> <br>
                <p class="p2">&bull; T-Shirts / Polos / Sweats <br> &bull; Flex termo-soldavél <br> &bull; Bordado / Serigrafia</p>
              </div>
              <div class="col-md-1; linhaPequena2"></div>
              <div class="col-md-2">
                <img src="images/bandeiras.png" alt="bandeiras" class="image4"><br><br>
                <p class="p1"><strong>BANDEIRAS</strong></p> <br>
                <p class="p2">&bull; Tipo Pena <br> &bull; Tipo Gota <br> &bull; Normais standart <br> &bull; Pendões</p>
              </div>
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
    <br>
    @include('layouts/footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>