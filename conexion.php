<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_bd  = "aji-nai";

$enlace = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_bd);

//Comprobar conexión
if(mysqli_connect_errno()){
    printf("Ha fallado la conexión con MYSQL", mysqli_connect_errno());
    exit();
}

mysqli_set_charset($enlace,"utf8");

?>