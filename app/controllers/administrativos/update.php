<?php

include ('../../../app/config.php');

$id_administrativo = $_POST['id_administrativo'];
$id_usuario = $_POST['id_usuario'];
$id_persona = $_POST['id_persona'];

$rol_id = $_POST['rol_id'];
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$curp = $_POST['curp'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$profesion = $_POST['profesion'];
$direccion = $_POST['direccion'];

$pdo->beginTransaction();
/////////////////////////////
/// ACTUALIZAR TABLA USUARIOS
$password = password_hash($curp, PASSWORD_DEFAULT);

$sentencia = $pdo->prepare('UPDATE usuarios
            SET rol_id=:rol_id,
                email=:email,
                password=:password,
                fyh_actualizacion=:fyh_actualizacion
          WHERE id_usuario=:id_usuario ');

$sentencia->bindParam(':rol_id',$rol_id);
$sentencia->bindParam(':email',$email);
$sentencia->bindParam(':password',$password);
$sentencia->bindParam('fyh_actualizacion',$fechaHora);
$sentencia->bindParam('id_usuario',$id_usuario);
$sentencia->execute();

/////////////////////////
/// ACTUALIZAR A LA TABLA PERSONAS
$sentencia = $pdo->prepare('UPDATE personas
    SET nombre = :nombre,
        apellido_paterno = :apellido_paterno,
        apellido_materno = :apellido_materno,
        curp = :curp,
        fecha_nacimiento = :fecha_nacimiento,
        celular = :celular,
        profesion = :profesion,
        direccion = :direccion,
        fyh_actualizacion = :fyh_actualizacion
    WHERE id_persona = :id_persona');

$sentencia->bindParam(':nombre',$nombre);
$sentencia->bindParam(':apellido_paterno',$apellido_paterno);
$sentencia->bindParam(':apellido_materno',$apellido_materno);
$sentencia->bindParam(':curp',$curp);
$sentencia->bindParam(':fecha_nacimiento',$fecha_nacimiento);
$sentencia->bindParam(':celular',$celular);
$sentencia->bindParam(':profesion',$profesion);
$sentencia->bindParam(':direccion',$direccion);
$sentencia->bindParam('fyh_actualizacion',$fechaHora);
$sentencia->bindParam('id_persona',$id_persona);
$sentencia->execute();

/////////////////////7
///  ACTUALIZAR A LA TABLA ADMINISTRATIVOS
$sentencia = $pdo->prepare('UPDATE administrativos
        SET fyh_actualizacion=:fyh_actualizacion
        WHERE id_administrativo=:id_administrativo');

$sentencia->bindParam('fyh_actualizacion',$fechaHora);
$sentencia->bindParam('id_administrativo',$id_administrativo);

if($sentencia->execute()){
    echo 'success';
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = "Se actualizo el personal administrativo de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:'.APP_URL."/admin/administrativos");
//header('Location:' .$URL.'/');
}else{
    echo 'error al actualizar a la base de datos';
    pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo registrar en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}
