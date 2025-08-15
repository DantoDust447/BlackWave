create database clientes_BlackWave;
use clientes_BlackWave;
CREATE TABLE clientes (
    email INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(100) NOT NULL,
    fecha_nacimiento VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(15),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);