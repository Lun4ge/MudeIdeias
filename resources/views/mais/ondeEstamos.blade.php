<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/ondeEstamos.css')}}">
    <link href="{{asset('images/admin/logo.png')}}" rel="icon">
    <title>Onde Estamos</title>
  </head>
  <body>
    <a href="/"><img src="images/logo.png" alt="logo" id="logo"></a>
    <section>
      <br><br>
      <div class="container-fluid; margem">
        <div class="row">
          <div class="col-md-8">
            <p class="margem2" id="texto">
              <img src="images/localizacao.png" alt="localizacao" id="localizacao">&nbsp;&nbsp;Zona Industrial - Lote 14 B <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2125 - 363 Muge<br><br>
            </p>
            <br>
            <div id="googleMap"></div>
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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqeKtkpFmwWgsO0CgBRM-CT2Civ8oYui0&callback=myMap"></script>
          </div>
          <div class="col-md-1; linha"></div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-2">
            @include('layouts/menuMais')
          </div>
        </div>
      </div>
      <br>
    </section>
    @include('layouts/footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>