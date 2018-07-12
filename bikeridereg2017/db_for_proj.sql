-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2017 at 12:46 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bike`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetOfficeByCountry` (IN `place` VARCHAR(255))  BEGIN
 SELECT I.name,I.phone,R.reg,R.model 
 FROM bike as I,bikeinfo as R   
 WHERE loc =place AND R.reg=I.reg;
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `SL` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `reg` varchar(10) NOT NULL,
  `loc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`SL`, `name`, `phone`, `reg`, `loc`) VALUES
(13, 'Yuva Raju', '8050367046', 'KA02HV2000', 'Mysore'),
(15, 'Akhilesh', '9989654752', 'KA02JL1495', 'panaji'),
(16, 'Akhil', '8875695458', 'KA02HJ5678', 'Mysore'),
(27, 'Gandhi', '9988776655', 'KA04HL1658', 'Mysore'),
(33, 'Talpul', '789456123', 'KA02OP9696', 'panaji');

-- --------------------------------------------------------

--
-- Table structure for table `bikeinfo`
--

CREATE TABLE `bikeinfo` (
  `reg` varchar(10) NOT NULL,
  `model` varchar(10) NOT NULL,
  `make` varchar(10) NOT NULL,
  `cc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bikeinfo`
--

INSERT INTO `bikeinfo` (`reg`, `model`, `make`, `cc`) VALUES
('KA02HJ5678', 'Bullet', '2012', '350'),
('KA02HV2000', 'Dio', '2011', '125'),
('KA02JL1495', 'RS200', '2017', '200'),
('KA02OP9696', 'FZ', '1998', '125'),
('KA04HL1658', 'Bullet', '1998', '500');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `name` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Inid` varchar(12) NOT NULL,
  `Age` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `Gender`, `Inid`, `Age`) VALUES
('Akhil', 'Male', '1223', '20'),
('Akhilesh', 'Male', '1222', '21'),
('Gandhi', 'Male', '1225', '50'),
('Talpul', 'Male', '1227', '25'),
('Yuva Raju', 'Male', '1220', '19');

--
-- Triggers `info`
--
DELIMITER $$
CREATE TRIGGER `removeforeing` BEFORE INSERT ON `info` FOR EACH ROW BEGIN
   IF NEW.Age < 18 THEN 
  SET  NEW.Age=NULL;
   END IF;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Loc_name` varchar(20) NOT NULL,
  `Distance` int(20) NOT NULL,
  `State` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Loc_name`, `Distance`, `State`) VALUES
('Mysore', 100, 'Karnataka'),
('Panaji', 350, 'Goa');

-- --------------------------------------------------------

--
-- Table structure for table `nom`
--

CREATE TABLE `nom` (
  `inid` varchar(12) NOT NULL,
  `nname` varchar(10) NOT NULL,
  `nph` varchar(10) NOT NULL,
  `Value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nom`
--

INSERT INTO `nom` (`inid`, `nname`, `nph`, `Value`) VALUES
('1220', 'Varun', '9989565210', 1200000),
('1221', 'Vignesh', '9916957856', 1000000),
('1222', 'Shabaz', '9963254695', 1500000),
('1223', 'Maskery', '8856987456', 900000),
('1224', 'Badardinni', '987456321', 1500000),
('1225', 'Raju', '7844569562', 1200000),
('1226', 'Modi', '7833569562', 2200000),
('1227', 'Manmohan', '9989653254', 1200000),
('1228', 'Rahuk', '9325479966', 800000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`SL`),
  ADD KEY `loc` (`loc`),
  ADD KEY `name` (`name`) USING BTREE,
  ADD KEY `reg` (`reg`);

--
-- Indexes for table `bikeinfo`
--
ALTER TABLE `bikeinfo`
  ADD PRIMARY KEY (`reg`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `Inid` (`Inid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Loc_name`);

--
-- Indexes for table `nom`
--
ALTER TABLE `nom`
  ADD PRIMARY KEY (`inid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bike`
--
ALTER TABLE `bike`
  ADD CONSTRAINT `bike_ibfk_1` FOREIGN KEY (`name`) REFERENCES `info` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bike_ibfk_2` FOREIGN KEY (`reg`) REFERENCES `bikeinfo` (`reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`Inid`) REFERENCES `nom` (`inid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
