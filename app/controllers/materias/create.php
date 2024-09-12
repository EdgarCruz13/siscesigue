<?php


include ('../../../app/config.php');

$claveMateria = $_POST['claveMateria'];
$nombre_materia = $_POST['nombre_materia'];
$materiaNombreSEP = $_POST['materiaNombreSEP'];
$tipoAsignatura = $_POST['tipoAsignatura'];
$claveSEP = $_POST['claveSEP'];
$idSEP = $_POST['idSEP'];
$creditos = $_POST['creditos'];
$seriacion = $_POST['seriacion'];

$sentencia = $pdo->prepare('INSERT INTO materias
(claveMateria,nombre_materia,materiaNombreSEP,tipoAsignatura,claveSEP,idSEP,creditos,seriacion,fyh_creacion, estado)
VALUES ( :claveMateria,:nombre_materia,:materiaNombreSEP,:tipoAsignatura,:claveSEP,:idSEP,:creditos,:seriacion,:fyh_creacion,:estado)');

$sentencia->bindParam(':claveMateria',$claveMateria);
$sentencia->bindParam(':nombre_materia',$nombre_materia);
$sentencia->bindParam(':materiaNombreSEP',$materiaNombreSEP);
$sentencia->bindParam(':tipoAsignatura',$tipoAsignatura);
$sentencia->bindParam(':claveSEP',$claveSEP);
$sentencia->bindParam(':idSEP',$idSEP);
$sentencia->bindParam(':creditos',$creditos);
$sentencia->bindParam(':seriacion',$seriacion);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Se registro la materia de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:'.APP_URL."/admin/materias");
//header('Location:' .$URL.'/');
}else{
    echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo registrar en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}