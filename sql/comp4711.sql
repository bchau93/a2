-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2015 at 04:22 AM
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
('Arizona Cardinals', 'Arizona', 'NFC', 'NFC WEST', 'ACardinals.png'),
('Atlanta Falcons', 'Atlanta', 'NFC', 'NFC SOUTH', 'AFalcons.png'),
('Baltimore Ravens', 'Baltimore', 'AFC', 'AFC NORTH', 'BRavens.png'),
('Buffalo Bills', 'Buffalo', 'AFC', 'AFC EAST', 'BBills.png'),
('Carolina Panthers', 'Carolina', 'NFC', 'NFC SOUTH', 'CPanthers.png'),
('Chicago Bears', 'Chicago', 'NFC', 'NFC NORTH', 'CBears.png'),
('Cincinnati Bengals', 'Cincinnati', 'AFC', 'AFC North', 'Cbengals.png'),
('Cleveland Browns', 'Cleveland', 'AFC', 'AFC NORTH', 'CBrowns.png'),
('Dallas Cowboys', 'Dallas', 'NFC', 'NFC EAST', 'DCowboys.png'),
('Denver Broncos', 'Denver', 'AFC', 'AFC WEST', 'DBroncos.png'),
('Detroit Lions', 'Detroit', 'NFC', 'NFC NORTH', 'DLions.png'),
('Green Bay Packers', 'Green Bay', 'NFC', 'NFC NORTH', 'GBPackers.png'),
('Houston Texans', 'Houston', 'AFC', 'AFC SOUTH', 'HTexans.png'),
('Indianapolis Colts', 'Indianapolis', 'AFC', 'AFC SOUTH', 'IColts.png'),
('Jacksonville Jaguars', 'Jacksonville', 'AFC', 'AFC SOUTH', 'JJaguars.png'),
('Kansas City Chiefs', 'Kansas City', 'AFC', 'AFC WEST', 'KCChiefs.png'),
('Miami Dolphins', 'Miami', 'AFC', 'AFC EAST', 'MDolphins.png'),
('Minnesota Vikings', 'Minnesota', 'NFC', 'NFC NORTH', 'MVikings.png'),
('New English Patriots', 'New England', 'AFC', 'AFC EAST', 'NEPatriots.png'),
('New Orleans Saints', 'New Orleans', 'NFC', 'NFC SOUTH', 'NOSaints.png'),
('New York Giants', 'New York', 'NFC', 'NFC EAST', 'NYGiants.png'),
('New York Jets', 'New York', 'AFC', 'AFC EAST', 'NYJets.png'),
('Oakland Raiders', 'Oakland', 'AFC', 'AFC WEST', 'ORaiders.png'),
('Philadelphia Eagles', 'Philadelphia', 'NFC', 'NFC EAST', 'PEagles.png'),
('Pittsburgh Steelers', 'Pittsburgh', 'AFC', 'AFC NORTH', 'PSteelers.png'),
('San Diego Chargers', 'San Diego', 'AFC', 'AFC WEST', 'SDChargers.png'),
('San Francisco 49ers', 'San Francisco', 'NFC', 'NFC WEST', 'SF49ers.png'),
('Seattle Seahawks', 'Seattle', 'NFC', 'NFC WEST', 'SSeahawks.png'),
('St. Louis Rams', 'St. Louis', 'NFC', 'NFC WEST', 'SLRams.png'),
('Tampa Bay Buccaneers', 'Tampa Bay', 'NFC', 'NFC SOUTH', 'TBBuccaneers.png'),
('Tennessee Titans', 'Tennessee', 'AFC', 'AFC SOUTH', 'TTitans.png'),
('Washington Redskins', 'Washington', 'NFC', 'NFC EAST', 'WRedskins.png');

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
(1, 'Russell', 'Bodine', 61, 'C', 'Bodine.jpg'),
(2, 'T.J', 'Johnson', 60, 'C', 'Johnson.jpg'),
(3, 'Darqueze', 'Dennard', 21, 'CB', 'Dennard.jpg'),
(4, 'Leon', 'Hall', 29, 'CB', 'Hall.jpg'),
(5, 'Will', 'Clarke', 93, 'DE', 'Clarke.jpg'),
(6, 'Carlos', 'Dunlap', 96, 'DE', 'Dunlap.jpg'),
(7, 'Geno', 'Atkins', 97, 'DT', 'Atkins.jpg'),
(8, 'Marcus', 'Hardison', 91, 'DT', 'Hardison.jpg'),
(9, 'Clint', 'Boling', 65, 'G', 'Boling.jpg'),
(10, 'Kevin', 'Zeitler', 68, 'G', 'Zeitler.jpg'),
(11, 'Giovani', 'Bernard', 25, 'HB', 'Bernard.jpg'),
(12, 'Rex', 'Burkhead', 33, 'HB', 'Burkhead.jpg'),
(13, 'Mike', 'Nugent', 2, 'K', 'Nugent.jpg'),
(14, 'Chris', 'Carter', 51, 'LB', 'Carter.jpg'),
(15, 'P.J.', 'Dawson', 47, 'LB', 'Dawson.jpg'),
(16, 'Jake', 'Fisher', 74, 'OT', 'Fisher.jpg'),
(17, 'Andre', 'Smith', 71, 'OT', 'Smith.jpg'),
(18, 'Andy', 'Dalton', 14, 'QB', 'Dalton.jpg'),
(19, 'AJ', 'McCarron', 5, 'QB', 'McCarron.jpg'),
(20, 'Mario', 'Alford', 15, 'WR', 'Alford.jpg'),
(21, 'Eric', 'Winston', 73, 'OT', 'Winston.jpg'),
(23, 'Shawn', 'Williams', 36, 'S', 'Williams.jpg'),
(24, 'C.J.', 'Uzomah', 87, 'TE', 'Uzomah.jpg'),
(26, 'Brandon', 'Thompson', 98, 'DT', 'Thompson.jpg'),
(28, 'Vincent', 'Rey', 57, 'LB', 'Rey.jpg');

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
