<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">
    <title>proyecto</title>
    
</head>
<body>
        <div id="header">
            <img src="{{ asset('img/cintilloportal.jpg') }}"width="100%" height=90px id="header">
        </div>
        <br>
        <div class="container">
        <br>
         @yield('contenido')
        <br>
        </div>
        <div id="footer">
        <footer align="center" class="imgfooter">
        <h6 class="imgfooter"><img class="imgfooter" src="{{asset('img/ISOTIPO-BDV.png')}}" width="25px" height="25px"> Banco de Venezuela - Gerencia de Línea Arquitectura Funcional - 2024</h6>
        </footer> 
        </div>
    </div> 
</body>