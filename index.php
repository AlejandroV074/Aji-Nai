<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" href="ct.png" />
    <title>Aji-Nai</title>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
</head>

<body>
    <header>
        <h1>El gato adivino</h1>
    </header>

    <main>
    <div class="ftr">
    <img src="ct2.png" />
    <h2>Pregunta: </h2>
    </div>
        
    </main>
    <?php
    //Conexión
    require 'conexion.php';

    $nodo = 1;
    if(isset($_GET['n'])){
        $nodo = $_GET['n'];
    }

    $nodoSi = $nodo * 2;
    $nodoNo = $nodo * 2 + 1;
    
    ?>

    <?php

    $consulta = "SELECT texto,pregunta FROM arbol WHERE nodo=". $nodo . ";";
    $texto="";
    $pregunta = true;

    $resultado;

    if($resultado = mysqli_query($enlace,$consulta)){
        if($resultado->num_rows === 0){
            echo 'error - el nodo no existe';
        }
        //RECUPERA CORRECTAMENTE LA INFORMACIÓN
        else{
            while($fila = mysqli_fetch_row($resultado)){
                $texto = $fila[0];
                $pregunta = $fila[1];
            }
        
        if($pregunta == FALSE){
            echo "<div class='contenedorPr'>"; 
            echo"<h2>¿Has pensado en ". $texto . "?</h2>";
            echo"</div>";

            echo"<div class='contenedorRs'>";
    
            echo "<a class='botonY' href='respuesta.php?n=". $nodo ."&r=1&nom=".$texto."'>SI</a>";
            echo "<a class='botonN' href='respuesta.php?n=". $nodo ."&r=0&nom=".$texto."'>NO</a>";
            echo"</div>";
        }
        else{
            echo "<div class='contenedorPr'>"; 
            echo"<h2>¿Estás pensando en " .$texto."?</h2>";
            echo"</div>";
    
            echo"<div class='contenedorRs'>";
    
            echo "<a class='botonY' href='index.php?n=". $nodoSi . "'>SI</a>";
            echo "<a class='botonN' href='index.php?n=". $nodoNo . "'>NO</a>";
            echo"</div>";
            }
        }
    }

    ?>

    <div class="limpiar"></div>

    <br>

    <footer>
        <a href="index.php">Volver a probar</a>
    </footer>
</body>
</html>
