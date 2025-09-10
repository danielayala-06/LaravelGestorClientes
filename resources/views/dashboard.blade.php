<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas Generales</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}"> 
</head>
<body>
    <header>
        <nav>
            <h1>Quique Ronceros</h1>
            <ul class="nav-links" id="nav-links">
                <li><a href="">Inicio</a></li>
                <li><a href="#">Anuncios</a></li>
                <li><a href="{{ uri('/clientes') }}">Clientes</a></li>
            </ul>
        </nav>
    </header>
<div class="content">
    <h1>Ventas Generales</h1>
    <div class="botones">
        <div class="button"><img src="imagen1.png" class="img1" alt="Cuadros"> Cuadros </div>
        <div class="button"> <img src="imagen1.png" class="img2" alt="Anuarios"> Anuarios </div>
        <div class="button"><img src="imagen1.png" class="img3" alt="Sesion Fotografica">Sesion Fotografica</div>
     </div>

    <div class="estadisticas"> 
    <h1>Estadísticas Generales</h1>
        <div class="botones2">
            <div class="chart"></div>
            <div class="chart"></div>
        </div>
    </div>
</div>
    <script src="script.js"></script>
</body>
</html>