<?php

require "src/Conexion.php";
require "src/Jugador.php";


$objeto=new Jugador();
$objeto->conectar();

$result2=$objeto->mostrar();

?>



<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Stalinist+One" rel="stylesheet">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PROYECTO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/proy.css">
    </head>
    <body>

        <div id="fondo">

            <div id="listado"><!--div php-->
              <a href="registro.php">VOLVER</a>

                <?php


foreach ($result2 as $usuarios){
    echo "<p><strong>ID: </strong>".$usuarios['id']."<strong> Nombre: </strong>".$usuarios['nombre']."<strong> Apellidos: </strong>".$usuarios['apellidos']."</p>";
    echo "<p><strong>Edad: </strong>".$usuarios['edad']."<strong> Curso: </strong>".$usuarios['curso']."</p>";
}
                ?>

            </div>


        </div><!--div TODO-->

    </body>
</html>