<?php
require (configuracionBD.php);
$resultado = $mysqli = new mysqli('SERVIDOR','USUARIO', 'PASSWORD', 'DBDATOS')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion de Empleados</title>
</head>
<body>
    <h1>Alta de empleados</h1>

    <form name="altaEmpleado"action="altaEmpleados.php" method="post">
        <label>DNI</label>
        <input type="text" name="dni"><br/>
        <label>Nombre</label>
        <input type="text" name="nombre"><br/>
        <label>Correo</label>
        <input type="text" name="correo"><br/>
        <label>Telefono</label>
        <input type="text" name="telefono"><br/>
        <input type="submit" value="Enviar">
    </form>


</body>
</html>