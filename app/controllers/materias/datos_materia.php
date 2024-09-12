<?php

$sql_materias = "SELECT * FROM materias where estado = '1' and id_materia = '$id_materia'  ";
$query_materias = $pdo->prepare($sql_materias);
$query_materias->execute();
$materias = $query_materias->fetchAll(PDO::FETCH_ASSOC);

foreach ($materias as $materia){
    $claveMateria = $materia['claveMateria'];
    $nombre_materia = $materia['nombre_materia'];
    $materiaNombreSEP = $materia['materiaNombreSEP'];
    $tipoAsignatura = $materia['tipoAsignatura'];
    $claveSEP = $materia['claveSEP'];
    $idSEP = $materia['idSEP'];
    $creditos = $materia['creditos'];
    $seriacion = $materia['seriacion'];
    $fyh_creacion = $materia['fyh_creacion'];
    $estado = $materia['estado'];
}