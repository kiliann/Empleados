<?php
require_once ('conexion.php');
$a = new Conexion();
$id = $_POST['id'];
$consulta = "DELETE FROM `empleado` WHERE id_empleado = '$id'";

if($resultado = $a->consultas($consulta)){
    echo "Se borro correctamente";
    echo '<a class="boton-personalizado-2" href="modificaryBorrar.php">Volver</a>';
}else
    echo "Ocurrio un error en el borrado";
    echo '<a class="boton-personalizado-2" href="modificaryBorrar.php">Volver</a>';
?>