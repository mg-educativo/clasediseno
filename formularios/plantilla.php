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
        <a class="navbar-brand" href="#">
            <img src="./img/logo_php.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Clases Online
        </a>
        <!-- Opciones del menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Parámetros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./usuarios_mant.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenedor -->
    <div class="container-fluid p-4">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Inicio</li>
            </ol>
        </nav>

        <!-- Iniciar de Card -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-tachometer-alt"></i> Datos Basicos
            </div>
            <div class="card-body">
                <h5 class="card-title">Breve Descripción</h5>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate erat volutpat augue tincidunt pulvinar. Nulla semper venenatis velit ut laoreet. Maecenas gravida nibh ut purus egestas condimentum. Vestibulum nec interdum arcu. Pellentesque scelerisque tellus non posuere fermentum. Integer dui eros, faucibus ut mauris a, consectetur condimentum massa. Etiam pretium magna sit amet tellus interdum semper. Nulla dui est, bibendum eu malesuada quis, ultrices sit amet nibh. Phasellus eu malesuada sem, nec tincidunt ligula. Donec consequat accumsan arcu ut commodo. Aenean eleifend a mi ac commodo. Morbi facilisis vitae tortor quis egestas. Mauris nulla lorem, condimentum ullamcorper quam sit amet, laoreet commodo sem.
                </p>
                <a href="#" class="btn btn-primary">Ver Más <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>

        <div class="row">
            <footer>
                Creado con poco <i class="fas fa-laptop-code"></i> y con mucho <i class="fas fa-mug-hot"></i> por: <a href="https://mangusoft.com/" target="_blank" rel="noopener noreferrer">Mangusoft SRL</a>
            </footer>
        </div>

    </div>


    <!--LLamando archivos js -->
    <script src="./package/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
</body>

</html>