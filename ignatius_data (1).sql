-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2025 at 01:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ignatius_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_kas_bulanan`
--

CREATE TABLE `buku_kas_bulanan` (
  `ID` int(11) NOT NULL,
  `Tanggal` varchar(50) NOT NULL,
  `Uraian` longtext NOT NULL,
  `Debet` int(11) NOT NULL,
  `Credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buku_kas_harian`
--

CREATE TABLE `buku_kas_harian` (
  `ID` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Uraian` longtext NOT NULL,
  `Debet` int(11) NOT NULL,
  `Credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_picture`
--

CREATE TABLE `profile_picture` (
  `ID` int(11) NOT NULL,
  `IgnatiusEmail` varchar(150) NOT NULL,
  `Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statistik_umat`
--

CREATE TABLE `statistik_umat` (
  `ID` int(60) NOT NULL,
  `Nama Keluarga` varchar(350) NOT NULL,
  `Ayah` int(250) NOT NULL,
  `Ibu` int(1) NOT NULL,
  `B 1sd/ 12 L` int(10) NOT NULL,
  `B 1sd/ 12 P` int(10) NOT NULL,
  `B 13sd/ 16 L` int(10) NOT NULL,
  `B 13sd/ 16 P` int(10) NOT NULL,
  `B 16+ L` int(10) NOT NULL,
  `B 16+ P` int(10) NOT NULL,
  `L` int(15) NOT NULL,
  `P` int(15) NOT NULL,
  `Total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statistik_umat`
--

INSERT INTO `statistik_umat` (`ID`, `Nama Keluarga`, `Ayah`, `Ibu`, `B 1sd/ 12 L`, `B 1sd/ 12 P`, `B 13sd/ 16 L`, `B 13sd/ 16 P`, `B 16+ L`, `B 16+ P`, `L`, `P`, `Total`) VALUES
(1, 'Almen Alexander Manik', 1, 1, 0, 4, 1, 0, 0, 0, 2, 5, 7),
(2, 'Philip Mawardi Tampubolon', 1, 1, 1, 1, 1, 0, 0, 0, 3, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `ID` int(11) NOT NULL,
  `Name` varchar(350) NOT NULL,
  `Developer` varchar(20) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Admin` varchar(20) NOT NULL,
  `Warning` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`ID`, `Name`, `Developer`, `User`, `Admin`, `Warning`) VALUES
(1, 'Pedro Tampubolon', 'True', 'False', 'True', 'False');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile_picture`
--
ALTER TABLE `profile_picture`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `statistik_umat`
--
ALTER TABLE `statistik_umat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
