<?php
require_once ('conexion.php');
$a = new Conexion();
$id = $_POST['id'];
$consulta = "DELETE FROM `empleado` WHERE id_empleado = '$id'";


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
        <?php
        if($resultado = $a->consultas($consulta)){
            echo "Se borro correctamente";
            echo '<a class="boton-personalizado-2" href="modificaryBorrar.php">Volver</a>';
        }else {
            echo "Ocurrio un error en el borrado";
            echo '<a class="boton-personalizado-2" href="modificaryBorrar.php">Volver</a>';
        }
        ?>
    </div>

</div>

<footer>

</footer>
</body>
</html>
