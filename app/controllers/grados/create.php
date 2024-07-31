<?php

include('../../../app/config.php');

$nivel_id = $_POST['nivel_id'];
$clave_carrera = $_POST['clave_carrera'];
$curso = $_POST['curso'];
$rvoe = $_POST['rvoe'];
$fecha_rvoe = $_POST['fecha_rvoe'];
$paralelo = $_POST['paralelo'];

$sentencia = $pdo->prepare('INSERT INTO grados
(nivel_id, clave_carrera, curso, rvoe, fecha_rvoe, paralelo, fyh_creacion, estado)
VALUES ( :nivel_id, :clave_carrera, :curso, :rvoe, :fecha_rvoe, :paralelo, :fyh_creacion, :estado)');

$sentencia->bindParam(':nivel_id', $nivel_id);
$sentencia->bindParam(':clave_carrera', $clave_carrera);
$sentencia->bindParam(':curso', $curso);
$sentencia->bindParam(':rvoe', $rvoe);
$sentencia->bindParam(':fecha_rvoe', $fecha_rvoe);
$sentencia->bindParam(':paralelo', $paralelo);
$sentencia->bindParam('fyh_creacion', $fechaHora);
$sentencia->bindParam('estado', $estado_de_registro);

if ($sentencia->execute()) {
    echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Se registro el grado de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:' . APP_URL . "/admin/grados");
    //header('Location:' .$URL.'/');
} else {
    echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo registrar en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
?><script>
        window.history.back();
    </script><?php
            }
