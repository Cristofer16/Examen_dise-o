<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/logo_Bracamonte.png">
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>
        @section('titulo')

        @show
    </title>
    @section('estilos')
        
    @show
</head>
<body class="bg-light">
    @section('cuerpo')
        @include('navegador')
    @show
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>