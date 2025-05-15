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
        require_once __DIR__ . '/../views/usersView.php'; // Incluir la vista
    }

    // Mostrar un usuario por ID
    public function showUserById($id) {
        $usuario = $this->userModel->getUserById($id);  // Obtener el usuario por ID
        require_once __DIR__ . '/../views/usersView.php'; // Incluir la vista
    }
}
