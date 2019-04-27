-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2019 at 08:08 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE IF NOT EXISTS `enquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time_date` varchar(31) NOT NULL,
  `firstname` varchar(101) NOT NULL,
  `lastname` varchar(101) NOT NULL,
  `email` varchar(201) NOT NULL,
  `phone_number` varchar(31) NOT NULL,
  `message` varchar(10001) NOT NULL,
  `discount` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `time_date`, `firstname`, `lastname`, `email`, `phone_number`, `message`, `discount`) VALUES
(1, '01:40:15am @ 01/01/2019', 'Chirag', 'Tamhane', 'chiragtam175@gmail.com', '0370105678', 'Hello Everyone!', 'Yes - 10%'),
(2, '07:07:17pm @ 02/01/2019', 'Tony', 'Stark', 'tonystark@starkmail.com', '7939485990', 'This is to enquire about the fitness centre and the various plans offered.', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `firstname` varchar(201) NOT NULL,
  `username` varchar(51) NOT NULL,
  `password` varchar(51) NOT NULL,
  `email` varchar(51) NOT NULL,
  `phone_number` varchar(21) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `username`, `password`, `email`, `phone_number`) VALUES
('Chirag', 'Tamhane', '1234', 'chiragtam175@gmail.com', '0370105678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
