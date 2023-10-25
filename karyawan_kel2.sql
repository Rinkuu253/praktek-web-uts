-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 03:26 PM
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
(20001, '', 'Irish bella', 'Tetap', 'Manager', '2013-10-09', 5.00, 5.00, 10.00, 2.00, 'C'),
(20002, '', 'John cena', 'Tetap', 'HRD', '2010-10-04', 7.00, 8.00, 8.00, 12.00, 'A'),
(20004, '', 'Nia rahmadani', 'Tetap', 'Staff', '2023-10-09', 7.00, 7.00, 8.00, 22.00, 'A'),
(20005, '', 'Raffi ahmad', 'Tetap', 'Staff', '2023-10-23', 7.00, 7.00, 10.00, 24.00, 'A'),
(20006, '', 'Yurino', 'Tetap', 'Staff', '2023-10-18', 6.00, 8.00, 7.00, 21.00, 'A'),
(20007, '', 'Wan', 'Tetap', 'Marketing', '2023-10-11', 8.00, 5.00, 7.00, 20.00, 'A'),
(20008, '', 'Bruce lee', 'Tetap', 'IT support', '2023-10-23', 7.00, 5.00, 10.00, 22.00, 'A'),
(20009, '', 'Eko Ju', 'Tetap', 'Marketing', '2023-10-17', 5.00, 6.00, 8.00, 19.00, 'B'),
(20010, '', 'Ahmad dhani', 'Tetap', 'Staff', '2023-10-18', 6.00, 5.00, 5.00, 16.00, 'B'),
(20011, '', 'Catheezz', 'Tetap', 'Staff', '2023-10-11', 5.00, 5.00, 7.00, 17.00, 'B'),
(20012, '', 'Andre taulany', 'Tetap', 'IT support', '2023-10-23', 7.00, 6.00, 8.00, 21.00, 'B'),
(20013, '', 'Rekt', 'Tetap', 'IT support', '2023-10-11', 5.00, 5.00, 5.00, 15.00, 'C'),
(20014, '', 'Uus', 'Tetap', 'Marketing', '2023-10-03', 6.00, 4.00, 7.00, 17.00, 'C'),
(20015, '', 'Luna maya', 'Tetap', 'Marketing', '2023-10-03', 6.00, 4.00, 4.00, 15.00, 'C'),
(20016, '', 'Sule', 'Tidak Tetap', 'Staff', '2023-10-10', 7.00, 5.00, 10.00, 22.00, 'C'),
(20017, '', 'Lolox', 'Tidak Tetap', 'Staff', '2023-10-18', 7.00, 7.00, 7.00, 21.00, 'A'),
(20018, '', 'Rizky febian', 'Tidak Tetap', 'Staff', '2023-10-12', 8.00, 8.00, 8.00, 24.00, 'B'),
(20019, '', 'Pras teguh', 'Tidak Tetap', 'Manager', '2023-10-14', 4.00, 4.00, 4.00, 12.00, 'A'),
(20020, '', 'Bintang', 'Tidak Tetap', 'Staff', '2023-10-19', 3.00, 3.00, 3.00, 9.00, 'A'),
(20021, '', 'Raditya dika', 'Tidak Tetap', 'Manager', '2023-10-20', 5.00, 5.00, 5.00, 15.00, 'B'),
(20022, '', 'Cak lontong', 'Tidak Tetap', 'Staff', '2023-10-10', 9.00, 9.00, 9.00, 27.00, 'A'),
(20023, '', 'Dzawin', 'Tidak Tetap', 'Manager', '2023-10-27', 10.00, 10.00, 10.00, 30.00, 'B'),
(20024, '', 'Indro warkop', 'Tidak Tetap', 'Staff', '2023-10-31', 12.00, 12.00, 12.00, 36.00, 'A'),
(20025, '', 'Mongol', 'Tidak Tetap', 'Manager', '2023-10-30', 14.00, 14.00, 14.00, 42.00, 'B'),
(20026, '', 'Kemal palevi', 'Tidak Tetap', 'Staff', '2023-10-09', 15.00, 15.00, 15.00, 45.00, 'A');

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
