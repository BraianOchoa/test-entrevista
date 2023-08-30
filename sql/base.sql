CREATE DATABASE test_entrevista CHARACTER SET utf8 COLLATE utf8_general_ci;

USE test_entrevista;
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telephone VARCHAR(60) NOT NULL,
    comments TEXT NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);