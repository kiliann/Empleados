<?php
$id = $_GET['variable1'];
//echo $id;
require_once ('conexion.php');
$a = new Conexion();

?>
    <table class="tabladeconsulta">
        <tr>
            <td>Id</td>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Telefono</td>

        </tr>
<?php
$consulta = "SELECT * FROM empleado WHERE id_empleado = '$id'";
$resultado = $a->consultas($consulta);

while ($fila=$a->extraerFila($resultado)){
    echo '<tr>';
    echo '<td>'.$fila["id_empleado"].'</td>';
    echo '<td>'.$fila["DNI"].'</td>';
    echo '<td>'.$fila["Nombre"].'</td>';
    echo '<td>'.$fila["Correo"].'</td>';
    echo '<td>'.$fila["Telefono"].'</td>';


    echo '</tr>';

}

?>
        <form  action="borrar1.php" method="post">
            <?php
            echo '<input type="hidden" name="id" value='.$id.'>';

            ?>
            <input type="submit" name="enviar" value="Aceptar">
        </form>
        <a class="boton-personalizado-2" href="modificaryBorrar.php">Cancelar</a>
