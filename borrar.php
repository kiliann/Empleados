<?php
$id = $_GET['variable1'];
//echo $id;
require_once ('conexion.php');
$a = new Conexion();

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Gestion de Empleados</title>
    <link type="text/css" rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div id="cabecera">
    <h1>Borrar</h1>
</div>
<nav id="menu">

</nav>
<div id="cajaContendora">
    <div id="submenu">
        <ol id="listamenu">
            <li><a class="botonSubmenu" href="index.php">Inicio</a></li>
            <li><a class="botonSubmenu" href="altaEmpleados.php">Alta Empleados</a></li>
            <li><a class="botonSubmenu" href="modificaryBorrar.php">Modificar Empleados</a></li>
        </ol>
    </div>
    <div id="contenido">
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
        </table>
            <form  action="borrar1.php" method="post">
                <?php
                echo '<input type="hidden" name="id" value='.$id.'>';

                ?>
                <input class="boton-personalizado" type="submit" name="enviar" value="Aceptar">
            </form>
            <a class="boton-personalizado" href="modificaryBorrar.php">Cancelar</a>
    </div>

</div>

<footer>

</footer>

</body>
</html>
