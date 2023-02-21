-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost:3306
-- Čas generovania: Út 21.Feb 2023, 23:20
-- Verzia serveru: 10.4.24-MariaDB
-- Verzia PHP: 7.4.29

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
  `name` varchar(500) COLLATE utf8_slovak_ci NOT NULL
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
(17, 'Skus viac posilovat ruky.'),
(18, 'Skus viac strecovat chrbat.'),
(19, 'Skus viac strecovat nohy.'),
(20, 'Ak mas bolesti hlavy alebo zapastia skus prosim strecovat krk alebo ruky (to co robi problem).'),
(21, 'Si zaciatocnik, pokojne cvic dalej, vysledky pomaly pridu.'),
(22, 'Si expert, pokojne si zlepsuj \r\nsvoje chopnosti.'),
(23, ''),
(24, ''),
(25, '');

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
  MODIFY `idAdvice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
