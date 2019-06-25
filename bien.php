<?php

require "src/Conexion.php";
require "src/Jugador.php";


$objeto=new Jugador();
$objeto->conectar();



$objeto->comprobarCampos($_POST);
var_dump($_POST);
$result=$objeto->insertar();


?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Stalinist+One" rel="stylesheet">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PROYECTO 5</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/proy.css">
    </head>
    <body>

        <div id="fondo">

            <div id="listado"><!--div php-->
            <p><a href="registro.php">- VOLVER -</a></p>
            <p><a href="listadoJugadores.php">- LISTAR - </a></p>


            </div>



        </div><!--div TODO-->

        <script src="proyecto5.js"></script> <!-- CODIGO DEL PROYECTO ANTERIOR!!! -->
    </body>
</html>