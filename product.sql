CREATE DATABASE IF NOT EXISTS mvcr;
USE mvcr;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price INT
);

INSERT INTO products (name, price) VALUES
('Cheeseburger', 28000),
('Double Burger', 35000),
('Chicken Burger', 30000),
('Beef Steak', 90000),
('Grilled Chicken', 65000),
('Kebab', 55000),
('BBQ Wings', 40000),
('Hot Wings', 42000),
('Pasta', 38000),
('Spaghetti', 36000),
('Lasagna', 45000),
('Salad Caesar', 32000),
('Greek Salad', 30000),
('Ice Cream', 15000),
('Chocolate Cake', 20000);
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    quantity INT,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id)
);
