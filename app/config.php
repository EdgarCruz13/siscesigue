<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sisgestionescolar');

define('APP_NAME', 'SISTEMA DE GESTION ESCOLAR');
DEFINE('APP_URL','http://localhost/sisgestionescolar');
DEFINE('KEY_API_MAPS','');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo= new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "conexion existosa a la base de datos";
}catch (PDOException $e) {
    echo "Error no se puedo conectar a la base de datos";
}

date_default_timezone_set('America/Mexico_City');
$fechaHora = date(format:'y-m-d H:i:s');

$fecha_actual = date (format:'y-m-d');

$dia_actual = date(format:'d');
$mes_actual = date(format:'m');
$ano_actual = date(format:'Y');
$estado_de_registro = '1';