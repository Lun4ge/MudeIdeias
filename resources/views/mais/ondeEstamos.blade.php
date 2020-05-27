<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Onde Estamos</title>
  </head>

  <style>
    .margem {
      margin-top: 25px;
      margin-left: 110px;
    }
    .linha {
      border-left: 1px solid #c0d80f;
      height: 650px;
    }
    .imagem{
      margin-top: 50px;
      margin-left: 80px;
    }
    h6{
      margin-left: 450px;
    }
  </style>
  <body>
    <a href="/mudedideias"><img src="images/logo.png" class="imagem" alt="logo" height="90"></a>
    <br><br>
    <div class="container-fluid; margem">
      <div class="row">
        <div class="col-md-8">
          <h6>
            <img src="images/localizacao.png" alt="localizacao" height="30">&nbsp;&nbsp;Zona Industrial - Lote 14 B <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2125 - 363 Muge <br><br>
          </h6>
          <br>
          <center><div id="googleMap" style="width:900px;height:500px;"></div>
          <script>
            function myMap() {
              var mapProp= {
                center:new google.maps.LatLng(39.106042, -8.712185),
                zoom:15,
              };
              var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
              var avenida = {lat: 39.106042,lng: -8.712185};
              var marker = new google.maps.Marker({
                position: avenida,
                map: map,
                title: 'Mudedideias',
              });
            }
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqeKtkpFmwWgsO0CgBRM-CT2Civ8oYui0&callback=myMap"></script></center>
          <br><br><br>
          <a href="javascript:javascript:history.go(-1)"><img src="images/voltar.png" alt="voltar" height="50"></a><font style="color:black">&nbsp;&nbsp;Voltar</font>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="/mudedideias"><img src="images/inicio.png" alt="inicio" height="60"></a><font style="color:black">&nbsp;&nbsp;Inicio</font>
        </div>
        <div class="col-md-1; linha"></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-2">
          <br><br><br><br>
          <a href="/quemsomos"><font style="color:black" size="6">QUEM SOMOS</a></font> <br><br>
          <a href="/oquefazemos"><font style="color:black" size="6">O QUE FAZEMOS</a></font> <br><br>
          <a href="/contacto"><font style="color:black" size="6">CONTACTO</a></font> <br><br>
          <a href="/ondeEstamos"><font style="color:black" size="6"><strong>ONDE ESTAMOS</a></font></strong>
          <br><br><br><br>
          <img src="images/redesSociais.png" alt="redes sociais" height="20"> <br><br><br>
          <img src="images/20anos.png" alt="20 anos" height="50">
        </div>  
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>