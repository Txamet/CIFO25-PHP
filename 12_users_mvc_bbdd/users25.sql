DROP DATABASE IF EXISTS users2025;

CREATE DATABASE users2025 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE users2025;

CREATE TABLE usuarios (
  id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  usuario VARCHAR(20) NOT NULL,
  email VARCHAR(33) NOT NULL
)
ENGINE=InnoDB;