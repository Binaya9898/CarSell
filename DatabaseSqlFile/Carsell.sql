-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2023 at 01:05 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Carsell`
--

-- --------------------------------------------------------

--
-- Table structure for table `Car_Registration`
--

DROP TABLE IF EXISTS `Car_Registration`;
CREATE TABLE IF NOT EXISTS `Car_Registration` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `SellerId` int(5) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Year` date NOT NULL,
  `Milage` varchar(5) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Car_Registration`
--

INSERT INTO `Car_Registration` (`ID`, `SellerId`, `Make`, `Model`, `Year`, `Milage`, `Location`, `Price`) VALUES
(1, 2, 'sf', 'sdf', '2023-09-03', '12', 'sd', 21312300),
(2, 2, 'sf', 'sdf', '2023-09-03', '12', 'sd', 21312300),
(3, 3, 'BMW', 'C200-BMW', '2023-10-11', '15', 'Pacific Highway', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `Seller_Registration`
--

DROP TABLE IF EXISTS `Seller_Registration`;
CREATE TABLE IF NOT EXISTS `Seller_Registration` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(16) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Seller_Registration`
--

INSERT INTO `Seller_Registration` (`Id`, `Name`, `Address`, `Phone`, `Email`, `Username`, `Password`) VALUES
(1, 'Binaya Koirala', 'Pokhara, Malepatan', 9840454572, 'beeenaya98@gmail.com', 'binaya123', 'bbb'),
(2, 'Binaya Koirala', 'Pokhara, Malepatan', 9806501357, 'beeenaya98@gmail.com', 'asd', 'asd'),
(3, 'Admin', 'Admin', 123456789, 'admin@gmail.com', 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
