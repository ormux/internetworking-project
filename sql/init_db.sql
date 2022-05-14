DROP USER IF EXISTS 'tgs'@'localhost';
CREATE USER 'tgsUser'@'localhost' IDENTIFIED BY 'tgsPass';
CREATE DATABASE IF NOT EXISTS tgs;
GRANT ALL PRIVILEGES ON tgs.* TO 'tgsUser'@'localhost';
USE tgs;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS products;
CREATE TABLE users(
   id int not null auto_increment, 
   username varchar(10), 
   password varchar(10), 
   primary key (id)
);
CREATE TABLE products(
   id int not null auto_increment, 
   name varchar(10), 
   price varchar(10), 
   primary key (id)
);

INSERT INTO users(username, password) VALUES ('tatum', 'pass123');
INSERT INTO users(username, password) VALUES ('alexa', 'secret');
INSERT INTO users(username, password) VALUES ('kaila', 'letmein');
INSERT INTO users(username, password) VALUES ('willy', 'qwerty');

INSERT INTO products(name, price) VALUES ('pinephone', '100');
INSERT INTO products(name, price) VALUES ('iphone 13', '200');
INSERT INTO products(name, price) VALUES ('iphone 12', '300');
INSERT INTO products(name, price) VALUES ('samsung s4', '400');
