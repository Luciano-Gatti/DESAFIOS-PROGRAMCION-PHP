CREATE DATABASE IF NO EXISTS database;

USE database;

CREATE TABLE IF NO EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(255) NOT NULL
);

INSERT INTO productos VALUES 
('Producto 1', 'Descripcion del producto 1', 10.99, 'Categoria 1'),
('Producto 2', 'Descripcion del producto 2', 20.59, 'Categoria 1'),
('Producto 3', 'Descripcion del producto 3', 15.75, 'Categoria 2'),
('Producto 4', 'Descripcion del producto 4', 18.25, 'Categoria 2'),
('Producto 5', 'Descripcion del producto 5', 25.00, 'Categoria 3'),
('Producto 6', 'Descripcion del producto 6', 13.68, 'Categoria 3'),