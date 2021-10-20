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
            echo '<button header("Location:nombre_pagina.php?varible1=$fila["id_empleado"]")>Modificar</button>';
            echo '<button>Borrar</button>';
        echo '</tr>';

}
?>
</table>
</body>
</html>