<?php
    

class User {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    // Obtener todos los usuarios
    public function getAllUsers() {
        $sql = "SELECT id, nombre, email FROM usuarios";
        return $this->conn->query($sql);
    }

    // Obtener un usuario por su ID
    public function getUserById($id) {
        $sql = "SELECT id, nombre, email FROM usuarios WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result(); // Devolver el resultado
    }
}
?>
