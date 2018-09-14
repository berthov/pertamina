-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 06:28 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertamina`
--

-- --------------------------------------------------------

--
-- Table structure for table `abo_abi`
--

CREATE TABLE `abo_abi` (
  `type` varchar(255) NOT NULL,
  `pandan` int(11) NOT NULL,
  `pelita` int(11) NOT NULL,
  `paluh_tabuhan` int(11) NOT NULL,
  `pungut` int(11) NOT NULL,
  `pematang` int(11) NOT NULL,
  `mangun_jaya` int(11) NOT NULL,
  `menggala` int(11) NOT NULL,
  `minas` int(11) NOT NULL,
  `melahin` int(11) NOT NULL,
  `merbau` int(11) NOT NULL,
  `mundu` int(11) NOT NULL,
  `musi` int(11) NOT NULL,
  `meditran` int(11) NOT NULL,
  `matindok` int(11) NOT NULL,
  `mauhau` int(11) NOT NULL,
  `merauke` int(11) NOT NULL,
  `kamojang` int(11) NOT NULL,
  `kasim` int(11) NOT NULL,
  `kakap` int(11) NOT NULL,
  `parigi` int(11) NOT NULL,
  `pattimura` int(11) NOT NULL,
  `pasaman` int(11) NOT NULL,
  `panjang` int(11) NOT NULL,
  `tf_man` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abo_abi`
--

INSERT INTO `abo_abi` (`type`, `pandan`, `pelita`, `paluh_tabuhan`, `pungut`, `pematang`, `mangun_jaya`, `menggala`, `minas`, `melahin`, `merbau`, `mundu`, `musi`, `meditran`, `matindok`, `mauhau`, `merauke`, `kamojang`, `kasim`, `kakap`, `parigi`, `pattimura`, `pasaman`, `panjang`, `tf_man`) VALUES
('    6001011110  WATER EXPENSE', 341, 22316, 11478, 19848, 30316, 12608, 16020, 7148, 12711, 10995, 11395, 11436, 8757, 5569, 5840, 16213, 11929, 2650, 18656, 28422, 10000, 7186, 1999, 0),
('    6001013120  TRSPRT MATRL &', 733, 1867, 24515, 2049, 8649, 2746, 2301, 24807, 23519, 5806, 5557, 9155, 6381, 27026, 11754, 8701, 6050, 27857, 8740, 11359, 5000, 4999, 3499, 0),
('    6001013130  MAC ACCES INST', 11255, 9615, 22237, 15990, 20501, 53991, 7543, 10853, 22617, 19873, 49993, 32690, 5323, 12011, 16211, 9331, 20680, 37280, 170, 56141, 30004, 30004, 5004, 0),
('    6001013210  PAINTS, OILS,', 11155, 1165, 1711, 11691, 57212, 29765, 19503, 14863, 9333, 20649, 40164, 21505, 11576, 7407, 9477, 44472, 1745, 36018, 27370, 50495, 10000, 5492, 4999, 0),
('    6001014170  DIVING & MARIN', 48692, 33744, 43771, 10703, 28367, 27477, 18529, 3949, 54788, 64430, 92983, 58089, 46796, 20314, 49779, 25558, 25387, 32795, 12049, 132110, 13999, 29999, 4999, -2507),
('    6001020100  CERTIFICATE', 7248, 3424, 590, 1763, 1681, 5683, 7376, 3054, 3984, 3332, 1814, 4461, 2106, 1417, 2702, 1515, 3425, 6077, 945, 2764, 999, 999, 932, 0),
('    6001022190  SURVEYOR EXPEN', 3198, 4927, 12165, 11781, 5830, 2548, 4059, 4924, 2626, 3813, 7612, 3159, 7378, 3605, 4692, 3028, 1545, 30252, 2526, 4850, 999, 999, 1213, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_request`
--

CREATE TABLE `purchase_request` (
  `kapal` varchar(255) DEFAULT NULL,
  `uraian_pekerjaan` varchar(2000) DEFAULT NULL,
  `status_part` varchar(255) DEFAULT NULL,
  `cost_element` varchar(20) DEFAULT NULL,
  `pr_number` int(20) DEFAULT NULL,
  `pr_date` varchar(20) DEFAULT NULL,
  `po_number` int(20) DEFAULT NULL,
  `po_date` varchar(255) DEFAULT NULL,
  `sa_number` varchar(20) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `nilai` int(20) DEFAULT NULL,
  `keterangan` varchar(2000) DEFAULT NULL,
  `penghematan` varchar(255) DEFAULT NULL,
  `tgl_proses` varchar(255) DEFAULT NULL,
  `requestor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
