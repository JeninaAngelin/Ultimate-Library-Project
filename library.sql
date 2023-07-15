-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 04:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmaster`
--

CREATE TABLE `bookmaster` (
  `bid` varchar(30) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `bauthor` varchar(30) NOT NULL,
  `copies` int(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmaster`
--

INSERT INTO `bookmaster` (`bid`, `bname`, `bauthor`, `copies`, `price`) VALUES
('111', 'JAVA', 'HENDRY', 1, 1000),
('112', 'CPP', 'BALAGURUSAMY', 1, 550),
('113', 'ORACLE', 'ANDREW', 0, 850),
('114', 'CPP', 'BALAGURUSAMY', 0, 550),
('117', 'DATA MINING', 'JEROME', 1, 1130),
('118', 'AI', 'KEERA', 1, 788),
('119', 'PYTHON', 'WILLIAMS', 0, 1334),
('120', 'DS', 'REEMA', 1, 670);

-- --------------------------------------------------------

--
-- Table structure for table `membermaster`
--

CREATE TABLE `membermaster` (
  `mid` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `mail_Id` text NOT NULL,
  `PhNum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membermaster`
--

INSERT INTO `membermaster` (`mid`, `mname`, `mail_Id`, `PhNum`) VALUES
('M024', 'FATHIMA', 'fathi@gmail.com', '7799778833'),
('M001', 'HEAD', 'head@gmail.com', '9992224441'),
('M002', 'BABU', 'babu@gmail.com', '9666666345'),
('M003', 'CHEERA', 'cheera@gmail.com', '9334442221'),
('M004', 'DANY', 'dany@gmail.com', '9992224441'),
('M006', 'EMIL', 'emil@gmail.com', '7794639399'),
('M008', 'RANI', 'RITu@gmail.com', '9774442221');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `bid` varchar(30) NOT NULL,
  `mid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`bid`, `mid`) VALUES
('', 'M001'),
('114', 'M001'),
('119', 'M003'),
('113', 'M010');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
