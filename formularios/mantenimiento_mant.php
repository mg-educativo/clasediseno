<?php
include_once("./include/pcabeza.php");

$resultado = mostrarMantenimiento($link);

$resultadoTM = TipoMantenimiento($link);

?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin.php">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mantenimiento de Botes</li>
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
  // session_unset();
      $_SESSION['mensajeTexto'] = null;
      $_SESSION['mensajeTipo'] = null;
  }
?>

<div class="row">

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h3>Registro de Nuevos Mantenimientos</h3>
                <p>Los campos con (*) son obligatorios</p>
            </div>

            <div class="card-body">
                <form action="mantenimiento_crud.php?accion=INS" method="post" enctype="multipart/form-data" autocomplete="off">

                    <div class="form-group">
                        <label for="tipo">Tipo de Mantenimiento*</label>                        
                        <select class="form-control" name="tipo" id="tipo">
                            <?php while ($rowTM = mysqli_fetch_array($resultadoTM)) { ?>
                                <option value="<?php echo $rowTM['codtipo_mant'] ?>"> <?php echo $rowTM['descripcion'] ?> </option>
                            <?php } ?>        
                        </select>
                        <small id="tipoAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="fecha">Fecha*</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" aria-describedby="fechaAyuda" required="">
                        <small id="fechaAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="costo">Costo*</label>
                        <input type="number" class="form-control" id="costo" name="costo" aria-describedby="costoAyuda" min="0" value="0">
                        <small id="costoAyuda" class="form-text text-muted">Este campo es obligatorio</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Descripcion*</label>
                        <textarea rows="4" class="form-control" name="descripcion" id="descripcion" placeholder="Comentarios del Mantenimiento"></textarea>                        
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
      <th scope="col">Tipo </th>
      <th scope="col">Fecha </th>
      <th scope="col">Costo RD$</th>
      <th scope="col">Descripción</th>
      <th scope="col">Estado</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>            
  <tbody>
    <?php 
        while ($row = mysqli_fetch_array($resultado)) { ?>
          <tr>
            <td> <?php echo $row['tipo_mantenimiento'] ?> </td>
            <td> <?php echo $row['fecha'] ?> </td>
            <td> <?php echo $row['valor_mantenimiento'] ?> </td>
            <td> <?php echo $row['descripcion'] ?> </td>
            <td> <?php if ($row['estado'] == 'A'){echo 'Activo';} else{echo 'Inactivo';}?> </td>
            <td> <a class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Editar" href="./manteninimiento_edit.php?accion=UDT&id=<?php echo $row['codmantenimiento'] ?>"><i class="far fa-edit"></i></a></td>
            <td> <a class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Anular" href="./mantenimiento_crud.php?accion=DLT&id=<?php echo $row['codmantenimiento'] ?>"><i class="fas fa-trash"></i></a></td>            
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