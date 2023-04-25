<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" href="ct.png" />
    <title>Aji-Nai</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h1>Aji-Nai</h1>
    </header>

    <main>
    <div class="ftr">
    <img src="ct3.png" />

    <?php
    require 'conexion.php';

    $nodo = $_GET['n'];
    $respuesta = $_GET['r'];
    $nombre = $_GET['nom'];
    

    function formularioRespuestas($n,$p, $nom){
        echo "<div class='contenedorPregunta'>";

        echo "<textarea id='nodo' name='nodo' form='formulario', placeholder='nombre' style='display:none;'>" .$n. "</textarea>";
        echo "<textarea id='nombreAnt' name='nombreAnt' form='formulario', style='display:none;'>".$nom."</textarea>";


        echo "<h2>¿Estás pensando en?</h2>";
        echo "<textarea id='nombre' name='nombre' form='formulario' placeholder='Nombre:'></textarea>";
        echo "<h2>Ingresa alguna característica especial</H2>";
        echo "<textarea id='caracteristicas' name='caracteristicas' form='formulario' placeholder='Características:'></textarea>";

        echo "<form action='crear.php' id='formulario' method='POST'>";
        echo "<br>";
        echo "<button type='submit' name='enviar'>Enviar</button>";
        echo "</form>";

        echo "</div>";
    }

    formularioRespuestas($nodo,$respuesta,$nombre)
    ?>
    </main>
</body>
</html>