CREATE DATABASE IF NOT EXISTS JX_project;
USE JX_project;

CREATE TABLE users(
    user_id INT AUTO INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(225) NOT NULL,
    role ENUM('admin', 'staff', 'customer') NOT NULL DEFAULT 'customer',
    create_at DATETIME DEFAULT CURRENT_TIMESTAMP,
)

CREATE TABLE hypercars (
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(50) NOT NULL,
    model VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    description TEXT,
    image VARCHAR(255)
)

CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    car_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    total_price DECIMAL(10,2) NOT NULL,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'confirmed', 'paid', 'completed', 'cancelled') NOT NULL DEFAULT 'pending',
    CONSTRAINT fk_orders_user
        FOREIGN KEY (user_id) REFERENCES users(user_id),
    CONSTRAINT fk_orders_car
        FOREIGN KEY (car_id) REFERENCES hypercars(car_id)
) 

CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    car_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    total_price DECIMAL(10,2) NOT NULL,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'confirmed', 'paid', 'completed', 'cancelled') NOT NULL DEFAULT 'pending',
    CONSTRAINT fk_orders_user
        FOREIGN KEY (user_id) REFERENCES users(user_id),
    CONSTRAINT fk_orders_car
        FOREIGN KEY (car_id) REFERENCES hypercars(car_id)
) 

CREATE TABLE payments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    payment_status ENUM('pending', 'completed', 'failed') NOT NULL DEFAULT 'pending',
    payment_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_payments_order
        FOREIGN KEY (order_id) REFERENCES orders(order_id)
) 

CREATE TABLE sales_reports (
    report_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    total_sales DECIMAL(10,2) NOT NULL,
    report_date DATE NOT NULL,
    CONSTRAINT fk_sales_reports_order
        FOREIGN KEY (order_id) REFERENCES orders(order_id)
) 

-- Example hypercars
INSERT INTO hypercars (brand, model, price, year, stock, description, image)
VALUES
('Bugatti', 'Tourbillon', 4100000.00, 2026, 1,
 'A high-performance Bugatti hypercar combining luxury and extreme performance.',
 'bugatti.jpg'),
('Koenigsegg', 'Jesko Absolut', 3000000.00, 2026, 1,
 'A high-speed Koenigsegg hypercar designed for extreme performance.',
 'jesko.jpg'),
('Pagani', 'Utopia', 2500000.00, 2026, 1,
 'A handcrafted hypercar focused on performance, design and exclusivity.',
 'utopia.jpg');