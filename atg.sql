-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2019 at 07:42 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atg`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `email`, `pin`) VALUES
(1, 'SURAJ', 'suraj03@gmail.com', 462002),
(2, 'SURAJ', 'suraj03@gmail.com', 462002),
(3, 'SURAJ', 'suraj03@gmail.com', 462002),
(4, 'SURAJ', 'suraj03@gmail.com', 462002),
(5, 'Ramsha', 'ramsha@gmail.com', 46005),
(6, 'SURAJ', 'suraj03@gmail.com', 462002),
(7, 'Nida saqib', 'nidasaqib04@gmail.com', 462001),
(8, 'Roshni', 'roshni@gmail.com', 462002);
