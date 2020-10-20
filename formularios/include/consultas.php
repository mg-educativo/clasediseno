<?php

function mostrarUsuarios($link){
    $query = "SELECT * FROM `usuarios`"; 
    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function consultarUsuarios($link, $id){
    $query = "SELECT * FROM `usuarios` WHERE `codusuarios` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {        
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarUsuarios";
        $_SESSION['mensajeTipo'] = "alert-danger";
            
        header("Location: ./usuarios_mant.php");        
    }    
}

function validarLogin($link, $user, $pass){

    $query = "SELECT * FROM `usuarios` WHERE `usuario` = '$user' AND `password` = '$pass' AND `estado` = 'A'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        # code...
        $row = $resultado ->fetch_assoc();
        $_SESSION['codusuarios'] = $row['codusuarios'];
        header("Location: admin.php");
    } else {
        # code...
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> validarLogin";
        $_SESSION['mensajeTipo'] = "alert-danger";
    }
    
}

