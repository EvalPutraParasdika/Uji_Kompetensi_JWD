-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2024 at 05:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `semester` int NOT NULL,
  `ipk` float NOT NULL,
  `pilihan` varchar(20) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `verifikasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `email`, `nomor`, `semester`, `ipk`, `pilihan`, `berkas`, `verifikasi`) VALUES
('230101008', 'Alfito', 'alfito@gmail.com', '085817204746', 5, 3.5, 'Djarum', 'pas_foto_eval.jpg', 'false'),
('230202009', 'Eval Putra Parasdika', 'evalputra0@gmail.com', '085848171593', 4, 3.3, 'Djarum', 'pas_foto_eval.jpg', 'false'),
('230203006', 'Rifai', 'ghjkdhg@gmail.com', '086837492825', 7, 2.8, '', '', ''),
('230303002', 'Arya ', 'arya@gmail.com', '08582838465', 4, 2.7, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
