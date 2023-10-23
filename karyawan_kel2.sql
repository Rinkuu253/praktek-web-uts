-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 11:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db karyawan_kel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `nik` int(8) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status_kerja` enum('Tetap','Tidak Tetap') NOT NULL,
  `position` varchar(10) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `responsibility` decimal(10,2) NOT NULL,
  `teamwork` decimal(10,2) NOT NULL,
  `management_time` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`nik`, `foto`, `nama`, `status_kerja`, `position`, `tgl_penilaian`, `responsibility`, `teamwork`, `management_time`, `total`, `grade`) VALUES
(124651, '', 'Catheezz', 'Tidak Tetap', 'Staff', '2023-10-11', 5.00, 5.00, 7.00, 17.00, 'B'),
(134551, '', 'Yurino', 'Tidak Tetap', 'Staff', '2023-10-18', 6.00, 8.00, 7.00, 21.00, 'A'),
(1145572, '', 'matthew Zharif', 'Tetap', 'Staff', '2023-10-10', 7.00, 5.00, 10.00, 22.00, 'C'),
(2245462, '', 'Nia rahmadani', 'Tetap', 'Staff', '2023-10-09', 7.00, 7.00, 8.00, 22.00, 'A'),
(4512324, '', 'Rekt', 'Tidak Tetap', 'IT support', '2023-10-11', 5.00, 5.00, 5.00, 15.00, 'C'),
(11223344, '', 'John cena', 'Tetap', 'HRD', '2010-10-04', 7.00, 8.00, 8.00, 12.00, 'A'),
(11225522, '', 'luna maya', 'Tetap', 'digital ma', '2023-10-03', 6.00, 4.00, 4.00, 15.00, 'C'),
(11225566, '', 'ROCK LEE', 'Tetap', 'IT support', '2023-10-23', 7.00, 5.00, 10.00, 22.00, 'A'),
(11556778, '', 'elsa paisal', 'Tetap', 'digital ma', '2023-10-03', 6.00, 4.00, 7.00, 17.00, 'C'),
(12456123, '', 'Wan', 'Tetap', 'digital ma', '2023-10-11', 8.00, 5.00, 7.00, 20.00, 'A'),
(22331144, '', 'irish bella', 'Tetap', 'Manager', '2013-10-09', 5.00, 5.00, 10.00, 2.00, '2'),
(24567235, '', 'ahmad dhani', 'Tidak Tetap', 'Staff', '2023-10-18', 6.00, 5.00, 5.00, 16.00, 'B'),
(55667711, '', 'andre taulany', 'Tidak Tetap', 'IT support', '2023-10-23', 7.00, 6.00, 8.00, 21.00, 'B'),
(55713412, '', 'Eko Ju', 'Tetap', 'digital ma', '2023-10-17', 5.00, 6.00, 8.00, 19.00, 'B'),
(445556611, '', 'raffi ahmad', 'Tetap', 'Staff', '2023-10-23', 7.00, 7.00, 10.00, 24.00, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

