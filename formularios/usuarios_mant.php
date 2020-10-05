<?php
include_once("./include/pcabeza.php")
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin.php">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mantenimiento Usuarios</li>
    </ol>
</nav>

<div class="row">

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h3>Registro de Nuevos Usuarios</h3>
                <p>Los campos con (*) son obligatorios</p>
            </div>

            <div class="card-body">
                <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">

                    <div class="form-group">
                        <label for="Nombre">Nombre*</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreAyuda" required="" placeholder="Ingresa Nombre">
                        <small id="nombreAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Correo*</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="correoAyuda" required="" placeholder="Ingresa Correo">
                        <small id="correoAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Usuario*</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuarioAyuda" required="" placeholder="Ingresa Usuario">
                        <small id="usuarioAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Contraseña*</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" aria-describedby="contrasenaAyuda" required="" placeholder="Ingresa Contraseña">
                        <small id="contrasenaAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>

                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Guardar" name="guardar">

                </form>

            </div>

        </div>

    </div>

    <div class="col-md-8">
    <table id="miTabla" class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Usuario</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    <tr>      
      <td>Mark</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td> <button type="button" class="btn btn-outline-primary"><i class="far fa-edit"></i> Editar </button> </td>
      <td> <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i> Anular </button> </td>
    </tr>
    <tr>

      <td>Jacob</td>
      <td>@fat</td>
      <td>Thornton</td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td>Larry</td>
      <td>@twitter</td>
      <td>theBird</td>
      <td> </td>
      <td> </td>
    </tr>
  </tbody>
</table>


    </div>

</div>

<?php
include_once("./include/ppie.php")
?>