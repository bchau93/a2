-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 05:13 AM
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
-- Table structure for table `histories`
--

CREATE TABLE IF NOT EXISTS `histories` (
  `date` varchar(8) NOT NULL,
  `homeTeam` varchar(3) CHARACTER SET latin1 NOT NULL,
  `opponentTeam` varchar(3) CHARACTER SET latin1 NOT NULL,
  `score` varchar(7) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`date`, `homeTeam`, `opponentTeam`, `score`) VALUES
('20150910', 'NE', 'PIT', '21:28'),
('20150913', 'ARI', 'NO', '19:31'),
('20150913', 'BUF', 'IND', '14:27'),
('20150913', 'CHI', 'GB', '31:23'),
('20150913', 'DAL', 'NYG', '26:27'),
('20150913', 'DEN', 'BAL', '13:19'),
('20150913', 'HOU', 'KC', '27:20'),
('20150913', 'JAC', 'CAR', '20:9'),
('20150913', 'NYJ', 'CLE', '10:31'),
('20150913', 'OAK', 'CIN', '33:13'),
('20150913', 'SD', 'DET', '28:33'),
('20150913', 'STL', 'SEA', '31:34'),
('20150913', 'TB', 'TEN', '42:14'),
('20150913', 'WAS', 'MIA', '17:10'),
('20150914', 'ATL', 'PHI', '24:26'),
('20150914', 'SF', 'MIN', '3:20'),
('20150917', 'KC', 'DEN', '31:24'),
('20150920', 'BUF', 'NE', '40:32'),
('20150920', 'CAR', 'HOU', '17:24'),
('20150920', 'CHI', 'ARI', '48:23'),
('20150920', 'CIN', 'SD', '19:24'),
('20150920', 'CLE', 'TEN', '14:28'),
('20150920', 'GB', 'SEA', '17:27'),
('20150920', 'JAC', 'MIA', '20:23'),
('20150920', 'MIN', 'DET', '16:26'),
('20150920', 'NO', 'TB', '26:19'),
('20150920', 'NYG', 'ATL', '24:20'),
('20150920', 'OAK', 'BAL', '33:37'),
('20150920', 'PHI', 'DAL', '20:10'),
('20150920', 'PIT', 'SF', '18:43'),
('20150920', 'WAS', 'STL', '10:24'),
('20150921', 'IND', 'NYJ', '20:7'),
('20150924', 'NYG', 'WAS', '21:32'),
('20150927', 'ARI', 'SF', '7:47'),
('20150927', 'BAL', 'CIN', '28:24'),
('20150927', 'CAR', 'NO', '22:27'),
('20150927', 'CLE', 'OAK', '27:20'),
('20150927', 'DAL', 'ATL', '39:28'),
('20150927', 'DET', 'DEN', '24:12'),
('20150927', 'HOU', 'TB', '9:19'),
('20150927', 'MIA', 'BUF', '41:14'),
('20150927', 'MIN', 'SD', '14:31'),
('20150927', 'NE', 'JAC', '17:51'),
('20150927', 'NYJ', 'PHI', '24:17'),
('20150927', 'SEA', 'CHI', '0:26'),
('20150927', 'STL', 'PIT', '12:6'),
('20150927', 'TEN', 'IND', '35:33'),
('20150928', 'GB', 'KC', '28:38'),
('20151001', 'PIT', 'BAL', '23:20'),
('20151004', 'ARI', 'STL', '24:22'),
('20151004', 'ATL', 'HOU', '21:48'),
('20151004', 'BUF', 'NYG', '24:10'),
('20151004', 'CHI', 'OAK', '20:22'),
('20151004', 'CIN', 'KC', '21:36'),
('20151004', 'DEN', 'MIN', '20:23'),
('20151004', 'IND', 'JAC', '13:16'),
('20151004', 'MIA', 'NYJ', '27:14'),
('20151004', 'NO', 'DAL', '20:26'),
('20151004', 'SD', 'CLE', '27:30'),
('20151004', 'SF', 'GB', '17:3'),
('20151004', 'TB', 'CAR', '37:23'),
('20151004', 'WAS', 'PHI', '20:23'),
('20151005', 'SEA', 'DET', '10:13'),
('20151008', 'HOU', 'IND', '27:20'),
('20151011', 'ATL', 'WAS', '19:25'),
('20151011', 'BAL', 'CLE', '33:30'),
('20151011', 'CIN', 'SEA', '24:27'),
('20151011', 'DAL', 'NE', '30:6'),
('20151011', 'DET', 'ARI', '42:17'),
('20151011', 'GB', 'STL', '10:24'),
('20151011', 'KC', 'CHI', '18:17'),
('20151011', 'NYG', 'SF', '27:30'),
('20151011', 'OAK', 'DEN', '16:10'),
('20151011', 'PHI', 'NO', '17:39'),
('20151011', 'TB', 'JAC', '31:38'),
('20151011', 'TEN', 'BUF', '14:13'),
('20151012', 'SD', 'PIT', '24:20'),
('20151015', 'NO', 'ATL', '21:31'),
('20151018', 'BUF', 'CIN', '34:21'),
('20151018', 'CLE', 'DEN', '26:23'),
('20151018', 'DET', 'CHI', '34:37'),
('20151018', 'GB', 'SD', '20:27'),
('20151018', 'IND', 'NE', '34:27'),
('20151018', 'JAC', 'HOU', '31:20'),
('20151018', 'MIN', 'KC', '10:16'),
('20151018', 'NYJ', 'WAS', '20:34'),
('20151018', 'PIT', 'ARI', '13:25'),
('20151018', 'SEA', 'CAR', '27:23'),
('20151018', 'SF', 'BAL', '20:25'),
('20151018', 'TEN', 'MIA', '38:10'),
('20151019', 'PHI', 'NYG', '7:27'),
('20151022', 'SF', 'SEA', '20:3'),
('20151025', 'CAR', 'PHI', '16:27'),
('20151025', 'DET', 'MIN', '28:19'),
('20151025', 'IND', 'NO', '27:21'),
('20151025', 'JAC', 'BUF', '31:34'),
('20151025', 'KC', 'PIT', '13:23'),
('20151025', 'MIA', 'HOU', '26:44'),
('20151025', 'NE', 'NYJ', '23:30'),
('20151025', 'NYG', 'DAL', '20:27'),
('20151025', 'SD', 'OAK', '37:29'),
('20151025', 'STL', 'CLE', '6:24'),
('20151025', 'TEN', 'ATL', '10:7'),
('20151025', 'WAS', 'TB', '30:31'),
('20151026', 'ARI', 'BAL', '18:26'),
('20151029', 'NE', 'MIA', '7:36'),
('20151101', 'ATL', 'TB', '23:20'),
('20151101', 'BAL', 'SD', '26:29'),
('20151101', 'CHI', 'MIN', '23:20'),
('20151101', 'CLE', 'ARI', '34:20'),
('20151101', 'DAL', 'SEA', '13:12'),
('20151101', 'DEN', 'GB', '10:29'),
('20151101', 'HOU', 'TEN', '6:20'),
('20151101', 'KC', 'DET', '10:45'),
('20151101', 'NO', 'NYG', '49:52'),
('20151101', 'OAK', 'NYJ', '20:34'),
('20151101', 'PIT', 'CIN', '16:10'),
('20151101', 'STL', 'SF', '6:27'),
('20151102', 'CAR', 'IND', '26:29'),
('20151105', 'CIN', 'CLE', '10:31'),
('20151108', 'BUF', 'MIA', '17:33'),
('20151108', 'CAR', 'GB', '29:37'),
('20151108', 'DAL', 'PHI', '33:27'),
('20151108', 'IND', 'DEN', '24:27'),
('20151108', 'MIN', 'STL', '18:21'),
('20151108', 'NE', 'WAS', '10:27'),
('20151108', 'NO', 'TEN', '34:28'),
('20151108', 'NYJ', 'JAC', '23:28'),
('20151108', 'PIT', 'OAK', '35:38'),
('20151108', 'SF', 'ATL', '16:17'),
('20151108', 'TB', 'NYG', '32:18'),
('20151109', 'SD', 'CHI', '22:19'),
('20151112', 'NYJ', 'BUF', '22:17'),
('20151115', 'BAL', 'JAC', '22:20'),
('20151115', 'DEN', 'KC', '29:13'),
('20151115', 'GB', 'DET', '18:16'),
('20151115', 'NYG', 'NE', '27:26'),
('20151115', 'OAK', 'MIN', '30:14'),
('20151115', 'PHI', 'MIA', '20:19'),
('20151115', 'PIT', 'CLE', '9:30'),
('20151115', 'SEA', 'ARI', '39:32'),
('20151115', 'STL', 'CHI', '37:13'),
('20151115', 'TB', 'DAL', '6:10'),
('20151115', 'TEN', 'CAR', '27:10'),
('20151115', 'WAS', 'NO', '14:47');

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE IF NOT EXISTS `leagues` (
  `id` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `conf` varchar(15) NOT NULL,
  `division` varchar(15) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `win` int(11) NOT NULL,
  `loss` int(11) NOT NULL,
  `ties` int(11) NOT NULL,
  `pf` int(4) NOT NULL,
  `pa` int(4) NOT NULL,
  `netpts` int(4) NOT NULL,
  `homew` varchar(5) NOT NULL,
  `roadw` varchar(5) NOT NULL,
  `divw` varchar(5) NOT NULL,
  `confscore` varchar(5) NOT NULL,
  `nonconfscore` varchar(5) NOT NULL,
  `streak` varchar(3) NOT NULL,
  `last5` varchar(5) NOT NULL,
  `teamCode` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`id`, `city`, `conf`, `division`, `logo`, `win`, `loss`, `ties`, `pf`, `pa`, `netpts`, `homew`, `roadw`, `divw`, `confscore`, `nonconfscore`, `streak`, `last5`, `teamCode`) VALUES
('Arizona Cardinals', 'Arizona', 'NFC', 'NFC WEST', 'ACardinals.png', 7, 2, 0, 302, 185, 117, '3-1', '4-1', '2-1', '5-1', '2-1', '3W', '4-1', 'ARI'),
('Atlanta Falcons', 'Atlanta', 'NFC', 'NFC SOUTH', 'AFalcons.png', 6, 3, 0, 229, 190, 39, '3-1', '3-2', '0-2', '4-3', '2-0', '2W', '2-3', 'ATL'),
('Baltimore Ravens', 'Baltimore', 'AFC', 'AFC NORTH', 'BRavens.png', 2, 7, 0, 210, 236, -26, '1-3', '1-4', '1-2', '2-5', '0-2', '1W', '1-4', 'BAL'),
('Buffalo Bills', 'Buffalo', 'AFC', 'AFC EAST', 'BBills.png', 5, 4, 0, 231, 207, 24, '2-3', '3-1', '3-1', '5-3', '0-1', '2W', '3-2', 'BUF'),
('Carolina Panthers', 'Carolina', 'NFC', 'NFC SOUTH', 'CPanthers.png', 9, 0, 0, 255, 175, 80, '5-0', '4-0', '2-0', '5-0', '4-0', '9W', '5-0', 'CAR'),
('Cincinnati Bengals', 'Cincinnati', 'AFC', 'AFC North', 'Cbengals.png', 8, 0, 0, 229, 142, 87, '4-0', '4-0', '3-0', '7-0', '1-0', '8W', '5-0', 'CIN'),
('Cleveland Browns', 'Cleveland', 'AFC', 'AFC NORTH', 'CBrowns.png', 2, 8, 0, 186, 277, -91, '1-3', '1-5', '1-2', '2-6', '0-2', '5W', '0-5', 'CLE'),
('Dallas Cowboys', 'Dallas', 'NFC', 'NFC EAST', 'DCowboys.png', 2, 7, 0, 166, 214, -48, '1-4', '1-3', '2-2', '2-6', '0-1', '7W', '0-5', 'DAL'),
('Denver Broncos', 'Denver', 'AFC', 'AFC WEST', 'DBroncos.png', 7, 2, 0, 205, 168, 37, '3-1', '4-1', '2-1', '4-2', '3-0', '2W', '3-2', 'DEN'),
('Detroit Lions', 'Detroit', 'NFC', 'NFC NORTH', 'DLions.png', 2, 7, 0, 167, 261, -94, '1-3', '1-4', '2-2', '2-4', '0-3', '1W', '2-3', 'DET'),
('Green Bay Packers', 'Green Bay', 'NFC', 'NFC NORTH', 'GBPackers.png', 6, 3, 0, 219, 185, 34, '4-1', '2-2', '1-1', '4-2', '2-1', '3W', '2-3', 'GB'),
('Houston Texans', 'Houston', 'AFC', 'AFC SOUTH', 'HTexans.png', 3, 5, 0, 174, 205, -31, '2-2', '1-3', '2-1', '2-3', '1-2', '1W', '2-3', 'HOU'),
('Indianapolis Colts', 'Indianapolis', 'AFC', 'AFC SOUTH', 'IColts.png', 4, 5, 0, 200, 227, -27, '2-3', '2-2', '3-0', '4-3', '0-2', '1W', '2-3', 'IND'),
('Kansas City Chiefs', 'Kansas City', 'AFC', 'AFC WEST', 'KCChiefs.png', 4, 5, 0, 224, 195, 29, '2-2', '2-3', '1-1', '3-2', '1-3', '3W', '3-2', 'KC'),
('Miami Dolphins', 'Miami', 'AFC', 'AFC EAST', 'MDolphins.png', 4, 5, 0, 191, 225, -34, '1-2', '3-3', '0-4', '2-5', '2-0', '1W', '3-2', 'MIA'),
('Minnesota Vikings', 'Minnesota', 'NFC', 'NFC NORTH', 'MVikings.png', 7, 2, 0, 198, 154, 44, '4-0', '3-2', '3-0', '4-1', '3-1', '5W', '5-0', 'MIN'),
('New England Patriots', 'New England', 'AFC', 'AFC EAST', 'NEPatriots.png', 9, 0, 0, 303, 169, 134, '5-0', '4-0', '3-0', '6-0', '3-0', '9W', '5-0', 'NE'),
('New Orleans Saints', 'New Orleans', 'NFC', 'NFC SOUTH', 'NOSaints.png', 4, 6, 0, 255, 315, -60, '3-2', '1-4', '1-2', '3-5', '1-1', '2W', '3-2', 'NO'),
('New York Giants', 'New York', 'NFC', 'NFC EAST', 'NYGiants.png', 5, 5, 0, 273, 253, 20, '3-2', '2-3', '2-2', '4-4', '1-1', '1W', '2-3', 'NYG'),
('New York Jets', 'New York', 'AFC', 'AFC EAST', 'NYJets.png', 5, 4, 0, 217, 184, 33, '3-2', '2-2', '1-2', '4-3', '1-1', '1W', '2-3', 'NYJ'),
('Oakland Raiders', 'Oakland', 'AFC', 'AFC WEST', 'ORaiders.png', 4, 5, 0, 227, 241, -14, '2-3', '2-2', '1-1', '4-3', '0-2', '2W', '2-3', 'OAK'),
('Philadelphia Eagles', 'Philadelphia', 'NFC', 'NFC EAST', 'PEagles.png', 4, 5, 0, 212, 184, 28, '2-2', '2-3', '2-2', '3-4', '1-1', '1W', '3-2', 'PHI'),
('Pittsburgh Steelers', 'Pittsburgh', 'AFC', 'AFC NORTH', 'PSteelers.png', 6, 4, 0, 236, 191, 45, '4-2', '2-2', '1-2', '3-4', '3-0', '2W', '3-2', 'PIT'),
('San Diego Chargers', 'San Diego', 'AFC', 'AFC WEST', 'SDChargers.png', 2, 7, 0, 210, 249, -39, '2-3', '0-4', '0-1', '1-4', '1-3', '5W', '0-5', 'SD'),
('San Francisco 49ers', 'San Francisco', 'NFC', 'NFC WEST', 'SF49ers.png', 3, 6, 0, 126, 223, -97, '3-2', '0-4', '0-3', '2-5', '1-1', '1W', '2-3', 'SF'),
('Seattle Seahawks', 'Seattle', 'NFC', 'NFC WEST', 'SSeahawks.png', 4, 5, 0, 199, 179, 20, '2-2', '2-3', '1-2', '4-4', '0-1', '1W', '2-3', 'SEA'),
('St. Louis Rams', 'St. Louis', 'NFC', 'NFC WEST', 'SLRams.png', 4, 5, 0, 166, 183, -17, '3-2', '1-3', '3-0', '3-4', '1-1', '2W', '2-3', 'STL'),
('Tampa Bay Buccaneers', 'Tampa Bay', 'NFC', 'NFC SOUTH', 'TBBuccaneers.png', 4, 5, 0, 191, 237, -46, '2-3', '2-2', '2-1', '3-3', '1-2', '1W', '3-2', 'TB'),
('Tennessee Titans', 'Tennessee', 'AFC', 'AFC SOUTH', 'TTitans.png', 2, 7, 0, 169, 214, -45, '0-5', '2-2', '0-2', '0-5', '2-2', '1W', '1-4', 'TEN'),
('Washington Redskins', 'Washington', 'NFC', 'NFC EAST', 'WRedskins.png', 4, 5, 0, 205, 209, -4, '4-1', '0-4', '1-1', '4-2', '0-3', '1W', '2-3', 'WAS');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

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
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`date`,`homeTeam`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
