DROP DATABASE IF EXISTS rop_behealth_befit;

CREATE DATABASE rop_behealth_befit;

USE rop_behealth_befit;

CREATE TABLE genders (
	id TINYINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(10) NOT NULL
) Engine = Innodb;

INSERT INTO genders (name) VALUES ("muž");
INSERT INTO genders (name) VALUES ("žena");

CREATE TABLE plans (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    mon VARCHAR(40) NOT NULL,
    tue VARCHAR(40) NOT NULL,
    wed VARCHAR(40) NOT NULL,
    thu VARCHAR(40) NOT NULL,
    fri VARCHAR(40) NOT NULL,
    sat VARCHAR(40) NOT NULL,
    sun VARCHAR(40) NOT NULL
) Engine = Innodb;

CREATE TABLE advice (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(500) NOT NULL
) Engine = Innodb;

CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(60) NOT NULL,
    passwd VARCHAR(60) NOT NULL,
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(40) NOT NULL,
    gender_id TINYINT NOT NULL,
    age TINYINT NOT NULL,
    height TINYINT NOT NULL,
    weight TINYINT NOT NULL,
    plan_id INT NOT NULL,
    advice_id INT NOT NULL,
    FOREIGN KEY (gender_id) REFERENCES genders(id),
    FOREIGN KEY (plan_id) REFERENCES plans(id),
    FOREIGN KEY (advice_id) REFERENCES advice(id)
) Engine = Innodb;

CREATE TABLE cathegories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
) Engine = Innodb;

CREATE TABLE parts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cathegory_id INT NOT NULL,
    name VARCHAR(20) NOT NULL,
    FOREIGN KEY (cathegory_id) REFERENCES cathegories(id)
) Engine = Innodb;

CREATE TABLE levels (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(15) NOT NULL
) Engine = Innodb;

CREATE TABLE exercises (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cathegory_id INT NOT NULL,
    part_id INT NOT NULL,
    level_id INT NOT NULL,
    name VARCHAR(35) NOT NULL,
    FOREIGN KEY (cathegory_id) REFERENCES cathegories(id),
    FOREIGN KEY (part_id) REFERENCES parts(id),
    FOREIGN KEY (level_id) REFERENCES levels(id)
) Engine = Innodb;

CREATE TABLE activities (
	id BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    date DATE,
    pull_ca INT NOT NULL,
    push_ca INT NOT NULL,
    core_ca INT NOT NULL,
    leg_ca INT NOT NULL,
    neck_st INT NOT NULL,
	hand_st INT NOT NULL,
    back_st INT NOT NULL,
    leg_st INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (pull_ca) REFERENCES exercises(id),
    FOREIGN KEY (push_ca) REFERENCES exercises(id),
    FOREIGN KEY (core_ca) REFERENCES exercises(id),
    FOREIGN KEY (leg_ca) REFERENCES exercises(id),
    FOREIGN KEY (neck_st) REFERENCES exercises(id),
    FOREIGN KEY (hand_st) REFERENCES exercises(id),
    FOREIGN KEY (back_st) REFERENCES exercises(id),
    FOREIGN KEY (leg_st) REFERENCES exercises(id)
) Engine = Innodb;