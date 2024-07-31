<?php

$sql_grados = "SELECT * FROM grados AS gra 
               INNER JOIN niveles AS niv ON gra.nivel_id = niv.id_nivel 
               INNER JOIN gestiones AS ges ON niv.gestion_id = ges.id_gestion 
               WHERE gra.estado = '1' AND gra.id_grado = '$id_grado'";

$query_grados = $pdo->prepare($sql_grados);
$query_grados->execute();
$grados = $query_grados->fetchAll(PDO::FETCH_ASSOC);

foreach ($grados as $grado) {
    $id_grado = $grado['id_grado'];
    $nivel_id = $grado['nivel_id'];
    $gestion_id = $grado['gestion_id'];
    $gestion = $grado['gestion'];
    $clave_carrera = $grado['clave_carrera'];
    $curso = $grado['curso'];
    $rvoe = $grado['rvoe'];
    $fecha_rvoe = $grado['fecha_rvoe'];
    $paralelo = $grado['paralelo'];
    $nivel = $grado['nivel'];
    $fyh_creacion = $grado['fyh_creacion'];
    $estado = $grado['estado'];
}
