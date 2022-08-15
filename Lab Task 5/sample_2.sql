-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2022 at 10:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LabTask`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample_2`
--

CREATE TABLE `sample_2` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample_2`
--

INSERT INTO `sample_2` (`id`, `username`, `email`, `password`) VALUES
(501, 'alpha', 'alpha@sample.com', '123'),
(502, 'omega', 'omega@sample.com', 'abc'),
(503, 'beta', 'beta@sample.com', '12333'),
(504, 'sigma', 'sigma@sample.com', 'aaaasss'),
(505, 'epsilon', 'epsilon@sample.com', 'llkka11'),
(506, 'pi', 'pi@sample.com', 'pipipi'),
(507, 'phi', 'phi@sample.com', 'kjaksd'),
(508, 'gamma', 'gamma@sample.com', 'ggaa'),
(509, 'psi', 'psi@sample.com', 'aallkk'),
(513, 'omicron', 'omicron@sample.com', 'ooaamm'),
(514, 'zeta', 'zeta@sample.com', 'zeta'),
(522, 'a', 'a', 'a'),
(523, 'aa', 'aa', 'aa'),
(524, 'aaa', 'aaa', 'aaa'),
(525, 'aaaa', 'aaaa', 'aaaa'),
(526, 'bbbb', 'bbbb', 'bbbb'),
(527, 'bbb', 'bbb', 'bbb'),
(528, 'bb', 'bb', 'bb'),
(529, 'b', 'b', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sample_2`
--
ALTER TABLE `sample_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sample_2`
--
ALTER TABLE `sample_2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=530;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
