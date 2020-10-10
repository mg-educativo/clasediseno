<?php

    include_once("./include/conexion.php");

    if (isset($_GET['accion'])) {
        $opcion = $_GET['accion'];
    }

    switch ($opcion) {
        // Para Insertar
        case 'INS':
            # code...
            if (isset($_POST['guardar'])) {
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                $query = "
                    INSERT INTO `usuarios`
                    (`NombreC`, 
                    `Correo`, 
                    `usuario`, 
                    `password`, 
                    `estado`) 
                    VALUES (
                     '$nombre',
                     '$correo',
                     '$usuario',
                     '$contrasena',
                     'A')
                ";

                $resultado = mysqli_query($link, $query);

                if (!$resultado) {
                    echo("Error 0001: Error Insertando Usuario en la Base de Datos");
                } else{
                    // echo("Alerta 0001: Registro Insertado en la Base de Datos");
                    header("Location: ./usuarios_mant.php");

                }
            }
            break;
        
        default:
            # code...
            break;
    }

?>