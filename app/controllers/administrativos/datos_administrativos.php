<?php

$sql_administrativos = "SELECT * FROM usuarios AS USU INNER JOIN roles as rol ON rol.id_rol = usu.rol_id 
                        INNER JOIN personas AS per ON per.usuario_id = usu.id_usuario 
                        INNER JOIN administrativos as adm ON adm.persona_id = per.id_persona 
                        WHERE adm.estado = '1' and  adm.id_administrativo = '$id_administrativo' ";
$query_administrativos = $pdo->prepare($sql_administrativos);
$query_administrativos->execute();
$administrativos = $query_administrativos->fetchAll(PDO::FETCH_ASSOC);

foreach ($administrativos as $administrativo) {
    $id_administrativo = $administrativo['id_administrativo'];
    $id_usuario = $administrativo['id_usuario'];
    $id_persona = $administrativo['id_persona'];

    $nombre = $administrativo['nombre'];
    $apellido_paterno = $administrativo['apellido_paterno'];
    $apellido_materno = $administrativo['apellido_materno'];
    $nombre_rol = $administrativo['nombre_rol'];
    $curp = $administrativo['curp'];
    $fecha_nacimiento = $administrativo['fecha_nacimiento'];
    $celular  = $administrativo['celular'];
    $profesion = $administrativo['profesion'];
    $email = $administrativo['email'];
    $direccion = $administrativo['direccion'];
    $fyh_creacion = $administrativo['fyh_creacion'];
    $estado = $administrativo['estado'];
}