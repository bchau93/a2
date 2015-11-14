-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2015 at 03:09 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp4711`
--

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE IF NOT EXISTS `leagues` (
  `id` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `conf` varchar(15) NOT NULL,
  `division` varchar(15) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`id`, `city`, `conf`, `division`, `logo`) VALUES
('Arizona Cardinals', 'Arizona', 'NFC', 'NFC WEST', ''),
('Atlanta Falcons', 'Atlanta', 'NFC', 'NFC SOUTH', ''),
('Baltimore Ravens', 'Baltimore', 'AFC', 'AFC NORTH', ''),
('Buffalo Bills', 'Buffalo', 'AFC', 'AFC EAST', ''),
('Carolina Panthers', 'Carolina', 'NFC', 'NFC SOUTH', ''),
('Chicago Bears', 'Chicago', 'NFC', 'NFC NORTH', ''),
('Cincinnati Bengals', 'Cincinnati', 'AFC', 'AFC North', ''),
('Cleveland Browns', 'Cleveland', 'AFC', 'AFC NORTH', ''),
('Dallas Cowboys', 'Dallas', 'NFC', 'NFC EAST', ''),
('Denver Broncos', 'Denver', 'AFC', 'AFC WEST', ''),
('Detroit Lions', 'Detroit', 'NFC', 'NFC NORTH', ''),
('Green Bay Packers', 'Green Bay', 'NFC', 'NFC NORTH', ''),
('Houston Texans', 'Houston', 'AFC', 'AFC SOUTH', ''),
('Indianapolis Colts', 'Indianapolis', 'AFC', 'AFC SOUTH', ''),
('Jacksonville Jaguars', 'Jacksonville', 'AFC', 'AFC SOUTH', ''),
('Kansas City Chiefs', 'Kansas City', 'AFC', 'AFC WEST', ''),
('Miami Dolphins', 'Miami', 'AFC', 'AFC EAST', ''),
('Minnesota Vikings', 'Minnesota', 'NFC', 'NFC NORTH', ''),
('New English Patriots', 'New England', 'AFC', 'AFC EAST', ''),
('New Orleans Saints', 'New Orleans', 'NFC', 'NFC SOUTH', ''),
('New York Giants', 'New York', 'NFC', 'NFC EAST', ''),
('New York Jets', 'New York', 'AFC', 'AFC EAST', ''),
('Oakland Raiders', 'Oakland', 'AFC', 'AFC WEST', ''),
('Philadelphia Eagles', 'Philadelphia', 'NFC', 'NFC EAST', ''),
('Pittsburgh Steelers', 'Pittsburgh', 'AFC', 'AFC NORTH', ''),
('San Diego Chargers', 'San Diego', 'AFC', 'AFC WEST', ''),
('San Francisco 49ers', 'San Francisco', 'NFC', 'NFC WEST', ''),
('Seattle Seahawks', 'Seattle', 'NFC', 'NFC WEST', ''),
('St. Louis Rams', 'St. Louis', 'NFC', 'NFC WEST', ''),
('Tampa Bay Buccaneers', 'Tampa Bay', 'NFC', 'NFC SOUTH', ''),
('Tennessee Titans', 'Tennessee', 'AFC', 'AFC SOUTH', ''),
('Washington Redskins', 'Washington', 'NFC', 'NFC EAST', '');

-- --------------------------------------------------------

--
-- Table structure for table `rosters`
--

CREATE TABLE IF NOT EXISTS `rosters` (
  `id` int(11) NOT NULL,
  `playerFirstName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `playerLastName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `playerNumber` int(3) NOT NULL,
  `playerPosition` varchar(2) CHARACTER SET utf8 NOT NULL,
  `playerPhoto` varchar(535) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rosters`
--

INSERT INTO `rosters` (`id`, `playerFirstName`, `playerLastName`, `playerNumber`, `playerPosition`, `playerPhoto`) VALUES
(1, 'Russell', 'Bodine', 61, 'C', 'NULL'),
(2, 'T.J', 'Johnson', 60, 'C', NULL),
(3, 'Darqueze', 'Dennard', 21, 'CB', NULL),
(4, 'Leon', 'Hall', 29, 'CB', NULL),
(5, 'Will', 'Clarke', 93, 'DE', NULL),
(6, 'Carlos', 'Dunlap', 96, 'DE', NULL),
(7, 'Geno', 'Atkins', 97, 'DT', NULL),
(8, 'Marcus', 'Hardison', 91, 'DT', NULL),
(9, 'Clint', 'Boling', 65, 'G', NULL),
(10, 'Kevin', 'Zeitler', 68, 'G', NULL),
(11, 'Giovani', 'Bernard', 25, 'HB', NULL),
(12, 'Rex', 'Burkhead', 33, 'HB', NULL),
(13, 'Mike', 'Nugent', 2, 'K', NULL),
(14, 'Chris', 'Carter', 51, 'LB', NULL),
(15, 'P.J.', 'Dawson', 47, 'LB', NULL),
(16, 'Jake', 'Fisher', 74, 'OT', NULL),
(17, 'Andre', 'Smith', 71, 'OT', NULL),
(18, 'Andy', 'Dalton', 14, 'QB', NULL),
(19, 'AJ', 'McCarron', 5, 'QB', NULL),
(20, 'Mario', 'Alford', 15, 'WR', NULL),
(21, 'Eric', 'Winston', 73, 'OT', NULL),
(23, 'Shawn', 'Williams', 36, 'S', NULL),
(24, 'C.J.', 'Uzomah', 87, 'TE', NULL),
(26, 'Brandon', 'Thompson', 98, 'DT', NULL),
(28, 'Vincent', 'Rey', 57, 'LB', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rosters`
--
ALTER TABLE `rosters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rosters`
--
ALTER TABLE `rosters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
