-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 12:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `kapal` varchar(255) DEFAULT NULL,
  `employee` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`kapal`, `employee`) VALUES
('Pandan', 'Wulan'),
('Pelita', 'Adi'),
('Paluh Tabuhan', 'Bambang'),
('Pungut', 'Adi'),
('Pematang', 'Wulan'),
('Mangun Jaya', 'Adi'),
('Menggala', 'Bambang'),
('Minas', 'Bambang'),
('Melahin', 'Wulan'),
('Merbau', 'Dwiyanto'),
('Mundu', 'Dwiyanto'),
('Musi', 'Wulan'),
('Meditran', 'Adi'),
('Matindok', 'Bambang'),
('Mauhau', 'Wulan'),
('Merauke', 'Dwiyanto'),
('Kamojang', 'Adi'),
('Kasim', 'Dwiyanto'),
('Kakap', 'Bambang'),
('Parigi', 'Dwiyanto'),
('Pattimura', 'Bambang'),
('Pasaman', 'Wulan'),
('Panjang', 'Adi');

-- --------------------------------------------------------

--
-- Table structure for table `opex_apex`
--

CREATE TABLE `opex_apex` (
  `kapal` varchar(255) DEFAULT NULL,
  `actual` bigint(22) DEFAULT NULL,
  `commitment` bigint(22) DEFAULT NULL,
  `plan` bigint(22) DEFAULT NULL,
  `available` bigint(22) DEFAULT NULL,
  `curr` varchar(255) DEFAULT NULL,
  `cost_center` varchar(255) DEFAULT NULL,
  `curr_usd` varchar(5) DEFAULT NULL,
  `actual_usd` bigint(20) DEFAULT NULL,
  `available_usd` bigint(20) DEFAULT NULL,
  `commitment_usd` bigint(20) DEFAULT NULL,
  `plan_usd` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opex_apex`
--

INSERT INTO `opex_apex` (`kapal`, `actual`, `commitment`, `plan`, `available`, `curr`, `cost_center`, `curr_usd`, `actual_usd`, `available_usd`, `commitment_usd`, `plan_usd`) VALUES
('Pandan', 3030832083, 1644408195, 5776039564, 1100799286, 'IDR', 'A1404006', 'USD', 227489, 82624, 123426, 433539),
('Pelita', 3338856246, 2688583398, 7054129343, 1026689698, 'IDR', 'A1404029', 'USD', 250608, 77061, 201800, 529470),
('Paluh Tabuhan', 5285802059, 2923948049, 9761484449, 1551734340, 'IDR', 'A1404023', 'USD', 396743, 116470, 219466, 732679),
('Pungut', 3375455193, 1635365609, 5994449898, 983629096, 'IDR', 'A1404024', 'USD', 253355, 73829, 122748, 449932),
('Pematang', 1545497044, 3725523413, 7303585997, 2032565540, 'IDR', 'A1404025', 'USD', 116002, 152561, 279631, 548194),
('Mangun Jaya', 2217643194, 1332045664, 5345923563, 1796234705, 'IDR', 'A1404007', 'USD', 166452, 134822, 99981, 401255),
('Menggala', 2553518821, 1790971720, 5348177814, 1003687272, 'IDR', 'A1404008', 'USD', 191662, 75335, 134427, 401424),
('Minas', 3405197592, 1788300992, 6120823882, 927325299, 'IDR', 'A1404009', 'USD', 255588, 69603, 134227, 459418),
('Melahin', 5116205066, 920973026, 7763591883, 1726413792, 'IDR', 'A1404010', 'USD', 384013, 129581, 69127, 582721),
('Merbau', 1959017650, 3958160313, 7634528784, 1717350821, 'IDR', 'A1404011', 'USD', 147040, 128901, 297092, 573034),
('Mundu', 2440699124, 1413509414, 6645661085, 2791452546, 'IDR', 'A1404012', 'USD', 183194, 209521, 106095, 498811),
('Musi', 2383049171, 138352827, 4393252322, 1871850324, 'IDR', 'A1404054', 'USD', 178867, 140498, 10385, 329749),
('Meditran', 936355895, 750367881, 2863418063, 1176694288, 'IDR', 'A1404055', 'USD', 70281, 88321, 56321, 214923),
('Matindok', 4387263767, 1218136412, 6635968336, 1030568157, 'IDR', 'A1404056', 'USD', 329300, 77353, 91431, 498084),
('Mauhau', 2159377185, 1103496127, 4601281907, 1338408596, 'IDR', 'A1404057', 'USD', 162079, 100459, 82826, 345364),
('Merauke', 1255138913, 1996474466, 4701444221, 1449830843, 'IDR', 'A1404058', 'USD', 94208, 108822, 149852, 352882),
('Kamojang', 5804736240, 2494745206, 9242270085, 942788639, 'IDR', 'A1404052', 'USD', 435693, 70764, 187251, 693708),
('Kasim', 2272622951, 926149278, 5502740069, 2303967840, 'IDR', 'A1404069', 'USD', 170579, 172932, 69515, 413026),
('Kakap', 3466746921, 889456936, 5294925250, 938721393, 'IDR', 'A1404059', 'USD', 260208, 70459, 66761, 397427),
('Parigi', 1151106534, 427573973, 5390985679, 3812305172, 'IDR', 'A1404091', 'USD', 86400, 286145, 32093, 404638),
('Pattimura', 3791326, 0, 949790275, 945998949, 'IDR', 'A1404090', 'USD', 285, 71005, 0, 71290),
('Pasaman', 155527106, 0, 1543636354, 1061590229, 'IDR', 'A1404092', 'USD', 11674, 79681, 0, 115863),
('Panjang', 3791326, 0, 305527832, 301736506, 'IDR', 'A1404099', 'USD', 285, 22648, 0, 22932),
('', 58248231408, 33766542899, 126173636656, 33832343331, 'IDR', '', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_request`
--

CREATE TABLE `purchase_request` (
  `kapal` varchar(255) DEFAULT NULL,
  `cost_center` varchar(2000) DEFAULT NULL,
  `status_part` varchar(255) DEFAULT NULL,
  `cost_element` varchar(20) DEFAULT NULL,
  `pr_number` varchar(20) DEFAULT NULL,
  `pr_date` date DEFAULT NULL,
  `po_number` varchar(20) DEFAULT NULL,
  `po_date` date DEFAULT NULL,
  `sa_number` varchar(20) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `nilai` bigint(20) DEFAULT NULL,
  `deskripsi` varchar(2000) DEFAULT NULL,
  `technical_superintendent` varchar(2000) DEFAULT NULL,
  `tgl_proses` varchar(255) DEFAULT NULL,
  `requestor` varchar(255) DEFAULT NULL,
  `cost_element_desc` varchar(2000) DEFAULT NULL,
  `FRL_MD_MM_2018` varchar(2000) DEFAULT NULL,
  `nilai_po` bigint(20) DEFAULT NULL,
  `sa_date` varchar(255) DEFAULT NULL,
  `vendor` varchar(2000) DEFAULT NULL,
  `keterangan_pembayaran` varchar(2000) DEFAULT NULL,
  `penghematan` varchar(255) DEFAULT NULL,
  `proses_upload` varchar(255) DEFAULT NULL,
  `proses_pr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_request`
--

INSERT INTO `purchase_request` (`kapal`, `cost_center`, `status_part`, `cost_element`, `pr_number`, `pr_date`, `po_number`, `po_date`, `sa_number`, `tanggal`, `nilai`, `deskripsi`, `technical_superintendent`, `tgl_proses`, `requestor`, `cost_element_desc`, `FRL_MD_MM_2018`, `nilai_po`, `sa_date`, `vendor`, `keterangan_pembayaran`, `penghematan`, `proses_upload`, `proses_pr`) VALUES
('KASIM', 'A1404069', '', '6001014170', '300029279', '2017-11-16', '3900131175', '2017-11-16', '1000787548', NULL, 72513268, 'KALIBRASI FIX GAS DETECTOR', 'DWIYANTO PURNOMO', NULL, '', 'CE - DIVING & MARINE', '2018', 72000000, '', 'PT. CENTRADINDO UNITRAS', '1', NULL, NULL, NULL),
('PANDAN', 'A1404006', '', '6001014170', '300029515', '2017-11-23', 'RFQ', '0000-00-00', '1000657894', NULL, 103782331, 'PERBAIKAN PANEL AUX. ENGINE NO. 3 DISTANDARDKAN', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '342/F30322/FRL/2017-S5, Tanggal 22 Juli 2017', 0, '', 'PT. CENTRADINDO UNITRAS', '1', NULL, NULL, NULL),
('PUNGUT', 'A1404024', 'OEM JAPAN', '6001014170', '550006556', '2017-11-24', '3900120503', '2017-11-24', '1000597206', NULL, 426668903, 'OVERHOUL AE NO. 1', 'ADI SURYANTO', NULL, 'TERMIN I', 'CE - DIVING & MARINE', '24.11.2017', 405000000, '', 'PT. SAMUDRA PERDANA MARITIM', '1', NULL, NULL, NULL),
('MEDITRAN', 'A1404055', 'ITEM 2 COM HANLA', '6001014170', '300029595', '2017-11-24', 'RFQ', '0000-00-00', '', NULL, 19673000, 'PENGGANTIAN SENSOR TRANSMITER SOUNDING GAUGE COT 2 KANAN', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('MELAHIN', 'A1404010', 'TENAGA EXPERT', '6001014170', '300029594', '2017-11-24', '', '0000-00-00', '', NULL, 37944400, 'REKONDISI CRANK SHAFT AUXILIARY ENGINE (EKS)', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('SPOB PAGAI', '', '', '6001014170', '300029763', '2017-11-30', '3900121593', '2017-11-30', '', NULL, 39087500, 'SPOB PAGAI ', '', NULL, '', 'CE - DIVING & MARINE', '30.11.2017', 35000000, '', 'KJPPJOKO SURATNO', '', NULL, NULL, NULL),
('MANGUN JAYA', 'A1404007', 'OEM JAPAN', '6001014170', '550006619', '2017-12-04', '3900121040', '2017-12-14', '', NULL, 334550287, 'OVERHOUL CRANKSHAFT AE NO. 2 GRINDING', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '04.12.2017', 318211000, '', 'PT. YASINDO PURNAMA', '', NULL, NULL, NULL),
('MAUHAU', 'A1404057', '', '6001014170', '550006620', '2017-12-04', '3900121559', '2017-12-21', '1000600823', NULL, 183838980, 'SS COMMENCE DOCKING SURVEY, PROIP SHAFT1 SURVEY , CG ATS', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '04.12.2017', 183838980, '', 'PT. NIPPON KAIJI KYOKAI', '1', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', '', '6001014170', '300029941', '2017-12-05', '3900128635', '2017-12-05', '1000810312', NULL, 44560000, 'PENGGANTIAN NUT STUD CONNECTING ROD MAIN ENGINE', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '2018', 43000000, '', 'PT. MUTIARA LAUT', '1', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', 'JAMINAN KEASLIAN BARANG', '6001014170', '300029940', '2017-12-05', '3900144182', '2017-12-05', '1000805433', NULL, 36744500, 'PROVISION CRANE SEBELAH KANAN', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '2018', 36000000, '', 'PT. MUTIARA LAUT', '1', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', '', '6001014170', '300029923', '2017-12-05', 'RFQ', '0000-00-00', '', NULL, 49971231, 'PENGGANTIAN OIL THROW RING MAIN ENGINE ( OIL SEAL THRUST BEARING)', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('PUNGUT', 'A1404024', 'JAMINAN KEASLIAN BARANG', '6001014170', '300029921', '2017-12-05', '3900153818', '2017-12-05', '1000831131', NULL, 132777555, 'AUTOMATION COMBUSTION CONTROL AUX BOILER', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '2018', 132000000, '', 'PT. SARI MANDA', '1', NULL, NULL, NULL),
('PANDAN', 'A1404006', '', '6001014170', '300030076', '2017-12-07', '3900121279', '2017-12-18', '', NULL, 196981850, 'RECHANGE BASIC COMPRESSOR AC ACCOMODATION', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '470/F30322/FRL/2017-S5, Tgl. 01 November 2017', 196000000, '', 'PT. PATMA PANCER', '', NULL, NULL, NULL),
('MUNDU', 'A1404012', 'JAMINAN KEASLIAN BARANG DARI DISTRIBUTOR', '6001014170', '300030290', '2017-12-12', '', '0000-00-00', '', NULL, 44307528, 'PERBAIKAN SISTEM KONTROL & MONITORING COP, BALLAST, STRIPPER AND TANK CLEANING PUMP', 'DWIYANTO PURNOMO', NULL, 'delete pr', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('MUNDU', 'A1404012', 'TENAGA EXPERT DARI PIONEER', '6001014170', '300030269', '2017-12-12', '3900144199', '2017-12-12', '', NULL, 41414500, 'PEMASANGAN GEAR BOX ME', 'DWIYANTO PURNOMO', NULL, '', 'CE - DIVING & MARINE', '2018', 97000000, '', 'PT. PIONEER', '', NULL, NULL, NULL),
('MERBAU', 'A1404011', '', 'D80/17/B6-02S23', '550006732', '2017-12-18', '3900121591', '2017-12-21', '1000601743', NULL, 4536288759, 'ADDITIONAL DOCKING SURVEY', 'DWIYANTO PURNOMO', NULL, '', '', '2017', 4500000000, '', 'PT. WARUNA NUSA SENTANA', '1', NULL, NULL, NULL),
('PANDAN', 'A1404006', 'JAMINAN KEASLIAN BARANG', '6001014170', '300031312', '2018-01-10', '3900133993', '2018-01-10', '', NULL, 118970000, 'REPAIR HYDRAULIC MOTOR ANCHOR WINCH', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '203/ F30322 / FRL / 2017 - S5 TANGGAL 04 APRIL 2017', 112000000, '', 'PT. DWIKARYA UNGGUL MANUNGGAL', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', 'ENGINEER MAKER', '6001014170', '300031309', '2018-01-10', 'RFQ', '0000-00-00', '', NULL, 157378000, 'JASA OVERHOUL AE NO. 1', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('MELAHIN', 'A1404010', '', '6001014170', '300031304', '2018-01-10', 'RFQ', '0000-00-00', '', NULL, 177647080, 'PERBAIKAN KERUSAKAN KOMPRESSOR AC AKOMODASI', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('PELITA', 'A1404029', 'OEM JAPAN', '6001014170', '300031390', '2018-01-11', '3900133660', '2018-01-11', '', NULL, 150513830, 'PERBAIKAN AUXILIARY ENGINE NO. 2', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '299/F30322/MD/2017-S7, TGL. 19 Juni 2017', 115000000, '', 'PT. DWIKARYA UNGGUL MANUNGGAL', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', 'REKONDISI', '6001014170', '300031359', '2018-01-10', '3900148802', '2018-01-10', '1000830539', NULL, 92220000, 'REKONDISI SP. MAIN ENGINE', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '2018', 91500000, '', 'PT. MUTIARA LAUT', '1', NULL, NULL, NULL),
('PUNGUT', 'A1404024', '', '6001014170', '300031340', '2018-01-10', '', '0000-00-00', '', NULL, 1158861300, 'ADD. DOCKING SURVEY, FABRIKASI & REPAIRE POMPA, , PENGADAAN SEWAGE WATER TREATMENT PLAN', 'ADI SURYANTO', NULL, 'delete pr tanggal 28.03.2018', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('MAUHAU', 'A1404057', '', '6001014170', '300031955', '2018-01-24', 'RFQ', '0000-00-00', '', NULL, 149500000, 'PERBAIKAN GYRO COMPASS DAN PENGGANTIAN GYROSPHERE', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('MENGGALA', 'A1404008', 'COM RIKEN KEIKI', '6001014170', '300031953', '2018-01-24', 'RFQ', '0000-00-00', '', NULL, 57901200, 'GAS DETECTOR', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('PUNGUT', 'A1404024', '', '6001014170', '300032213', '2018-01-31', 'RFQ', '0000-00-00', '', NULL, 17777600, 'PERBAIKAN / CALIBRATION MONITORING RPM COP NO. 1, 2, 3 DAN BALLAST PUMP', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('MATINDOK', 'A1404056', 'COM ABB', '6001014170', '300032232', '2018-01-31', '', '0000-00-00', '', NULL, 103458357, 'MAIN ENGINE TURBO CHARGE OVERHOUL', 'BAMBANG KURNIAWAN', NULL, 'delete pr', 'CE - DIVING & MARINE', '2018', 0, '', '', '', NULL, NULL, NULL),
('PELITA', 'A1404029', '', '6001014170', '300032212', '2018-01-31', '3900138112', '2018-01-31', '1000810675', NULL, 175347010, 'SUPPLY DAN PASANG COMPRESSOR AC AKOMODASI DAN ALAT KELENGKAPANNYA', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '2018', 172000000, '', 'PT. AFALINDO PRATAMA', '1', NULL, NULL, NULL),
('MATINDOK', 'A1404056', 'TENAGA EKPERT PT PIONNER', '6001014170', '300032233', '2018-01-31', '3900138775', '2018-01-31', '1000765320', NULL, 282138000, 'MAIN ENGINE OVERHOUL', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '2018', 267000000, '', 'PT. PIONEER', '1', NULL, NULL, NULL),
('MUNDU', 'A1404012', '', 'D80/17/B6-02S15', '550007040', '2018-02-09', '3900133594', '2018-02-12', '1000655416', NULL, 728430304, 'DOCKING REPAIR TERMIN III', 'DWIYANTO PURNOMO', NULL, '', '', '2018', 728430304, '', 'PT. DOK DAN PERKAPALAN SURABAYA', '1', NULL, NULL, NULL),
('MELAHIN', 'A1404010', '', '6001014170', '300032895', '2018-02-15', '3900133806', '2018-02-15', '1000683485', NULL, 86186739, 'PEMASANGAN JANGKAR SPARE KAPAL', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '2018', 85000000, '', 'PT. PATMA PANCER (TL)', '1', NULL, NULL, NULL),
('MELAHIN', 'A1404010', '', '6001014170', '300032898', '2018-02-15', '3900138896', '2018-02-15', '', NULL, 51500000, 'JASA OVERHOUL AE NO. 1', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '2018', 49700000, '', 'PT. PIONEER', '', NULL, NULL, NULL),
('MELAHIN', 'A1404010', '', 'D80/18/B6-02S19', '550007089', '2018-02-26', '3900138631', '2018-02-26', '1000741858', NULL, 7506611153, 'DOCKING SURVEY', 'WULAN PRASETYA', NULL, 'TERMIN I', '', '2018', 7490000000, '', 'PT. BATAMEC', '', NULL, NULL, NULL),
('MATINDOK', 'A1404056', '', 'D/18/B6-02S14', '550007130', '2018-02-26', '3900138663', '2018-02-26', '1000741850', NULL, 4188995137, 'DOCKING SURVEY', 'BAMBANG KURNIAWAN', NULL, 'TERMIN I', '', '2018', 3995000000, '', 'PT. DAYA RADAR UTAMA', '', NULL, NULL, NULL),
('KAKAP', 'A1404059', '', '6001014170', '300033342', '2018-03-05', '3900138086', '2018-03-07', '1000684994', NULL, 700780500, 'TANK CLEANING DAN DESLOPING', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '512/F30322/FRL/2017-S5, Tgl. 06.12.2017', 680000000, '', 'PT. TIRTA MEGA NUSATARA', '', NULL, NULL, NULL),
('MANGUN JAYA', 'A1404007', 'JAMINAN KEASLIAN BARANG', '6001014170', '300033546', '2018-03-07', '3900139192', '2018-03-22', '1000737152', NULL, 304087928, 'OVERHAUL DAN CRANKSHAFT AE 3', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '2018', 339087928, '', 'PT. ARIYA KALIMUSADA (TL)', '1', NULL, NULL, NULL),
('MUNDU', 'A1404012', 'JAMINAN KEASLIAN BARANG', '6001014170', '300030269', '2017-12-12', '3900144199', '2017-12-12', '', NULL, 101500000, 'PEMASANGAN GEAR BOX ME', 'DWIYANTO PURNOMO', NULL, 'revisi PR tanggal 12.03.2018', 'CE - DIVING & MARINE', '2018', 97000000, '', 'PT. PIONEER', '', NULL, NULL, NULL),
('MINAS', 'A1404009', 'JAMINAN KEASLIAN BARANG', '6001014170', '300033692', '2018-03-13', '3900144183', '2018-03-13', '1000787571', NULL, 61915850, 'KAMPAS WINDLAS', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '2018', 59000000, '', 'PT. MUTIARA LAUT', '1', NULL, NULL, NULL),
('MELAHIN', 'A1404010', 'FABRIKASI', '6001014170', '300033747', '2018-03-14', '3900148748', '2018-03-14', '1000765066', NULL, 83050446, 'FABRIKASI GS PUMP', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '2018', 79000000, '', 'PT. DWIKARYA UNGGUL MANUNGGAL', '1', NULL, NULL, NULL),
('KAMOJANG', 'A1404052', 'ENGINEER WARTSIL', '6001014170', '300033903', '2018-03-20', '', '0000-00-00', '', NULL, 252938720, 'OVERHOUL MAIN ENGINE', 'ADI SURYANTO', NULL, 'Pak Ardan tgl. 22.05.2018', 'CE - DIVING & MARINE', '155/F30322/FRL/2018-S5 tanggal 13.03.2018', 0, '', '', 'delete', NULL, NULL, NULL),
('MERBAU', 'A1404011', '', 'D80/18/B6-02S110', '550007269', '2018-03-26', '3900149343', '2018-03-26', '1000810671', NULL, 7617371167, 'D/S - HULL & DECK DEPARTMENT', 'DWIYANTO PURNOMO', NULL, '', '', '170/F30322/FRL/2018-S5 tanggal 19.03.2018', 7528000000, '', 'PT. SAMUDRA MARINE INDONESIA', '1', NULL, NULL, NULL),
('PUNGUT', 'A1404024', '', 'D80/18/B6-02S15', '550007275', '2018-03-28', '', '0000-00-00', '', NULL, 1158861300, 'ADD D/S- HULL & DECK DEPARTMENT', 'ADI SURYANTO', NULL, 'Pak Ardan', '', '539/F30322/FRL/2017-S5 tanggal 27.12.2017', 0, '', '', 'delete pr tanggal 19.04.2018; di creat baru', NULL, NULL, NULL),
('MATINDOK', 'A1404056', 'COM ABB', 'D80/18/B6-02S14', '550007257', '2018-03-29', '3900139369', '2018-03-29', '1000766183', NULL, 912025726, 'MAIN ENGINE TURBO CHARGE OVERHOUL', 'BAMBANG KURNIAWAN', NULL, '', '', '02/F30322/FRL/2018-S5 tanggal 02.01.2018', 900000000, '', 'PT. DWIPUTRA PRANATA JAYA', '1', NULL, NULL, NULL),
('MELAHIN', 'A1404010', 'YANMAR', '6001014170', '300034134', '2018-03-27', '3900144071', '2018-03-27', '1000769063', NULL, 1139023057, 'GENERAL OVERHOUL AUX. ENGINE NO. 3', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '138/F30322/FRL/2018-S7 tanggal 28.02.2018', 1095000000, '', 'PT. PATMA PANCER', '1', NULL, NULL, NULL),
('PANDAN', 'A1404006', '', '6001014170', '300034340', '2018-04-03', '3900163043', '2018-04-03', '', NULL, 37476812, 'KALIBRASI FUEL INJECTION PUMP AUX. ENGINE NO. 3', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '124,125/F30322/FRL/2018-S5 TANGGAL 12 FEBRUARI 2018', 37000000, '', 'PT. PIONEER', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', 'JAMINAN KEASLIAN BARANG', '6001014170', '300034420', '2018-04-04', '3900154318', '2018-04-04', '', NULL, 80067500, 'ANCHORE WINDLASS', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '114/F30322/FRL/2018-S7 tanggal 07.02.2018', 76000000, '', 'PT. ACE GLOBAL TEKNINDO', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', '', '6001014170', '300034403', '2018-04-04', '3900164642', '2018-04-04', '', NULL, 215530855, 'PENGGANTIAN PIPA - PIPA PEMADAM KEBAKARAN DI ATAS DECK', 'BAMBANG KURNIAWAN', NULL, 'revisi pr tanggal 08.08.2018', 'CE - DIVING & MARINE', '173/F30322/FRL/2018-S7 tanggal 20.03.2018', 213500000, '', 'PT. AQNIL PUTRA PRATAMA', '', NULL, NULL, NULL),
('KAMOJANG', 'A1404052', 'TENAGA EXPERT PIONNER', '6001014170', '300034566', '2018-04-09', '3900158423', '2018-04-09', '', NULL, 142600000, 'OVERHOUL AUX. ENGINE NO. 2 & 3', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '171/F30322/FRL/2018-S7 tanggal 20.03.2018', 136000000, '', 'PT. PIONEER', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', 'JAMINAN KEASLIAN BARANG', '6001014170', '300034565', '2018-04-09', '3900153819', '2018-04-09', '1000810666', NULL, 212355000, 'PENGGANTIAN WALL TUBE WATER TUBE BOILER YANG BOCOR', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '318/F30322/FRL/2017-S7 tanggal 12.07.2017', 205000000, '', 'PT. SARI MANDA', '1', NULL, NULL, NULL),
('MERBAU', 'A1404011', '', '6001014170', '300034568', '2018-04-09', '3900149320', '2018-04-09', '', NULL, 215631525, 'LO PURIFIER 1 UNIT REKONDISI', 'DWIYANTO PURNOMO', NULL, '', 'CE - DIVING & MARINE', '176/F30322/FRL/2018-S7 tanggal 22.03.2018', 206000000, '', 'PT. ARMADA LAUTAN TEKNIK', '', NULL, NULL, NULL),
('KAMOJANG', 'A1404052', 'COM WARTSILA', '6001014170', '300030552', '2017-12-20', '3900128799', '2017-12-20', '1000822801', NULL, 56420078, 'JASA REPAIR MAIN ENGINE CYLINDER NO. 1', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '2018', 53000000, '', 'PT. WARTSILA INDONESIA', '1', NULL, NULL, NULL),
('KASIM', 'A1404069', 'TENAGA EXPERT FROM PIONEER', '6001014170', '300024539', '2017-07-12', '3900138898', '2017-07-12', '1000809578', NULL, 215300000, 'OVERHAUL AUX. ENGINE NO. 1, 2 DAN 3', 'DWIYANTO PURNOMO', NULL, '', 'CE - DIVING & MARINE', '2018', 203000000, '', 'PT. PIONEER', '1', NULL, NULL, NULL),
('MERAUKE', 'A1404058', 'TENAGA EXPERT FROM PIONEER', '6001014170', '300024580', '2017-07-12', '3900139022', '2017-07-12', '1000809594', NULL, 226175000, 'OVERHAUL AUX. ENGINE NO. 1, 2 DAN 3', 'DWIYANTO PURNOMO', NULL, '', 'CE - DIVING & MARINE', '2018', 219000000, '', 'PT. PIONEER', '1', NULL, NULL, NULL),
('MELAHIN', 'A1404010', 'JAMINAN KEASLIAN BARANG DISTRIBUTOR', '6001014170', '300034812', '2018-04-06', 'RFQ', '0000-00-00', '', NULL, 68500000, 'MASTER UNIT SYSTEM OWS', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '40/F30322/FRL/2018-S7 tanggal 11.01.2018', 0, '', '', '', NULL, NULL, NULL),
('MINAS', 'A1404009', 'JAMINAN KEASLIAN BARANG', '6001014170', '300034982', '2018-04-19', '3900157890', '2018-04-19', '', NULL, 129700000, 'OVERHOUL HYDRAULIC STAR WINDLASS', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '175/F30322/FRL/2018-S7 tanggal 22.03.2018', 120000000, '', 'PT. ACE GLOBAL TEKNINDO', '', NULL, NULL, NULL),
('PUNGUT', 'A1404024', '', 'D80/18/B6-02S15', '550007427', '2018-04-19', '3900144420', '2018-04-25', '1000742540', NULL, 1158861300, 'ADD D/S- HULL & DECK DEPARTMENT', 'ADI SURYANTO', NULL, '', '', '539/F30322/FRL/2017-S5 tanggal 27.12.2017', 1148247250, '', 'PT. DAYA RADAR UTAMA', '1', NULL, NULL, NULL),
('PUNGUT', 'A1404024', 'JAMINAN KEASLIAN BARANG', '6001014170', '300032897', '2018-02-15', '3900141191', '2018-02-15', '1000763421', NULL, 94123988, 'PIPA DOWN COMER - BOILER', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '2018', 93000000, '', 'PT. SARI MANDA', '1', NULL, NULL, NULL),
('PUNGUT', 'A1404024', 'OEM JAPAN', '6001014170', '300035151', '2018-04-24', '3900149502', '2018-04-24', '', NULL, 747450000, 'OVERHAUL AE NO. 3 - SN6261730', 'ADI SURYANTO', NULL, 'split dua pr material dan service ', 'CE - DIVING & MARINE', '157/F30322/FRL/2018-S7 tanggal 14.03.2018', 660383282, '', 'PT. PATMA PANCER', '', NULL, NULL, NULL),
('MERAUKE', 'A1404058', 'COM ANSHUTZ', '6001014170', '300035600', '2018-05-07', '3900149469', '2018-05-28', '', NULL, 73970000, 'GYROCOMPASS', 'DWIYANTO PURNOMO', NULL, '', 'CE - DIVING & MARINE', '240/F30322/FRL/2018-S7 tanggal 07.05.2018', 72000000, '', 'PT. ALFA INTI DINAMIKA', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', 'TENAGA EXPERT WITH EXPERIENCE DAIHATSU', '6001014170', '300035596', '2018-05-07', 'RFQ', '0000-00-00', '', NULL, 104600000, 'OVERHOUL COMPLETE AUX. ENGINE NO. 1', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '206/F30322/FRL/2018-S7 tanggal 17.04.2018', 0, '', '', '', NULL, NULL, NULL),
('KAMOJANG', 'A1404052', 'TENAGA EXPERT WARTSILA', '6001014170', '300035950', '2018-05-16', '3900159153', '2018-05-16', '', NULL, 57000000, 'RR. TURBO CHARGER MAIN ENGINE', 'ADI SURYANTO', NULL, 'split dua pr material dan service ', 'CE - DIVING & MARINE', '232/F30322/FRL/2018-S7 tanggal 02.05.2018', 54000000, '', 'PT. WARTSILA INDONESIA', '', NULL, NULL, NULL),
('KAMOJANG', 'A1404052', 'ITEM 1 TENAGA EXPERT; ITEM 2 COM CARRIER; ITEM 3 S.D 8 JAMINAN KEASLIAN BARANG', '6001014170', '300036465', '2018-05-31', '3900158831', '2018-05-31', '', NULL, 185769800, 'AC CENTRAL NO. 1', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '258/F30322/FRL/2018-S7 tanggal 15.05.2018', 178000000, '', 'PT. CAHAYA MATUARI', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', '', '6001014170', '300036735', '2018-06-07', '3900164650', '2018-06-07', '', NULL, 84612500, 'BRAKE LINING WINDLASS ANCHOR, MOORING & CARGO CRANE', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '273/F30322/FRL/2018-S7 tanggal 15.05.2018', 84000000, '', 'PT. CAHAYA MATUARI', '', NULL, NULL, NULL),
('MENGGALA', 'A1404008', '', '6001014170', '300036795', '2018-06-08', '3900163259', '2018-06-08', '', NULL, 120410000, 'MAIN ENGINE OVERHOUL CYLINDER 1,2,3,4,5,6', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '279/F30322/FRL/2018-S7 tanggal 18.05.2018', 118000000, '', 'PT. SAMUDERA PERDANA MARITIM', '', NULL, NULL, NULL),
('KASIM', 'A1404069', 'TENAGA EXPERT', '6001014170', '300037036', '2018-06-28', '3900164121', '2018-06-28', '', NULL, 145420400, 'OVERHOUL MAIN ENGINE', 'DWIYANTO PURNOMO', NULL, '', 'CE - DIVING & MARINE', '275/F30322/FRL/2018-S7 tanggal 16.05.2018', 140000000, '', 'PT. PATMA PANCER', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', 'JAMINAN KEASLIAN BARANG', '6001014170', '300037037', '2018-06-28', 'RFQ', '0000-00-00', '', NULL, 186022000, 'SUPPLY DAN PASANG COMPRESSOR AC AKOMODASI DAN ALAT KELENGKAPANNYA', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '244/F30322/FRL/2018-S7 tanggal 05.05.2018', 0, '', '', '', NULL, NULL, NULL),
('PEMATANG', 'A1404025', '1-3 COM SPERRY & MARINE', '6001014170', '300037087', '2018-06-29', '', '0000-00-00', '', NULL, 349502100, 'SPEED LOG', 'WULAN PRASETYA', NULL, 'DELETE', 'CE - DIVING & MARINE', '314/F30322/FRL/2018-S7 tanggal 04.06.2018', 0, '', '', '', NULL, NULL, NULL),
('MUNDU', 'A1404012', 'ITEM 1 TENAGA EXPERT; ITEM 2 COM FURUNO', '6001014170', '300037163', '2018-07-03', '3900159447', '2018-07-30', '', NULL, 41915994, 'TEKNIS PERBAIKAN RADAR 2 UNIT', 'DWIYANTO PURNOMO', NULL, '', 'CE - DIVING & MARINE', '256/F30322/FRL/2018-S7 tanggal 14.05.2018', 32000000, '', 'PT. CIPTA PRIMA ARYATAMA', '', NULL, NULL, NULL),
('MUSI', 'A1404054', 'TENAGA EXPERT', '6001014170', '300037162', '2018-07-03', 'RFQ', '0000-00-00', '', NULL, 34374000, 'REPAIRED OF OIL DISCHARGE MONITORING ( ODM ) SYSTEM)', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '299/F30322/FRL/2018-S7 tanggal 30.05.2018', 0, '', '', '', NULL, NULL, NULL),
('MELAHIN', 'A1404010', '', 'D80/18/B6-02S19', '550007844', '2018-07-06', '3900164311', '2018-07-06', '', NULL, 658125000, 'ADDITIONAL DOCKING SURVEY D/S- HULL & DECK DEPARTMENT', 'WULAN PRASETYA', NULL, '', '', '323/F30322/FRL/2018-S7 tanggal 25.06.2018', 505000000, '', 'PT. BATAMEC', '', NULL, NULL, NULL),
('PEMATANG', 'A1404025', 'TENAGA EXPERT', '6001014170', '300037539', '2018-07-16', '3900164052', '2018-07-16', '', NULL, 61420000, 'JASA PEMASANGAN & INSTAL UNIT INSTALASI BNWAS & VDR', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '212/F30322/FRL/2018-S7 tanggal 23.04.2018', 50000000, '', 'PT.CIPTA PRIMA ARYATAMA', '', NULL, NULL, NULL),
('PEMATANG', 'A1404025', 'ITEM 1 TENAGA EXPERT; ITEM 2 - 4 COM CROWCON; ITEM 5 JAMINAN KEASLIAN BARANG', '6001014170', '300037641', '2018-07-16', '3900159133', '2018-07-20', '1000830170', NULL, 167324000, 'FIX GAS DETECTOR PUMP ROOM', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '290/F30322/FRL/2018-S7 tanggal 25.05.2018', 155000000, '', 'PT. SAMUDRA PERDANA MARITIM', '1', NULL, NULL, NULL),
('MATINDOK', 'A1404056', '', '6001014170', '300037651', '2018-07-16', 'RFQ', '0000-00-00', '', NULL, 75632189, 'ADDITIONAL DOCKING SURVEY', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '216/F30322/FRL/2018-S7 tanggal 26.04.2018', 0, '', '', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', '', '6001014170', '300037672', '2018-07-17', 'RFQ', '0000-00-00', '', NULL, 42547500, 'PERBAIKAN SISTEM KONTROL & MONITORING COP, BALLAST, STRIPPER AND TANK CLEANING PUMP', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '348/F30322/FRL/2018-S7 tanggal 10.07.2018', 0, '', '', '', NULL, NULL, NULL),
('PELITA', 'A1404029', '', '6001014170', '300037673', '2018-07-17', '3900168637', '2018-07-17', '', NULL, 65109000, 'PERBAIKAN TEMPERATURE BEARING SENSOR FOR TURBIN COP AND BALLAST PUMP', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '288/F30322/FRL/2018-S7 tanggal 24.05.2018', 52000000, '', 'PT. SAMUDERA PERDANA MARITIM', '', NULL, NULL, NULL),
('MANGUN JAYA', 'A1404007', '', 'D80/18/B6-02S114', '550007947', '2018-07-24', '3900159285', '2018-07-25', '1000823248', NULL, 2819766240, 'D/S. HULL & DECK DEPARTMENT ', 'ADI SURYANTO', NULL, '', '', '', 2819766240, '', 'PT. DAYA RADAR UTAMA 5112455', '1', NULL, NULL, NULL),
('KAMOJANG', 'A1404052', 'COM WARTSILA', '6001014170', '300037906', '2018-07-25', 'RFQ', '0000-00-00', '', NULL, 245058269, 'OVERHOUL & GENERAK SERVIS GOVERNOR MAIN ENGINE', 'ADI SURYANTO', NULL, '', 'CE - DIVING & MARINE', '354/F30322/FRL/2018-S7 tanggal 10.07.2018', 0, '', '', '', NULL, NULL, NULL),
('MATINDOK', 'A1404056', 'JAMINAN KEASLIAN BARANG', '6001014170', '300037937', '2018-07-30', 'RFQ', '0000-00-00', '', NULL, 170550000, 'GAS DETECTION SYSTEM', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '358/F30322/FRL/2018-S7 tanggal 10.07.2018', 0, '', '', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', '', '6001014170', '300038069', '2018-08-03', 'RFQ', '0000-00-00', '', NULL, 42207975, 'REPLATING SHELL PLATE DI AREA BULBOS', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '332/F30322/FRL/2018-S7 tanggal 26.06.2018', 0, '', '', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', '', 'D80/18/B6-02S18', '550008022', '2018-08-07', 'RFQ', '0000-00-00', '', NULL, 7454809488, 'D/S HULL & DECK DEPARTMENT', 'BAMBANG KURNIAWAN', NULL, '', '', '372/F30322/FRL/2018-S7 tanggal 16.07.2018', 0, '', '', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', '', '6001014170', '300038457', '2018-08-10', 'RFQ', '0000-00-00', '', NULL, 109375000, 'GENERAL SERVICES PADA TURBIN COP NO. 1', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '244/F30322/FRL/2018-S7 tanggal 05.05.2018', 0, '', '', '', NULL, NULL, NULL),
('MENGGALA', 'A1404008', 'TENAGA EXPERT', '6001014170', '300038563', '2018-08-14', '', '0000-00-00', '', NULL, 199320000, 'OVERHOUL AUX. ENGINE NO. 1, 3 & OVERHOUL TURBO CHARGE AUX. ENGINE 1, 2 , 3 ', 'BAMBANG KURNIAWAN', NULL, '', 'CE - DIVING & MARINE', '282 & 276/F30322/FRL/2018-S7 tanggal 18.05.2018', 0, '', '', '', NULL, NULL, NULL),
('PANDAN', 'A1404006', 'JAMINAN KEASLIAN BARANG', '6001014170', '300038955', '2018-08-30', '', '0000-00-00', '', NULL, 227819000, 'PENGGANTIAN PIPA PENDINGIN AIR LAUT ', 'WULAN PRASETYA', NULL, '', 'CE - DIVING & MARINE', '386/F30322/FRL/2018-S7 tanggal 30.07.2018', 0, '', '', '', NULL, NULL, NULL),
('KASIM', 'A1404069', '', 'D80/18/B6-02S12', '550008213', '2018-09-07', '', '0000-00-00', '', NULL, 5002054376, 'DOCKING REPAIR ', 'DWIYANTO PURNOMO', NULL, '', '', '436/F30322/FRL/2018-S5 tanggal 05.09.2018', 0, '', '', '', NULL, NULL, NULL),
('MERAUKE', 'A1404058', '', 'D80/18/B6-02S16', '550008224', '2018-09-07', '', '0000-00-00', '', NULL, 4896107796, 'DOCKING REPAIR', 'DWIYANTO PURNOMO', NULL, '', '', '436/F30322/FRL/2018-S5 tanggal 05.09.2018', 0, '', '', '', NULL, NULL, NULL),
('PALUH TABUAN', 'A1404023', 'ITEM 1 & 8 TENAGA EXPERT; ITEM 2 S.D 7 & 9 S.D 21 COM ALAVA LAVAL ', '6001014170', '300037071', '2018-06-29', '', '0000-00-00', '', NULL, 776981100, 'PERBAIKAN LO PURIFIER 1,2 & FO PURIFIER 1 ,2', 'BAMBANG KURNIAWAN', NULL, 'pak Ardan', 'CE - DIVING & MARINE', '243/F30322/FRL/2018-S5 tanggal 18.05.2018', 0, '', 'delete pr', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '1970-01-01', '', '1970-01-01', '', NULL, 0, '', '', NULL, '', '', '', 0, '', '', '', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
