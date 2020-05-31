<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/quemsomos.css')}}">
    <title>Quem Somos</title>
  </head>
  <body>
    <a href="/"><img src="images/logo.png" class="imagem" alt="logo" height="90"></a>
    <section>
      <br><br><br>
      <div class="container-fluid; margem">
        <div class="row">
          <div class="col-md-8">
            <h4 class="texto">
              Nos nossos dias nenhuma empresa qualquer que seja o seu sector de actividade, pode descurar uma profunda <br> preocupação com a sua imagem, bem como a sua publicidade. <br><br>
              Hoje, só antecipando-se à progressiva evolução dos padrões de exigência a níveis de desempenho e <br> fiabilidade, é possível inspirar cada vez mais confiança aos seus clientes. <br>
              O seu produto ou serviço deve despertar as associações correctas, informando e impulsionando a compra, visita <br> ou a sua divulgação. <br><br>
              Existe toda uma série de regras, escritas na publicidade: o grafismo, a imagem, a forma, a <br> harmonia e a psicologia das cores. <br><br>
              A <strong>mude d'ideias</strong>, dá-lhe toda a excelência de serviços que satisfaçam os requisitos das nosso clientes. <br> 
              Quando se exige qualidade e criatividade, aceita-se um desafio de igual para igual.
            </h4>
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