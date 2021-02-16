-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 09:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coronacase`
--

CREATE TABLE `coronacase` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `symp` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coronacase`
--

INSERT INTO `coronacase` (`id`, `fullname`, `email`, `mobile`, `symp`, `message`) VALUES
(1, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,fever,', 'etgfrfhy'),
(2, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,fever,', 'etgfrfhy'),
(3, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,fever,', 'etgfrfhy'),
(4, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,fever,', 'etgfrfhy'),
(5, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,fever,', 'etgfrfhy'),
(6, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,fever,', 'etgfrfhy'),
(7, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'fever,', 'fdxgbf'),
(8, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'fever,', 'fdxgbf'),
(9, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'fever,', 'fdgz'),
(10, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'fever,', 'fdgz'),
(11, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,', 'ryhg'),
(12, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,', 'ryhg'),
(13, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,', 'ryhg'),
(14, 'Ramesh Kumar', 'shailendrakumar19999@gmail.com', '07739210119', 'cold,', 'ryhg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coronacase`
--
ALTER TABLE `coronacase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coronacase`
--
ALTER TABLE `coronacase`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
