CREATE DATABASE Mini_shop;
USE Mini_shop;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    is_active BOOLEAN DEFAULT TRUE
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category_id INT,
    supplier_id INT,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE,
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id) ON DELETE SET NULL
);

INSERT INTO categories (name) VALUES 
('Цемент'), 
('Песок'), 
('Кирпичи'), 
('Сталь'), 
('Дерево');

INSERT INTO suppliers (name, is_active) VALUES 
('Поставщик 1', TRUE), 
('Поставщик 2', TRUE), 
('Поставщик 3', TRUE);

INSERT INTO products (name, category_id, supplier_id, price) VALUES 
('Цемент М400', 1, 1, 450), 
('Песок карьерный', 2, 2, 350);
