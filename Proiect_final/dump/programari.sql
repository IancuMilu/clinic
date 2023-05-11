-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2023 at 07:40 AM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 5.6.40-50+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2022.milu.iancu.virgil`
--

-- --------------------------------------------------------

--
-- Table structure for table `programari`
--

CREATE TABLE `programari` (
  `id` int(11) NOT NULL,
  `nume` text NOT NULL,
  `prenume` text NOT NULL,
  `email` text NOT NULL,
  `telefon` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programari`
--

INSERT INTO `programari` (`id`, `nume`, `prenume`, `email`, `telefon`, `data`) VALUES
(13, 'GSA', 'GSAGS', 'gsasga', 214412, '2023-01-04 10:27:00'),
(14, 'MILU', 'IANCU', 'iancu.milu@gmail.com', 521521, '2023-01-16 10:25:00'),
(15, 'GSA', 'GSA', 'iancu.milu@gmail.com', 512521, '2023-01-16 13:26:00'),
(16, 'GSASGA', 'GASSAG', 'iancu.milu@gmail.com', 521512, '2023-01-16 10:26:00'),
(17, 'BOB', 'BSABSA', 'gfsagsa', 251512, '2023-01-26 10:32:00'),
(18, 'SGA', 'GSA', 'gsagsagsa', 5215125, '2023-01-27 15:32:00'),
(19, 'GSAGSA', 'GSAGSA', 'gsaasg', 214251, '2023-01-18 10:37:00'),
(20, 'GAGSA', 'GASGAS', 'gsagas', 215512521, '2023-02-10 10:45:00'),
(21, 'GAASG', 'GSAGAS', 'gsasag', 12612126, '2023-01-15 14:42:00'),
(22, 'GSAGSA', 'ASGASG', 'gsaasg', 215125521, '2023-01-15 14:44:00'),
(23, 'GSAGSA', 'GSAGSA', 'gsagas', 2112, '2023-01-27 10:46:00'),
(24, 'GSASAG', 'GSAASG', 'ggas', 212121, '2023-01-06 10:46:00'),
(25, 'GSASAG', 'GSAGAS', 'gsagsa', 521, '2023-01-15 10:53:00'),
(26, 'GSAGSA', 'GSAASG', 'gsaasg', 512, '2023-01-15 10:48:00'),
(27, 'FSAFSA', 'FASFAS', 'fassaf', 2541512, '2023-01-27 10:54:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programari`
--
ALTER TABLE `programari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `programari`
--
ALTER TABLE `programari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
