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
-- Štruktúra tabuľky pre tabuľku `exercises`
--

CREATE TABLE `exercises` (
  `idExercise` int(11) NOT NULL,
  `partId` int(11) NOT NULL,
  `levelId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `exercises`
--

INSERT INTO `exercises` (`idExercise`, `partId`, `levelId`, `name`) VALUES
(1, 1, 1, 'aktívny vis'),
(2, 1, 1, 'vytlacanie z ramien'),
(3, 1, 1, 'negatívny zhyb nadhmat'),
(4, 1, 1, 'izometria podhmat'),
(5, 1, 1, 'izometria nadhmat'),
(6, 1, 1, 'austrálsky zhyb'),
(7, 1, 2, 'zhyb podhmat'),
(8, 1, 2, 'zhyb nadhmat'),
(9, 1, 2, 'austrálsky zhyb ťahší'),
(10, 1, 2, 'tuck front lever výdrž'),
(11, 1, 2, 'lopatkový zhyb, záklon'),
(12, 1, 2, 'motýlik'),
(13, 1, 3, 'zhyb na 1 ruke'),
(14, 1, 3, 'L-zhyb'),
(15, 1, 3, 'frontlever'),
(16, 1, 3, 'backlever'),
(17, 1, 3, 'lukostrelecký zhyb'),
(18, 1, 3, 'false grip zhyb'),
(19, 2, 1, 'lopatkový kľuk'),
(20, 2, 1, 'kľuk na kolenách'),
(21, 2, 1, 'kľuk na prekážke'),
(22, 2, 1, 'negatívny kľuk'),
(23, 2, 1, 'izometria v normálnom kľuku'),
(24, 2, 1, 'dipy na stoličke'),
(25, 2, 2, 'normálny kľuk'),
(26, 2, 2, 'širší kľuk'),
(27, 2, 2, 'kľuk z vyvýšeniny'),
(28, 2, 2, 'diamantový kľuk'),
(29, 2, 2, 'izometria v širšom kľuku'),
(30, 2, 2, 'dipy'),
(31, 2, 3, 'kľuk s tliesknutím'),
(32, 2, 3, 'lukostrelecký kľuk'),
(33, 2, 3, 'tuckpanche kľuk'),
(34, 2, 3, 'dipy na kruhoch'),
(35, 2, 3, 'tigrie kľuky'),
(36, 2, 3, 'kľuk v stojke'),
(37, 3, 1, 'drep s rukami vpred'),
(38, 3, 1, 'drep s rukami za hlavou'),
(39, 3, 1, 'sumo drep'),
(40, 3, 1, 'úzky drep'),
(41, 3, 1, 'skákavé výpady'),
(42, 3, 1, 'drep výskok'),
(43, 3, 2, 'drep na 1 nohe dotyk členkov'),
(44, 3, 2, 'bulgarian split squats'),
(45, 3, 2, 'záklon na kolenách'),
(46, 3, 2, 'drep na 1 nohe s vystretou nohou'),
(47, 3, 2, 'drep na 1 nohe s nohou na kolene'),
(48, 3, 2, 'izometria v polohe stolička'),
(49, 3, 3, 'drep na 1 nohe so záťažou'),
(50, 3, 3, 'drep na 1 nohe s nohou vo flexe'),
(51, 3, 3, 'drep na 1 nohe, ruky za chrbtom'),
(52, 3, 3, 'skok na prekážku'),
(53, 3, 3, 'drep na 1 nohe so záťažou'),
(54, 3, 3, 'drep na 1 nohe s výskokom'),
(55, 4, 1, 'skracovačky'),
(56, 4, 1, 'dotýkanie členkov'),
(57, 4, 1, 'sklápačky'),
(58, 4, 1, 'quadrupedál'),
(59, 4, 1, 'ruské otočky'),
(60, 4, 1, 'plank na kolenách'),
(61, 4, 2, 'kolíska'),
(62, 4, 2, 'striedavé zdvihy nôh'),
(63, 4, 2, 'horolezci'),
(64, 4, 2, 'ruské otočky ťažšie'),
(65, 4, 2, 'stierače'),
(66, 4, 2, 'nožnice'),
(67, 4, 2, 'izometria'),
(68, 4, 3, 'dragon flag'),
(69, 4, 3, 'vznos do 180°'),
(70, 4, 3, 'stierače ťažšie'),
(71, 4, 3, 'kolíska ťažšia'),
(72, 4, 3, 'tlak panvy nad seba'),
(73, 5, 1, 'predklon'),
(74, 5, 1, 'záklon'),
(75, 5, 2, 'malý úklon na stranu'),
(76, 5, 2, 'ťahanie hlavy nadol'),
(77, 5, 3, 'veľký úklon na stranu'),
(78, 5, 3, 'rotácia do strán'),
(79, 6, 1, 'posuny v sede'),
(80, 6, 1, 'krúženie ramenami'),
(81, 6, 1, 'ťahanie sa za ramenom'),
(82, 6, 1, 'predklony so zápästím'),
(83, 6, 2, 'zdvih do polmostíka'),
(84, 6, 2, 'pretáčanie ramien s palicou'),
(85, 6, 2, 'ťahanie rúk pomocou expandera'),
(86, 6, 2, 'záklony s vytočeným zápästím'),
(87, 6, 3, 'výdrž v polmostíku'),
(88, 6, 3, 'posuny v striežke'),
(89, 6, 3, 'spojenie rúk za chrbtom'),
(90, 6, 3, 'záklony s pretočeným zápästím'),
(91, 7, 1, 'úklon do strany'),
(92, 7, 1, 'mačací chrbát'),
(93, 7, 1, 'kobra strečing'),
(94, 7, 1, 'váľanie nôh'),
(95, 7, 2, 'kobra-zajac'),
(96, 7, 2, 'úklony do strán'),
(97, 7, 2, 'krúženie rukou na boku'),
(98, 7, 2, 'pretáčanie ramien v ľahu'),
(99, 7, 3, 'výdrž v pluhu'),
(100, 7, 3, 'zbalená kolíska'),
(101, 7, 3, 'zakopávanie v ľahu'),
(102, 7, 3, 'výdrž v mostíku'),
(103, 8, 1, 'predklon v sede'),
(104, 8, 1, 'kozácke drepy'),
(105, 8, 1, 'vystieranie nohy v ľahu'),
(106, 8, 1, 'pozícia dieťa'),
(107, 8, 2, 'širšia striežka'),
(108, 8, 2, 'motýlik'),
(109, 8, 2, 'pike pulses s 1 nohou'),
(110, 8, 2, 'pozícia holub'),
(111, 8, 3, 'užšia striežka'),
(112, 8, 3, 'výdrž v rozštepe'),
(113, 8, 3, 'pike pulses'),
(114, 8, 3, 'zakláňanie sa v striežke');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`idExercise`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `exercises`
--
ALTER TABLE `exercises`
  MODIFY `idExercise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
