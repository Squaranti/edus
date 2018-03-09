-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 22, 2018 alle 08:33
-- Versione del server: 10.1.28-MariaDB
-- Versione PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edus`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `tutor`
--

CREATE TABLE `tutor` (
  `cognome` varchar(25) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `classe` varchar(3) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `matricola` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tutor`
--

INSERT INTO `tutor` (`cognome`, `nome`, `classe`, `materia`,`matricola`) VALUES
('zambelli', 'michele', '5ci', 'informatica', '17139'),
('squaranti', 'daniele', '4ci', 'matematica', '17090'),
('mirandola', 'giacomo', '3ci', 'italiano', '16996'),
('rodeghero', 'luca', '2ci', 'chimica', '17090'),
('riccio', 'gionata', '5ci', 'storia', '17090');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
