<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();

$mysqli = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/controller/UserController.php';

$userModel = new User($mysqli);
$userController = new UserController($userModel);

$usuarios = null;   
$usuarioFiltrado = null;
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController->saveUser();
    

if (isset($_GET['usuario_id']) && is_numeric($_GET['usuario_id'])) {
    $userController->searchUserById($_GET['usuario_id']);
    
} else {
    $userController->showAllUsers();
}
}

