<?php
include('../../../../app/config.php');

$id_gestion = $_POST['id_gestion'];
$ciclo = $_POST['ciclo'];
$nombre_carrera = $_POST['nombre_carrera'];
$gestion = $_POST['gestion'];
$tipo_periodo = $_POST['tipo_periodo'];
$estado = $_POST['estado'];

if ($estado == "ACTIVO") {
    $estado = 1;
} else {
    $estado = 0;
}

$sentencia = $pdo->prepare('UPDATE gestiones
 SET    ciclo=:ciclo, 
    nombre_carrera=:nombre_carrera,
    gestion=:gestion,
    tipo_periodo=:tipo_periodo,
     fyh_actualizacion=:fyh_actualizacion,
     estado=:estado
WHERE id_gestion=:id_gestion');

$sentencia->bindParam(':ciclo', $ciclo);
$sentencia->bindParam(':nombre_carrera', $nombre_carrera);
$sentencia->bindParam(':gestion', $gestion);
$sentencia->bindParam(':tipo_periodo', $tipo_periodo);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':estado', $estado);
$sentencia->bindParam(':id_gestion', $id_gestion);


if ($sentencia->execute()) {
    //echo 'success';
    echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Se actualizó la gestión educativa de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:' . APP_URL . "/admin/configuraciones/gestion");
    //header('Location:' .$URL.'/');
} else {
    echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actualizar en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
?><script>
        window.history.back();
    </script><?php
            }
