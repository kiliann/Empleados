<?php
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
    <h1>Modificar y Borrar Empleados</h1>
</div>
<nav id="menu">

</nav>
<div id="cajaContendora">
    <div id="submenu">
        <a class="botonSubmenu" href="index.php">Inicio</a><br/>
        <a class="botonSubmenu" href="altaEmpleados.php">Alta Empleados</a><br/>
        <a class="botonSubmenu" href="modificaryBorrar.php">Modificar y Borrar</a><br/>
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
            $consulta = "SELECT * FROM empleado WHERE 1;";
            $resultado = $a->consultas($consulta);

            while ($fila=$a->extraerFila($resultado)){
                echo '<tr>';
                echo '<td>'.$fila["id_empleado"].'</td>';
                echo '<td>'.$fila["DNI"].'</td>';
                echo '<td>'.$fila["Nombre"].'</td>';
                echo '<td>'.$fila["Correo"].'</td>';
                echo '<td>'.$fila["Telefono"].'</td>';
                echo '<td><a class="boton-personalizado" href="modificar.php?variable1='.$fila["id_empleado"].'">Modificar</a></td>';
                echo '<td><a class="boton-personalizado" href="borrar.php?variable1='.$fila["id_empleado"].'">Borrar</a></td>';

                echo '</tr>';

            }
            ?>
        </table>
        <div id="botonAñadirAlta"><a class="boton-personalizado" href="altaEmpleados.php">Añadir</a></div>
    </div>

</div>

<footer>

</footer>




</body>
</html>