<?php
include_once("./include/pcabeza.php")
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Inicio</a></li>
            <li class="breadcrumb-item"><a href="usuarios_mant.php">Mantenimiento Usuarios</a></li>            
            <li class="breadcrumb-item active" aria-current="page">Editar Usuarios</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3>Editar Usuarios</h3>
                <p>Los campos con (*) son obligatorios</p>
            </div>

            <div class="card-body">
                <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">

                    <div class="form-group">
                        <label for="Nombre">Nombre*</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreAyuda" required="" placeholder="Ingresa Nombre" value="####">
                        <small id="nombreAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Correo*</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="correoAyuda" required="" placeholder="Ingresa Correo" value="####">
                        <small id="correoAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Usuario*</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuarioAyuda" required="" placeholder="Ingresa Usuario" value="####">
                        <small id="usuarioAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Contraseña*</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" aria-describedby="contrasenaAyuda" required="" placeholder="Ingresa Contraseña" value="####">
                        <small id="contrasenaAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>

                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Guardar" name="guardar">
                    <a href="./usuarios_mant.php" class="btn btn-secondary  btn-lg btn-block "> Cancelar </a>

                </form>

            </div>

        </div>
        </div>
    </div>

<?php
include_once("./include/ppie.php")
?>