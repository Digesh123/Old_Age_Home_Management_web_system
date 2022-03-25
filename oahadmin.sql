-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 04:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oahadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `regdata`
--

CREATE TABLE `regdata` (
  `id` int(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `oahname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regdata`
--

INSERT INTO `regdata` (`id`, `name`, `email`, `address`, `state`, `pincode`, `oahname`, `username`, `password`) VALUES
(3, 'vaishnavi nalawde', 'jebdjhb@gmail.com', 'jhefjhkokp`erfjoiio` ojj', 'Maharashtra', 400067, 'vaishnavi care center', 'vaish1', '123'),
(4, 'Tejavsi vithoba mayekar ', 't@gmail.com', '38,deepdarshan', 'Maharashtra', 400067, 'tejasvicare center ', 'tejasvi', '123'),
(5, 'mayekar ghevade nalawade', 'ghev@gami.com', 'dggfuwgfuqwfwuygu', 'Maharashtra', 400067, 'juade', 'tdv12', '123');

-- --------------------------------------------------------

--
-- Table structure for table `sm_data`
--

CREATE TABLE `sm_data` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `datep` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nameadmin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_data`
--

INSERT INTO `sm_data` (`id`, `name`, `datep`, `username`, `password`, `nameadmin`) VALUES
(1, 'digesh', '1970-01-01', 'digesh', '123', 'td123'),
(3, 'digesh', '1970-01-01', 'dig', '123', 'td123'),
(4, 'vaishnavi', '1970-01-01', 'vaish', '123', 'td123'),
(7, 'tejasvi vithoba mayekar', '2022-03-03', 't1', '124', 'Tejasvi'),
(13, 'digesh', '2002-03-14', 'digesh12', '123', 'tdv12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regdata`
--
ALTER TABLE `regdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm_data`
--
ALTER TABLE `sm_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regdata`
--
ALTER TABLE `regdata`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sm_data`
--
ALTER TABLE `sm_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
