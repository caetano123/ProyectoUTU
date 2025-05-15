<?php

require_once __DIR__ . '/../models/User.php'; // Incluir el modelo User

class UserController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    // Mostrar todos los usuarios
    public function showAllUsers() {
        $usuarios = $this->userModel->getAllUsers();  // Obtener todos los usuarios
        $usuarioFiltrado = null; // No hay búsqueda aún
        require_once __DIR__ . '/../views/usersView.php'; // Incluir la vista
    }

    // Manejar la búsqueda por ID desde el formulario GET
    public function searchUserById() {
        $usuarios = $this->userModel->getAllUsers();  // Obtener todos los usuarios
        $usuarioFiltrado = null;

        if (isset($_GET['usuario_id']) && is_numeric($_GET['usuario_id'])) {
            $id = intval($_GET['usuario_id']);
            $result = $this->userModel->getUserById($id);
            $usuarioFiltrado = $result ? $result->fetch_assoc() : null;
        }

        require_once __DIR__ . '/../views/usersView.php'; // Incluir la vista
    }
}

