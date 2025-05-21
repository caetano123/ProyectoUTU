-- Crear tabla usuarios
CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  pass VARCHAR(20) NOT NULL
);

-- Insertar algunos usuarios
INSERT INTO usuarios (nombre, email, pass) VALUES ('Juan', 'juan@mail.com', 'hola1243');
INSERT INTO usuarios (nombre, email, pass) VALUES ('Ana', 'ana@mail.com', 'contra231');

