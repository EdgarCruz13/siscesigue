<?php
include('../app/config.php');
global $pdo;

$email = $_POST['email'];
$password = $_POST['password'];

try {
    // Preparamos la consulta para evitar inyecciones SQL
    $sql = "SELECT * FROM usuarios WHERE email = :email AND password = :password AND estado = '1' ";
    $query = $pdo->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR); // No recomendado para producción
    $query->execute();

    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        echo "Los datos son correctos";
        session_start();
        $_SESSION['mensaje'] = "Bienvenido al sistema";
        $_SESSION['icono'] = "success";
        $_SESSION['sesion_email'] = $email;
        header('Location: ' . APP_URL . '/admin/index.php');
    } else {
        echo "Los datos son incorrectos";
        session_start();
        $_SESSION['mensaje'] = "Los datos son incorrectos";
        header('Location: ' . APP_URL . '/login');
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>