-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 08:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi1`
--

CREATE TABLE `absensi1` (
  `id_absensi1` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nis` int(11) NOT NULL,
  `haritanggal` date NOT NULL,
  `jammasuk` time NOT NULL,
  `jampulang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `absensi1`
--

INSERT INTO `absensi1` (`id_absensi1`, `nama`, `nis`, `haritanggal`, `jammasuk`, `jampulang`) VALUES
(10, 'Dicka Afis  Safitri', 2345, '2023-07-26', '08:00:00', '17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi1`
--
ALTER TABLE `absensi1`
  ADD PRIMARY KEY (`id_absensi1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi1`
--
ALTER TABLE `absensi1`
  MODIFY `id_absensi1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
