<?php
require_once ('conexion.php');
$a = new Conexion();
//include "configuracionBD.php";

//$mysqli = new mysqli(SERVIDOR,USUARIO, PASSWORD, DB);
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
    <h1>Alta de empleados</h1>
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
        if(!isset($_POST['enviar'])){ ?>
            <table>
            <form  action="altaEmpleados.php" method="post">
                <tr>
                    <td>
                        <label>DNI</label>
                    </td>
                    <td>
                        <input type="text" name="dni"><br/ >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nombre</label>
                    </td>
                    <td>
                        <input type="text" name="nombre"><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Correo</label>
                    </td>
                    <td>
                        <input type="text" name="correo"><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Telefono</label>
                    </td>
                    <td>
                        <input type="text" name="telefono"><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="boton-personalizado" type="submit" name="enviar" value="Enviar">
                    </td>
                </tr>

            </form>
            </table>
            <?php
        }else{


            $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
            //$correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            if(empty($_POST['correo'])){

                $correo = 'NULL';

            }else{
                $correo = $_POST['correo'];
            }
            $consulta = "INSERT INTO empleado( DNI, Nombre, Correo, Telefono) VALUES ('$dni', '$nombre', $correo, $telefono)";


            $resultado = $a->consultas($consulta);
            if ($resultado) {
                echo "<p>Insertado los datos correctamente </p></br>";
                echo '<a class="boton-personalizado-2" href="altaEmpleados.php">Volver</a>';
            } else {
                echo "<p>Error: El DNI ya esta insertado, introduzca uno correcto</p></br>";
                echo '<a class="boton-personalizado-2" href="altaEmpleados.php">Volver</a>';
            }



        }




        ?>
    </div>

</div>

<footer>

</footer>



</body>
</html>