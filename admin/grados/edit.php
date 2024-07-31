<?php

$id_grado = $_GET['id'];
include('../../app/config.php');
include('../../admin/layout/parte1.php');

include('../../app/controllers/grados/datos_grados.php');
include('../../app/controllers/niveles/listado_de_niveles.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Modificación del grado: <?= $curso; ?></h1>
            </div>
            <br>
            <div class="row">

                <div class="col-md-6">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= APP_URL; ?>/app/controllers/grados/update.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nivel</label>
                                            <input type="text" name="id_grado" value="<?= $id_grado; ?>" hidden>
                                            <select name="nivel_id" id="" class="form-control">
                                                <?php
                                                foreach ($niveles as $nivele) {
                                                ?>
                                                    ¿ <option value="<?= $nivele['id_nivel']; ?>"><?= $nivele['ciclo'] . " - " . $nivele['gestion'] . " - " . $nivele['nivel'] . " - " . $nivele['modalidad']; ?></option>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Clave de carrera</label>
                                            <input type="text" name="id_grado" value="<?= $id_grado; ?>" hidden>
                                            <input type="text" value="<?= $clave_carrera; ?>" name="clave_carrera" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nombre de la carrera</label>
                                            <input type="text" name="id_grado" value="<?= $id_grado; ?>" hidden>
                                            <input type="text" value="<?= $curso; ?>" name="curso" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">RVOE</label>
                                            <input type="text" name="id_grado" value="<?= $id_grado; ?>" hidden>
                                            <input type="text" value="<?= $rvoe; ?>" name="rvoe" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Fecha de RVOE</label>
                                            <input type="text" name="id_grado" value="<?= $id_grado; ?>" hidden>
                                            <input type="text" value="<?= $fecha_rvoe; ?>" name="fecha_rvoe" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Turnos</label>
                                            <select name="paralelo" id="" class="form-control">
                                                <option value="A" <?= $paralelo == 'A' ? 'selected' : '' ?>>A</option>
                                                <option value="B" <?= $paralelo == 'B' ? 'selected' : '' ?>>B</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                            <a href="<?= APP_URL; ?>/admin/grados" class="btn btn-secondary">Cancelar</a>
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

include('../../admin/layout/parte2.php');
include('../../layout/mensajes.php');

?>