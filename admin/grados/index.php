<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');

include('../../app/controllers/grados/listado_de_grados.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Listado de carreras</h1>
            </div>
            <br>
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Carreras registradas</h3>
                            <div class="card-tools">
                                <a href="create.php" class="btn btn-primary"><i class="bi bi-plus-square"></i> Crear nueva carrera</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>Nro</center>
                                        </th>
                                        <th>
                                            <center>Ciclo</center>
                                        </th>
                                        <th>
                                            <center>Periodo</center>
                                        </th>
                                        <th>
                                            <center>Nivel</center>
                                        </th>
                                        <th>
                                            <center>Modalidad</center>
                                        </th>
                                        <th>
                                            <center>Clave carrera</center>
                                        </th>
                                        <th>
                                            <center>Carrera</center>
                                        </th>
                                        <th>
                                            <center>rvoe</center>
                                        </th>
                                        <th>
                                            <center>Fecha rvoe</center>
                                        </th>
                                        <th>
                                            <center>Grupo</center>
                                        </th>
                                        <th>
                                            <center>Estado</center>
                                        </th>
                                        <th>
                                            <center>Acciones</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contador_grados = 0;
                                    foreach ($grados as $grado) {
                                        $id_grado = $grado['id_grado'];
                                        $contador_grados = $contador_grados + 1; ?>
                                        <tr>
                                            <td style="text-align: center"><?= $contador_grados; ?></td>
                                            <td style="text-align: center;"><?= $grado['ciclo']; ?></td>
                                            <td style="text-align: center"><?= $grado['gestion'] . " (" . $grado['nombre_carrera'] . ")"; ?></td>
                                            <td style="text-align: center;"><?= $grado['nivel']; ?></td>
                                            <td style="text-align: center;"><?= $grado['modalidad']; ?></td>
                                            <td style="text-align: center;"><?= $grado['clave_carrera']; ?></td>
                                            <td style="text-align: center;"><?= $grado['curso']; ?></td>
                                            <td style="text-align: center;"><?= $grado['rvoe']; ?></td>
                                            <td style="text-align: center;"><?= $grado['fecha_rvoe']; ?></td>
                                            <td style="text-align: center;"><?= $grado['paralelo']; ?></td>
                                            <td>
                                                <center>
                                                    <?php
                                                    if ($grado['estado'] == "1") { ?>
                                                        <button class="btn btn-success btn-sm" style="border-radius: 20px">ACTIVO</button>
                                                    <?php
                                                    } else { ?>
                                                        <button class="btn btn-danger btn-sm" style="border-radius: 20px">INACTIVO</button>
                                                    <?php
                                                    }
                                                    ?>
                                                </center>
                                            </td>
                                            <td style="text-align: center">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="show.php?id=<?= $id_grado; ?>" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                    <a href="edit.php?id=<?= $id_grado; ?>" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                    <!-- <form action="<?= APP_URL; ?>/app/controllers/grados/delete.php" onclick="preguntar<?= $id_grado; ?>(event)" method="post" id="miFormulario<?= $id_grado; ?>">
                                                    <input type="text" name="id_grado" value="<?= $id_grado; ?>" hidden>
                                                    <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 0px 5px 5px 0px"><i class="bi bi-trash"></i></button>
                                                </form>
                                                <script>
                                                    function preguntar<?= $id_grado; ?>(event) {
                                                        event.preventDefault();
                                                        Swal.fire({
                                                            title: 'Eliminar registro',
                                                            text: '¿Desea eliminar este registro?',
                                                            icon: 'question',
                                                            showDenyButton: true,
                                                            confirmButtonText: 'Eliminar',
                                                            confirmButtonColor: '#a5161d',
                                                            denyButtonColor: '#270a0a',
                                                            denyButtonText: 'Cancelar',
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                var form = $('#miFormulario<?= $id_grado; ?>');
                                                                form.submit();
                                                            }
                                                        });
                                                    }
                                                </script>
                                                -->
                                                </div>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
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

<script>
    $(function() {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Carrera",
                "infoEmpty": "Mostrando 0 a 0 de 0 Carrera",
                "infoFiltered": "(Filtrado de _MAX_ total Carrera)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Carrera",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            buttons: [{
                    extend: 'collection',
                    text: 'Reportes',
                    orientation: 'landscape',
                    buttons: [{
                        text: 'Copiar',
                        extend: 'copy',
                    }, {
                        extend: 'pdf'
                    }, {
                        extend: 'csv'
                    }, {
                        extend: 'excel'
                    }, {
                        text: 'Imprimir',
                        extend: 'print'
                    }]
                },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>