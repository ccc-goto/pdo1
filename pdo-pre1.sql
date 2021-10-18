CREATE DATABASE lesson1 DEFAULT CHARACTER SET utf8;
use lesson1;

DROP TABLE IF EXISTS user;
CREATE TABLE user (
    id int(10) AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    age int(3) NOT NULL,
    email varchar(100) DEFAULT NULL,
    PRIMARY KEY(id)
) DEFAULT CHARSET=utf8;


