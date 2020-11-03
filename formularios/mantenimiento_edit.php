<?php
include_once("./include/pcabeza.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $row = consultarMantenimientos($link, $id);  
    $resultadoTM = TipoMantenimiento($link);          
} else {
    // este punto falto agregar en la clase
    $_SESSION['mensajeTexto'] = "Error Actualizando el Registro";
    $_SESSION['mensajeTipo'] = "alert-danger";

    header("Location: admin.php");
}
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="mantenimiento_mant.php">Mantenimientos Botes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Mantenimiento de Botes</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-4 mx-auto">        
            <div class="card-body">
                <form action="mantenimiento_crud.php?accion=UDT" method="post" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="id" id= "id" value="<?php echo $row['codmantenimiento']; ?> ">

                    <div class="form-group">
                        <label for="Estado">Estado*</label>
                        <select class="form-control border-input" required="" name="estado" id="estado">
                            <option value="A" <?php if($row['estado'] == 'A'){echo "selected";}?>> Activo </option>
                            <option value="I" <?php if($row['estado'] == 'I'){echo "selected";}?>> Inactivo </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tipo">Tipo de Mantenimiento*</label>                        
                        <select class="form-control" name="tipo" id="tipo">
                            <?php while ($rowTM = mysqli_fetch_array($resultadoTM)) { ?>
                                <option value="<?php echo $rowTM['codtipo_mant'] ?>" <?php  if ($rowTM['codtipo_mant'] == $row['codtipo_mant'])  { echo 'selected';} ?> > <?php echo $rowTM['descripcion'] ?> </option>
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

</div>

<?php
include_once("./include/ppie.php")
?>