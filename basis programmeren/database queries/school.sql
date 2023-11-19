-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 16 sep 2014 om 11:19
-- Serverversie: 5.5.34-MariaDB-cll-lve
-- PHP-versie: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `school`
--
CREATE DATABASE school;
USE school;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cursist`
--

CREATE TABLE IF NOT EXISTS `cursist` (
  `cursistnr` varchar(4) DEFAULT NULL,
  `naam` varchar(25) DEFAULT NULL,
  `roepnaam` varchar(25) DEFAULT NULL,
  `straat` varchar(25) DEFAULT NULL,
  `postcode` varchar(7) DEFAULT NULL,
  `plaats` varchar(25) DEFAULT NULL,
  `geslacht` varchar(1) DEFAULT NULL,
  `geb_datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cursist`
--

INSERT INTO `cursist` (`cursistnr`, `naam`, `roepnaam`, `straat`, `postcode`, `plaats`, `geslacht`, `geb_datum`) VALUES
('64', 'Broeken', 'Bram', 'Drimmelseweg 8', '4395 XX', 'Made', 'M', '1988-03-24'),
('88', 'Vos', 'Henk', 'Besbeemd 64', '4142 CE', 'Oosterhout', 'M', '1989-09-22'),
('2', 'Krimpen', 'Tanja', 'Tilburgseweg 2', '4222 BB', 'Goirle', 'V', '1990-02-08'),
('14', 'Norbart', 'Niels', 'Gershof 8', '4841 PL', 'Breda', 'M', '1987-12-06');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cursus`
--

CREATE TABLE IF NOT EXISTS `cursus` (
  `curs_code` varchar(8) DEFAULT NULL,
  `curs_plts` varchar(25) DEFAULT NULL,
  `curs_dat` date DEFAULT NULL,
  `omschr` varchar(25) DEFAULT NULL,
  `doc_code` varchar(2) DEFAULT NULL,
  `curs_prijs` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cursus`
--

INSERT INTO `cursus` (`curs_code`, `curs_plts`, `curs_dat`, `omschr`, `doc_code`, `curs_prijs`) VALUES
('DB3', 'Breda', '1993-12-04', 'Dbase III Plus', 'WI', 3300.00),
('DB4', 'Etten', '1993-12-11', 'Dbase IV', 'HM', 3600.00),
('OA2', 'Made', '1993-11-13', 'Open Access 2.1', 'PE', 2400.00),
('OA3', 'Breda', '1993-11-13', 'Open Access 3.0', 'GR', 2600.00),
('FW', 'Breda', '1993-11-20', 'Framework', 'WI', 850.00),
('WP', 'Breda', '1993-11-20', 'Wordperfect', 'GR', 1450.00),
('NO', 'Breda', '1993-12-06', 'Normaliseren', 'MO', 3000.00),
('C++', 'Made', '1993-11-27', 'Programmeren in C++', 'MO', 1450.00);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `c_regel`
--

CREATE TABLE IF NOT EXISTS `c_regel` (
  `curs_code` varchar(8) DEFAULT NULL,
  `cursistnr` varchar(4) DEFAULT NULL,
  `cijfer` decimal(2,0) DEFAULT NULL,
  `betaald` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `c_regel`
--

INSERT INTO `c_regel` (`curs_code`, `cursistnr`, `cijfer`, `betaald`) VALUES
('DB3', '64', 8, 3300.00),
('DB3', '2', 6, NULL),
('DB3', '68', 9, 3300.00),
('OA2', '14', 5, 2400.00),
('OA2', '88', 7, 2000.00),
('OA2', '2', 9, NULL),
('DB4', '14', 6, 3600.00);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `docent`
--

CREATE TABLE IF NOT EXISTS `docent` (
  `doc_code` varchar(2) DEFAULT NULL,
  `doc_naam` varchar(25) DEFAULT NULL,
  `straat` varchar(25) DEFAULT NULL,
  `postcode` varchar(7) DEFAULT NULL,
  `plaats` varchar(25) DEFAULT NULL,
  `telefoon` varchar(12) DEFAULT NULL,
  `uurloon` decimal(5,2) DEFAULT NULL,
  `geb_datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `docent`
--

INSERT INTO `docent` (`doc_code`, `doc_naam`, `straat`, `postcode`, `plaats`, `telefoon`, `uurloon`, `geb_datum`) VALUES
('WI', 'Witlok', 'Madeseweg 8', '4841 PT', 'Oosterhout', '071-123378', 100.00, '1957-04-25'),
('HM', 'Hooymayers', 'Ignatiusstr 6', '4847 EZ', 'Breda', '076-442786', 200.00, '1952-09-01'),
('GR', 'Grond', 'Bolwerk 10', '4541 CC', 'Tilburg', '013-426786', 150.00, '1958-10-25'),
('PE', 'Peters', 'Breedonk 64', '4142 EC', 'Oosterhout', '01620-3429', 185.50, '1963-10-08'),
('SE', 'Sengers', 'Bredaseweg 2', '4344 DE', 'Bavel', NULL, 110.00, '1955-05-17'),
('MO', 'Mol', 'Waterstr 8', '4841 KA', 'Breda', '076-227788', 300.00, '1948-11-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
