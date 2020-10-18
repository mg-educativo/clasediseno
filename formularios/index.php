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

    <style>
        .login-container {
            margin-top: 10%;
            max-width: 100%;
        }
    </style>


</head>

<body class="text-center">

    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="mb-4" src="./img/logo_php.svg" alt="Logo Empresa" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>

                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingresar usuario" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Ingresar contraseña" required>
                            </div>

                            <!-- <a href="./admin.php" class="btn- btn-primary btn-lg"> <i class="fas fa-sign-in-alt"></i> Ingresar </a> -->
                            <input type="submit" class="btn- btn-primary btn-lg" value="Ingresar">

                        </form>

                    </div>
                    <div class="card-footer">
                        <footer>
                            <footer>
                                Creado con poco <i class="fas fa-laptop-code"></i> y con mucho <i class="fas fa-mug-hot"></i> por: <a href="https://mangusoft.com/" target="_blank" rel="noopener noreferrer">Mangusoft SRL</a>
                            </footer>
                        </footer>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--LLamando archivos js -->
    <script src="./package/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
</body>

</html>