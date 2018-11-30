-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 03:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `email`, `password`) VALUES
('admin', 'fjr', 'fjr@asd.cs', '123'),
('elhaneef123', 'Fajar', 'fajaralhanief@gmail.com', '123'),
('putrifajar123', 'Aloona', 'Aloona@gmail.com', '123'),
('reyhan123', 'reyhan', 'reyhan@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `hari` varchar(30) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`hari`, `tanggal`) VALUES
('jumat', '18'),
('kamis', '17'),
('rabu', '16'),
('selasa', '15'),
('senin', '14');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(20) NOT NULL,
  `id_customer` varchar(50) DEFAULT NULL,
  `film` varchar(30) NOT NULL,
  `bioskop` varchar(50) DEFAULT NULL,
  `jadwal` varchar(50) DEFAULT NULL,
  `totalkursi` varchar(50) DEFAULT NULL,
  `nomorkursi` varchar(300) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_customer`, `film`, `bioskop`, `jadwal`, `totalkursi`, `nomorkursi`, `harga`) VALUES
('P0000', 'elhaneef123', 'Avengers: Infinity War', 'XXI Transmart Buah Batu', 'senin, 14 Mei 2018', '2', 'A10,A09', '90000'),
('P0001', 'putrifajar123', 'Avengers: Infinity War', 'XXI Transmart Buah Batu', 'senin, 14 Mei 2018', '2', 'A07,A06', '90000'),
('P0002', 'putrifajar123', 'Please Stand By', 'XXI Cihampelas Walk', 'senin, 14 Mei 2018', '2', 'A02,A01', '90000'),
('P0003', 'elhaneef123', 'Avengers: Infinity War', 'XXI Transmart Buah Batu', 'rabu, 16 Mei 2018', '2', 'A02,A01', '90000'),
('P0004', 'elhaneef123', 'The Secret - Suster Ngesot Urb', 'XXI Transmart Buah Batu', 'senin, 14 Mei 2018', '2', 'A11,A10', '90000'),
('P0005', 'elhaneef123', 'Avengers: Infinity War', 'CGV Paris Van Java', 'senin, 14 Mei 2018', '2', 'A09,A08', '90000'),
('P0006', 'elhaneef123', 'Avengers: Infinity War', 'XXI Transmart Buah Batu', 'senin, 14 Mei 2018', '3', 'A09,A08,A07', '135000'),
('P0007', 'admin', 'Please Stand By', '', 'senin, 14 Mei 2018', '', '', '180000'),
('P0008', 'reyhan123', 'Avengers: Infinity War', '', 'senin, 14 Mei 2018', '', '', '90000'),
('P0009', 'reyhan123', 'Avengers: Infinity War', 'XXI Cihampelas Walk', 'senin, 14 Mei 2018', '2', 'A05,A04', '90000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`hari`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
