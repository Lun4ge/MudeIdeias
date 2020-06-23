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
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>
<body>
    <footer>
        <a href="javascript:javascript:history.go(-1)"><img src="{{asset('images/voltar.png')}}" alt="voltar"></a><font style="color:black">&nbsp;&nbsp;Voltar</font>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/"><img src="{{asset('images/inicio.png')}}" alt="inicio"></a><font style="color:black">&nbsp;&nbsp;Inicio</font>
    </footer>
</body>
</html>