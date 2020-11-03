<?php
    // incluimos conexion
    include_once("./include/conexion.php");
    include_once("./include/consultas.php");

    if (isset($_SESSION['codusuarios'])) {
        # code...
        $idusuario = $_SESSION['codusuarios'];
        $row = consultarUsuarios($link, $idusuario);

    } 
    else {
        # code...
        $_SESSION['mensajeTexto'] = "Error Acceso al Sistema no Registrado";
        $_SESSION['mensajeTipo'] = "alert-danger";
        header("Location: index.php");
    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clases Online </title>

    <!-- Boostrap -->
    <link rel="stylesheet" href="./package/bootstrap-4.5.0-dist/css/bootstrap.min.css">

    <!-- FontAwesone -->
    <link rel="stylesheet" href="./package/fontawesome-free-5.13.0-web/css/all.min.css">

    <!-- JQuery -->
    <script src="./js/jquery-3.5.1.min.js"></script>

    <!-- Datable-->
    <link rel="stylesheet" href="./package/DataTables/datatables.min.css">

    <script src="./package/DataTables/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#miTabla').DataTable({
                "iDisplayLength": 10,
            });
        });
    </script>

</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="admin.php">
            <img src="./img/logo_php.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Clases Online
        </a>
        <!-- Opciones del menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Parámetros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Configuración</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./mantenimiento_mant.php">Mantenimientos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./usuarios_mant.php">Usuarios</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="index.php">Salir</a>
                </li> -->
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item active">
                    <p class="nav-link"><i class="fas fa-user"></i> <?php echo $row['NombreC'];?> </p>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./include/cerrar.php"> <i class="fas fa-sign-out-alt"></i> Salir </a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Contenedor -->
    <div class="container-fluid p-4">