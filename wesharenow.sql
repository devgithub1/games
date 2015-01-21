-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2015 at 10:17 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wesharenow`
--

-- --------------------------------------------------------

--
-- Table structure for table `wsn_games`
--

CREATE TABLE IF NOT EXISTS `wsn_games` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gm_name` varchar(255) NOT NULL,
  `gm_image` varchar(255) NOT NULL,
  `gm_description` text NOT NULL,
  `gm_rating` enum('0','1','2','3','4','5') NOT NULL,
  `gm_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gm_status` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wsn_users`
--

CREATE TABLE IF NOT EXISTS `wsn_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usr_name` varchar(255) NOT NULL,
  `usr_fname` varchar(255) NOT NULL,
  `usr_lname` varchar(255) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_phone` varchar(255) NOT NULL,
  `usr_regtype` enum('f','t','e') NOT NULL,
  `usr_regid` varchar(255) NOT NULL,
  `usr_avatar` varchar(255) NOT NULL,
  `usr_role` int(2) NOT NULL,
  `usr_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
