<?php

//echo $id;
require_once ('conexion.php');
$a = new Conexion();



if(!isset($_POST["enviar"])){
    $id = $_GET['variable1'];
    $consulta = "SELECT * FROM empleado WHERE id_empleado = '$id'";
    $resultado = $a->mysqli->query($consulta);

    while ($fila=$a->extraerFila($resultado)){

?>
        <h1>Modificar Empleados</h1>

        <form  action="modificar.php" method="post">
            <?php
               echo '<input type="hidden" name="id" value='.$id.'>';
               echo "<label>DNI</label>";
               echo '<input type="text" name="dni" value='.$fila["DNI"].'><br/>';
               echo "<label>Nombre</label>";
               echo '<input type="text" name="nombre" value='.$fila["Nombre"].'><br/>';
               echo "<label>Correo</label>";
               echo '<input type="text" name="correo" value='.$fila["Correo"].'><br/>';
               echo "<label>Telefono</label>";
               echo '<input type="text" name="telefono" value='.$fila["Telefono"].'><br/>';
               echo '<input type="submit" name="enviar" value="Enviar">';
            ?>
        </form>

<?php

    }
}else{
    $id1 = $_POST['id'];
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $consulta1 = "UPDATE empleado SET DNI='$dni',Nombre='$nombre',Correo='$correo',Telefono='$telefono' WHERE id_empleado ='$id1'";


    if($resultado1 = $a->consultas($consulta1)){
        echo "Se actualizo correctamente los datos";
        echo '<a class="boton-personalizado-2" href="modificar.php?variable1='.$id1.'">Volver</a>';
    }else{
        echo "Ocurrio un error intentelo de nuevo ";
        echo '<a class="boton-personalizado-2" href="modificar.php?variable1='.$id1.'">Volver</a>';
    }


}

?>