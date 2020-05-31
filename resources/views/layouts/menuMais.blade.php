<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Styles -->
</head>
<body>
    <div id="menuMais">
        <br><br><br><br>
        <a href="/quemsomos"><font style="color:black" size="5">QUEM SOMOS</a></font> <br><br>
        <a href="/oquefazemos"><font style="color:black" size="5">O QUE FAZEMOS</a></font> <br><br>
        <a href="/contacto"><font style="color:black" size="5">CONTACTO</a></font> <br><br>
        <a href="/ondeEstamos"><font style="color:black" size="5">ONDE ESTAMOS</a></font>
        <br><br><br><br>
        <img src="images/redesSociais.png" alt="redes sociais"> <br><br><br>
        <img src="images/20anos.png" alt="20 anos">
    </div>
</body>
</html>