<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Gestion de Empleados</title>
    <link type="text/css" rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="cabecera">
        <h1>Inicio</h1>
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
            <h3>Buscar Empleado</h3>
            <table>
                <form action="index.php" method="post">
                    <tr>
                        <td>
                            <input type="text" name="busqueda" placeholder="Busqueda">
                        </td>
                        <td>
                            <input  type="submit" name="buscar" value="Buscar">
                        </td>
                    </tr>
                </form>
            </table>
                <?php

                require_once ('Conexion.php');
                $a = new Conexion();

                if(isset($_POST["buscar"])){
                    $buqueda = $_POST['busqueda'];
                    $consulta = "SELECT id_empleado, DNI, Nombre, Correo, Telefono FROM `empleado` WHERE DNI = '$buqueda' ";

                    $resultado = $a->consultas($consulta);
                    echo '<table class="tabladeconsulta">';
                    ?>
                        <tr>

                            <td>DNI</td>
                            <td>Nombre</td>
                            <td>Correo</td>
                            <td>Telefono</td>

                        </tr>
                <?php
                        while ($fila = $a->extraerFila($resultado)){
                            echo '<tr>';

                            echo '<td>'.$fila["DNI"].'</td>';
                            echo '<td>'.$fila["Nombre"].'</td>';
                            echo '<td>'.$fila["Correo"].'</td>';
                            echo '<td>'.$fila["Telefono"].'</td>';
                            echo '<td><a class="boton-personalizado" href="modificar.php?variable1='.$fila["id_empleado"].'">Modificar</a></td>';
                            echo '<td><a class="boton-personalizado" href="borrar.php?variable1='.$fila["id_empleado"].'">Borrar</a></td>';

                            echo '</tr>';

                        }
                    echo '</table>';
                }


                ?>

        </div>

    </div>

    <footer>

    </footer>

</body>
</html>