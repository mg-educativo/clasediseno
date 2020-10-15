<?php

    include_once("./include/conexion.php");

    if (isset($_GET['accion'])) {
        $opcion = $_GET['accion'];
    } else {
        $_SESSION['mensajeTexto'] = "Error identificando la opción";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./usuarios_mant.php");
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
                    // echo("Error 0001: Error Insertando Usuario en la Base de Datos");
                    $_SESSION['mensajeTexto'] = "Error Insertando en la Base de Datos";
                    $_SESSION['mensajeTipo'] = "alert-danger";

                    header("Location: ./usuarios_mant.php");
                } else{
                    // echo("Alerta 0001: Registro Insertado en la Base de Datos");
                    $_SESSION['mensajeTexto'] = "Registro Insertado en la Base de Datos";
                    $_SESSION['mensajeTipo'] = "alert-success";
                    
                    header("Location: ./usuarios_mant.php");

                }
            }
            break;
        // Para Anular
        case 'DLT':
            $id = $_GET['id'];
            // $query = "DELETE FROM `usuarios` WHERE `codusuarios` = '$id'";        
            $query = "UPDATE `usuarios` SET             
            `estado`='I'
            WHERE `codusuarios` = '$id'"; 

            $resultado = mysqli_query($link, $query);

            if (!$resultado) {
                // echo("Error 0001: Error Insertando Usuario en la Base de Datos");
                $_SESSION['mensajeTexto'] = "Error Anulando en la Base de Datos";
                $_SESSION['mensajeTipo'] = "alert-danger";

                header("Location: ./usuarios_mant.php");
            } else{
                // echo("Alerta 0001: Registro Insertado en la Base de Datos");
                $_SESSION['mensajeTexto'] = "Registro Anulado en la Base de Datos";
                $_SESSION['mensajeTipo'] = "alert-success";
                
                header("Location: ./usuarios_mant.php");

            }
        break;
        // Para Anular
        case 'UDT':
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $estado = $_POST['estado'];

            $query = "UPDATE `usuarios` SET 
            `NombreC`='$nombre',
            `Correo`='$correo',
            `usuario`='$usuario',
            `password`='$contrasena',
            `estado`='$estado'
            WHERE `codusuarios` = '$id'";        

            $resultado = mysqli_query($link, $query);

            if (!$resultado) {
                // echo("Error 0001: Error Insertando Usuario en la Base de Datos");
                $_SESSION['mensajeTexto'] = "Error Actualizando en la Base de Datos";
                $_SESSION['mensajeTipo'] = "alert-danger";

                header("Location: ./usuarios_mant.php");
            } else{
                // echo("Alerta 0001: Registro Insertado en la Base de Datos");
                $_SESSION['mensajeTexto'] = "Registro Actualizado en la Base de Datos";
                $_SESSION['mensajeTipo'] = "alert-success";
                
                header("Location: ./usuarios_mant.php");

            }
        break;

        default:
            # Este punto falto en la clase
            $_SESSION['mensaje_texto'] = "Error Identificando el Proceso - $opcion";
            $_SESSION['mensaje_tipo'] = "alert-danger";

            header("Location: ./usuarios_mant.php");
            break;
    }

?>