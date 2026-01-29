CREATE DATABASE product_db;
USE product_db;

CREATE TABLE products (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    buying_price DECIMAL(10, 2) NOT NULL,
    selling_price DECIMAL(10, 2) NOT NULL,
    display TINYINT(1) DEFAULT 0,
    PRIMARY KEY (id)
);
