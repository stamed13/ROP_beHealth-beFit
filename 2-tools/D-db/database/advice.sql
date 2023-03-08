-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 08.Mar 2023, 16:22
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `rop_behealth_befit`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `advice`
--

CREATE TABLE `advice` (
  `idAdvice` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `advice`
--

INSERT INTO `advice` (`idAdvice`, `name`) VALUES
(1, 'Máš normálnu váhu.'),
(2, 'Máš nadváhu.'),
(3, 'Máš nízku váhu.'),
(4, 'Máš obezitu.'),
(5, 'Tesim sa, cvicis dost casto a rovnomerne na vsetky partie.'),
(6, 'Tesim sa, cvicis pravidelne 3x do tyzdna a rovnomerne na vsetky partie.'),
(7, 'Tesim sa, cvicis pravidelne 4x do tyzdna a rovnomerne na vsetky partie.'),
(8, 'Tesim sa, cvicis pravidelne 5x do tyzdna a rovnomerne na vsetky partie.'),
(9, 'Tesim sa, cvicis pravidelne kazdy den a rovnomerne na vsetky partie.'),
(10, 'Sklamal si ma, cvicis malo, aspon rovnomerne na vsetky partie.'),
(11, 'Cvicis dost casto, ale nerovnomerne na vsetky partie.'),
(12, 'Tesim sa, cvicis pravidelne 3x do tyzdna, ale nerovnomerne na vsetky partie.'),
(13, 'Tesim sa, cvicis pravidelne 4x do tyzdna, ale nerovnomerne na vsetky partie.'),
(14, 'Tesim sa, cvicis pravidelne 5x do tyzdna, ale nerovnomerne na vsetky partie.'),
(15, 'Tesim sa, cvicis pravidelne kazdy den, ale nerovnomerne na vsetky partie.'),
(16, 'Sklamal si ma, cvicis malo, dokonca nerovnomerne na vsetky partie.'),
(17, 'Skus viac'),
(18, 'Skus viac'),
(19, 'Skus viac'),
(20, 'Skus viac'),
(21, 'Si zaciatocnik, pokojne cvic dalej, vysledky pomaly pridu.'),
(22, 'Si pokrocily/a, pokojne si mozes zlepsit svoje schopnosti a posunut level narocnosti.'),
(23, 'Si expert, pokojne si zlepsuj \r\nsvoje chopnosti.'),
(24, 'Radim ti cvicit hlboky drep a vysiet na hrazde.'),
(25, 'Radim ti cvicit hlboky drep a striedat pasivny vis s aktivnym visom, zapoj prosim lopatky.'),
(26, 'Radim ti cvicit hlboky drep s nohami na sirku ramien a denne aspon jeden zhyb a kluk.'),
(27, 'Radim ti cvicit hlboky drep s nohami na sirku ramien, pike pulses a denne 5 zhybov a klukov.'),
(28, 'Radim ti cvicit hlboky drep s nohami na sirku ramien, pike pulses a striezku. Cviky, v ktorych sa chces zlepsit cvic co najcastejsie, vtedy ked si na nich spomenies (len take, ktore ta velmi neunavia).'),
(29, 'Mozno ti pomoze zdravsia strava.'),
(30, 'Mozno ti pomoze dychanie alebo otuzovanie zintenzivnit zazitok.'),
(31, 'Mozno ti pomoze prechadzka v prirode.'),
(32, 'posilnovat biceps'),
(33, 'posilnovat triceps'),
(34, 'strecovat nohy'),
(35, 'strecovat chrbat'),
(36, 'Ak mas bolesti hlavy alebo zapastia skus prosim strecovat krk alebo ruky (to co robi problem).'),
(37, 'posilnovat nohy'),
(38, ''),
(39, ''),
(40, '');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`idAdvice`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `advice`
--
ALTER TABLE `advice`
  MODIFY `idAdvice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
