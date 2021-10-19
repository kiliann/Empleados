<?php
require_once ('conexion.php');
$a = new Conexion();
//include "configuracionBD.php";

//$mysqli = new mysqli(SERVIDOR,USUARIO, PASSWORD, DB);
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
        <input type="submit" name="enviar" value="Enviar">
    </form>
<?php
  if(isset($_POST['enviar'])){
      $dni = $_POST['dni'];
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $consulata = "INSERT INTO empleado( DNI, Nombre, Correo, Telefono) VALUES ('[]','[value-3]','[value-4]','[value-5]')";
      $a->mysqli->query();
  }

?>
</body>
</html>