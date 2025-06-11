-- Create the database
CREATE DATABASE IF NOT EXISTS final_project;
USE final_project;

-- Create the Users table
DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NULL,
    PRIMARY KEY (username)
);

-- Insert sample data into Users table
INSERT INTO Users (username, password, name, surname, email, phone) VALUES
('jdoe', 'pass123', 'John', 'Doe', 'jdoe@example.com', '123-456-7890'),
('asmith', 'securePwd!', 'Anna', 'Smith', 'asmith@example.com', '234-567-8901'),
('bwilliams', 'myPassword', 'Bob', 'Williams', 'bwilliams@example.com', '345-678-9012'),
('ckent', 'superman2024', 'Clark', 'Kent', 'ckent@example.com', '456-789-0123'),
('dwayne', 'rockSolid', 'Dwayne', 'Johnson', 'dwayne@example.com', '567-890-1234');


DROP TABLE IF EXISTS Destinations;
CREATE TABLE Destinations (
    name VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    season VARCHAR(50) NOT NULL,
    PRIMARY KEY (name)
);

-- Insert sample data into Destinations table
INSERT INTO Destinations (name, country, price, season) VALUES
('Paris', 'France', 1200.00, 'Spring'),
('Bali', 'Indonesia', 900.00, 'Summer'),
('Tokyo', 'Japan', 1500.00, 'Autumn'),
('Sydney', 'Australia', 1300.00, 'Winter'),
('Cape Town', 'South Africa', 1100.00, 'Summer');

DROP TABLE IF EXISTS Log;

CREATE TABLE Log (
    log_id INT AUTO_INCREMENT PRIMARY KEY,
    actions VARCHAR(255) NOT NULL
);