<?php

 /* objeto juego */


 class Juego extends Conexion{

    public $nombre="";
    public $id="";
   



     public function mostrar(){
        $consulta2="select * from juegos";
        $result2=$this->conexion->query($consulta2);
        
        return $result2;

     }

     





 } /* final objeto */