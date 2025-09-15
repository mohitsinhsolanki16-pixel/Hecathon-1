CREATE DATABASE rajpipala_db;
USE rajpipala_db;

CREATE TABLE registration (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(20),
  guests INT
);

CREATE TABLE feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  feedback TEXT
);