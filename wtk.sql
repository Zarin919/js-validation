-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 03:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtk`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `peraddress` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `weblink` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `gender`, `dob`, `religion`, `paddress`, `peraddress`, `phone`, `email`, `weblink`, `username`, `password`) VALUES
('Sumon', 'Khan', 'Male', '10/2/1998', 'Islam', 'Dhaka', 'Bagura', '01775503498', 'Sumon@gmail.com', 'www.google.com', 'Sumon112', '12345'),
('Ayshik', 'Khan', 'Male', '2021-07-08', 'islam', 'Northern Ireland,Ballycarry', 'Mujib Sarak,sirajgonj', '01775503498', 'Himel@gmail.com', 'WWW.AYSHIK.COM', 'Ayshik111', '@Ayshikmee1234'),
('Ayshik', 'Khan', 'Male', '2021-07-08', 'islam', 'Northern Ireland,Ballycarry', 'Mujib Sarak,sirajgonj', '01775503498', 'Himel@gmail.com', 'WWW.AYSHIK.COM', 'Ayshik111', '@Ayshikmee1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
