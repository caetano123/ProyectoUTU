<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$mysqli = new mysqli(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME']
);

// Comprobar la conexión
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Incluir el modelo y el controlador
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/controller/UserController.php';

// Crear instancia del modelo
$userModel = new User($mysqli);

// Crear instancia del controlador
$userController = new UserController($userModel);

// Si se recibe el ID desde el formulario
if (isset($_GET['usuario_id']) && is_numeric($_GET['usuario_id'])) {
    // Pasar el ID por GET dentro del método searchUserById para que lo use
    $userController->searchUserById();
} else {
    // Si no se busca un ID, mostrar todos los usuarios
    $userController->showAllUsers();
}

