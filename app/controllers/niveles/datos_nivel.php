<?php

$sql_niveles = "SELECT * FROM niveles as niv INNER JOIN gestiones as ges 
ON niv.gestion_id = ges.id_gestion where niv.estado = '1' and niv.id_nivel = '$id_nivel' ";
$query_niveles = $pdo->prepare($sql_niveles);
$query_niveles->execute();
$niveles = $query_niveles->fetchAll(PDO::FETCH_ASSOC);

foreach ($niveles as $nivele) {
    $gestion_id = $nivele['gestion_id'];
    $gestion = $nivele['gestion'];
    $nivel = $nivele['nivel'];
    $modalidad = $nivele['modalidad'];
    $fyh_creacion = $nivele['fyh_creacion'];
    $estado = $nivele['estado'];
}
