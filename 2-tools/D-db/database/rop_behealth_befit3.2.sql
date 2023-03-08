DROP DATABASE IF EXISTS rop_behealth_befit;

CREATE DATABASE rop_behealth_befit CHARSET=utf8 COLLATE=utf8_slovak_ci;

USE rop_behealth_befit;

SET FOREIGN_KEY_CHECKS=0;



CREATE TABLE advice (
  idAdvice INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

CREATE TABLE exercises (
  idExercise INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  partId int(11) NOT NULL,
  levelId int(11) NOT NULL,
  name varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

CREATE TABLE genders (
	idGender TINYINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(10) NOT NULL
) Engine = Innodb DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

INSERT INTO genders (idGender, name) VALUES
(1, 'muž'),
(2, 'žena');

CREATE TABLE parts (
  idPart INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  cathegoryId INT NOT NULL,
  name varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

INSERT INTO parts (idPart, cathegoryId, name) VALUES
(1, 1, 'príťah'),
(2, 1, 'tlak'),
(3, 1, 'nohy'),
(4, 1, 'brucho'),
(5, 2, 'krk'),
(6, 2, 'ruky'),
(7, 2, 'chrbát'),
(8, 2, 'nohy');

CREATE TABLE plans (
  idPlan INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  monC varchar(20) DEFAULT NULL,
  tueC varchar(20) DEFAULT NULL,
  wedC varchar(20) DEFAULT NULL,
  thuC varchar(20) DEFAULT NULL,
  friC varchar(20) DEFAULT NULL,
  satC varchar(20) DEFAULT NULL,
  sunC varchar(20) DEFAULT NULL,
  monS varchar(20) DEFAULT NULL,
  tueS varchar(20) DEFAULT NULL,
  wedS varchar(20) DEFAULT NULL,
  thuS varchar(20) DEFAULT NULL,
  friS varchar(20) DEFAULT NULL,
  satS varchar(20) DEFAULT NULL,
  sunS varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

INSERT INTO plans (idPlan, monC, tueC, wedC, thuC, friC, satC, sunC, monS, tueS, wedS, thuS, friS, satS, sunS) VALUES
(1, 'full', 'x', 'full', 'x', 'full', 'x', 'x', 'x', 'static', 'x', 'static', 'x', 'x', 'x'),
(2, 'pull', 'x', 'legs', 'x', 'push', 'x', 'x', 'x', 'static', 'x', 'static', 'x', 'static', 'x'),
(3, 'legs', 'x', 'pull', 'push', 'x', 'core', 'x', 'x', 'hand', 'x', 'x', 'back', 'x', 'legs'),
(4, 'legs', 'pull', 'x', 'push', 'core', 'hand', 'x', 'x', 'x', 'hand', 'x', 'back', 'x', 'legs'),
(5, 'legs', 'pull', 'push', 'x', 'legs', 'pull', 'push', 'x', 'bridge', 'x', 'split', 'x', 'x', 'x');

CREATE TABLE useractivity (
  idUsrAct BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  date date DEFAULT NULL,
  userId int(11) NOT NULL,
  pullCa int(11) NOT NULL,
  pushCa int(11) NOT NULL,
  coreCa int(11) NOT NULL,
  legCa int(11) NOT NULL,
  neckSt int(11) NOT NULL,
  handSt int(11) NOT NULL,
  backSt int(11) NOT NULL,
  legSt int(11) NOT NULL,
  FOREIGN KEY (userId) REFERENCES users(idUser)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

INSERT INTO useractivity (idUsrAct, date, userId, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) VALUES
(1, '2023-02-26', 1, 1, 19, 70, 50, 78, 90, 102, 113),
(2, '2023-02-28', 1, 13, 30, 68, 49, 0, 0, 100, 110),
(3, '2023-03-04', 1, 1, 29, 68, 50, 73, 90, 101, 112),
(4, '2023-03-05', 1, 3, 30, 68, 49, 74, 89, 101, 112),
(5, '2023-02-23', 2, 10, 25, 62, 40, 73, 80, 91, 104),
(6, '2023-03-01', 2, 13, 0, 70, 0, 74, 0, 101, 0),
(7, '2023-03-01', 3, 13, 0, 0, 0, 0, 0, 0, 113),
(8, '2023-03-02', 4, 0, 36, 72, 42, 0, 90, 102, 114);

CREATE TABLE users (
  idUser INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  email varchar(60) NOT NULL,
  passwd varchar(60) NOT NULL,
  fname varchar(20) NOT NULL,
  lname varchar(40) NOT NULL,
  genderId tinyint(4) NOT NULL,
  age tinyint(4) NOT NULL,
  height int(11) NOT NULL,
  weight int(11) NOT NULL,
  planId int(11) NOT NULL,
  FOREIGN KEY (genderId) REFERENCES genders(idGender),
  FOREIGN KEY (planId) REFERENCES plans(idPlan)
) ENGINE=InnoDB;

INSERT INTO users (idUser, email, passwd, fname, lname, genderId, age, height, weight, planId) VALUES
(1, 'stanislav.medvec@gmail.com', '$2y$10$zpci6505Epsfr1wXFiwciuUVIEmRLN/tpw6tjErlTuK/c30hCZiRC', 'Stanislav', 'Medvec', 1, 19, 170, 60, 0);