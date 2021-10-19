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
    <?php
    if(!isset($_POST['enviar'])){ ?>
    <form  action="altaEmpleados.php" method="post">
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
    }else{
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];

        $consulta = "INSERT INTO empleado( DNI, Nombre, Correo, Telefono) VALUES ('$dni', '$nombre', '$correo', $telefono)";

        $resultado =$a->mysqli->query($consulta);
        if ($resultado) {
            echo "<P>Insertado los datos correctamente </P>";
        } else {
            echo "<P>Error: " . $consulta . "<br>" . mysqli_error($a) . "</p>";
        }



    }




?>
</body>
</html>