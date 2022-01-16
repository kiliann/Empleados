<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Gestion de Empleados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="cabecera">
        <h1>Inicio</h1>
    </div>
    <nav id="menu">
        <div id="inicio"><a>Incio</a></div>
        <div id="Quienes"><a>Quienes Somos<a></div>
        <div id="sesion"><a href="inicio.php">Iniciar Sesion</a></div>
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
                            <select name="tipos">
                                <option name="dni">DNI</option>
                                <option name="nombre">Nombre</option>
                            </select>
                        </td>
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
                    switch ($_POST['tipos']){

                        case 'DNI':
                            echo '<table class="tabladeconsulta">';

                            echo '<tr>';

                            echo    '<td>DNI</td>';
                            echo    '<td>Nombre</td>';
                            echo    '<td>Correo</td>';
                            echo    '<td>Telefono</td>';

                            echo '</tr>';

                            $buqueda = $_POST['busqueda'];
                            $consulta = "SELECT id_empleado, DNI, Nombre, Correo, Telefono FROM `empleado` WHERE DNI = '$buqueda' ";

                            $resultado = $a->consultas($consulta);
                             if(!$resultado->num_rows == 0) {
                                 $fila = $a->extraerFila($resultado);
                                 echo '<tr>';

                                 echo '<td>' . $fila["DNI"] . '</td>';
                                 echo '<td>' . $fila["Nombre"] . '</td>';
                                 echo '<td>' . $fila["Correo"] . '</td>';
                                 echo '<td>' . $fila["Telefono"] . '</td>';
                                 echo '<td><a class="boton-personalizado" href="modificar.php?variable1=' . $fila["id_empleado"] . '">Modificar</a></td>';
                                 echo '<td><a class="boton-personalizado" href="borrar.php?variable1=' . $fila["id_empleado"] . '">Borrar</a></td>';

                                 echo '</tr>';
                             }else{
                                //echo $a->error();
                                //echo $a->errno();
                                 echo 'Introduce un dni correcto';
                             }
                            echo '</table>';
                            break;
                        case 'Nombre':
                            $buqueda = $_POST['busqueda'];
                                echo '<table class="tabladeconsulta">';
                                ?>
                                    <tr>

                                        <td>DNI</td>
                                        <td>Nombre</td>
                                        <td>Correo</td>
                                        <td>Telefono</td>

                                    </tr>
                                <?php
                                $consulta2 = "SELECT id_empleado, DNI, Nombre, Correo, Telefono FROM `empleado` WHERE Nombre LIKE '%$buqueda%' ";
                                $resultado2 = $a->consultas($consulta2);
                                if($resultado2->num_rows != 0) {

                                while ($fila2 = $a->extraerFila($resultado2)) {
                                echo '<tr>';

                                    echo '<td>' . $fila2["DNI"] . '</td>';
                                    echo '<td>' . $fila2["Nombre"] . '</td>';
                                    echo '<td>' . $fila2["Correo"] . '</td>';
                                    echo '<td>' . $fila2["Telefono"] . '</td>';
                                    echo '<td><a class="boton-personalizado" href="modificar.php?variable1=' . $fila2["id_empleado"] . '">Modificar</a></td>';
                                    echo '<td><a class="boton-personalizado" href="borrar.php?variable1=' . $fila2["id_empleado"] . '">Borrar</a></td>';

                                    echo '</tr>';

                                }
                                }else{
                                    //echo $a->errno();
                                    //echo $a->error();
                                    echo 'Introduce un nombre valido';
                                }
                                echo '</table>';
                            break;


                    }
                   /* echo '<table class="tabladeconsulta">';
                    ?>
                        <tr>

                            <td>DNI</td>
                            <td>Nombre</td>
                            <td>Correo</td>
                            <td>Telefono</td>

                        </tr>
                <?php
                    $buqueda = $_POST['busqueda'];
                    $consulta = "SELECT id_empleado, DNI, Nombre, Correo, Telefono FROM `empleado` WHERE DNI = '$buqueda' ";

                   /* $resultado = $a->consultas($consulta);
                    if(!$resultado->num_rows == 0) {
                        $fila = $a->extraerFila($resultado);
                        echo '<tr>';

                        echo '<td>' . $fila["DNI"] . '</td>';
                        echo '<td>' . $fila["Nombre"] . '</td>';
                        echo '<td>' . $fila["Correo"] . '</td>';
                        echo '<td>' . $fila["Telefono"] . '</td>';
                        echo '<td><a class="boton-personalizado" href="modificar.php?variable1=' . $fila["id_empleado"] . '">Modificar</a></td>';
                        echo '<td><a class="boton-personalizado" href="borrar.php?variable1=' . $fila["id_empleado"] . '">Borrar</a></td>';

                        echo '</tr>';
                    }else{
                       echo $a->error();
                       echo $a->errno();
                    }


                    $consulta2 = "SELECT id_empleado, DNI, Nombre, Correo, Telefono FROM `empleado` WHERE Nombre LIKE '%$buqueda%' ";
                    $resultado2 = $a->consultas($consulta2);
                    if($resultado2->num_rows != 0) {

                        while ($fila2 = $a->extraerFila($resultado2)) {
                            echo '<tr>';

                            echo '<td>' . $fila2["DNI"] . '</td>';
                            echo '<td>' . $fila2["Nombre"] . '</td>';
                            echo '<td>' . $fila2["Correo"] . '</td>';
                            echo '<td>' . $fila2["Telefono"] . '</td>';
                            echo '<td><a class="boton-personalizado" href="modificar.php?variable1=' . $fila2["id_empleado"] . '">Modificar</a></td>';
                            echo '<td><a class="boton-personalizado" href="borrar.php?variable1=' . $fila2["id_empleado"] . '">Borrar</a></td>';

                            echo '</tr>';

                        }
                    }else{
                        echo $a->errno();
                        echo $a->error($a->errno());
                    }
                    echo '</table>';*/
                }


                ?>

        </div>

    </div>

    <footer>

    </footer>

</body>
</html>