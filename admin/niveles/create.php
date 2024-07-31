<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');

include('../../app/controllers/configuraciones/gestion/listado_de_gestiones.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Registro de nuevo nivel</h1>
            </div>
            <br>
            <div class="row">

                <div class="col-md-6">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= APP_URL; ?>/app/controllers/niveles/create.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Periodo</label>
                                            <select name="gestion_id" id="" class="form-control">
                                                <?php
                                                foreach ($gestiones as $gestione) {
                                                    if ($gestione['estado'] == "1") { ?>
                                                        <option value="<?= $gestione['id_gestion']; ?>"><?= $gestione['gestion']; ?></option>
                                                    <?php
                                                    } ?>
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
                                            <label for="">Nivel</label>
                                            <select name="nivel" id="" class="form-control">
                                                <option value="MAESTRIA">MAESTRIA</option>
                                                <option value="DIPLOMADO">DIPLOMADO</option>
                                                <option value="ESPECIALIDAD">ESPECIALIDAD</option>
                                                <option value="TALLER">TALLER</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Modalidad</label>
                                            <select name="modalidad" id="" class="form-control">
                                                <option value="ESCORALIZADO">ESCORALIZADO</option>
                                                <option value="SABATINO">SABATINO</option>
                                                <option value="MIXTO">MIXTO</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                            <a href="<?= APP_URL; ?>/admin/niveles" class="btn btn-secondary">Cancelar</a>
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