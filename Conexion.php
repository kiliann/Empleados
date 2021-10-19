<?php

class Conexion{


    function __construct() {
        include "configuracionBD.php";



        $this->mysqli = new mysqli(SERVIDOR,USUARIO, PASSWORD, DB);
    }
    public function consultas($consulta){

        return  $this->resultado=$this->mysqli->query($consulta);
    }
}