<?php
include_once("./include/pcabeza.php");

$resultado = mostrarUsuarios($link);

?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin.php">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mantenimiento Usuarios</li>
    </ol>
</nav>

<?php 
  if (isset($_SESSION['mensajeTexto'])) { ?>
    <div class="alert <?php echo $_SESSION['mensajeTipo'] ?> alert-dismissible fade show" role="alert">
      <strong>Aviso:</strong> <?php echo $_SESSION['mensajeTexto']?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php
  // Limpio valores de sesion
  session_unset();
  }
?>

<div class="row">

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h3>Registro de Nuevos Usuarios</h3>
                <p>Los campos con (*) son obligatorios</p>
            </div>

            <div class="card-body">
                <form action="usuarios_crud.php?accion=INS" method="post" enctype="multipart/form-data" autocomplete="off">

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
      <th scope="col">Estado</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>            
  <tbody>
    <?php 
        while ($row = mysqli_fetch_array($resultado)) { ?>
          <tr>
            <td> <?php echo $row['NombreC'] ?> </td>
            <td> <?php echo $row['Correo'] ?> </td>
            <td> <?php echo $row['usuario'] ?> </td>
            <td> <?php if ($row['estado'] == 'A'){echo 'Activo';} else{echo 'Inactivo';}?> </td>
            <td> <a class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Editar" href="./usuarios_edit.php?accion=UDT&id=<?php echo $row['codusuarios'] ?>"><i class="far fa-edit"></i></a></td>
            <td> <a class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Anular" href="./usuarios_crud.php?accion=DLT&id=<?php echo $row['codusuarios'] ?>"><i class="fas fa-trash"></i></a></td>            
          </tr>  
        <?php  
        }    
    ?>

  </tbody>
</table>


    </div>

</div>

<?php
include_once("./include/ppie.php")
?>