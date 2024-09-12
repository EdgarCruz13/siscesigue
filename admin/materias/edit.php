<?php

$id_materia = $_GET['id'];
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/materias/datos_materia.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Modificar materia: <?=$nombre_materia;?></h1>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?=APP_URL;?>/app/controllers/materias/update.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="id_materia" value="<?=$id_materia;?>" hidden>
                                            <label for="">Clave Materia</label>
                                            <input type="text" value="<?=$claveMateria;?>" name="claveMateria" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Materia</label>
                                            <input type="text" value="<?=$nombre_materia;?>" name="nombre_materia" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nombre Materia SEP</label>
                                            <input type="text" value="<?=$materiaNombreSEP;?>" name="materiaNombreSEP" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Tipo de Asignatura</label>
                                            <select name="tipoAsignatura" id="tipoAsignatura" class="form-control">
                                                <option value="NO APLICA" <?php if ($tipoAsignatura == 'NO APLICA') { ?> selected="selected" <?php } ?>>NO APLICA</option>
                                                <option value="OBLIGATORIA" <?php if ($tipoAsignatura == 'OBLIGATORIA') { ?> selected="selected" <?php } ?>>OBLIGATORIA</option>
                                                <option value="OPTATIVA" <?php if ($tipoAsignatura == 'OPTATIVA') { ?> selected="selected" <?php } ?>>OPTATIVA</option>
                                                <option value="ADICIONAL" <?php if ($tipoAsignatura == 'ADICIONAL') { ?> selected="selected" <?php } ?>>ADICIONAL</option>
                                                <option value="COMPLEMENTARIA" <?php if ($tipoAsignatura == 'COMPLEMENTARIA') { ?> selected="selected" <?php } ?>>COMPLEMENTARIA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Clave SEP</label>
                                            <input type="text" value="<?=$claveSEP;?>" name="claveSEP" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">ID SEP</label>
                                            <input type="text" value="<?=$idSEP;?>" name="idSEP" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Creditos</label>
                                            <input type="text" value="<?=$creditos;?>" name="creditos" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Seriacion</label>
                                            <input type="text" value="<?=$seriacion;?>" name="seriacion" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                            <a href="<?=APP_URL;?>/admin/materias" class="btn btn-secondary">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

include ('../../admin/layout/parte2.php');
include ('../../layout/mensajes.php');

?>
