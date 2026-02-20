<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<nav class="navbar">
    <a href="/perfil">Perfil</a>
    <a href="/perfil/intereses">Intereses</a>
    <a href="/perfil/habilidades">Habilidades</a>
    <a href="/perfil/metas">Metas</a>
</nav>

<div class="container">
    <h1>Mi Perfil</h1>

    <p><strong>Nombre:</strong> Juan Diego Niño Solano</p>
    <p><strong>Carrera:</strong> Ingeniería de Sistemas</p>
    <p><strong>Universidad:</strong> UNAB</p>
    <p><strong>Ciudad:</strong> Bucaramanga, Colombia</p>

    <a class="btn" href="/perfil/intereses">Ver mis intereses</a>
</div>

</body>
</html>