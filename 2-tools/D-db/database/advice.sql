-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 19.Mar 2023, 17:07
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
(5, 'Teším sa, cvičíš dosť často a rovnomerne na všetky partie.'),
(6, 'Teším sa, cvičíš pravidelne 3x do týždňa a rovnomerne na všetky partie.'),
(7, 'Teším sa, cvičíš pravidelne 4x do týždňa a rovnomerne na všetky partie.'),
(8, 'Teším sa, cvičíš pravidelne 5x do týždňa a rovnomerne na všetky partie.'),
(9, 'Teším sa, cvičíš pravidelne každý deň a rovnomerne na všetky partie.'),
(10, 'Cvičíš málo, aspoň rovnomerne na všetky partie.'),
(11, 'Cvičíš dosť často, ale nerovnomerne na všetky partie.'),
(12, 'Teším sa, cvičíš pravidelne 3x do týždňa, ale nerovnomerne na všetky partie.'),
(13, 'Teším sa, cvičíš pravidelne 4x do týždňa, ale nerovnomerne na všetky partie.'),
(14, 'Teším sa, cvičíš pravidelne 5x do týždňa, ale nerovnomerne na všetky partie.'),
(15, 'Teším sa, cvičíš pravidelne každý deň, ale nerovnomerne na všetky partie.'),
(16, 'Cvičíš málo, dokonca nerovnomerne na všetky partie.'),
(17, 'Skus viac'),
(18, 'Skus viac'),
(19, 'Skus viac'),
(20, 'Skús viac'),
(21, 'Si začiatočník, pokojne cvič ďalej, výsledky pomaly prídu.'),
(22, 'Si pokročilý/a, pokojne si môžeš zlepšiť svoje schopnosti a posunúť level náročnosti.'),
(23, 'Si expert, pokojne si zlepšuj \r\nsvoje schopnosti.'),
(24, 'Radím ti cvičiť hlboký drep a visiet na hrazde.'),
(25, 'Radím ti cvičiť hlboký drep a striedať pasívny vis s aktívnym visom, zapoj prosím lopatky.'),
(26, 'Radím ti cvičiť hlboký drep s nohami na šírku ramien a denne aspoň jeden zhyb a kľuk.'),
(27, 'Radím ti cvičiť hlboký drep s nohami na šírku ramien, pike pulses a denne 5 zhybov a kľukov.'),
(28, 'Radím ti cvičiť hlboký drep s nohami na šírku ramien, pike pulses a striežku. Cviky, v ktorých sa chceš zlepšiť cvič denne, vtedy keď si na nich spomenieš (také cviky, ktoré ľahko zvládneš).'),
(29, 'Možno ti pomôže zdravšia strava.'),
(30, 'Možno ti pomôže dýchanie alebo otužovanie zintenzívniť zážitok.'),
(31, 'Možno ti pomôže prechádzka v prírode.'),
(32, 'posilňovať biceps'),
(33, 'posilňovať triceps'),
(34, 'strečovať nohy'),
(35, 'strečovať chrbát'),
(36, 'Ak máš bolesti hlavy alebo zápästia, skús prosím strečovať krk alebo ruky (to čo robí problém).'),
(37, 'posilňovať nohy'),
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
