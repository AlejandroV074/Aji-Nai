<?php

require 'conexion.php';

$nodo = $_POST['nodo'];
$nombre = $_POST['nombre'];
$nombreAnt = $_POST['nombreAnt'];
$caracteristicas = $_POST['caracteristicas'];

//Nuevos nodos
$numHijoI = $nodo * 2;
$numHijoD = $nodo * 2 + 1;

$nombreHijoI = $nombre;
$nombreHijoD = $nombreAnt;

$pregunta = $caracteristicas;

//Guardar información en la base de datos
$consulta = "INSERT INTO arbol (nodo,texto,pregunta) VALUES('".$numHijoI."', '".$nombreHijoI."', FALSE);";
mysqli_query($enlace, $consulta);

$consulta = "INSERT INTO arbol (nodo,texto,pregunta) VALUES('".$NumHijoD."', '".$nombreHijoD."', FALSE);";
mysqli_query($enlace, $consulta);

$consulta = "UPDATE arbol SET texto = '".$pregunta."', pregunta = TRUE WHERE nodo = '".$nodo."'";
mysqli_query($enlace, $consulta);



//Volver

header("Location:index.php");
?>