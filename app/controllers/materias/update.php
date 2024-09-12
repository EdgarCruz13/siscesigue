<?php

include ('../../../app/config.php');

$id_materia = $_POST['id_materia'];
$claveMateria = $_POST['claveMateria'];
$nombre_materia = $_POST['nombre_materia'];
$materiaNombreSEP = $_POST['materiaNombreSEP'];
$tipoAsignatura = $_POST['tipoAsignatura'];
$claveSEP = $_POST['claveSEP'];
$idSEP = $_POST['idSEP'];
$creditos = $_POST['creditos'];
$seriacion = $_POST['seriacion'];

$sentencia = $pdo->prepare('UPDATE materias
 SET claveMateria=:claveMateria,
     nombre_materia=:nombre_materia,
     materiaNombreSEP=:materiaNombreSEP,
     tipoAsignatura=:tipoAsignatura,
     claveSEP=:claveSEP,
     idSEP=:idSEP,
     creditos=:creditos,
     seriacion=:seriacion,
     fyh_actualizacion=:fyh_actualizacion
WHERE id_materia=:id_materia ');

$sentencia->bindParam(':claveMateria', $claveMateria);
$sentencia->bindParam(':nombre_materia', $nombre_materia);
$sentencia->bindParam(':materiaNombreSEP', $materiaNombreSEP);
$sentencia->bindParam(':tipoAsignatura', $tipoAsignatura);
$sentencia->bindParam(':claveSEP', $claveSEP);
$sentencia->bindParam(':idSEP', $idSEP);
$sentencia->bindParam(':creditos', $creditos);
$sentencia->bindParam(':seriacion', $seriacion);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':id_materia', $id_materia);

if($sentencia->execute()){
    echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Se actualizó la materia de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:'.APP_URL."/admin/materias");
} else {
    echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actualizar en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}
?>
