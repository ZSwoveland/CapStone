-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2021 at 01:47 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MarvelHP`
--

-- --------------------------------------------------------

--
-- Table structure for table `Heroes`
--

CREATE TABLE `Heroes` (
  `HeroName` varchar(100) NOT NULL,
  `Health` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Heroes`
--

INSERT INTO `Heroes` (`HeroName`, `Health`) VALUES
('Spider-Man', 10),
('Captain Marvel', 12),
('She-Hulk', 15),
('Iron Man', 9),
('Black Panther', 11),
('Captain America', 11),
('Ms. Marvel', 10),
('Thor', 14),
('Black Widow', 9),
('Doctor Strange', 10),
('Hulk', 18),
('Ant-Man', 12),
('Wasp', 11),
('QuickSilver', 9),
('Scarlet Witch', 10),
('Groot', 10),
('Rocket', 9),
('Star-Lord', 10),
('Gamora', 10),
('Drax', 14);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `BirthDate` date NOT NULL,
  `EmailAddress` varchar(1000) NOT NULL,
  `UserName` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Country` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Villains`
--

CREATE TABLE `Villains` (
  `VillainName` varchar(100) NOT NULL,
  `Health` int(100) NOT NULL,
  `Stage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Villains`
--

INSERT INTO `Villains` (`VillainName`, `Health`, `Stage`) VALUES
('Rhino', 14, 1),
('Rhino', 15, 2),
('Rhino', 16, 3),
('Klaw', 12, 1),
('Klaw', 18, 2),
('Klaw', 22, 3),
('Ultron', 17, 1),
('Ultron', 22, 2),
('Ultron', 27, 3),
('Risky', 14, 1),
('Risky', 18, 2),
('Risky', 22, 3),
('Mutant', 16, 1),
('Mutant', 18, 2),
('Mutant', 20, 3),
('Wrecker', 14, 1),
('Wrecker', 18, 2),
('Thunderball', 13, 1),
('Thunderball', 16, 2),
('Piledriver', 11, 1),
('Piledriver', 14, 2),
('Bulldozer', 12, 1),
('Bulldozer', 15, 2),
('Crossbones', 12, 1),
('Crossbones', 14, 2),
('Crossbones', 16, 3),
('Absorbing Man', 14, 1),
('Absorbing Man', 15, 2),
('Absorbing Man', 16, 3),
('Taskmaster', 13, 1),
('Taskmaster', 16, 2),
('Taskmaster', 17, 3),
('Zola', 12, 1),
('Zola', 14, 2),
('Zola', 16, 3),
('Red Skull', 12, 1),
('Red Skull', 16, 2),
('Red Skull', 20, 3),
('Standard Kang', 12, 1),
('Standard Kang', 18, 2),
('Standard Kang', 20, 3),
('Expert Kang', 15, 1),
('Expert Kang', 22, 2),
('Expert Kang', 25, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
