<?php

 /* objeto jugador */


 class Jugador extends Conexion{

    public $nombre="";
    public $apellidos="";
    public $edad="";
    public $curso="";
    public $error="";


     

    public function insertar()
    {
       $consulta="INSERT INTO usuarios (nombre, apellidos, edad, curso)
       VALUES ('$this->nombre', '$this->apellidos', $this->edad, '$this->curso')";
       var_dump($consulta);
       $this->conexion->query($consulta);
     }


     public function mostrar(){
        $consulta2="select * from usuarios";
        $result2=$this->conexion->query($consulta2);
        
        return $result2;

     }

     public function mostrarNames(){
         $consulta3="select nombre from usuarios";
         $result3=$this->conexion->query($consulta3);

         return $result3;
     }



     public function comprobarCampos($post){
        $error=null;
        if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["edad"])||!isset($post["provincia"])){
          $error="mal";
        }elseif($post["nombre"]==""){
          $error="Debes rellenar este campo";
        }elseif($post["apellidos"]==""){
          $error="No has introducido el apellido";
        }elseif($post["edad"]==""){
          $error="No has introducido la edad";
        }elseif($post["curso"]==""){
          $error="No has introducido el curso";

        }
        else{

          $error=false;
          $this->nombre=$post["nombre"];
          $this->apellidos=$post["apellidos"];
          $this->edad=$post["edad"];
          $this->provincia=$post["curso"];
          echo "Bien";
        }
        
        return $error;
      }




 } /* final objeto */