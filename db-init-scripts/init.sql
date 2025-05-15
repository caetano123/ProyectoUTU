-- Crear tabla usuarios
CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE
);

-- Insertar algunos usuarios
INSERT INTO usuarios (nombre, email) VALUES ('Juan', 'juan@mail.com');
INSERT INTO usuarios (nombre, email) VALUES ('Ana', 'ana@mail.com');

