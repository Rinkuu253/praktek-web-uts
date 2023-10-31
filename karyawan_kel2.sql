-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 10:18 AM
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
-- Database: `karyawan_kel2`
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
(20002, '20002.jpg', 'Lionel Pepsi', 'Tetap', 'Cleaning', '2023-10-25', 50.00, 50.00, 50.00, 50.00, 'C'),
(20003, '20003.jpg', 'Togeng Aljabar', 'Tidak Tetap', 'Staff', '2023-10-25', 55.00, 88.00, 62.00, 67.70, 'B'),
(20006, '20006.jpg', 'Cristiano Penaldo', 'Tidak Tetap', 'Cleaning', '2023-10-25', 50.00, 50.00, 40.00, 46.00, 'C'),
(20007, '20007.jpg', 'Jonathan Singa', 'Tidak Tetap', 'Marketing', '2023-10-25', 60.00, 60.00, 30.00, 48.00, 'C'),
(20015, '20015.jpg', 'Luvinta Luna', 'Tetap', 'Staff', '2023-10-23', 80.00, 70.00, 90.00, 81.00, 'A'),
(20026, '20026.jpg', 'Penanti Bordy', 'Tetap', 'Staff', '2023-10-17', 80.00, 90.00, 90.00, 87.00, 'A');

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
