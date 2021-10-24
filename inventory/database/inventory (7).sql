-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 12:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` int(11) DEFAULT NULL,
  `beratJenis` decimal(10,4) DEFAULT NULL,
  `diameter` decimal(10,4) DEFAULT NULL,
  `panjang` decimal(10,4) DEFAULT NULL,
  `lebar` decimal(10,4) DEFAULT NULL,
  `bentuk` varchar(30) DEFAULT NULL,
  `ongkosPotong` int(11) DEFAULT NULL,
  `hanyaPotong` varchar(5) DEFAULT NULL,
  `berat` decimal(10,4) DEFAULT NULL,
  `hargaKg` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `hargaSatuan` decimal(10,4) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `tebal` decimal(10,4) DEFAULT NULL,
  `idProductType` int(11) DEFAULT NULL,
  `noSO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `beratJenis`, `diameter`, `panjang`, `lebar`, `bentuk`, `ongkosPotong`, `hanyaPotong`, `berat`, `hargaKg`, `qty`, `hargaSatuan`, `diskon`, `tebal`, `idProductType`, `noSO`) VALUES
(1, '7.0000', '0.0000', '200.0000', '500.0000', 'Plate', 0, '', '27.4750', 10000, 1, '274750.0000', 0, '35.0000', 17, 'SO/200000002'),
(2, '7.0000', '0.0000', '150.0000', '100.0000', 'Plate', 0, '', '10.5980', 10000, 2, '52990.0000', 0, '45.0000', 17, 'SO/200000002'),
(3, '7.0000', '0.0000', '150.0000', '100.0000', 'Plate', 0, '', '10.5980', 10000, 2, '52990.0000', 0, '45.0000', 17, 'SO/200000002'),
(4, '6.0000', '50.0000', '1000.0000', '0.0000', 'RoundBar', 0, '', '65.3420', 15000, 4, '245033.0000', 0, '0.0000', 10, 'SO/200000002'),
(5, '7.8500', '0.0000', '405.0000', '83.0000', 'BlockingPlate', 0, '', '23.7490', 17000, 2, '201867.0000', 0, '45.0000', 17, 'SO/200000006'),
(6, '7.8500', '0.0000', '305.0000', '83.0000', 'BlockingPlate', 0, '', '8.9430', 17000, 1, '152031.0000', 0, '45.0000', 17, 'SO/200000006'),
(7, '7.8500', '0.0000', '305.0000', '352.0000', 'BlockingPlate', 0, '', '75.8500', 17000, 2, '644725.0000', 0, '45.0000', 17, 'SO/200000006'),
(8, '7.8500', '0.0000', '445.0000', '128.0000', 'BlockingPlate', 0, '', '40.2420', 17000, 2, '342057.0000', 0, '45.0000', 17, 'SO/200000006'),
(9, '7.8500', '0.0000', '305.0000', '128.0000', 'BlockingPlate', 0, '', '13.7910', 17000, 1, '234447.0000', 0, '45.0000', 17, 'SO/200000006'),
(10, '7.8500', '0.0000', '455.0000', '285.0000', 'BlockingPlate', 0, '', '91.6150', 16400, 2, '751243.0000', 0, '45.0000', 17, 'SO/200000007'),
(11, '7.8500', '0.0000', '285.0000', '65.0000', 'BlockingPlate', 0, '', '40.7180', 16400, 8, '83472.0000', 0, '35.0000', 17, 'SO/200000007'),
(12, '7.8500', '0.0000', '525.0000', '285.0000', 'BlockingPlate', 0, '', '71.6480', 16400, 2, '587514.0000', 0, '30.5000', 17, 'SO/200000007'),
(13, '7.8500', '0.0000', '455.0000', '285.0000', 'BlockingPlate', 0, '', '82.4540', 16400, 2, '676123.0000', 0, '40.5000', 17, 'SO/200000007'),
(14, '7.0000', '57.0000', '2000.0000', '0.0000', 'RoundBar', 0, '', '51.2780', 15000, 1, '769170.0000', 0, '1.0000', 10, 'SO/200000005'),
(15, '6.0000', '57.1500', '2000.0000', '0.0000', 'RoundBar', 0, '', '39.1930', 15000, 1, '587895.0000', 0, '1.0000', 10, 'SO/200000004'),
(16, '6.0000', '80.0000', '500.0000', '0.0000', 'RoundBar', 0, '', '38.4000', 19000, 2, '364800.0000', 0, '0.0000', 11, 'SO/200000003'),
(17, '6.0000', '57.1500', '1500.0000', '0.0000', 'RoundBar', 0, '', '58.7900', 18000, 2, '529110.0000', 0, '30.0000', 10, 'SO/200000003'),
(18, '6.0000', '57.1500', '1500.0000', '0.0000', 'RoundBar', 0, '', '17.0910', 15000, 2, '256365.0000', 0, '30.0000', 10, 'SO/200000003'),
(19, '7.0000', '0.0000', '300.0000', '150.0000', 'Plate', 0, '', '31.7920', 10000, 3, '105973.0000', 0, '30.0000', 17, 'SO/200000001'),
(20, '7.0000', '0.0000', '100.0000', '100.0000', 'Plate', 0, '', '19.6250', 10000, 10, '19625.0000', 0, '25.0000', 17, 'SO/200000001'),
(21, '7.0000', '0.0000', '100.0000', '100.0000', 'Plate', 0, '', '63.7560', 15000, 10, '478170.0000', 0, '25.0000', 17, 'SO/200000001'),
(22, '7.8500', '0.0000', '178.0000', '905.0000', 'BlockingPlate', 0, '', '347.7530', 17400, 5, '999999.9999', 0, '55.0000', 17, 'SO/200000008'),
(23, '7.8500', '0.0000', '178.0000', '435.0000', 'BlockingPlate', 0, '', '33.4300', 17400, 1, '581682.0000', 0, '55.0000', 17, 'SO/200000008'),
(24, '7.8500', '0.0000', '178.0000', '395.0000', 'BlockingPlate', 0, '', '60.7130', 17400, 2, '528203.0000', 0, '55.0000', 17, 'SO/200000008'),
(25, '7.8500', '0.0000', '60.0000', '245.0000', 'BlockingPlate', 0, '', '13.8470', 17400, 2, '120469.0000', 0, '60.0000', 17, 'SO/200000008');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `Idmember` varchar(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `Telp` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Idmember`, `Nama`, `Alamat`, `Telp`, `Email`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(1, '2019110001', 'PT. ABC', 'Tangerang', '081234567890', 'abc@yahoo.com', 'D', 20, '2019-11-29 18:39:00', 22, '2020-01-22 10:20:29'),
(2, '2019120001', 'Direct Consumer', 'Di tempat', '081234567890', '', 'D', 24, '2019-12-04 14:37:56', 22, '2020-01-22 10:20:33'),
(3, '2020010001', 'PT. MITRA TAMA GEMILANG', '-', '-', '', 'D', 22, '2020-01-22 10:50:54', 24, '2020-08-28 16:20:34'),
(4, '2020070004', 'PT. ANUGRAH SEJAHTERA MAKMUR', '-', '-', '', 'A', 22, '2020-07-11 09:52:48', 24, '2020-08-28 16:12:10'),
(5, '2020070005', 'PT. SUPRA TERATAI METAL', '-', '-', '', 'D', 22, '2020-07-11 09:53:52', 24, '2020-08-28 16:20:39'),
(6, '2020070006', 'PT. ANEKA CIPTA PROSPERINDO', '-', '-', '', 'A', 22, '2020-07-11 14:22:10', 27, '2020-07-28 12:29:15'),
(7, '2020070007', 'CV. MITRA TEKNIK ABADI', '-', '-', '', 'D', 22, '2020-07-13 13:25:02', 24, '2020-08-28 16:12:58'),
(8, '2020070008', 'PT. TAG', '-', '-', '', 'D', 25, '2020-07-13 14:16:43', 24, '2020-08-28 16:13:06'),
(9, '2020070009', 'PT. ADIPERKASA ANUGRAH PRATAMA', '-', '-', '', 'D', 25, '2020-07-13 14:17:00', 24, '2020-08-28 16:20:56'),
(10, '2020070010', 'CASH', '-', '-', '', 'D', 27, '2020-07-26 20:48:37', 24, '2020-08-28 16:20:47'),
(11, '2020070011', 'SETIA KAWAN FORKLIF', '-', '-', '', 'D', 27, '2020-07-28 12:24:50', 24, '2020-08-28 16:20:50'),
(12, '2020070012', 'HKM', '-', '-', '', 'D', 27, '2020-07-28 12:55:26', 24, '2020-08-28 16:21:58'),
(13, '2020080013', 'PT. CIPTA PERDANA LANCAR', '-', '-', '', 'D', 27, '2020-08-10 15:24:39', 24, '2020-08-28 16:22:02'),
(14, '', '', '', '', '', 'D', 27, '2020-08-10 15:59:00', 24, '2020-12-20 16:42:44'),
(15, '2020080015', 'PT PANATA JAYA MANDIRI', 'TANGERANG', '59492166', '', 'D', 28, '2020-08-27 16:37:13', 24, '2020-08-28 16:22:10'),
(16, '2020080016', 'PT. PRESINDO CENTRAL', '-', '-', '', 'D', 24, '2020-08-28 16:18:53', 24, '2020-08-28 16:22:13'),
(17, '2020080017', 'PT. ARTECH PRESSIS MESINDO', 'BOGOR', '87914518', 'purchasing@artech.com', 'A', 24, '2020-08-28 16:28:47', 24, '2020-08-28 16:29:12'),
(18, '2020080018', 'PT. ADIPERKASA ANUGRAH PRATAMA', '-', '-', '', 'A', 24, '2020-08-28 16:30:04', 0, '0000-00-00 00:00:00'),
(19, '2020080019', 'PT. ANUGERAH DAYA INDUSTRI KOMPONEN UTAMA', '-', '-', '', 'A', 24, '2020-08-28 16:30:51', 24, '2020-08-28 16:39:11'),
(20, '2020080020', 'BENGKEL MERDEKA', '-', '-', '', 'A', 24, '2020-08-28 16:31:10', 0, '0000-00-00 00:00:00'),
(21, '2020080021', 'PT. BUANA MERDEKA JAYA', '-', '-', '', 'A', 24, '2020-08-28 16:39:43', 24, '2020-08-28 16:39:57'),
(22, '2020080022', 'CASH', '-', '-', '', 'A', 24, '2020-08-28 16:40:16', 0, '0000-00-00 00:00:00'),
(23, '2020080023', 'PT. CITRA NUGERAH KARYA', '-', '-', '', 'A', 24, '2020-08-28 16:40:57', 0, '0000-00-00 00:00:00'),
(24, '2020080024', 'PT. CHANDRA NUGERAH CIPTA', '-', '-', '', 'A', 24, '2020-08-28 16:41:33', 0, '0000-00-00 00:00:00'),
(25, '2020080025', 'PT. CHANDRA NUGERAH CEMERLANG', '-', '-', '', 'A', 24, '2020-08-28 16:42:15', 0, '0000-00-00 00:00:00'),
(26, '2020080026', 'PT. CITRA NAGA INDAH', '-', '-', '', 'A', 24, '2020-08-28 16:42:42', 0, '0000-00-00 00:00:00'),
(27, '2020080027', 'PT. CIPTA METALINDO PERSADA', '-', '-', '', 'A', 24, '2020-08-28 16:43:26', 0, '0000-00-00 00:00:00'),
(28, '2020080028', 'PT. CIPTA PERDANA LANCAR', '-', '-', '', 'A', 24, '2020-08-28 16:43:50', 0, '0000-00-00 00:00:00'),
(29, '2020080029', 'PT. FROCO ARGO LESTARI', '-', '-', '', 'A', 24, '2020-08-28 16:44:37', 0, '0000-00-00 00:00:00'),
(30, '2020080030', 'PT. GLOBAL METAL TECHNOLOGY', '-', '-', '', 'A', 24, '2020-08-28 16:45:39', 0, '0000-00-00 00:00:00'),
(31, '2020080031', 'PT. GIGA CREATIVE ENGINEERING', '-', '-', '', 'A', 24, '2020-08-28 16:46:13', 0, '0000-00-00 00:00:00'),
(32, '2020080032', 'PT GUNA KARYA GEMILANG', '-', '-', '', 'A', 24, '2020-08-28 16:46:46', 0, '0000-00-00 00:00:00'),
(33, '2020080033', 'HANDOKO', '-', '=', '', 'A', 24, '2020-08-28 16:47:08', 24, '2020-08-28 16:47:17'),
(34, '2020080034', 'PT. HIMALAYA EVEREST JAYA', '-', '-', '', 'A', 24, '2020-08-28 16:47:47', 0, '0000-00-00 00:00:00'),
(35, '2020080035', 'PT. HIMALAYA NABEYA INDONESIA', '-', '-', '', 'A', 24, '2020-08-28 16:48:38', 0, '0000-00-00 00:00:00'),
(36, '2020080036', 'PT. HIMALAYA TRANSMEKA', '-', '-', '', 'A', 24, '2020-08-28 16:49:16', 0, '0000-00-00 00:00:00'),
(37, '2020080037', 'PT. HYDRAXLE PERKASA', '-', '-', '', 'A', 24, '2020-08-28 16:49:49', 0, '0000-00-00 00:00:00'),
(38, '2020080038', 'PT. INDOSAFETY SENTOSA INDUSTRY', '-', '-', '', 'A', 24, '2020-08-29 13:23:54', 0, '0000-00-00 00:00:00'),
(39, '2020080039', 'PT. KAISAR MOTOR INDONESIA', '-', '-', '', 'A', 29, '2020-08-29 13:26:33', 0, '0000-00-00 00:00:00'),
(40, '2020080040', 'PT. KREASI SAKTI MANDIRI', '-', '-', '', 'A', 29, '2020-08-29 13:27:00', 0, '0000-00-00 00:00:00'),
(41, '2020080041', 'CV. MITRA TEKNIK ABADI', '-', '-', '', 'A', 29, '2020-08-29 13:27:34', 0, '0000-00-00 00:00:00'),
(42, '2020080042', 'PT. MITRA TOYOTAKA INDONESIA', '-', '-', '', 'A', 29, '2020-08-29 13:29:09', 0, '0000-00-00 00:00:00'),
(43, '2020080043', 'MULTI TEKNIK (PRIYANTO)', '-', '-', '', 'A', 29, '2020-08-29 13:30:18', 0, '0000-00-00 00:00:00'),
(44, '2020080044', 'PT. PARAMITA CAHAYA MANDIRI', '-', '-', '', 'A', 29, '2020-08-29 13:31:33', 0, '0000-00-00 00:00:00'),
(45, '2020080045', 'PT. PANCA JAYA DWIMAKMUR', '-', '-', '', 'A', 29, '2020-08-29 13:33:14', 0, '0000-00-00 00:00:00'),
(46, '2020080046', 'PT. PRESINDO CENTRAL', '-', '-', '', 'A', 29, '2020-08-29 13:33:59', 0, '0000-00-00 00:00:00'),
(47, '2020080047', 'PT. PERSADA SELARAS INDONESIA', '-', '-', '', 'A', 29, '2020-08-29 13:34:36', 0, '0000-00-00 00:00:00'),
(48, '2020080048', 'PT. RINNAI INDONESIA', '-', '-', '', 'A', 29, '2020-08-29 13:35:23', 0, '0000-00-00 00:00:00'),
(49, '2020080049', 'PT. RODA PRIMA LANCAR', '-', '-', '', 'A', 29, '2020-08-29 13:36:03', 0, '0000-00-00 00:00:00'),
(50, '2020080050', 'PT. RHODA BAKTI JAYA', '-', '-', '', 'A', 29, '2020-08-29 13:36:33', 0, '0000-00-00 00:00:00'),
(51, '2020080051', 'SARANA TEKNIK', '-', '-', '', 'A', 29, '2020-08-29 13:37:15', 0, '0000-00-00 00:00:00'),
(52, '2020080052', 'PT. SARANA WIRA REKSA', '-', '-', '', 'A', 29, '2020-08-29 13:37:38', 0, '0000-00-00 00:00:00'),
(53, '2020080053', 'PT. SUPEREX RAYA', '-', '-', '', 'A', 29, '2020-08-29 13:38:28', 0, '0000-00-00 00:00:00'),
(54, '2020080054', 'PT. SUPRA TERATAI METAL', '-', '-', '', 'A', 29, '2020-08-29 13:39:01', 0, '0000-00-00 00:00:00'),
(55, '2020080055', 'SRI PURWANTO/ANTO INDO FOAM', '-', '-', '', 'A', 29, '2020-08-29 13:39:44', 0, '0000-00-00 00:00:00'),
(56, '2020080056', 'PT. TRIDAYA ARTHAGUNA SANTARA', '-', '-', '', 'A', 29, '2020-08-29 13:40:32', 0, '0000-00-00 00:00:00'),
(57, '2101673333', 'PT Noe', 'Jl.Flamboyan', '08223311665', 'aldald@gmail.com', 'A', NULL, '2020-11-12 07:22:05', NULL, '2020-11-12 07:22:05'),
(58, '2101672222', 'PT. Astra Daihatsu', 'Sunter, Jakarta Utara, Indonesia', '012345678', 'daihatsu@astra.co.id', 'D', NULL, '2020-11-21 04:30:33', NULL, '2020-11-21 04:33:46'),
(59, '2101646994', 'PT. Adrian', 'Jakarta', '085311003913', 'adrian@company.com', 'D', NULL, '2020-11-23 13:17:29', NULL, '2020-11-23 13:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakturbelis`
--

CREATE TABLE `fakturbelis` (
  `id` int(11) NOT NULL,
  `Supplier` varchar(200) NOT NULL,
  `NoFaktur` varchar(30) NOT NULL,
  `TglFaktur` datetime NOT NULL,
  `TglJatuhTempo` datetime NOT NULL,
  `NoPO` varchar(30) NOT NULL,
  `TglPO` datetime NOT NULL,
  `TglJatuhTempoPO` datetime NOT NULL,
  `ItemBarang` varchar(80) NOT NULL,
  `Berat` varchar(10) NOT NULL,
  `HargaKg` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `HargaSatuan` int(11) NOT NULL,
  `Diskon` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `PPN` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakturbelis`
--

INSERT INTO `fakturbelis` (`id`, `Supplier`, `NoFaktur`, `TglFaktur`, `TglJatuhTempo`, `NoPO`, `TglPO`, `TglJatuhTempoPO`, `ItemBarang`, `Berat`, `HargaKg`, `qty`, `HargaSatuan`, `Diskon`, `Jumlah`, `subtotal`, `PPN`, `total`, `keterangan`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(14, 'PT. DBA', '001', '2020-01-29 00:00:00', '1970-01-01 00:00:00', '', '2020-01-29 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (4X1240X2430)', '283.843', 10000, 3, 946143, 0, 2838429, 2838429, 10, 2838429, '', 'A', 22, '2020-01-29 12:08:45', NULL, NULL),
(15, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (50X1520X6060)', '3615.396', 845455, 1, 30566546, 0, 30566546, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(16, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (50X220X815)', '70.375', 845455, 1, 594989, 0, 594989, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(17, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (50X250X570)', '55.931', 845455, 1, 472871, 0, 472871, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(18, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (51X1670X1620)', '1083.107', 8091, 1, 8763419, 0, 8763419, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(19, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (51X250X1190)', '119.104', 8091, 1, 963670, 0, 963670, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(20, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (51.6X1120X6320)', '2867.177', 8091, 1, 23198329, 0, 23198329, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(21, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (55X400X580)', '100.166', 8091, 1, 810443, 0, 810443, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(22, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (55X1610X2190)', '1522.307', 8091, 1, 12316986, 0, 12316986, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(23, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (55X210X430)', '38.987', 8091, 1, 315444, 0, 315444, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(24, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (56X2160X4410)', '4187.454', 8091, 1, 33880690, 0, 33880690, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(25, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (60X940X2700)', '1195.398', 845455, 1, 10106552, 0, 10106552, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(26, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (60X1820X3350)', '2871.687', 845455, 1, 24278821, 0, 24278821, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(27, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (61X1100X2390)', '1258.897', 845455, 1, 10643408, 0, 10643408, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(28, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (65X1520X2530)', '1962.217', 845455, 1, 16589662, 0, 16589662, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(29, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (65X300X370)', '56.638', 845455, 1, 478849, 0, 478849, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(30, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (65X240X1820)', '222.877', 845455, 1, 1884325, 0, 1884325, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(31, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (65X180X1010)', '92.763', 845455, 1, 784269, 0, 784269, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(32, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (70X260X810)', '115.725', 8909, 1, 1030994, 0, 1030994, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(33, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (70X1380X2220)', '1683.448', 8909, 1, 14997838, 0, 14997838, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(34, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (71X190X460)', '48.712', 8909, 1, 433975, 0, 433975, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(35, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (75X1510X2740)', '2435.894', 745455, 1, 18158494, 0, 18158494, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(36, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (80X260X720)', '117.562', 9159, 1, 1076750, 0, 1076750, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(37, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (80X1190X1330)', '993.936', 9159, 1, 9103460, 0, 9103460, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(38, 'PT. EBS', 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 00:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (80X1200X1550)', '1168.080', 9159, 1, 10698445, 0, 10698445, 232149229, 0, 232149229, '', 'A', 22, '2020-02-12 13:16:13', NULL, NULL),
(39, 'PT. JES', 'FK-20/01/032', '2020-01-21 00:00:00', '2020-03-06 00:00:00', '', '2020-01-20 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (3.8X1200X2413.7)', '864.000', 7727, 10, 667613, 0, 6676130, 6676130, 10, 7343743, '7.343.740KURANG 69', 'A', 22, '2020-02-13 10:20:38', NULL, NULL),
(40, 'PT. EBS', 'PJO 20.01.033', '2020-01-10 00:00:00', '2020-02-24 00:00:00', '', '2020-01-09 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (45X1820X6070)', '3902.5', 845455, 1, 2147483647, 0, 2147483647, 2147483647, 10, 2147483647, '72.633.039KURANG 883', 'A', 22, '2020-02-13 10:21:35', NULL, NULL),
(41, 'PT. EBS', 'PJO 20.01.033', '2020-01-10 00:00:00', '2020-02-24 00:00:00', '', '2020-01-09 00:00:00', '1970-01-01 07:00:00', 'PLAT SS400 (45X1825.3X6060)', '3907.5', 845455, 1, 2147483647, 0, 2147483647, 2147483647, 10, 2147483647, '72.633.039KURANG 883', 'A', 22, '2020-02-13 10:21:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fakturjuals`
--

CREATE TABLE `fakturjuals` (
  `id` int(11) NOT NULL,
  `NoFaktur` varchar(30) NOT NULL,
  `TglFaktur` datetime NOT NULL,
  `TglJatuhTempo` datetime NOT NULL,
  `NoPO` varchar(30) DEFAULT NULL,
  `IdPelanggan` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakturjuals`
--

INSERT INTO `fakturjuals` (`id`, `NoFaktur`, `TglFaktur`, `TglJatuhTempo`, `NoPO`, `IdPelanggan`, `keterangan`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(1, 'FT/200000007', '2020-05-22 00:00:00', '2020-06-21 00:00:00', 'PO/123456789098765432123456789', 3, 'Pembayaran ditransfer ke BCA\nNo. Rek : 8820 516 363\nCV. BAJA MAKMUR', 'A', 20, '2020-08-01 17:48:08', NULL, NULL),
(2, 'FT/200000007', '2020-05-22 00:00:00', '2020-06-21 00:00:00', 'PO/123456789098765432123456789', 3, 'Pembayaran ditransfer ke BCA\nNo. Rek : 8820 516 363\nCV. BAJA MAKMUR', 'A', 20, '2020-08-01 17:48:08', NULL, NULL),
(3, 'FT/200000007', '2020-05-22 00:00:00', '2020-06-21 00:00:00', 'PO/123456789098765432123456789', 3, 'Pembayaran ditransfer ke BCA\nNo. Rek : 8820 516 363\nCV. BAJA MAKMUR', 'A', 20, '2020-08-01 17:48:08', NULL, NULL),
(4, 'FT/200000020', '2020-08-02 00:00:00', '2020-08-02 00:00:00', 'BKL123', 10, '', 'A', 27, '2020-08-02 15:35:25', 27, '2020-08-02 15:36:44'),
(5, 'FT/200000022', '2020-08-02 00:00:00', '2020-08-02 00:00:00', 'HKM01/08/2020', 12, '', 'A', 27, '2020-08-02 15:41:36', NULL, NULL),
(6, 'FT/200000026', '2020-08-08 00:00:00', '2020-09-08 00:00:00', '202007001924', 9, '', 'A', 27, '2020-08-07 14:16:49', 27, '2020-08-07 14:17:35'),
(7, 'FT/200000027', '2020-08-11 00:00:00', '2020-10-09 00:00:00', '', 13, '', 'A', 27, '2020-08-10 15:37:29', 27, '2020-08-10 15:38:06'),
(8, 'FT/200000027', '2020-08-11 00:00:00', '2020-10-09 00:00:00', '', 13, '', 'A', 27, '2020-08-10 15:37:29', 27, '2020-08-10 15:38:06'),
(9, 'FT/200000027', '2020-08-11 00:00:00', '2020-10-09 00:00:00', '', 13, '', 'A', 27, '2020-08-10 15:37:29', 27, '2020-08-10 15:38:06'),
(10, 'FT/200000027', '2020-08-11 00:00:00', '2020-10-09 00:00:00', '', 13, '', 'A', 27, '2020-08-10 15:37:29', 27, '2020-08-10 15:38:06'),
(11, 'FT/200000027', '2020-08-11 00:00:00', '2020-10-09 00:00:00', '', 13, '', 'A', 27, '2020-08-10 15:37:29', 27, '2020-08-10 15:38:06'),
(14, 'FT/200000028', '2020-08-11 00:00:00', '2020-09-24 00:00:00', 'LK202690', 14, '', 'A', 27, '2020-08-10 16:05:23', 27, '2020-08-10 16:05:44'),
(15, 'FT/200000028', '2020-08-11 00:00:00', '2020-09-24 00:00:00', 'LK202690', 14, '', 'A', 27, '2020-08-10 16:05:23', 27, '2020-08-10 16:05:44'),
(16, 'FT/200000028', '2020-08-11 00:00:00', '2020-09-24 00:00:00', 'LK202690', 14, '', 'A', 27, '2020-08-10 16:05:23', 27, '2020-08-10 16:05:44'),
(17, 'FT/200000028', '2020-08-11 00:00:00', '2020-09-24 00:00:00', 'LK202690', 14, '', 'A', 27, '2020-08-10 16:05:23', 27, '2020-08-10 16:05:44'),
(18, 'FT/200000029', '2020-08-12 00:00:00', '2020-09-10 00:00:00', 'A122SAI', 8, '', 'A', 27, '2020-08-11 15:07:37', 27, '2020-08-11 15:08:11'),
(19, 'FT/200000029', '2020-08-12 00:00:00', '2020-09-10 00:00:00', 'A122SAI', 8, '', 'A', 27, '2020-08-11 15:07:37', 27, '2020-08-11 15:08:11'),
(20, 'FT/200000029', '2020-08-12 00:00:00', '2020-09-10 00:00:00', 'A122SAI', 8, '', 'A', 27, '2020-08-11 15:07:37', 27, '2020-08-11 15:08:11'),
(21, 'FT/200000029', '2020-08-12 00:00:00', '2020-09-10 00:00:00', 'A122SAI', 8, '', 'A', 27, '2020-08-11 15:07:37', 27, '2020-08-11 15:08:11'),
(22, 'FT/200000030', '2020-07-16 00:00:00', '1970-01-01 07:00:00', '', 5, '', 'A', 27, '2020-08-24 15:05:48', NULL, NULL),
(23, 'FT/200000031', '2020-07-21 00:00:00', '2020-08-20 00:00:00', '', 5, '', 'A', 27, '2020-08-24 15:06:27', NULL, NULL),
(24, 'FT/200000032', '2020-07-11 00:00:00', '2020-07-11 00:00:00', '', 5, '', 'A', 27, '2020-08-24 15:07:35', NULL, NULL),
(25, 'FT/200000032', '2020-07-11 00:00:00', '2020-07-11 00:00:00', '', 5, '', 'A', 27, '2020-08-24 15:07:35', NULL, NULL),
(26, 'FT/200000032', '2020-07-11 00:00:00', '2020-07-11 00:00:00', '', 5, '', 'A', 27, '2020-08-24 15:07:35', NULL, NULL),
(27, 'FT/200000032', '2020-07-11 00:00:00', '2020-07-11 00:00:00', '', 5, '', 'A', 27, '2020-08-24 15:07:35', NULL, NULL),
(28, 'FT/200000032', '2020-07-11 00:00:00', '2020-07-11 00:00:00', '', 5, '', 'A', 27, '2020-08-24 15:07:35', NULL, NULL),
(29, 'FT/200000032', '2020-07-11 00:00:00', '2020-07-11 00:00:00', '', 5, '', 'A', 27, '2020-08-24 15:07:35', NULL, NULL),
(31, 'FT/200000033', '2020-07-11 00:00:00', '2020-07-11 00:00:00', '', 4, '', 'A', 27, '2020-08-24 15:20:45', NULL, NULL),
(32, 'FT/200000034', '2020-08-31 00:00:00', '2020-09-30 00:00:00', '', 51, '', 'A', 28, '2020-08-31 09:22:39', NULL, NULL),
(33, 'FT/200000035', '2020-09-01 00:00:00', '2020-09-01 00:00:00', '', 22, '', 'A', 28, '2020-09-01 13:34:20', NULL, NULL),
(34, 'FT/200000035', '2020-09-01 00:00:00', '2020-09-01 00:00:00', '', 22, '', 'A', 28, '2020-09-01 13:34:20', NULL, NULL),
(35, 'FT/200000036', '2020-09-01 00:00:00', '2020-09-01 00:00:00', '', 22, '', 'A', 29, '2020-09-07 15:58:59', NULL, NULL),
(36, 'FT/200000036', '2020-09-01 00:00:00', '2020-09-01 00:00:00', '', 22, '', 'A', 29, '2020-09-07 15:58:59', NULL, NULL),
(40, 'FT/200000038', '2020-09-05 00:00:00', '2020-09-26 00:00:00', '', 10, '', 'A', 29, '2020-09-08 09:08:34', 29, '2020-09-08 09:12:31'),
(41, 'FT/200000038', '2020-09-05 00:00:00', '2020-09-26 00:00:00', '', 10, '', 'A', 29, '2020-09-08 09:09:11', 29, '2020-09-08 09:12:31'),
(42, 'FT/200000039', '2020-12-23 00:00:00', '2021-03-01 00:00:00', '', 22, '', 'A', 29, '2020-09-08 09:10:09', 29, '2020-12-21 13:20:02'),
(49, 'FT/200000036', '2020-09-01 00:00:00', '2020-09-01 00:00:00', '51', 22, '', 'A', 20, '2020-09-11 12:24:57', NULL, NULL),
(50, 'FT/200000036', '2020-09-01 00:00:00', '2020-09-01 00:00:00', '51', 22, '', 'A', 20, '2020-09-11 12:24:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kuitansijuals`
--

CREATE TABLE `kuitansijuals` (
  `id` int(11) NOT NULL,
  `NoKuitansi` varchar(30) NOT NULL,
  `NoFaktur` varchar(500) NOT NULL,
  `TglKuitansi` datetime DEFAULT NULL,
  `IdPelanggan` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kuitansijuals`
--

INSERT INTO `kuitansijuals` (`id`, `NoKuitansi`, `NoFaktur`, `TglKuitansi`, `IdPelanggan`, `Total`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(1, 'KW/200000001', 'FT/200000017', '2020-07-17 00:00:00', 5, 628300, 'A', 25, '2020-07-16 04:48:59', 20, '2020-07-16 11:51:13'),
(2, 'KW/200000002', 'FT/200000027', '2020-08-11 00:00:00', 13, 284000, 'A', 27, '2020-08-10 08:52:35', 20, '2020-08-10 15:54:58'),
(3, 'KW/200000003', 'FT/200000028', '2020-08-11 00:00:00', 14, 9992653, 'A', 27, '2020-08-10 09:06:44', 0, NULL),
(4, 'KW/200000004', 'FT/200000029', '2020-08-12 00:00:00', 8, 1848770, 'A', 27, '2020-08-11 08:11:58', 27, '2020-08-11 15:45:34'),
(5, 'KW/200000005', 'FT/200000030,FT/200000031,FT/200000032', '2020-08-24 00:00:00', 5, 2473789, 'A', 27, '2020-08-24 08:14:02', 0, NULL),
(6, 'KW/200000006', 'FT/200000033', '2020-08-24 00:00:00', 4, 120620, 'A', 27, '2020-08-24 08:22:35', 27, '2020-08-24 15:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(19, '1574837672'),
(21, '1575026146'),
(20, '1575026285'),
(19, '1575328550'),
(20, '1578815533'),
(20, '1578815536'),
(22, '1579662680'),
(20, '1579670574'),
(22, '1579745713'),
(22, '1579745717'),
(22, '1579745721'),
(22, '1580267584'),
(22, '1581052502'),
(22, '1581566864'),
(22, '1581566870'),
(22, '1581566883'),
(22, '1590152463'),
(22, '1590152473'),
(24, '1590291074'),
(24, '1590291105'),
(20, '1590813884'),
(24, '1590910445'),
(20, '1591273218'),
(22, '1594451061'),
(20, '1594700590'),
(20, '1594870336'),
(27, '1594877043'),
(27, '1594877057'),
(27, '1595335137'),
(27, '1595335155'),
(27, '1595396925'),
(27, '1595913806'),
(27, '1595919770'),
(20, '1598682058'),
(24, '1599013139'),
(20, '1600173236');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_11_15_103658_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL DEFAULT '0',
  `jenis` varchar(100) NOT NULL,
  `idSupplier` varchar(100) NOT NULL DEFAULT '0',
  `merk` varchar(50) DEFAULT NULL,
  `tipe` varchar(100) NOT NULL,
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `kategori`, `jenis`, `idSupplier`, `merk`, `tipe`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(1, 'NonferrousMetals', 'Kuningan (Brass)', '8', '', 'JIS H3250 | C3604', 'A', 20, '2019-12-25 17:52:50', 20, '2019-12-30 10:46:46'),
(2, 'NonferrousMetals', 'Perunggu (Bronze)', '8', '', 'LG2BC6C | JIS H5111', 'A', 20, '2019-12-25 17:55:17', 20, '2019-12-25 19:23:20'),
(3, 'NonferrousMetals', 'Aluminium Perunggu (Bronze)', '8', '', 'AB2 | BC2C', 'A', 20, '2019-12-25 18:38:20', NULL, NULL),
(4, 'NonferrousMetals', 'Perunggu (Bronze)', '8', '', 'LG2BC6C | JIS H5111', 'A', 20, '2019-12-25 18:39:13', NULL, NULL),
(5, 'NonferrousMetals', 'Aluminium', '8', '', 'A6061BE', 'A', 20, '2019-12-25 18:40:16', NULL, NULL),
(6, 'NonferrousMetals', 'Ancuran / Cor', '8', '', 'FC25 | Ancuran | Cor', 'A', 20, '2019-12-25 18:40:48', NULL, NULL),
(7, 'NonferrousMetals', 'Kuningan (Brass)', '8', '', 'JIS H3250 | C3604', 'A', 20, '2019-12-25 18:41:32', NULL, NULL),
(8, 'NonferrousMetals', 'Kuningan (Brass)', '8', '', 'JIS H3250 | C3604', 'A', 20, '2019-12-25 18:43:54', NULL, NULL),
(9, 'Baja', 'Baja', '5', '', 'SLD-R', 'A', 20, '2019-12-30 11:16:18', 22, '2020-02-13 12:14:17'),
(10, 'MildSteel', 'Besi', '2', '', 'AS ST41  ', 'A', 20, '2019-12-30 11:17:09', 22, '2020-01-28 11:49:42'),
(11, 'CarbonSteel', 'CarbonSteel', '2', '', 'AS S45C ', 'A', 20, '2019-12-30 11:17:41', 22, '2020-01-28 11:49:52'),
(12, 'AlloySteel', 'Baja', '3', '', 'Plat ST41', 'D', 20, '2020-01-14 10:12:15', 22, '2020-01-22 10:39:34'),
(13, 'MildSteel', 'Besi', '4', '', 'ST41', 'D', 20, '2020-01-14 10:18:59', 22, '2020-01-22 10:39:30'),
(14, 'CarbonSteel', 'CarbonSteel', '4', '', 'AS S45C', 'D', 20, '2020-01-14 10:42:49', 22, '2020-01-22 10:39:26'),
(15, 'MildSteel', 'Besi', '4', '', 'ST41', 'D', 20, '2020-01-14 10:54:07', 22, '2020-01-22 10:39:23'),
(16, 'MildSteel', 'Besi', '3', '', 'AS S45C DIA', 'D', 20, '2020-01-19 09:57:45', 22, '2020-01-22 10:39:19'),
(17, 'MildSteel', 'Besi', '7', '', 'PLAT SS400', 'A', 22, '2020-01-22 10:48:09', 22, '2020-01-23 09:17:59'),
(18, 'MildSteel', 'Besi', '9', '', 'PLAT SS400', 'A', 22, '2020-01-23 09:17:01', NULL, NULL),
(19, 'MildSteel', 'Besi', '14', '', 'PLAT SS400', 'D', 22, '2020-01-23 09:30:50', 22, '2020-01-29 10:27:30'),
(20, 'MildSteel', 'Besi', '11', '', 'PLAT SS400', 'A', 22, '2020-01-29 10:28:09', NULL, NULL),
(21, 'MildSteel', 'Besi', '12', '', 'PLAT SS400', 'A', 22, '2020-02-07 12:18:48', NULL, NULL),
(22, 'CarbonSteel', 'CarbonSteel', '2', '', 'VCN', 'D', 22, '2020-02-12 11:16:46', 22, '2020-02-12 11:23:54'),
(23, 'AlloySteel', 'Baja', '2', '', 'VCN', 'A', 22, '2020-02-12 11:23:47', NULL, NULL),
(24, 'MildSteel', 'Besi', '7', '', 'SPCC', 'A', 22, '2020-02-12 15:12:35', NULL, NULL),
(25, 'MildSteel', 'Besi', '7', '', 'SPHC', 'A', 22, '2020-02-12 15:12:55', NULL, NULL),
(26, 'CarbonSteel', 'Kuningan (Brass)', '3', NULL, 'testing', 'D', 1, '2020-11-21 06:12:27', 1, '2020-11-21 06:56:41'),
(27, 'MildSteel', 'Baja', '4', NULL, 'tes', 'A', 1, '2020-11-25 11:03:45', NULL, '2020-11-25 11:03:45'),
(28, 'MildSteel', 'Kuningan (Brass)', '5', '', 'DUMMY2', 'D', 1, '2020-11-25 12:12:03', 1, '2020-11-25 12:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL DEFAULT '0',
  `jenis` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id`, `kategori`, `jenis`, `tipe`) VALUES
(1, 'NonferrousMetals', 'Kuningan (Brass)', 'JIS H3250 | C3604'),
(2, 'NonferrousMetals', 'Perunggu (Bronze)', 'LG2BC6C | JIS H5111'),
(3, 'NonferrousMetals', 'Aluminium Perunggu (Bronze)', 'AB2 | BC2C'),
(5, 'NonferrousMetals', 'Aluminium', 'A6061BE'),
(6, 'NonferrousMetals', 'Ancuran / Cor', 'FC25 | Ancuran | Cor'),
(7, 'NonferrousMetals', 'Kuningan (Brass)', 'JIS H3250 | C3604'),
(9, 'Baja', 'Baja', 'SLD-R'),
(10, 'MildSteel', 'Besi', 'AS ST41  '),
(11, 'CarbonSteel', 'CarbonSteel', 'AS S45C '),
(12, 'AlloySteel', 'Baja', 'Plat ST41'),
(13, 'MildSteel', 'Besi', 'ST41'),
(16, 'MildSteel', 'Besi', 'AS S45C DIA'),
(17, 'MildSteel', 'Besi', 'PLAT SS400'),
(22, 'CarbonSteel', 'CarbonSteel', 'VCN'),
(23, 'AlloySteel', 'Baja', 'VCN'),
(24, 'MildSteel', 'Besi', 'SPCC'),
(25, 'MildSteel', 'Besi', 'SPHC'),
(26, 'CarbonSteel', 'Kuningan (Brass)', 'testing'),
(27, 'MildSteel', 'Baja', 'tes'),
(28, 'MildSteel', 'Kuningan (Brass)', 'DUMMY2');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OcZeM8RAdkod6SkVQdzS2zNc6pfeSf3866KxxebN', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOFlUOWUzd21zQnp4WGpvUGNZUFNWNlRxcTVLd1pQb1c4ZE1vOUlXVSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3RyUGVuYXdhcmFuP3BhZ2U9MiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdHJQZW5hd2FyYW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkaHlXakhkdnBGY3RmQ0RoT0E0eElxT1pJWWRWb0hlcWZQRkVKZVNCbzZsLk5ZcFhvSW9hL08iO30=', 1609760867);

-- --------------------------------------------------------

--
-- Table structure for table `spks`
--

CREATE TABLE `spks` (
  `id` int(11) NOT NULL,
  `idTrPenawaran` int(11) NOT NULL,
  `noSPK` varchar(30) NOT NULL,
  `tglSPK` date NOT NULL,
  `pic` varchar(80) DEFAULT NULL,
  `Keterangan` varchar(500) DEFAULT NULL,
  `statusSPK` varchar(50) NOT NULL DEFAULT 'BelumSelesai',
  `userin` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spks`
--

INSERT INTO `spks` (`id`, `idTrPenawaran`, `noSPK`, `tglSPK`, `pic`, `Keterangan`, `statusSPK`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(1, 14, 'SPK/200000001', '2020-05-22', 'adrian', 'MTG 121', 'Selesai', 22, '2020-05-23 07:39:45', 22, '2020-12-07 12:00:06'),
(2, 15, 'SPK/200000002', '2020-05-22', '', 'MTG 122', 'belum selesai', 22, '2020-05-23 07:39:45', 22, '2020-07-06 14:34:47'),
(3, 16, 'SPK/200000003', '2020-05-22', 'B', 'MTG 123', 'Selesai', 22, '2020-05-23 07:39:45', 22, '2020-07-06 14:34:56'),
(4, 31, 'SPK/200000004', '2020-05-30', 'C', '', 'Selesai', 22, '2020-05-30 11:49:50', 22, '2020-07-07 11:12:14'),
(5, 32, 'SPK/200000005', '2020-05-30', 'B', '', 'Selesai', 22, '2020-05-30 11:49:50', 22, '2020-07-07 11:17:35'),
(6, 33, 'SPK/200000006', '2020-05-30', 'B', '', 'Selesai', 22, '2020-05-30 11:49:50', 22, '2020-07-07 11:17:40'),
(7, 34, 'SPK/200000007', '2020-05-30', 'A', '', 'Selesai', 22, '2020-05-30 11:49:50', 22, '2020-07-07 11:14:50'),
(8, 51, 'SPK/200000008', '2020-06-06', 'B', '', 'Selesai', 22, '2020-06-18 13:16:26', 22, '2020-07-06 14:35:00'),
(9, 52, 'SPK/200000009', '2020-06-06', 'A', '', 'Selesai', 22, '2020-06-18 13:16:26', 22, '2020-07-06 14:35:03'),
(10, 53, 'SPK/200000010', '2020-06-06', 'A', 'MTG222', 'Selesai', 22, '2020-06-18 13:16:26', 22, '2020-07-06 14:35:06'),
(11, 54, 'SPK/200000011', '2020-06-06', 'D', '', 'Selesai', 22, '2020-06-18 13:16:26', 22, '2020-07-06 14:35:09'),
(12, 55, 'SPK/200000012', '2020-06-06', 'C', '', 'Selesai', 22, '2020-06-18 13:16:26', 22, '2020-07-06 14:35:11'),
(13, 60, 'SPK/200000013', '2020-06-11', 'A', 'MTG', 'Selesai', 22, '2020-06-26 09:44:20', 22, '2020-07-06 14:35:13'),
(14, 61, 'SPK/200000014', '2020-06-11', 'B', 'MTG', 'Selesai', 22, '2020-06-26 09:44:20', 22, '2020-07-06 14:35:16'),
(15, 62, 'SPK/200000015', '2020-06-11', 'B', 'MTG', 'Selesai', 22, '2020-06-26 09:44:20', 22, '2020-07-06 14:35:18'),
(16, 63, 'SPK/200000016', '2020-06-11', 'A', 'MTG', 'Selesai', 22, '2020-06-26 09:44:20', 22, '2020-07-06 14:35:20'),
(17, 65, 'SPK/200000017', '2020-06-11', 'a', '', 'Selesai', 22, '2020-06-29 12:32:19', 22, '2020-07-06 14:35:59'),
(18, 64, 'SPK/200000018', '2020-06-18', 'C', 'OK', 'Selesai', 22, '2020-06-29 12:33:23', 22, '2020-07-06 14:36:17'),
(19, 69, 'SPK/200000019', '2020-06-25', 'A', '', 'Selesai', 22, '2020-06-29 12:34:05', 22, '2020-07-07 11:14:56'),
(20, 70, 'SPK/200000020', '2020-06-25', 'A', '', 'Selesai', 22, '2020-06-29 12:34:05', 22, '2020-07-07 11:14:43'),
(21, 71, 'SPK/200000021', '2020-06-25', 'A', '', 'Selesai', 22, '2020-06-29 12:34:05', 22, '2020-07-07 11:12:10'),
(22, 72, 'SPK/200000022', '2020-05-22', 'B', '', 'Selesai', 20, '2020-07-05 14:20:40', 22, '2020-07-06 14:35:33'),
(23, 73, 'SPK/200000023', '2020-05-22', 'B', '', 'Selesai', 20, '2020-07-05 14:20:40', 22, '2020-07-06 14:35:35'),
(24, 74, 'SPK/200000024', '2020-05-22', 'A', '', 'Selesai', 20, '2020-07-05 14:20:40', 22, '2020-07-06 14:35:36'),
(25, 60, 'SPK/200000025', '2020-06-25', '', '', 'Selesai', 22, '2020-07-06 14:34:16', 22, '2020-07-06 14:35:13'),
(26, 61, 'SPK/200000026', '2020-06-25', '', '', 'Selesai', 22, '2020-07-06 14:34:16', 22, '2020-07-06 14:35:16'),
(27, 62, 'SPK/200000027', '2020-06-25', '', '', 'Selesai', 22, '2020-07-06 14:34:16', 22, '2020-07-06 14:35:18'),
(28, 63, 'SPK/200000028', '2020-06-25', '', '', 'Selesai', 22, '2020-07-06 14:34:16', 22, '2020-07-06 14:35:20'),
(32, 51, 'SPK/200000032', '2020-06-18', '', '', 'Selesai', 22, '2020-07-06 14:34:30', 22, '2020-07-06 14:35:00'),
(33, 52, 'SPK/200000033', '2020-06-18', '', '', 'Selesai', 22, '2020-07-06 14:34:30', 22, '2020-07-06 14:35:03'),
(34, 53, 'SPK/200000034', '2020-06-18', '', '', 'Selesai', 22, '2020-07-06 14:34:30', 22, '2020-07-06 14:35:06'),
(35, 54, 'SPK/200000035', '2020-06-18', '', '', 'Selesai', 22, '2020-07-06 14:34:30', 22, '2020-07-06 14:35:09'),
(36, 55, 'SPK/200000036', '2020-06-18', '', '', 'Selesai', 22, '2020-07-06 14:34:30', 22, '2020-07-06 14:35:11'),
(39, 65, 'SPK/200000039', '2020-06-11', 'a', '', 'Selesai', 22, '2020-07-06 14:35:46', 22, '2020-07-06 14:35:59'),
(40, 64, 'SPK/200000040', '2020-06-06', 'C', 'OK', 'Selesai', 22, '2020-07-06 14:36:05', 22, '2020-07-06 14:36:17'),
(41, 31, 'SPK/200000041', '2020-05-30', 'C', '', 'Selesai', 22, '2020-07-06 14:36:33', 22, '2020-07-07 11:12:14'),
(42, 32, 'SPK/200000042', '2020-05-30', 'B', '', 'Selesai', 22, '2020-07-06 14:36:33', 22, '2020-07-07 11:17:35'),
(43, 33, 'SPK/200000043', '2020-05-30', 'B', '', 'Selesai', 22, '2020-07-06 14:36:33', 22, '2020-07-07 11:17:40'),
(44, 34, 'SPK/200000044', '2020-05-30', 'A', '', 'Selesai', 22, '2020-07-06 14:36:33', 22, '2020-07-07 11:14:50'),
(48, 69, 'SPK/200000048', '2020-06-06', 'A', '', 'Selesai', 22, '2020-07-06 14:37:42', 22, '2020-07-07 11:14:56'),
(49, 70, 'SPK/200000049', '2020-06-06', 'A', '', 'Selesai', 22, '2020-07-06 14:37:42', 22, '2020-07-07 11:14:43'),
(50, 71, 'SPK/200000050', '2020-06-06', 'A', '', 'Selesai', 22, '2020-07-06 14:37:42', 22, '2020-07-07 11:12:10'),
(51, 75, 'SPK/200000051', '2020-07-06', 'C', 'MTG', 'Selesai', 22, '2020-07-07 11:10:53', 22, '2020-07-07 11:25:51'),
(52, 76, 'SPK/200000052', '2020-07-06', 'C', 'MTG', 'Selesai', 22, '2020-07-07 11:10:53', 22, '2020-07-07 11:25:55'),
(53, 77, 'SPK/200000053', '2020-07-06', 'C', 'MTG', 'Selesai', 22, '2020-07-07 11:10:53', 22, '2020-07-07 11:26:04'),
(54, 78, 'SPK/200000054', '2020-07-06', 'B', 'MTG', 'Selesai', 22, '2020-07-07 11:10:53', 22, '2020-07-07 11:26:02'),
(55, 79, 'SPK/200000055', '2020-07-06', 'C', 'MTG', 'Selesai', 22, '2020-07-07 11:10:53', 22, '2020-07-07 11:26:03'),
(56, 80, 'SPK/200000056', '2020-07-06', 'B', 'MTG', 'Selesai', 22, '2020-07-07 11:10:53', 22, '2020-07-07 11:26:00'),
(57, 81, 'SPK/200000057', '2020-07-06', 'A', 'MTG', 'Selesai', 22, '2020-07-07 11:10:53', 22, '2020-07-07 11:26:01'),
(58, 82, 'SPK/200000058', '2020-07-06', 'A', 'MTG', 'Selesai', 22, '2020-07-07 11:10:53', 22, '2020-07-07 11:25:59'),
(59, 83, 'SPK/200000059', '2020-07-06', 'A', 'MTG', 'Selesai', 22, '2020-07-07 11:10:53', 22, '2020-07-07 11:25:57'),
(66, 85, 'SPK/200000066', '2020-07-07', 'C', 'MTG', 'Selesai', 22, '2020-07-07 11:48:15', 22, '2020-07-07 11:58:30'),
(67, 86, 'SPK/200000067', '2020-07-07', 'C', 'MTG', 'Selesai', 22, '2020-07-07 11:48:15', 22, '2020-07-07 11:58:33'),
(68, 87, 'SPK/200000068', '2020-07-07', 'D', 'MTG', 'Selesai', 22, '2020-07-07 11:48:15', 22, '2020-07-07 11:58:34'),
(69, 88, 'SPK/200000069', '2020-07-07', 'D', 'MTG', 'Selesai', 22, '2020-07-07 11:48:15', 22, '2020-07-07 11:58:35'),
(70, 89, 'SPK/200000070', '2020-07-07', 'B', 'MTG', 'Selesai', 22, '2020-07-07 11:48:15', 22, '2020-07-07 11:58:37'),
(71, 90, 'SPK/200000071', '2020-07-07', 'C', 'MTG', 'Selesai', 22, '2020-07-07 11:48:15', 22, '2020-07-07 11:58:38'),
(72, 91, 'SPK/200000072', '2020-07-07', 'B', 'MTG', 'Selesai', 22, '2020-07-07 11:48:15', 22, '2020-07-07 11:58:39'),
(73, 92, 'SPK/200000073', '2020-07-07', 'B', 'MTG', 'Selesai', 22, '2020-07-07 11:48:15', 22, '2020-07-07 11:58:40'),
(74, 114, 'SPK/200000074', '2020-07-11', 'A', '', 'Selesai', 22, '2020-07-11 14:32:34', 22, '2020-07-11 14:34:37'),
(75, 115, 'SPK/200000075', '2020-07-11', 'A', '', 'Selesai', 22, '2020-07-11 14:32:34', 22, '2020-07-11 14:34:13'),
(76, 116, 'SPK/200000076', '2020-07-11', 'A', '', 'Selesai', 22, '2020-07-11 14:32:34', 22, '2020-07-11 14:34:12'),
(77, 117, 'SPK/200000077', '2020-07-11', 'A', '', 'Selesai', 22, '2020-07-11 14:32:34', 22, '2020-07-11 14:34:11'),
(78, 118, 'SPK/200000078', '2020-07-11', 'A', '', 'Selesai', 22, '2020-07-11 14:32:34', 22, '2020-07-11 14:34:09'),
(79, 126, 'SPK/200000079', '2020-07-13', 'B', 'AAP', 'Selesai', 25, '2020-07-13 14:29:39', 25, '2020-07-13 14:33:47'),
(80, 127, 'SPK/200000080', '2020-07-13', 'B', 'AAP', 'Selesai', 25, '2020-07-13 14:29:39', 25, '2020-07-13 14:33:46'),
(82, 124, 'SPK/200000082', '2020-07-13', 'B', 'TAG', 'Selesai', 25, '2020-07-13 14:29:53', 25, '2020-07-13 14:33:44'),
(83, 125, 'SPK/200000083', '2020-07-13', 'B', 'TAG', 'Selesai', 25, '2020-07-13 14:29:53', 25, '2020-07-13 14:33:43'),
(84, 128, 'SPK/200000084', '2020-07-16', 'B', 'STM', 'Selesai', 25, '2020-07-16 10:46:09', 25, '2020-07-16 11:31:06'),
(85, 129, 'SPK/200000085', '2020-07-16', 'A', 'STM', 'Selesai', 25, '2020-07-16 10:46:09', 25, '2020-07-16 11:31:02'),
(86, 130, 'SPK/200000086', '2020-07-16', 'B', 'STM', 'Selesai', 25, '2020-07-16 10:46:09', 25, '2020-07-16 11:31:03'),
(87, 131, 'SPK/200000087', '2020-07-16', 'A', 'STM', 'Selesai', 25, '2020-07-16 10:46:09', 25, '2020-07-16 11:31:01'),
(88, 134, 'SPK/200000088', '2020-07-21', 'A', 'TAG', 'Selesai', 27, '2020-07-21 15:06:12', 27, '2020-07-26 20:53:09'),
(89, 135, 'SPK/200000089', '2020-07-21', 'A', 'TAG', 'Selesai', 27, '2020-07-21 15:06:12', 27, '2020-07-26 20:53:07'),
(90, 136, 'SPK/200000090', '2020-07-21', 'B', 'TAG', 'Selesai', 27, '2020-07-21 15:06:12', 27, '2020-07-26 21:01:36'),
(91, 137, 'SPK/200000091', '2020-07-21', 'B', 'TAG', 'Selesai', 27, '2020-07-21 15:06:12', 27, '2020-07-26 21:01:37'),
(92, 138, 'SPK/200000092', '2020-07-21', 'A', 'TAG', 'Selesai', 27, '2020-07-21 15:06:12', 27, '2020-07-26 20:53:01'),
(95, 132, 'SPK/200000095', '2020-07-16', 'B', 'MTA', 'Selesai', 27, '2020-07-21 15:53:20', 27, '2020-07-26 21:02:11'),
(96, 147, 'SPK/200000096', '2020-07-26', 'A', 'CASH', 'Selesai', 27, '2020-07-26 20:51:20', 27, '2020-07-26 20:58:31'),
(97, 149, 'SPK/200000097', '2020-07-28', 'B', 'CASH', 'Selesai', 27, '2020-07-28 12:42:06', 27, '2020-07-28 12:44:36'),
(98, 150, 'SPK/200000098', '2020-07-28', 'B', 'ASM', 'Selesai', 27, '2020-07-28 12:42:21', 27, '2020-07-28 12:44:35'),
(99, 148, 'SPK/200000099', '2020-07-28', 'A', 'SKF', 'Selesai', 27, '2020-07-28 12:42:32', 27, '2020-07-28 12:44:34'),
(100, 152, 'SPK/200000100', '2020-07-28', 'A', 'HKM', 'Selesai', 27, '2020-07-28 12:57:15', 27, '2020-07-28 12:57:47'),
(101, 154, 'SPK/200000101', '2020-07-28', 'B', 'CASH', 'Selesai', 27, '2020-07-28 15:48:29', 20, '2020-07-28 16:25:48'),
(102, 155, 'SPK/200000102', '2020-07-28', 'B', 'ASM', 'Selesai', 27, '2020-07-28 15:48:38', 20, '2020-07-31 08:02:07'),
(103, 153, 'SPK/200000103', '2020-07-28', 'A', 'SKF', 'Selesai', 27, '2020-07-28 15:48:43', 27, '2020-08-02 15:37:08'),
(104, 157, 'SPK/200000104', '2020-08-01', 'B', 'SKF', 'Selesai', 27, '2020-08-01 15:31:09', 27, '2020-08-01 15:34:59'),
(105, 158, 'SPK/200000105', '2020-08-02', 'B', 'CASH', 'Selesai', 27, '2020-08-02 15:32:16', 27, '2020-08-02 15:36:44'),
(106, 159, 'SPK/200000106', '2020-08-02', 'A', 'HKM', 'Selesai', 27, '2020-08-02 15:39:31', 27, '2020-08-02 15:39:59'),
(107, 140, 'SPK/200000107', '2020-07-21', 'B', 'MTA', 'Selesai', 27, '2020-08-03 14:32:34', 27, '2020-08-04 14:24:20'),
(108, 146, 'SPK/200000108', '2020-07-22', 'A', 'STM', 'Selesai', 27, '2020-08-03 14:35:15', 27, '2020-08-04 14:23:34'),
(109, 143, 'SPK/200000109', '2020-07-21', 'A', 'TAG', 'Selesai', 27, '2020-08-04 14:23:22', 27, '2020-08-04 14:24:21'),
(110, 160, 'SPK/200000110', '2020-08-07', 'A', 'AAP', 'Selesai', 27, '2020-08-07 14:10:55', 27, '2020-08-07 14:17:35'),
(111, 161, 'SPK/200000111', '2020-08-10', 'B', 'CPL', 'Selesai', 27, '2020-08-10 15:28:56', 27, '2020-08-10 15:38:06'),
(112, 162, 'SPK/200000112', '2020-08-10', 'B', 'CPL', 'Selesai', 27, '2020-08-10 15:28:56', 27, '2020-08-10 15:38:06'),
(113, 163, 'SPK/200000113', '2020-08-10', 'B', 'CPL', 'Selesai', 27, '2020-08-10 15:28:56', 27, '2020-08-10 15:38:06'),
(114, 164, 'SPK/200000114', '2020-08-10', 'A', 'CPL', 'Selesai', 27, '2020-08-10 15:28:56', 27, '2020-08-10 15:38:06'),
(115, 165, 'SPK/200000115', '2020-08-10', 'A', 'CPL', 'Selesai', 27, '2020-08-10 15:28:56', 27, '2020-08-10 15:38:06'),
(118, 166, 'SPK/200000118', '2020-08-10', 'B', 'CNK', 'Selesai', 27, '2020-08-10 16:02:05', 27, '2020-08-10 16:05:44'),
(119, 167, 'SPK/200000119', '2020-08-10', 'B', 'CNK', 'Selesai', 27, '2020-08-10 16:02:05', 27, '2020-08-10 16:05:44'),
(120, 168, 'SPK/200000120', '2020-08-10', 'A', 'CNK', 'Selesai', 27, '2020-08-10 16:02:05', 27, '2020-08-10 16:05:44'),
(121, 169, 'SPK/200000121', '2020-08-10', 'A', 'CNK', 'Selesai', 27, '2020-08-10 16:02:05', 27, '2020-08-10 16:05:44'),
(122, 170, 'SPK/200000122', '2020-08-11', 'B', 'TAG', 'Selesai', 27, '2020-08-11 15:04:05', 27, '2020-08-11 15:08:11'),
(123, 171, 'SPK/200000123', '2020-08-11', 'B', 'TAG', 'Selesai', 27, '2020-08-11 15:04:05', 27, '2020-08-11 15:08:11'),
(124, 172, 'SPK/200000124', '2020-08-11', 'A', 'TAG', 'Selesai', 27, '2020-08-11 15:04:05', 27, '2020-08-11 15:08:11'),
(125, 173, 'SPK/200000125', '2020-08-11', 'A', 'TAG', 'Selesai', 27, '2020-08-11 15:04:05', 27, '2020-08-11 15:08:11'),
(126, 133, 'SPK/200000126', '2020-07-16', 'A', 'STM', 'Selesai', 27, '2020-08-24 15:01:31', 27, '2020-08-24 15:02:40'),
(127, 139, 'SPK/200000127', '2020-07-21', 'B', 'STM', 'Selesai', 27, '2020-08-24 15:03:01', 27, '2020-08-24 15:03:28'),
(128, 108, 'SPK/200000128', '2020-07-11', 'C', 'STM', 'Selesai', 27, '2020-08-24 15:03:40', 27, '2020-08-24 15:04:54'),
(129, 109, 'SPK/200000129', '2020-07-11', 'C', 'STM', 'Selesai', 27, '2020-08-24 15:03:40', 27, '2020-08-24 15:04:53'),
(130, 110, 'SPK/200000130', '2020-07-11', 'B', 'STM', 'Selesai', 27, '2020-08-24 15:03:40', 27, '2020-08-24 15:04:52'),
(131, 111, 'SPK/200000131', '2020-07-11', 'B', 'STM', 'Selesai', 27, '2020-08-24 15:03:40', 27, '2020-08-24 15:04:51'),
(132, 112, 'SPK/200000132', '2020-07-11', 'A', 'STM', 'Selesai', 27, '2020-08-24 15:03:40', 27, '2020-08-24 15:04:50'),
(133, 113, 'SPK/200000133', '2020-07-11', 'A', 'STM', 'Selesai', 27, '2020-08-24 15:03:40', 27, '2020-08-24 15:04:49'),
(135, 93, 'SPK/200000135', '2020-07-11', 'A', 'ASM', 'Selesai', 27, '2020-08-24 15:19:46', 27, '2020-08-24 15:19:56'),
(136, 178, 'SPK/200000136', '2020-08-31', '', '', 'Selesai', 28, '2020-08-31 09:18:55', 28, '2020-08-31 09:19:58'),
(137, 271, 'SPK/200000137', '2020-09-01', '', '', 'Selesai', 28, '2020-09-01 13:31:55', 28, '2020-09-01 13:32:59'),
(138, 272, 'SPK/200000138', '2020-09-01', '', '', 'Selesai', 28, '2020-09-01 13:31:55', 28, '2020-09-01 13:32:43'),
(139, 344, 'SPK/200000139', '2020-09-05', 'A', '', 'Selesai', 20, '2020-09-08 10:50:19', 20, '2020-09-08 10:50:45'),
(140, 345, 'SPK/200000140', '2020-09-05', 'A', '', 'Selesai', 20, '2020-09-08 10:50:19', 20, '2020-09-08 10:50:45'),
(147, 381, 'SPK/200000141', '2020-11-30', 'testing', NULL, 'Selesai', NULL, '2020-11-30 08:38:26', NULL, '2020-11-30 11:56:49'),
(148, 382, 'SPK/200000141', '2020-11-30', 'Adrian', NULL, 'Selesai', NULL, '2020-11-30 08:38:26', NULL, '2020-11-30 12:06:50'),
(149, 385, 'SPK/200000142', '2020-11-30', 'dum1', NULL, 'Selesai', NULL, '2020-11-30 12:04:56', NULL, '2020-12-19 23:48:09'),
(150, 386, 'SPK/200000142', '2020-11-30', NULL, NULL, 'BelumSelesai', NULL, '2020-11-30 12:04:56', NULL, '2020-11-30 12:04:56'),
(151, 383, 'SPK/200000143', '2020-12-19', 'tes surat jalan', NULL, 'Selesai', NULL, '2020-12-19 23:10:31', NULL, '2020-12-19 23:39:40'),
(152, 384, 'SPK/200000144', '2020-12-19', NULL, NULL, 'BelumSelesai', NULL, '2020-12-19 23:10:31', NULL, '2020-12-19 23:10:31'),
(153, 379, 'SPK/20000145', '2020-12-20', 'tes1', NULL, 'Selesai', NULL, '2020-12-20 03:01:00', NULL, '2020-12-20 03:01:31'),
(154, 380, 'SPK/20000146', '2020-12-20', 'tes2', NULL, 'BelumSelesai', NULL, '2020-12-20 03:01:00', NULL, '2020-12-20 03:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama`, `alamat`, `telp`, `email`, `npwp`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(2, 'PT. GAJA', 'Jakarta', '021-', '', '', 'A', 19, '2019-11-30 19:56:11', 22, '2020-01-22 10:32:19'),
(3, 'PT. Anugrah Sejahtera Makmur', 'Jl. Moh. Toha Ruko Pondok Arum Blok A1 No.7 Tangerang Banten, Kota Tangerang Banten , Indonesia', '085211158780', 'admin@anugrahsejahteramakmur.com', '000', 'D', 19, '2019-12-01 20:51:48', 22, '2020-01-22 10:21:33'),
(4, 'CV Baja Makmur', 'Jl. Raya Merdeka No.336, RT.002/RW.001, Cimone Jaya, Kec. Karawaci, Kota Tangerang, Banten 15114', '0812-8863-6369', 'sales@bajamakmur.co.id', '000', 'D', 20, '2019-12-04 20:30:23', 22, '2020-01-22 10:21:44'),
(5, 'PT. SMP', 'Jakarta', '021-', '', '', 'A', 20, '2019-12-04 20:33:06', 22, '2020-01-22 10:32:12'),
(6, 'PT. MTG', 'Cikarang', '021-', '', '', 'A', 20, '2019-12-04 20:35:07', 22, '2020-01-22 10:32:06'),
(7, 'PT. DBA', 'Jakarta', '021-', '', '', 'A', 20, '2019-12-04 20:35:49', 22, '2020-01-22 10:31:59'),
(8, 'PT. GCI', 'Jakarta', '021', '', '', 'A', 20, '2019-12-04 20:36:22', 22, '2020-01-22 10:31:52'),
(9, 'PT. JES', 'Tangerang', '021-', '', '', 'A', 22, '2020-01-22 10:28:25', 22, '2020-01-22 10:31:42'),
(10, 'PT. SMJ', 'Tangerang', '021-', '', '', 'A', 22, '2020-01-22 10:29:50', 0, '0000-00-00 00:00:00'),
(11, 'PT. OKS', 'Jakarta', '021-', '', '', 'A', 22, '2020-01-22 10:30:33', 22, '2020-01-22 10:31:32'),
(12, 'PT. EBS', 'Bekasi', '021-', '', '', 'A', 22, '2020-01-22 10:31:23', 22, '2020-02-07 12:17:56'),
(13, 'CV. BU', 'Tangerang', '021-', '', '', 'A', 22, '2020-01-22 10:32:49', 0, '0000-00-00 00:00:00'),
(14, 'STOCK OPNAME', 'Tangerang', '021-', '', '', 'A', 22, '2020-01-23 09:30:11', 0, '0000-00-00 00:00:00'),
(15, 'PT. Supplier', 'Cakung', '0812345678', 'supplier@yahoo.com', '123456789', 'D', 1, '2020-11-21 05:20:13', 1, '2020-11-21 05:30:42'),
(16, 'noah', 'cakung', '08120982109', 'noah@alda', '12345', 'A', 1, '2020-11-21 10:23:43', NULL, '2020-11-21 10:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `temp_penawarans`
--

CREATE TABLE `temp_penawarans` (
  `id` int(20) UNSIGNED NOT NULL,
  `nomorSo` varchar(20) DEFAULT NULL,
  `tglOrder` date NOT NULL,
  `tglJatuhTempoSo` date NOT NULL,
  `supplierId` int(11) NOT NULL,
  `itemBarang` varchar(50) NOT NULL,
  `bentuk` varchar(50) NOT NULL,
  `beratJenis` float NOT NULL,
  `diameter` float DEFAULT NULL,
  `panjang` float DEFAULT NULL,
  `lebar` float DEFAULT NULL,
  `tebal` float DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `ongkosPotong` varchar(50) NOT NULL,
  `diskon` float NOT NULL,
  `berat` double NOT NULL,
  `hargaPcs` double NOT NULL,
  `jumlah` double NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trpembelians`
--

CREATE TABLE `trpembelians` (
  `id` int(11) NOT NULL,
  `NoFaktur` varchar(30) NOT NULL,
  `TglFaktur` datetime NOT NULL,
  `TglJatuhTempo` datetime NOT NULL,
  `NoPO` varchar(30) NOT NULL,
  `TglPO` datetime NOT NULL,
  `TglJatuhTempoPO` datetime NOT NULL,
  `IdProduk` varchar(5) NOT NULL,
  `BeratJenis` varchar(10) NOT NULL,
  `Diameter` varchar(10) NOT NULL,
  `Panjang` varchar(10) NOT NULL,
  `Lebar` varchar(10) NOT NULL,
  `Tebal` varchar(10) NOT NULL,
  `Bentuk` varchar(30) NOT NULL,
  `OngkosPotong` int(11) NOT NULL,
  `HanyaPotong` varchar(5) NOT NULL,
  `ItemBarang` varchar(80) NOT NULL,
  `Berat` varchar(10) NOT NULL,
  `HargaKg` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `isRetur` tinyint(1) NOT NULL,
  `HargaSatuan` int(11) NOT NULL,
  `Diskon` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `PPN` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trpembelians`
--

INSERT INTO `trpembelians` (`id`, `NoFaktur`, `TglFaktur`, `TglJatuhTempo`, `NoPO`, `TglPO`, `TglJatuhTempoPO`, `IdProduk`, `BeratJenis`, `Diameter`, `Panjang`, `Lebar`, `Tebal`, `Bentuk`, `OngkosPotong`, `HanyaPotong`, `ItemBarang`, `Berat`, `HargaKg`, `qty`, `isRetur`, `HargaSatuan`, `Diskon`, `Jumlah`, `subtotal`, `PPN`, `total`, `keterangan`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(16, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '20', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (20X6000)', '59.520', 10000, 4, 0, 148800, 0, 595200, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(17, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '25', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (25X6000)', '93.000', 10000, 4, 0, 232500, 0, 930000, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(18, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '25', '5700', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (25X5700)', '22.087', 10000, 1, 0, 220870, 0, 220870, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(19, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '28', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (28X6000)', '58.330', 10000, 2, 0, 291650, 0, 583300, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(20, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '30', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (30X6000)', '100.440', 1072727, 3, 0, 359149, 0, 1077447, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(21, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '35', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (35X6000)', '182.280', 972727, 4, 0, 443272, 0, 1773088, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(22, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '40', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (40X6000)', '357.120', 972727, 6, 0, 578967, 0, 3473802, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(23, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '40', '1320', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (40X1320)', '13.094', 972727, 1, 0, 127369, 0, 127369, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(24, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '45', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (45X6000)', '301.320', 972727, 4, 0, 732755, 0, 2931020, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(25, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '45', '1700', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (45X1700)', '21.343', 972727, 1, 0, 207609, 0, 207609, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(26, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '50', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (50X6000)', '186.000', 1072727, 2, 0, 997636, 0, 1995272, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(27, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '50', '2660', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (50X2660)', '41.230', 1072727, 1, 0, 442285, 0, 442285, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(28, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '55', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (55X6000)', '450.120', 972727, 4, 0, 1094610, 0, 4378440, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(29, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '60', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (60X6000)', '133.920', 981818, 1, 0, 1314851, 0, 1314851, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(30, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '60', '3000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (60X3000)', '66.960', 981818, 1, 0, 657425, 0, 657425, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(31, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '65', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (65X6000)', '314.340', 10000, 2, 0, 1571700, 0, 3143400, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(32, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '65', '4330', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (65X4330)', '113.424', 10000, 1, 0, 1134240, 0, 1134240, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(33, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '70', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (70X6000)', '182.280', 972727, 1, 0, 1773087, 0, 1773087, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(34, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '70', '4300', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (70X4300)', '130.634', 972727, 1, 0, 1270712, 0, 1270712, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(35, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '75', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (75X6000)', '209.250', 1072727, 1, 0, 2244681, 0, 2244681, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(36, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '75', '5000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (75X5000)', '174.375', 1072727, 1, 0, 1870568, 0, 1870568, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(37, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '80', '5230', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (80X5230)', '207.526', 1072727, 1, 0, 2226187, 0, 2226187, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(38, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '85', '4830', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (85X4830)', '216.360', 1109091, 1, 0, 2399629, 0, 2399629, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(39, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '90', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (90X6000)', '602.640', 1072727, 2, 0, 3232341, 0, 6464682, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(40, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '90', '800', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (90X800)', '40.176', 1072727, 1, 0, 430979, 0, 430979, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(41, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '95', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (95X6000)', '335.730', 972727, 1, 0, 3265736, 0, 3265736, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(42, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '95', '3720', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (95X3720)', '208.153', 972727, 1, 0, 2024760, 0, 2024760, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(43, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '100', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (100X6000)', '372.000', 1122727, 1, 0, 4176544, 0, 4176544, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(44, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '100', '900', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (100X900)', '55.800', 1122727, 1, 0, 626482, 0, 626482, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(45, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '105', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (105X6000)', '410.130', 972727, 1, 0, 3989445, 0, 3989445, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(46, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '105', '4930', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (105X4930)', '336.990', 972727, 1, 0, 3277993, 0, 3277993, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(47, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '110', '3660', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (110X3660)', '274.573', 972727, 1, 0, 2670846, 0, 2670846, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(48, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '120', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (120X6000)', '1071.360', 1109091, 2, 0, 5941179, 0, 11882358, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(49, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '120', '1425', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (120X1425)', '127.224', 1109091, 1, 0, 1411030, 0, 1411030, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(50, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '125', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (125X6000)', '1162.500', 1109091, 2, 0, 6446591, 0, 12893182, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(51, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '130', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (130X6000)', '628.680', 1109091, 1, 0, 6972633, 0, 6972633, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(52, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '150', '5450', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (150X5450)', '760.275', 1181818, 1, 0, 8985067, 0, 8985067, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(53, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '140', '4710', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (140X4710)', '572.359', 10000, 1, 0, 5723590, 0, 5723590, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(54, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '160', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (160X6000)', '952.320', 1163636, 1, 0, 11081538, 0, 11081538, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(55, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '160', '720', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (160X720)', '114.278', 1163636, 1, 0, 1329780, 0, 1329780, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(56, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '170', '3370', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (170X3370)', '603.837', 1163636, 1, 0, 7026465, 0, 7026465, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(57, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '180', '2830', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (180X2830)', '568.490', 1163636, 1, 0, 6615154, 0, 6615154, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(58, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '200', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (200X6000)', '1488.000', 1163636, 1, 0, 17314904, 0, 17314904, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(59, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '200', '3190', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (200X3190)', '791.120', 1163636, 1, 0, 9205757, 0, 9205757, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(60, 'STOCK OPNAME', '2019-12-24 00:00:00', '2020-02-07 00:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '11', '6.2', '115', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (115X6000)', '491.970', 1109091, 1, 0, 5456395, 0, 5456395, 169595802, 10, 186555382, '', 'A', 22, '2020-01-28 12:34:17', NULL, NULL),
(61, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1240', '2430', '4', 'Plate', 0, 'false', 'PLAT SS400 (4X1240X2430)', '283.843', 793972, 3, 0, 751211, 0, 2253633, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(62, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1240', '1430', '4', 'Plate', 0, 'false', 'PLAT SS400 (4X1240X1430)', '55.678', 793972, 1, 0, 442068, 0, 442068, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(63, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1210', '2410', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1210X2410)', '572.285', 793318, 5, 0, 908008, 0, 4540040, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(64, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '710', '1100', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X710X1100)', '30.654', 793318, 1, 0, 243184, 0, 243184, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(65, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1520', '4400', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1520X4400)', '262.504', 790909, 1, 0, 2076168, 0, 2076168, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(66, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '300', '560', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X300X560)', '6.594', 790909, 1, 0, 52153, 0, 52153, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(67, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1550', '6100', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1550X6100)', '2968.870', 790909, 8, 0, 2935133, 0, 23481064, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(68, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1210', '2410', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1210X2410)', '1373.483', 79423, 10, 0, 1090861, 0, 10908610, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(69, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1830', '6050', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1830X6050)', '2085.871', 7545, 4, 0, 3934474, 0, 15737896, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(70, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1830', '3920', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1830X3920)', '337.877', 7545, 1, 0, 2549282, 0, 2549282, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(71, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2800', '5420', '7.5', 'Plate', 0, 'false', 'PLAT SS400 (7.5X2800X5420)', '893.487', 745454, 1, 0, 6660535, 0, 6660535, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(72, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2410', '3490', '8', 'Plate', 0, 'false', 'PLAT SS400 (8X2410X3490)', '1056.409', 745454, 2, 0, 3937522, 0, 7875044, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(73, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '930', '1000', '8', 'Plate', 0, 'false', 'PLAT SS400 (8X930X1000)', '58.404', 745454, 1, 0, 435375, 0, 435375, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(74, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1000', '2420', '8', 'Plate', 0, 'false', 'PLAT SS400 (8X1000X2420)', '151.976', 745454, 1, 0, 1132911, 0, 1132911, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(75, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1920', '6050', '8', 'Plate', 0, 'false', 'PLAT SS400 (8X1920X6050)', '729.485', 745454, 1, 0, 5437975, 0, 5437975, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(76, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '320', '1290', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X320X1290)', '29.164', 8364, 1, 0, 243928, 0, 243928, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(77, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2885', '4115', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X2885X4115)', '838.741', 745454, 1, 0, 6252428, 0, 6252428, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(78, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2280', '6010', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X2280X6010)', '968.103', 745454, 1, 0, 7216763, 0, 7216763, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(79, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1540', '6550', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X1540X6550)', '712.647', 745454, 1, 0, 5312456, 0, 5312456, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(80, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1500', '6600', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X1500X6600)', '1398.870', 745454, 2, 0, 5213966, 0, 10427932, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(81, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2450', '6150', '10', 'Plate', 0, 'false', 'PLAT SS400 (10X2450X6150)', '2365.597', 745454, 2, 0, 8817219, 0, 17634438, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(82, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2450', '6700', '10', 'Plate', 0, 'false', 'PLAT SS400 (10X2450X6700)', '1288.578', 745454, 1, 0, 9605756, 0, 9605756, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(83, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '740', '800', '10', 'Plate', 0, 'false', 'PLAT SS400 (10X740X800)', '46.472', 745454, 1, 0, 346427, 0, 346427, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(84, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1370', '1540', '10', 'Plate', 0, 'false', 'PLAT SS400 (10X1370X1540)', '165.619', 745454, 1, 0, 1234613, 0, 1234613, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(85, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '460', '760', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X460X760)', '32.932', 745454, 1, 0, 245493, 0, 245493, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(86, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '860', '930', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X860X930)', '75.341', 745454, 1, 0, 561632, 0, 561632, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(87, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1840', '4800', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X1840X4800)', '831.974', 745454, 1, 0, 6201983, 0, 6201983, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(88, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2000', '4780', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X2000X4780)', '900.552', 745454, 1, 0, 6713201, 0, 6713201, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(89, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2950', '5060', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X2950X5060)', '1406.123', 745454, 1, 0, 10482000, 0, 10482000, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(90, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '580', '1090', '15', 'Plate', 0, 'false', 'PLAT SS400 (15X580X1090)', '74.442', 8800, 1, 0, 655090, 0, 655090, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(91, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1300', '2500', '15', 'Plate', 0, 'false', 'PLAT SS400 (15X1300X2500)', '382.688', 8800, 1, 0, 3367654, 0, 3367654, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(92, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2020', '4790', '15', 'Plate', 0, 'false', 'PLAT SS400 (15X2020X4790)', '1139.325', 8800, 1, 0, 10026060, 0, 10026060, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(93, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1100', '1340', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X1100X1340)', '185.134', 745455, 1, 0, 1380091, 0, 1380091, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(94, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '350', '2300', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X350X2300)', '202.216', 745455, 2, 0, 753715, 0, 1507430, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(95, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2410', '3540', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X2410X3540)', '1071.544', 745455, 1, 0, 7987878, 0, 7987878, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(96, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2410', '4730', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X2410X4730)', '1431.752', 745455, 1, 0, 10673067, 0, 10673067, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(97, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2420', '5290', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X2420X5290)', '1607.906', 745455, 1, 0, 11986216, 0, 11986216, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(98, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '540', '670', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X540X670)', '45.442', 745455, 1, 0, 338750, 0, 338750, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(99, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1220', '6020', '19', 'Plate', 0, 'false', 'PLAT SS400 (19X1220X6020)', '1095.417', 745455, 1, 0, 8165841, 0, 8165841, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(100, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1660', '4700', '19', 'Plate', 0, 'false', 'PLAT SS400 (19X1660X4700)', '1163.668', 745455, 1, 0, 8674621, 0, 8674621, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(101, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '880', '780', '19', 'Plate', 0, 'false', 'PLAT SS400 (19X880X780)', '102.377', 745455, 1, 0, 763174, 0, 763174, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(102, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1220', '6020', '19', 'Plate', 0, 'false', 'PLAT SS400 (19X1220X6020)', '1095.417', 745455, 1, 0, 8165841, 0, 8165841, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(103, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1810', '2970', '20', 'Plate', 0, 'false', 'PLAT SS400 (20X1810X2970)', '843.985', 745455, 1, 0, 6291528, 0, 6291528, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(104, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1510', '2490', '20', 'Plate', 0, 'false', 'PLAT SS400 (20X1510X2490)', '590.304', 745455, 1, 0, 4400451, 0, 4400451, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(105, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1810', '2910', '20', 'Plate', 0, 'false', 'PLAT SS400 (20X1810X2910)', '1653.869', 745455, 2, 0, 6164425, 0, 12328850, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(106, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '500', '1100', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X500X1100)', '94.985', 745455, 1, 0, 708070, 0, 708070, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(107, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1620', '2250', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X1620X2250)', '629.491', 745455, 1, 0, 4692572, 0, 4692572, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(108, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '870', '920', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X870X920)', '138.229', 745455, 1, 0, 1030435, 0, 1030435, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(109, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1660', '7480', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X1660X7480)', '2144.381', 745455, 1, 0, 15985395, 0, 15985395, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(110, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2620', '5030', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X2620X5030)', '2275.944', 745455, 1, 0, 16966138, 0, 16966138, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(111, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '710', '800', '25', 'Plate', 0, 'false', 'PLAT SS400 (25X710X800)', '111.470', 745455, 1, 0, 830959, 0, 830959, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(112, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1350', '1550', '25', 'Plate', 0, 'false', 'PLAT SS400 (25X1350X1550)', '410.653', 745455, 1, 0, 3061233, 0, 3061233, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(113, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1510', '6050', '25', 'Plate', 0, 'false', 'PLAT SS400 (25X1510X6050)', '3585.684', 745455, 2, 0, 13364830, 0, 26729660, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(114, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1100', '1590', '30', 'Plate', 0, 'false', 'PLAT SS400 (30X1100X1590)', '411.889', 836363, 1, 0, 3444887, 0, 3444887, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(115, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '760', '1860', '30', 'Plate', 0, 'false', 'PLAT SS400 (30X760X1860)', '332.903', 836363, 1, 0, 2784278, 0, 2784278, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(116, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '350', '790', '30', 'Plate', 0, 'false', 'PLAT SS400 (30X350X790)', '65.116', 836363, 1, 0, 544606, 0, 544606, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(117, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2990', '5500', '30', 'Plate', 0, 'false', 'PLAT SS400 (30X2990X5500)', '3872.798', 836363, 1, 0, 32390650, 0, 32390650, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(118, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1500', '4900', '32', 'Plate', 0, 'false', 'PLAT SS400 (32X1500X4900)', '1846.320', 836363, 1, 0, 15441937, 0, 15441937, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(119, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2450', '4910', '32', 'Plate', 0, 'false', 'PLAT SS400 (32X2450X4910)', '3021.810', 836363, 1, 0, 25273301, 0, 25273301, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(120, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1540', '3320', '36', 'Plate', 0, 'false', 'PLAT SS400 (36X1540X3320)', '1444.877', 7818, 1, 0, 11296048, 0, 11296048, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(121, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1535', '5430', '36', 'Plate', 0, 'false', 'PLAT SS400 (36X1535X5430)', '2355.485', 7818, 1, 0, 18415182, 0, 18415182, 442612881, 10, 486874169, '', 'A', 22, '2020-01-29 11:18:26', NULL, NULL),
(122, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1240', '2430', '4', 'Plate', 0, 'false', 'PLAT SS400 (4X1240X2430)', '283.843', 793972, 3, 0, 751211, 0, 2253633, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(123, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1240', '1430', '4', 'Plate', 0, 'false', 'PLAT SS400 (4X1240X1430)', '55.678', 793972, 1, 0, 442068, 0, 442068, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(124, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1210', '2410', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1210X2410)', '572.285', 793318, 5, 0, 908008, 0, 4540040, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(125, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '710', '1100', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X710X1100)', '30.654', 793318, 1, 0, 243184, 0, 243184, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(126, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1520', '4400', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1520X4400)', '262.504', 790909, 1, 0, 2076168, 0, 2076168, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(127, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '300', '560', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X300X560)', '6.594', 790909, 1, 0, 52153, 0, 52153, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(128, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1550', '6100', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1550X6100)', '2968.870', 790909, 8, 0, 2935133, 0, 23481064, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(129, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1210', '2410', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1210X2410)', '1373.483', 79423, 10, 0, 1090861, 0, 10908610, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(130, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1830', '6050', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1830X6050)', '2085.871', 7545, 4, 0, 3934474, 0, 15737896, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(131, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-01-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1830', '3920', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1830X3920)', '337.877', 7545, 1, 0, 2549282, 0, 2549282, 62284098, 0, 62284098, '', 'A', 22, '2020-01-29 11:49:18', NULL, NULL),
(132, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1240', '2430', '4', 'Plate', 0, 'false', 'PLAT SS400 (4X1240X2430)', '283.843', 793972, 3, 0, 751211, 0, 2253633, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(133, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1240', '1430', '4', 'Plate', 0, 'false', 'PLAT SS400 (4X1240X1430)', '55.678', 793972, 1, 0, 442068, 0, 442068, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(134, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1210', '2410', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1210X2410)', '572.285', 793318, 5, 0, 908008, 0, 4540040, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(135, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '710', '1100', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X710X1100)', '30.654', 793318, 1, 0, 243184, 0, 243184, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(136, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1520', '4400', '5', 'Plate', 7909, 'false', 'PLAT SS400 (5X1520X4400)', '262.504', 793318, 1, 0, 2082491, 0, 2090400, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(137, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '300', '560', '5', 'Plate', 7909, 'false', 'PLAT SS400 (5X300X560)', '6.594', 793318, 1, 0, 52311, 0, 60220, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(138, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1550', '6100', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1550X6100)', '2968.870', 793318, 8, 0, 2944073, 0, 23552584, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(139, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1210', '2410', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1210X2410)', '1373.483', 79423, 10, 0, 1090861, 0, 10908610, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(140, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1830', '6050', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1830X6050)', '2085.871', 7545, 4, 0, 3934474, 0, 15737896, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(141, 'STOCK OPNAME', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1830', '3920', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1830X3920)', '337.877', 7545, 1, 0, 2549282, 0, 2549282, 62377917, 10, 68615709, '', 'A', 22, '2020-01-29 12:00:24', NULL, NULL),
(143, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1240', '2430', '4', 'Plate', 0, 'false', 'PLAT SS400 (4X1240X2430)', '283.843', 793972, 3, 0, 751211, 0, 2253633, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(144, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1240', '1430', '4', 'Plate', 0, 'false', 'PLAT SS400 (4X1240X1430)', '55.678', 793972, 1, 0, 442068, 0, 442068, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(145, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1210', '2410', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1210X2410)', '572.285', 793318, 5, 0, 908008, 0, 4540040, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(146, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '710', '1100', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X710X1100)', '30.654', 793318, 1, 0, 243184, 0, 243184, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(147, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1520', '4400', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1520X4400)', '262.504', 790909, 1, 0, 2076168, 0, 2076168, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(148, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '300', '560', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X300X560)', '6.594', 790909, 1, 0, 52153, 0, 52153, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(149, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1550', '6100', '5', 'Plate', 0, 'false', 'PLAT SS400 (5X1550X6100)', '2968.870', 790909, 8, 0, 2935133, 0, 23481064, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(150, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1210', '2410', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1210X2410)', '1373.483', 79423, 10, 0, 1090861, 0, 10908610, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(151, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1830', '6050', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1830X6050)', '2085.871', 7545, 4, 0, 3934474, 0, 15737896, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(152, 'STOCK OPNAME 1', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '17', '7.85', '', '1830', '3920', '6', 'Plate', 0, 'false', 'PLAT SS400 (6X1830X3920)', '337.877', 7545, 1, 0, 2549282, 0, 2549282, 62284098, 10, 68512508, '', 'A', 22, '2020-01-29 12:15:56', NULL, NULL),
(153, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2800', '5420', '7.5', 'Plate', 0, 'false', 'PLAT SS400 (7.5X2800X5420)', '893.487', 745454, 1, 0, 6660535, 0, 6660535, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(154, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2410', '3490', '8', 'Plate', 0, 'false', 'PLAT SS400 (8X2410X3490)', '1056.409', 745454, 2, 0, 3937522, 0, 7875044, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(155, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '930', '1000', '8', 'Plate', 0, 'false', 'PLAT SS400 (8X930X1000)', '58.404', 745454, 1, 0, 435375, 0, 435375, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(156, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1000', '2420', '8', 'Plate', 0, 'false', 'PLAT SS400 (8X1000X2420)', '151.976', 745454, 1, 0, 1132911, 0, 1132911, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(157, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1920', '6050', '8', 'Plate', 0, 'false', 'PLAT SS400 (8X1920X6050)', '729.485', 745454, 1, 0, 5437975, 0, 5437975, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(158, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '320', '1290', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X320X1290)', '29.164', 745454, 1, 0, 217404, 0, 217404, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(159, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2885', '4115', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X2885X4115)', '838.741', 745454, 1, 0, 6252428, 0, 6252428, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(160, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2280', '6010', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X2280X6010)', '968.103', 745454, 1, 0, 7216763, 0, 7216763, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(161, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1540', '6550', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X1540X6550)', '712.647', 745454, 1, 0, 5312456, 0, 5312456, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(162, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1500', '6600', '9', 'Plate', 0, 'false', 'PLAT SS400 (9X1500X6600)', '1398.870', 745454, 2, 0, 5213966, 0, 10427932, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(163, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2450', '6150', '10', 'Plate', 0, 'false', 'PLAT SS400 (10X2450X6150)', '2365.597', 745454, 2, 0, 8817219, 0, 17634438, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(164, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2450', '6700', '10', 'Plate', 0, 'false', 'PLAT SS400 (10X2450X6700)', '1288.578', 745454, 1, 0, 9605756, 0, 9605756, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(165, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '740', '800', '10', 'Plate', 0, 'false', 'PLAT SS400 (10X740X800)', '46.472', 745454, 1, 0, 346427, 0, 346427, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(166, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1370', '1540', '10', 'Plate', 0, 'false', 'PLAT SS400 (10X1370X1540)', '165.619', 745454, 1, 0, 1234613, 0, 1234613, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(167, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '460', '760', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X460X760)', '32.932', 745454, 1, 0, 245493, 0, 245493, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(168, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '860', '930', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X860X930)', '75.341', 745454, 1, 0, 561632, 0, 561632, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(169, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1840', '4800', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X1840X4800)', '831.974', 745454, 1, 0, 6201983, 0, 6201983, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL);
INSERT INTO `trpembelians` (`id`, `NoFaktur`, `TglFaktur`, `TglJatuhTempo`, `NoPO`, `TglPO`, `TglJatuhTempoPO`, `IdProduk`, `BeratJenis`, `Diameter`, `Panjang`, `Lebar`, `Tebal`, `Bentuk`, `OngkosPotong`, `HanyaPotong`, `ItemBarang`, `Berat`, `HargaKg`, `qty`, `isRetur`, `HargaSatuan`, `Diskon`, `Jumlah`, `subtotal`, `PPN`, `total`, `keterangan`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(170, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2000', '4780', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X2000X4780)', '900.552', 745454, 1, 0, 6713201, 0, 6713201, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(171, 'STOCK OPNAME 2', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2950', '5060', '12', 'Plate', 0, 'false', 'PLAT SS400 (12X2950X5060)', '1406.123', 745454, 1, 0, 10482000, 0, 10482000, 103994366, 10, 114393803, '', 'A', 22, '2020-01-29 12:34:10', NULL, NULL),
(172, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '580', '1090', '15', 'Plate', 0, 'false', 'PLAT SS400 (15X580X1090)', '74.442', 8800, 1, 0, 655090, 0, 655090, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(173, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1300', '2500', '15', 'Plate', 0, 'false', 'PLAT SS400 (15X1300X2500)', '382.688', 8800, 1, 0, 3367654, 0, 3367654, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(174, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2020', '4790', '15', 'Plate', 0, 'false', 'PLAT SS400 (15X2020X4790)', '1139.325', 8800, 1, 0, 10026060, 0, 10026060, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(175, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1100', '1340', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X1100X1340)', '185.134', 745455, 1, 0, 1380091, 0, 1380091, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(176, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '350', '2300', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X350X2300)', '202.216', 745455, 2, 0, 753715, 0, 1507430, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(177, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2410', '3540', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X2410X3540)', '1071.544', 745455, 1, 0, 7987878, 0, 7987878, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(178, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2410', '4730', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X2410X4730)', '1431.752', 745455, 1, 0, 10673067, 0, 10673067, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(179, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2420', '5290', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X2420X5290)', '1607.906', 745455, 1, 0, 11986216, 0, 11986216, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(180, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '540', '670', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X540X670)', '45.442', 745455, 1, 0, 338750, 0, 338750, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(181, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1220', '6020', '19', 'Plate', 0, 'false', 'PLAT SS400 (19X1220X6020)', '1095.417', 745455, 1, 0, 8165841, 0, 8165841, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(182, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1660', '4700', '19', 'Plate', 0, 'false', 'PLAT SS400 (19X1660X4700)', '1163.668', 745455, 1, 0, 8674621, 0, 8674621, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(183, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '880', '780', '19', 'Plate', 0, 'false', 'PLAT SS400 (19X880X780)', '102.377', 745455, 1, 0, 763174, 0, 763174, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(184, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1220', '6020', '19', 'Plate', 0, 'false', 'PLAT SS400 (19X1220X6020)', '1095.417', 745455, 1, 0, 8165841, 0, 8165841, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(185, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1810', '2970', '20', 'Plate', 0, 'false', 'PLAT SS400 (20X1810X2970)', '843.985', 745455, 1, 0, 6291528, 0, 6291528, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(186, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1510', '2490', '20', 'Plate', 0, 'false', 'PLAT SS400 (20X1510X2490)', '590.304', 745455, 1, 0, 4400451, 0, 4400451, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(187, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1810', '2910', '20', 'Plate', 0, 'false', 'PLAT SS400 (20X1810X2910)', '1653.869', 745455, 2, 0, 6164425, 0, 12328850, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(188, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '500', '1100', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X500X1100)', '94.985', 745455, 1, 0, 708070, 0, 708070, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(189, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1620', '2250', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X1620X2250)', '629.491', 745455, 1, 0, 4692572, 0, 4692572, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(190, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '870', '920', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X870X920)', '138.229', 745455, 1, 0, 1030435, 0, 1030435, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(191, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1660', '7480', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X1660X7480)', '2144.381', 745455, 1, 0, 15985395, 0, 15985395, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(192, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2620', '5030', '22', 'Plate', 0, 'false', 'PLAT SS400 (22X2620X5030)', '2275.944', 745455, 1, 0, 16966138, 0, 16966138, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(193, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '710', '800', '25', 'Plate', 0, 'false', 'PLAT SS400 (25X710X800)', '111.470', 745455, 1, 0, 830959, 0, 830959, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(194, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1350', '1550', '25', 'Plate', 0, 'false', 'PLAT SS400 (25X1350X1550)', '410.653', 745455, 1, 0, 3061233, 0, 3061233, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(195, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1510', '6050', '25', 'Plate', 0, 'false', 'PLAT SS400 (25X1510X6050)', '3585.684', 745455, 2, 0, 13364830, 0, 26729660, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(196, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1100', '1590', '30', 'Plate', 0, 'false', 'PLAT SS400 (30X1100X1590)', '411.889', 836363, 1, 0, 3444887, 0, 3444887, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(197, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '760', '1860', '30', 'Plate', 0, 'false', 'PLAT SS400 (30X760X1860)', '332.903', 836363, 1, 0, 2784278, 0, 2784278, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(198, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '350', '790', '30', 'Plate', 0, 'false', 'PLAT SS400 (30X350X790)', '65.116', 836363, 1, 0, 544606, 0, 544606, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(199, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2990', '5500', '30', 'Plate', 0, 'false', 'PLAT SS400 (30X2990X5500)', '3872.798', 836363, 1, 0, 32390650, 0, 32390650, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(200, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1500', '4900', '32', 'Plate', 0, 'false', 'PLAT SS400 (32X1500X4900)', '1846.320', 836363, 1, 0, 15441937, 0, 15441937, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(201, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2450', '4910', '32', 'Plate', 0, 'false', 'PLAT SS400 (32X2450X4910)', '3021.810', 836363, 1, 0, 25273301, 0, 25273301, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(202, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1540', '3320', '36', 'Plate', 0, 'false', 'PLAT SS400 (36X1540X3320)', '1444.877', 7818, 1, 0, 11296048, 0, 11296048, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(203, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1535', '5430', '36', 'Plate', 0, 'false', 'PLAT SS400 (36X1535X5430)', '2355.485', 7818, 1, 0, 18415182, 0, 18415182, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(204, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2220', '6030', '40', 'Plate', 0, 'false', 'PLAT SS400 (40X2220X6030)', '8406.785', 745455, 2, 0, 31334400, 0, 62668800, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(205, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '470', '1630', '40', 'Plate', 0, 'false', 'PLAT SS400 (40X470X1630)', '240.555', 745455, 1, 0, 1793229, 0, 1793229, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(206, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1950', '4380', '40', 'Plate', 0, 'false', 'PLAT SS400 (40X1950X4380)', '2681.874', 745455, 1, 0, 19992164, 0, 19992164, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(207, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '200', '1630', '40', 'Plate', 0, 'false', 'PLAT SS400 (40X200X1630)', '204.728', 745455, 2, 0, 763078, 0, 1526156, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(208, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '180', '500', '40', 'Plate', 0, 'false', 'PLAT SS400 (40X180X500)', '28.260', 745455, 1, 0, 210666, 0, 210666, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(209, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '230', '780', '40', 'Plate', 0, 'false', 'PLAT SS400 (40X230X780)', '56.332', 745455, 1, 0, 419930, 0, 419930, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(210, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1560', '1960', '43', 'Plate', 0, 'false', 'PLAT SS400 (43X1560X1960)', '1032.093', 745455, 1, 0, 7693789, 0, 7693789, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(211, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '215', '440', '43', 'Plate', 0, 'false', 'PLAT SS400 (43X215X440)', '31.932', 745455, 1, 0, 238039, 0, 238039, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(212, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '480', '690', '43', 'Plate', 0, 'false', 'PLAT SS400 (43X480X690)', '111.797', 745455, 1, 0, 833396, 0, 833396, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(213, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '270', '460', '45', 'Plate', 0, 'false', 'PLAT SS400 (45X270X460)', '43.874', 845455, 1, 0, 370935, 0, 370935, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(214, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '160', '480', '45', 'Plate', 0, 'false', 'PLAT SS400 (45X160X480)', '27.130', 845455, 1, 0, 229372, 0, 229372, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(215, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '80', '240', '45', 'Plate', 0, 'false', 'PLAT SS400 (45X80X240)', '6.782', 845455, 1, 0, 57339, 0, 57339, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(216, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '110', '850', '45', 'Plate', 0, 'false', 'PLAT SS400 (45X110X850)', '33.029', 845455, 1, 0, 279245, 0, 279245, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(217, 'STOCK OPNAME 3', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-06 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1825', '6080', '45', 'Plate', 0, 'false', 'PLAT SS400 (45X1825X6080)', '3919.662', 845455, 1, 0, 33138978, 0, 33138978, 405759931, 0, 405759931, '', 'A', 22, '2020-02-06 12:41:23', NULL, NULL),
(218, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1520', '6060', '50', 'Plate', 0, 'false', 'PLAT SS400 (50X1520X6060)', '3615.396', 845455, 1, 0, 30566546, 0, 30566546, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(219, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '220', '815', '50', 'Plate', 0, 'false', 'PLAT SS400 (50X220X815)', '70.375', 845455, 1, 0, 594989, 0, 594989, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(220, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '250', '570', '50', 'Plate', 0, 'false', 'PLAT SS400 (50X250X570)', '55.931', 845455, 1, 0, 472871, 0, 472871, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(221, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1670', '1620', '51', 'Plate', 0, 'false', 'PLAT SS400 (51X1670X1620)', '1083.107', 8091, 1, 0, 8763419, 0, 8763419, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(222, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '250', '1190', '51', 'Plate', 0, 'false', 'PLAT SS400 (51X250X1190)', '119.104', 8091, 1, 0, 963670, 0, 963670, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(223, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1120', '6320', '51.6', 'Plate', 0, 'false', 'PLAT SS400 (51.6X1120X6320)', '2867.177', 8091, 1, 0, 23198329, 0, 23198329, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(224, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '400', '580', '55', 'Plate', 0, 'false', 'PLAT SS400 (55X400X580)', '100.166', 8091, 1, 0, 810443, 0, 810443, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(225, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1610', '2190', '55', 'Plate', 0, 'false', 'PLAT SS400 (55X1610X2190)', '1522.307', 8091, 1, 0, 12316986, 0, 12316986, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(226, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '210', '430', '55', 'Plate', 0, 'false', 'PLAT SS400 (55X210X430)', '38.987', 8091, 1, 0, 315444, 0, 315444, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(227, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '2160', '4410', '56', 'Plate', 0, 'false', 'PLAT SS400 (56X2160X4410)', '4187.454', 8091, 1, 0, 33880690, 0, 33880690, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(228, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '940', '2700', '60', 'Plate', 0, 'false', 'PLAT SS400 (60X940X2700)', '1195.398', 845455, 1, 0, 10106552, 0, 10106552, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(229, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1820', '3350', '60', 'Plate', 0, 'false', 'PLAT SS400 (60X1820X3350)', '2871.687', 845455, 1, 0, 24278821, 0, 24278821, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(230, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1100', '2390', '61', 'Plate', 0, 'false', 'PLAT SS400 (61X1100X2390)', '1258.897', 845455, 1, 0, 10643408, 0, 10643408, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(231, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1520', '2530', '65', 'Plate', 0, 'false', 'PLAT SS400 (65X1520X2530)', '1962.217', 845455, 1, 0, 16589662, 0, 16589662, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(232, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '300', '370', '65', 'Plate', 0, 'false', 'PLAT SS400 (65X300X370)', '56.638', 845455, 1, 0, 478849, 0, 478849, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(233, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '240', '1820', '65', 'Plate', 0, 'false', 'PLAT SS400 (65X240X1820)', '222.877', 845455, 1, 0, 1884325, 0, 1884325, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(234, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '180', '1010', '65', 'Plate', 0, 'false', 'PLAT SS400 (65X180X1010)', '92.763', 845455, 1, 0, 784269, 0, 784269, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(235, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '260', '810', '70', 'Plate', 0, 'false', 'PLAT SS400 (70X260X810)', '115.725', 8909, 1, 0, 1030994, 0, 1030994, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(236, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1380', '2220', '70', 'Plate', 0, 'false', 'PLAT SS400 (70X1380X2220)', '1683.448', 8909, 1, 0, 14997838, 0, 14997838, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(237, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '190', '460', '71', 'Plate', 0, 'false', 'PLAT SS400 (71X190X460)', '48.712', 8909, 1, 0, 433975, 0, 433975, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(238, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1510', '2740', '75', 'Plate', 0, 'false', 'PLAT SS400 (75X1510X2740)', '2435.894', 745455, 1, 0, 18158494, 0, 18158494, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(239, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '260', '720', '80', 'Plate', 0, 'false', 'PLAT SS400 (80X260X720)', '117.562', 9159, 1, 0, 1076750, 0, 1076750, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(240, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1190', '1330', '80', 'Plate', 0, 'false', 'PLAT SS400 (80X1190X1330)', '993.936', 9159, 1, 0, 9103460, 0, 9103460, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(241, 'STOCK OPNAME 4', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-07 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1200', '1550', '80', 'Plate', 0, 'false', 'PLAT SS400 (80X1200X1550)', '1168.080', 9159, 1, 0, 10698445, 0, 10698445, 232149229, 0, 232149229, '', 'A', 22, '2020-02-07 12:36:11', NULL, NULL),
(242, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '200', '680', '85', 'Plate', 0, 'false', 'PLAT SS400 (85X200X680)', '90.746', 972728, 1, 0, 882712, 0, 882712, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(243, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '540', '590', '85', 'Plate', 0, 'false', 'PLAT SS400 (85X540X590)', '212.586', 972728, 1, 0, 2067884, 0, 2067884, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(244, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '350', '570', '90', 'Plate', 0, 'false', 'PLAT SS400 (90X350X570)', '140.947', 1018182, 1, 0, 1435097, 0, 1435097, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(245, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '850', '1220', '90', 'Plate', 0, 'false', 'PLAT SS400 (90X850X1220)', '732.640', 1018182, 1, 0, 7459609, 0, 7459609, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(246, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '240', '270', '100', 'Plate', 0, 'false', 'PLAT SS400 (100X240X270)', '50.868', 954546, 1, 0, 485558, 0, 485558, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(247, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '380', '1050', '100', 'Plate', 0, 'false', 'PLAT SS400 (100X380X1050)', '313.215', 954546, 1, 0, 2989781, 0, 2989781, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(248, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '260', '430', '100', 'Plate', 0, 'false', 'PLAT SS400 (100X260X430)', '87.763', 954546, 1, 0, 837738, 0, 837738, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(249, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1160', '1610', '108', 'Plate', 0, 'false', 'PLAT SS400 (108X1160X1610)', '1583.351', 972728, 1, 0, 15401699, 0, 15401699, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(250, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '350', '1210', '108', 'Plate', 0, 'false', 'PLAT SS400 (108X350X1210)', '359.043', 972728, 1, 0, 3492512, 0, 3492512, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(251, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '670', '1230', '110', 'Plate', 0, 'false', 'PLAT SS400 (110X670X1230)', '711.610', 918182, 1, 0, 6533875, 0, 6533875, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(252, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '250', '750', '110', 'Plate', 0, 'false', 'PLAT SS400 (110X250X750)', '161.906', 918182, 1, 0, 1486592, 0, 1486592, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(253, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '300', '300', '114', 'Plate', 0, 'false', 'PLAT SS400 (114X300X300)', '80.541', 918182, 1, 0, 739513, 0, 739513, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(254, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '250', '530', '114', 'Plate', 0, 'false', 'PLAT SS400 (114X250X530)', '118.574', 918182, 1, 0, 1088725, 0, 1088725, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(255, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '350', '290', '120', 'Plate', 0, 'false', 'PLAT SS400 (120X350X290)', '95.613', 836364, 1, 0, 799673, 0, 799673, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(256, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1240', '1300', '120', 'Plate', 0, 'false', 'PLAT SS400 (120X1240X1300)', '1518.504', 836364, 1, 0, 12700221, 0, 12700221, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(257, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '540', '1090', '130', 'Plate', 0, 'false', 'PLAT SS400 (130X540X1090)', '600.666', 945455, 1, 0, 5679027, 0, 5679027, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(258, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1480', '2500', '130', 'Plate', 0, 'false', 'PLAT SS400 (130X1480X2500)', '3775.850', 945455, 1, 0, 35698963, 0, 35698963, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(259, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1475', '2300', '140', 'Plate', 0, 'false', 'PLAT SS400 (140X1475X2300)', '3728.358', 945455, 1, 0, 35249947, 0, 35249947, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(260, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '430', '450', '148', 'Plate', 0, 'false', 'PLAT SS400 (148X430X450)', '224.808', 945455, 1, 0, 2125458, 0, 2125458, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(261, 'STOCK OPNAME 5', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-11 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '270', '300', '160', 'Plate', 0, 'false', 'PLAT SS400 (160X270X300)', '101.736', 945455, 1, 0, 961868, 0, 961868, 138116452, 0, 138116452, '', 'A', 22, '2020-02-11 12:46:46', NULL, NULL),
(262, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '10', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (10X6000)', '26.040', 954545, 7, 0, 35509, 0, 248563, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(263, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '12.7', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (12.7X6000)', '18.000', 936364, 3, 0, 56182, 0, 168546, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(264, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '15.875', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (15.875X6000)', '28.125', 990909, 3, 0, 92898, 0, 278694, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(265, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '18', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (18X6000)', '253.109', 70909, 21, 0, 85465, 0, 1794765, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(266, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '19.05', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (19.05X6000)', '94.500', 1045455, 7, 0, 141136, 0, 987952, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(267, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '20', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (20X6000)', '223.200', 1045455, 15, 0, 155564, 0, 2333460, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(268, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '22.225', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (22.225X6000)', '110.250', 1072727, 6, 0, 197114, 0, 1182684, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(269, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '25.4', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (25.4X6000)', '120.000', 1063636, 5, 0, 255273, 0, 1276365, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(270, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '28.575', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (28.575X6000)', '30.375', 836364, 1, 0, 254046, 0, 254046, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(271, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '28.575', '5000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (28.575X5000)', '25.312', 836364, 1, 0, 211700, 0, 211700, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(272, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '30', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (30X6000)', '334.800', 1045455, 10, 0, 350018, 0, 3500180, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(273, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '30', '4800', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (30X4800)', '26.784', 1045455, 1, 0, 280015, 0, 280015, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(274, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '31.75', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (31.75X6000)', '150.000', 1045455, 4, 0, 392046, 0, 1568184, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(275, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '31.75', '5500', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (31.75X5500)', '34.375', 1045455, 1, 0, 359375, 0, 359375, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(276, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '35', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (35X6000)', '364.560', 11000, 8, 0, 501270, 0, 4010160, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(277, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '38.1', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (38.1X6000)', '162.000', 1072727, 3, 0, 579273, 0, 1737819, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(278, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '38.1', '4300', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (38.1X4300)', '38.700', 1072727, 1, 0, 415145, 0, 415145, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(279, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '40', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (40X6000)', '297.600', 1045454, 5, 0, 622254, 0, 3111270, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(280, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '44.45', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (44.45X6000)', '367.499', 1090909, 5, 0, 801816, 0, 4009080, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(281, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '44.45', '5000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (44.45X5000)', '61.250', 1090909, 1, 0, 668182, 0, 668182, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(282, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '50.8', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (50.8X6000)', '287.999', 1072728, 3, 0, 1029815, 0, 3089445, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(283, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '50.8', '3520', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (50.8X3520)', '56.320', 1072728, 1, 0, 604160, 0, 604160, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(284, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '57.15', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (57.15X6000)', '607.499', 1118182, 5, 0, 1358589, 0, 6792945, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(285, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '57.15', '1400', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (57.15X1400)', '28.350', 1118182, 1, 0, 317005, 0, 317005, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(286, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '63.5', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (63.5X6000)', '449.999', 1131818, 3, 0, 1697723, 0, 5093169, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(287, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '63.5', '460', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (63.5X460)', '11.500', 1131818, 1, 0, 130159, 0, 130159, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(288, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '63.5', '2900', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (63.5X2900)', '72.500', 1131818, 1, 0, 820568, 0, 820568, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(289, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '76.2', '3180', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (76.2X3180)', '114.480', 1209091, 1, 0, 1384167, 0, 1384167, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(290, 'STOCK OPNAME AS ST41', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '76.2', '500', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (76.2X500)', '18.000', 1209091, 1, 0, 217636, 0, 217636, 46845439, 0, 46845439, '', 'A', 22, '2020-02-12 11:13:12', NULL, NULL),
(291, 'STOCK OPNAME VCN CHINA', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '16', '3800', '', '1', 'RoundBar', 0, 'false', 'VCN (16X3800)', '6.031', 2090909, 1, 0, 126103, 0, 126103, 20754614, 0, 20754614, '', 'A', 22, '2020-02-12 11:27:41', NULL, NULL),
(292, 'STOCK OPNAME VCN CHINA', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '19', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (19X6000)', '13.429', 2090909, 1, 0, 280788, 0, 280788, 20754614, 0, 20754614, '', 'A', 22, '2020-02-12 11:27:41', NULL, NULL),
(293, 'STOCK OPNAME VCN CHINA', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '40', '4350', '', '1', 'RoundBar', 0, 'false', 'VCN (40X4350)', '43.152', 2090909, 1, 0, 902269, 0, 902269, 20754614, 0, 20754614, '', 'A', 22, '2020-02-12 11:27:41', NULL, NULL),
(294, 'STOCK OPNAME VCN CHINA', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '55', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (55X6000)', '112.530', 2090909, 1, 0, 2352900, 0, 2352900, 20754614, 0, 20754614, '', 'A', 22, '2020-02-12 11:27:41', NULL, NULL),
(295, 'STOCK OPNAME VCN CHINA', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '65', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (65X6000)', '157.170', 2090909, 1, 0, 3286282, 0, 3286282, 20754614, 0, 20754614, '', 'A', 22, '2020-02-12 11:27:41', NULL, NULL),
(296, 'STOCK OPNAME VCN CHINA', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '70', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (70X6000)', '182.280', 2090909, 1, 0, 3811309, 0, 3811309, 20754614, 0, 20754614, '', 'A', 22, '2020-02-12 11:27:41', NULL, NULL),
(297, 'STOCK OPNAME VCN CHINA', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '75', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (75X6000)', '209.250', 2090909, 1, 0, 4375227, 0, 4375227, 20754614, 0, 20754614, '', 'A', 22, '2020-02-12 11:27:41', NULL, NULL),
(298, 'STOCK OPNAME VCN CHINA', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '85', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (85X6000)', '268.770', 2090909, 1, 0, 5619736, 0, 5619736, 20754614, 0, 20754614, '', 'A', 22, '2020-02-12 11:27:41', NULL, NULL),
(299, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '20', '5920', '', '1', 'RoundBar', 0, 'false', 'VCN (20X5920)', '29.363', 2545454, 2, 0, 373711, 0, 747422, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(300, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '22', '5920', '', '1', 'RoundBar', 0, 'false', 'VCN (22X5920)', '17.765', 2545454, 1, 0, 452200, 0, 452200, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(301, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '25', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (25X6000)', '46.500', 2545454, 2, 0, 591818, 0, 1183636, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(302, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '28', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (28X6000)', '29.165', 2545454, 1, 0, 742382, 0, 742382, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(303, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '30', '5000', '', '1', 'RoundBar', 0, 'false', 'VCN (30X5000)', '27.900', 2545454, 1, 0, 710182, 0, 710182, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(304, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '32', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (32X6000)', '38.093', 2545454, 1, 0, 969640, 0, 969640, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(305, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '38', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (38X6000)', '53.717', 2545454, 1, 0, 1367342, 0, 1367342, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(306, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '45', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (45X6000)', '150.660', 2545454, 2, 0, 1917490, 0, 3834980, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(307, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '50', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (50X6000)', '186.000', 2545454, 2, 0, 2367272, 0, 4734544, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(308, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '60', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (60X6000)', '133.920', 2545454, 1, 0, 3408872, 0, 3408872, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(309, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '80', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (80X6000)', '238.080', 2545454, 1, 0, 6060217, 0, 6060217, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(310, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '90', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (90X6000)', '301.320', 2545454, 1, 0, 7669962, 0, 7669962, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(311, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '95', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (95X6000)', '335.730', 2545454, 1, 0, 8545853, 0, 8545853, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(312, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '100', '5720', '', '1', 'RoundBar', 0, 'false', 'VCN (100X5720)', '354.640', 2545454, 1, 0, 9027198, 0, 9027198, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(313, 'STOCK OPNAME VCN KOR_JPN', '2019-12-24 00:00:00', '1970-01-01 07:00:00', '', '2020-02-12 00:00:00', '1970-01-01 07:00:00', '23', '6.2', '105', '6000', '', '1', 'RoundBar', 0, 'false', 'VCN (105X6000)', '410.130', 2545454, 1, 0, 10439670, 0, 10439670, 59894100, 0, 59894100, '', 'A', 22, '2020-02-12 11:39:14', NULL, NULL),
(314, 'INV-001/12/OKS/19', '2019-12-28 00:00:00', '1970-01-01 07:00:00', '', '2019-12-18 00:00:00', '1970-01-01 07:00:00', '20', '7.73', '', '1530', '6040', '64.9', 'Plate', 0, 'false', 'PLAT SS400 (64.9X1530X6040)', '4636.097', 786363, 1, 0, 36456551, 0, 36456551, 365342977, 10, 401877275, '', 'A', 22, '2020-02-12 13:03:47', NULL, NULL),
(315, 'INV-001/12/OKS/19', '2019-12-28 00:00:00', '1970-01-01 07:00:00', '', '2019-12-18 00:00:00', '1970-01-01 07:00:00', '20', '7.74', '', '1520', '6050', '70.5', 'Plate', 0, 'false', 'PLAT SS400 (70.5X1520X6050)', '5017.981', 786363, 1, 0, 39459546, 0, 39459546, 365342977, 10, 401877275, '', 'A', 22, '2020-02-12 13:03:47', NULL, NULL),
(316, 'INV-001/12/OKS/19', '2019-12-28 00:00:00', '1970-01-01 07:00:00', '', '2019-12-18 00:00:00', '1970-01-01 07:00:00', '20', '7.77', '', '1510', '6030', '85.4', 'Plate', 0, 'false', 'PLAT SS400 (85.4X1510X6030)', '6041.895', 786363, 1, 0, 47511227, 0, 47511227, 365342977, 10, 401877275, '', 'A', 22, '2020-02-12 13:03:47', NULL, NULL),
(317, 'INV-001/12/OKS/19', '2019-12-28 00:00:00', '1970-01-01 07:00:00', '', '2019-12-18 00:00:00', '1970-01-01 07:00:00', '20', '7.77', '', '1500', '6050', '90', 'Plate', 0, 'false', 'PLAT SS400 (90X1500X6050)', '6346.148', 786363, 1, 0, 49903760, 0, 49903760, 365342977, 10, 401877275, '', 'A', 22, '2020-02-12 13:03:47', NULL, NULL),
(318, 'INV-001/12/OKS/19', '2019-12-28 00:00:00', '1970-01-01 07:00:00', '', '2019-12-18 00:00:00', '1970-01-01 07:00:00', '20', '7.78', '', '1520', '6050', '100', 'Plate', 0, 'false', 'PLAT SS400 (100X1520X6050)', '7154.488', 786363, 1, 0, 56260246, 0, 56260246, 365342977, 10, 401877275, '', 'A', 22, '2020-02-12 13:03:47', NULL, NULL),
(319, 'INV-001/12/OKS/19', '2019-12-28 00:00:00', '1970-01-01 07:00:00', '', '2019-12-18 00:00:00', '1970-01-01 07:00:00', '20', '7.79', '', '1520', '6040', '115', 'Plate', 0, 'false', 'PLAT SS400 (115X1520X6040)', '8224.620', 786363, 1, 0, 64675369, 0, 64675369, 365342977, 10, 401877275, '', 'A', 22, '2020-02-12 13:03:47', NULL, NULL),
(320, 'INV-001/12/OKS/19', '2019-12-28 00:00:00', '1970-01-01 07:00:00', '', '2019-12-18 00:00:00', '1970-01-01 07:00:00', '20', '7.78', '', '1530', '6050', '125.5', 'Plate', 0, 'false', 'PLAT SS400 (125.5X1530X6050)', '9037.954', 78642, 1, 0, 71076278, 0, 71076278, 365342977, 10, 401877275, '', 'A', 22, '2020-02-12 13:03:47', NULL, NULL);
INSERT INTO `trpembelians` (`id`, `NoFaktur`, `TglFaktur`, `TglJatuhTempo`, `NoPO`, `TglPO`, `TglJatuhTempoPO`, `IdProduk`, `BeratJenis`, `Diameter`, `Panjang`, `Lebar`, `Tebal`, `Bentuk`, `OngkosPotong`, `HanyaPotong`, `ItemBarang`, `Berat`, `HargaKg`, `qty`, `isRetur`, `HargaSatuan`, `Diskon`, `Jumlah`, `subtotal`, `PPN`, `total`, `keterangan`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(321, 'JES FK-20/01/010 ', '2020-01-07 00:00:00', '2020-02-21 00:00:00', 'POTONGAN_AAP', '2020-01-07 00:00:00', '1970-01-01 07:00:00', '18', '7.77', '', '175', '205', '158', 'Plate', 0, 'false', 'PLAT SS400 (158X175X205)', '44.042', 11364, 1, 0, 500493, 0, 500493, 2056907, 10, 2262598, '', 'A', 22, '2020-02-12 13:14:42', NULL, NULL),
(322, 'JES FK-20/01/010 ', '2020-01-07 00:00:00', '2020-02-21 00:00:00', 'POTONGAN_AAP', '2020-01-07 00:00:00', '1970-01-01 07:00:00', '18', '7.89', '', '175', '229', '158', 'Plate', 0, 'false', 'PLAT SS400 (158X175X229)', '49.958', 11364, 1, 0, 567723, 0, 567723, 2056907, 10, 2262598, '', 'A', 22, '2020-02-12 13:14:42', NULL, NULL),
(323, 'JES FK-20/01/010 ', '2020-01-07 00:00:00', '2020-02-21 00:00:00', 'POTONGAN_AAP', '2020-01-07 00:00:00', '1970-01-01 07:00:00', '18', '7.79', '', '175', '195', '158', 'Plate', 0, 'false', 'PLAT SS400 (158X175X195)', '42.002', 11364, 1, 0, 477311, 0, 477311, 2056907, 10, 2262598, '', 'A', 22, '2020-02-12 13:14:42', NULL, NULL),
(324, 'JES FK-20/01/010 ', '2020-01-07 00:00:00', '2020-02-21 00:00:00', 'POTONGAN_AAP', '2020-01-07 00:00:00', '1970-01-01 07:00:00', '18', '7.75', '', '175', '210', '158', 'Plate', 0, 'false', 'PLAT SS400 (158X175X210)', '45.000', 11364, 1, 0, 511380, 0, 511380, 2056907, 10, 2262598, '', 'A', 22, '2020-02-12 13:14:42', NULL, NULL),
(325, 'FK-20/01/014', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '', '2020-01-08 00:00:00', '1970-01-01 07:00:00', '18', '7.85', '', '1810', '6030', '15.8', 'Plate', 0, 'false', 'PLAT SS400 (15.8X1810X6030)', '1353.701', 8091, 1, 0, 10952795, 0, 10952795, 43788849, 10, 48167734, '43.788.492\nLEBIH 357\n', 'A', 22, '2020-02-12 15:03:18', NULL, NULL),
(326, 'FK-20/01/014', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '', '2020-01-08 00:00:00', '1970-01-01 07:00:00', '18', '7.85', '', '1810', '6030', '15.8', 'Plate', 0, 'false', 'PLAT SS400 (15.8X1810X6030)', '1353.701', 8091, 1, 0, 10952795, 0, 10952795, 43788849, 10, 48167734, '43.788.492\nLEBIH 357\n', 'A', 22, '2020-02-12 15:03:18', NULL, NULL),
(327, 'FK-20/01/014', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '', '2020-01-08 00:00:00', '1970-01-01 07:00:00', '18', '7.85', '', '1810', '6030', '15.8', 'Plate', 0, 'false', 'PLAT SS400 (15.8X1810X6030)', '1353.701', 8091, 1, 0, 10952795, 0, 10952795, 43788849, 10, 48167734, '43.788.492\nLEBIH 357\n', 'A', 22, '2020-02-12 15:03:18', NULL, NULL),
(328, 'FK-20/01/014', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '', '2020-01-08 00:00:00', '1970-01-01 07:00:00', '18', '7.834', '', '1810', '6030', '15.8', 'Plate', 0, 'false', 'PLAT SS400 (15.8X1810X6030)', '1350.941', 8091, 1, 0, 10930464, 0, 10930464, 43788849, 10, 48167734, '43.788.492\nLEBIH 357\n', 'A', 22, '2020-02-12 15:03:18', NULL, NULL),
(329, 'FK-20/01/015', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '', '2020-01-08 00:00:00', '1970-01-01 07:00:00', '18', '7.849', '', '1205', '1485', '56', 'Plate', 0, 'false', 'PLAT SS400 (56X1205X1485)', '786.531', 10000, 1, 0, 7865310, 0, 7865310, 7865310, 10, 8651841, 'PLAT POTONGAN AAP\n7.865.000\nLEBIH 310', 'A', 22, '2020-02-12 15:08:54', NULL, NULL),
(330, '003.20.62047999', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '012/BM/1/20', '2020-01-07 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.8', 'Plate', 0, 'false', 'SPHC (1.8X1220X2440)', '210.311', 8775, 5, 0, 369096, 0, 1845480, 1845480, 10, 2030028, '', 'A', 22, '2020-02-12 15:25:59', NULL, NULL),
(331, '003.20.62047998', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '0011/BM/I/20', '2020-01-07 00:00:00', '1970-01-01 07:00:00', '24', '7.85', '', '1220', '2440', '0.7', 'Plate', 0, 'false', 'SPCC (0.7X1220X2440)', '163.575', 9615, 10, 0, 157277, 0, 1572770, 14091280, 10, 15500408, 'UTK_ACP\n15.500.000,-', 'A', 22, '2020-02-12 16:09:21', NULL, NULL),
(332, '003.20.62047998', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '0011/BM/I/20', '2020-01-07 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.2', 'Plate', 0, 'false', 'SPHC (1.2X1220X2440)', '280.415', 8592, 10, 0, 240933, 0, 2409330, 14091280, 10, 15500408, 'UTK_ACP\n15.500.000,-', 'A', 22, '2020-02-12 16:09:21', NULL, NULL),
(333, '003.20.62047998', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '0011/BM/I/20', '2020-01-07 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.35', 'Plate', 0, 'false', 'SPHC (1.35X1220X2440)', '630.933', 9020, 20, 0, 284551, 0, 5691020, 14091280, 10, 15500408, 'UTK_ACP\n15.500.000,-', 'A', 22, '2020-02-12 16:09:21', NULL, NULL),
(334, '003.20.62047998', '2020-01-08 00:00:00', '2020-02-22 00:00:00', '0011/BM/I/20', '2020-01-07 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1', 'Plate', 0, 'false', 'SPHC (1X1220X2440)', '467.358', 94535, 20, 0, 220908, 0, 4418160, 14091280, 10, 15500408, 'UTK_ACP\n15.500.000,-', 'A', 22, '2020-02-12 16:09:21', NULL, NULL),
(335, 'PJO 20.01.033', '2020-01-10 00:00:00', '2020-02-24 00:00:00', '', '2020-01-09 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1820', '6070', '45', 'Plate', 0, 'false', 'PLAT SS400 (45X1820X6070)', '3902.494', 845455, 1, 0, 32993831, 0, 32993831, 66029233, 10, 72632156, '72.633.039\nKURANG 883', 'A', 22, '2020-02-13 09:56:51', NULL, NULL),
(336, 'PJO 20.01.033', '2020-01-10 00:00:00', '2020-02-24 00:00:00', '', '2020-01-09 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1825.3', '6060', '45', 'Plate', 0, 'false', 'PLAT SS400 (45X1825.3X6060)', '3907.411', 845455, 1, 0, 33035402, 0, 33035402, 66029233, 10, 72632156, '72.633.039\nKURANG 883', 'A', 22, '2020-02-13 09:56:51', NULL, NULL),
(337, 'FK-20/01/032', '2020-01-21 00:00:00', '2020-03-06 00:00:00', '', '2020-01-20 00:00:00', '1970-01-01 07:00:00', '18', '7.85', '', '1200', '2413.7', '3.8', 'Plate', 0, 'false', 'PLAT SS400 (3.8X1200X2413.7)', '864.008', 7727, 10, 0, 667619, 0, 6676190, 6676190, 10, 7343809, '7.343.740\nKURANG 69', 'A', 22, '2020-02-13 10:20:20', NULL, NULL),
(338, 'FK-20/01/039', '2020-02-13 00:00:00', '1970-01-01 07:00:00', 'PLAT POTONGAN', '2020-02-13 00:00:00', '1970-01-01 07:00:00', '18', '7.85', '', '1175.6', '1255', '55', 'Plate', 0, 'false', 'PLAT SS400 (55X1175.6X1255)', '636.994', 10000, 1, 0, 6369940, 0, 6369940, 12163994, 10, 13380393, 'UTK AAP', 'A', 22, '2020-02-13 10:37:10', NULL, NULL),
(339, 'FK-20/01/039', '2020-02-13 00:00:00', '1970-01-01 07:00:00', 'PLAT POTONGAN', '2020-02-13 00:00:00', '1970-01-01 07:00:00', '18', '7.85', '', '795', '1205', '75', 'Plate', 0, 'false', 'PLAT SS400 (75X795X1205)', '564.008', 10273, 1, 0, 5794054, 0, 5794054, 12163994, 10, 13380393, 'UTK AAP', 'A', 22, '2020-02-13 10:37:10', NULL, NULL),
(340, 'PJO 20.01.117', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1515', '6050', '55.5', 'Plate', 0, 'false', 'PLAT SS400 (55.5X1515X6050)', '3993.288', 845455, 1, 0, 33761453, 0, 33761453, 108809636, 10, 119690600, '108.810.059\nKURANG 423', 'A', 22, '2020-02-13 10:56:40', NULL, NULL),
(341, 'PJO 20.01.117', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1820', '6050', '65.2', 'Plate', 0, 'false', 'PLAT SS400 (65.2X1820X6050)', '5635.650', 845455, 1, 0, 47646885, 0, 47646885, 108809636, 10, 119690600, '108.810.059\nKURANG 423', 'A', 22, '2020-02-13 10:56:40', NULL, NULL),
(342, 'PJO 20.01.117', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '21', '7.85', '', '1816.8', '3030', '75', 'Plate', 0, 'false', 'PLAT SS400 (75X1816.8X3030)', '3241.012', 845455, 1, 0, 27401298, 0, 27401298, 108809636, 10, 119690600, '108.810.059\nKURANG 423', 'A', 22, '2020-02-13 10:56:40', NULL, NULL),
(343, '003.20.62048290', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '0012/BM/I/20', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '24', '7.85', '', '1220', '2440', '0.7', 'Plate', 0, 'false', 'SPCC (0.7X1220X2440)', '81.788', 9615, 5, 0, 157278, 0, 786390, 24990895, 10, 27489985, 'UTK_ACP\n27.490.000', 'A', 22, '2020-02-13 11:16:07', NULL, NULL),
(344, '003.20.62048290', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '0012/BM/I/20', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.2', 'Plate', 0, 'false', 'SPHC (1.2X1220X2440)', '841.244', 8753, 30, 0, 245447, 0, 7363410, 24990895, 10, 27489985, 'UTK_ACP\n27.490.000', 'A', 22, '2020-02-13 11:16:07', NULL, NULL),
(345, '003.20.62048290', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '0012/BM/I/20', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.35', 'Plate', 0, 'false', 'SPHC (1.35X1220X2440)', '630.933', 9020, 20, 0, 284551, 0, 5691020, 24990895, 10, 27489985, 'UTK_ACP\n27.490.000', 'A', 22, '2020-02-13 11:16:07', NULL, NULL),
(346, '003.20.62048290', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '0012/BM/I/20', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.45', 'Plate', 0, 'false', 'SPHC (1.45X1220X2440)', '169.417', 8908, 5, 0, 301833, 0, 1509165, 24990895, 10, 27489985, 'UTK_ACP\n27.490.000', 'A', 22, '2020-02-13 11:16:07', NULL, NULL),
(347, '003.20.62048290', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '0012/BM/I/20', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.8', 'Plate', 0, 'false', 'SPHC (1.8X1220X2440)', '630.933', 8688, 15, 0, 365436, 0, 5481540, 24990895, 10, 27489985, 'UTK_ACP\n27.490.000', 'A', 22, '2020-02-13 11:16:07', NULL, NULL),
(348, '003.20.62048290', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '0012/BM/I/20', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.95', 'Plate', 0, 'false', 'SPHC (1.95X1220X2440)', '227.837', 8599, 5, 0, 391834, 0, 1959170, 24990895, 10, 27489985, 'UTK_ACP\n27.490.000', 'A', 22, '2020-02-13 11:16:07', NULL, NULL),
(349, '003.20.62048290', '2020-01-23 00:00:00', '2020-03-08 00:00:00', '0012/BM/I/20', '2020-01-22 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1', 'Plate', 0, 'false', 'SPHC (1X1220X2440)', '233.679', 94155, 10, 0, 220020, 0, 2200200, 24990895, 10, 27489985, 'UTK_ACP\n27.490.000', 'A', 22, '2020-02-13 11:16:07', NULL, NULL),
(350, '003.20.62048366', '2020-01-29 00:00:00', '2020-03-14 00:00:00', '0013/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '11.8', 'Plate', 0, 'false', 'SPHC (11.8X1220X2440)', '1102.964', 75796, 4, 0, 2090006, 0, 8360024, 8360024, 10, 9196026, 'UTK_ACP', 'A', 22, '2020-02-13 11:21:24', NULL, NULL),
(351, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2400', '7500', '10', 'Plate', 0, 'false', 'PLAT SS400 (10X2400X7500)', '1413.000', 745455, 1, 0, 10533279, 0, 10533279, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(352, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1530', '6140', '15', 'Plate', 0, 'false', 'PLAT SS400 (15X1530X6140)', '1106.167', 745455, 1, 0, 8245977, 0, 8245977, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(353, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1510', '6050', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X1510X6050)', '1147.419', 745455, 1, 0, 8553492, 0, 8553492, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(354, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1510', '6140', '16', 'Plate', 0, 'false', 'PLAT SS400 (16X1510X6140)', '2328.976', 745455, 2, 0, 8680734, 0, 17361468, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(355, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2510', '5840', '25', 'Plate', 0, 'false', 'PLAT SS400 (25X2510X5840)', '2876.711', 745455, 1, 0, 21444586, 0, 21444586, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(356, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2020', '7800', '30', 'Plate', 0, 'false', 'PLAT SS400 (30X2020X7800)', '7421.076', 745455, 2, 0, 27660391, 0, 55320782, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(357, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2220', '5840', '35', 'Plate', 0, 'false', 'PLAT SS400 (35X2220X5840)', '3562.079', 745455, 1, 0, 26553696, 0, 26553696, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(358, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1710', '7270', '40', 'Plate', 0, 'false', 'PLAT SS400 (40X1710X7270)', '7807.108', 745455, 2, 0, 29099238, 0, 58198476, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(359, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1550', '11660', '43', 'Plate', 0, 'false', 'PLAT SS400 (43X1550X11660)', '6100.541', 745455, 1, 0, 45476788, 0, 45476788, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(360, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2510', '11600', '50', 'Plate', 0, 'false', 'PLAT SS400 (50X2510X11600)', '11428.030', 745455, 1, 0, 85190821, 0, 85190821, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(361, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '1010', '6140', '55', 'Plate', 0, 'false', 'PLAT SS400 (55X1010X6140)', '2677.454', 745455, 1, 0, 19959215, 0, 19959215, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(362, 'INV-017/01/OKS/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '', '2020-01-16 00:00:00', '1970-01-01 07:00:00', '20', '7.85', '', '2056', '3000', '75', 'Plate', 0, 'false', 'PLAT SS400 (75X2056X3000)', '3631.410', 745455, 1, 0, 27070527, 0, 27070527, 383909107, 10, 422300018, '', 'A', 22, '2020-02-13 11:44:14', NULL, NULL),
(363, '19468 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '11', '6.25', '20', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (20X6000)', '45.000', 9636363, 3, 0, 144545, 0, 433635, 21366039, 10, 23502643, '21.365.818\nlebih 221', 'A', 22, '2020-02-13 11:56:21', NULL, NULL),
(364, '19468 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '11', '6.4', '25', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (25X6000)', '48.000', 9636363, 2, 0, 231273, 0, 462546, 21366039, 10, 23502643, '21.365.818\nlebih 221', 'A', 22, '2020-02-13 11:56:21', NULL, NULL),
(365, '19468 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '11', '6.25', '80', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (80X6000)', '240.000', 9636363, 1, 0, 2312727, 0, 2312727, 21366039, 10, 23502643, '21.365.818\nlebih 221', 'A', 22, '2020-02-13 11:56:21', NULL, NULL),
(366, '19468 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '11', '6.252', '85', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (85X6000)', '271.024', 9636363, 1, 0, 2611686, 0, 2611686, 21366039, 10, 23502643, '21.365.818\nlebih 221', 'A', 22, '2020-02-13 11:56:21', NULL, NULL),
(367, '19468 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '11', '6.25', '200', '6000', '', '1', 'RoundBar', 0, 'false', 'AS S45C  (200X6000)', '1500.000', 1036363, 1, 0, 15545445, 0, 15545445, 21366039, 10, 23502643, '21.365.818\nlebih 221', 'A', 22, '2020-02-13 11:56:21', NULL, NULL),
(368, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.25', '10', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (10X6000)', '26.250', 9454545, 7, 0, 35455, 0, 248185, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(369, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '12.7', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (12.7X6000)', '102.000', 9454545, 17, 0, 56727, 0, 964359, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(370, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.283', '15.875', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (15.875X6000)', '76.004', 9454545, 8, 0, 89823, 0, 718584, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(371, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.229', '22.25', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (22.25X6000)', '92.512', 1027272, 5, 0, 190070, 0, 950350, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(372, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '25.4', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (25.4X6000)', '144.000', 1027272, 6, 0, 246545, 0, 1479270, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(373, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.226', '28.575', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (28.575X6000)', '30.502', 1027272, 1, 0, 313339, 0, 313339, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(374, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.25', '40', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (40X6000)', '60.000', 1063636, 1, 0, 638182, 0, 638182, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(375, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '57.15', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (57.15X6000)', '728.999', 1118181, 6, 0, 1358588, 0, 8151528, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(376, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '76.2', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (76.2X6000)', '431.999', 1154545, 2, 0, 2493811, 0, 4987622, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(377, '19469 G', '2020-01-30 00:00:00', '2020-03-15 00:00:00', '0007/BM/I/20', '2020-01-28 00:00:00', '1970-01-01 07:00:00', '10', '6.2', '50.8', '6000', '', '1', 'RoundBar', 0, 'false', 'AS ST41   (50.8X6000)', '192.000', 1063636, 2, 0, 1021091, 0, 2042182, 20493601, 10, 22542961, '20.493.447\nlebih 154', 'A', 22, '2020-02-13 12:13:05', NULL, NULL),
(378, 'M/20/35815648', '2020-01-30 00:00:00', '2020-02-29 00:00:00', '0007/BM/I/20', '2020-01-29 00:00:00', '1970-01-01 07:00:00', '9', '6.312', '65', '300', '', '1', 'RoundBar', 0, 'false', 'SLD-R (65X300)', '8.000', 118104, 1, 0, 944832, 0, 944832, 944832, 10, 1039315, 'UTK_CPL', 'A', 22, '2020-02-13 12:17:35', NULL, NULL),
(379, '003.20.62048396', '2020-01-31 00:00:00', '2020-03-16 00:00:00', '0014/BM/I/20', '2020-01-31 00:00:00', '1970-01-01 07:00:00', '24', '7.85', '', '1220', '2440', '0.7', 'Plate', 0, 'false', 'SPCC (0.7X1220X2440)', '81.788', 9615, 5, 0, 157278, 0, 786390, 24818100, 10, 27299910, 'UTK_ACP', 'A', 22, '2020-02-13 12:25:23', NULL, NULL),
(380, '003.20.62048396', '2020-01-31 00:00:00', '2020-03-16 00:00:00', '0014/BM/I/20', '2020-01-31 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.2', 'Plate', 0, 'false', 'SPHC (1.2X1220X2440)', '841.244', 8753, 30, 0, 245447, 0, 7363410, 24818100, 10, 27299910, 'UTK_ACP', 'A', 22, '2020-02-13 12:25:23', NULL, NULL),
(381, '003.20.62048396', '2020-01-31 00:00:00', '2020-03-16 00:00:00', '0014/BM/I/20', '2020-01-31 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.35', 'Plate', 0, 'false', 'SPHC (1.35X1220X2440)', '630.933', 9020, 20, 0, 284551, 0, 5691020, 24818100, 10, 27299910, 'UTK_ACP', 'A', 22, '2020-02-13 12:25:23', NULL, NULL),
(382, '003.20.62048396', '2020-01-31 00:00:00', '2020-03-16 00:00:00', '0014/BM/I/20', '2020-01-31 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.45', 'Plate', 0, 'false', 'SPHC (1.45X1220X2440)', '677.669', 8907, 20, 0, 301800, 0, 6036000, 24818100, 10, 27299910, 'UTK_ACP', 'A', 22, '2020-02-13 12:25:23', NULL, NULL),
(383, '003.20.62048396', '2020-01-31 00:00:00', '2020-03-16 00:00:00', '0014/BM/I/20', '2020-01-31 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1.6', 'Plate', 0, 'false', 'SPHC (1.6X1220X2440)', '186.943', 8777, 5, 0, 328160, 0, 1640800, 24818100, 10, 27299910, 'UTK_ACP', 'A', 22, '2020-02-13 12:25:23', NULL, NULL),
(384, '003.20.62048396', '2020-01-31 00:00:00', '2020-03-16 00:00:00', '0014/BM/I/20', '2020-01-31 00:00:00', '1970-01-01 07:00:00', '25', '7.85', '', '1220', '2440', '1', 'Plate', 0, 'false', 'SPHC (1X1220X2440)', '350.518', 9416, 15, 0, 220032, 0, 3300480, 24818100, 10, 27299910, 'UTK_ACP', 'A', 22, '2020-02-13 12:25:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trpenawarans`
--

CREATE TABLE `trpenawarans` (
  `id` int(11) NOT NULL,
  `TglJatuhTempo` datetime NOT NULL,
  `NoSO` varchar(30) NOT NULL,
  `TglSO` datetime NOT NULL,
  `TglJatuhTempoSO` datetime NOT NULL,
  `IdPelanggan` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `PPN` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `Deal` varchar(1) NOT NULL,
  `userin` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trpenawarans`
--

INSERT INTO `trpenawarans` (`id`, `TglJatuhTempo`, `NoSO`, `TglSO`, `TglJatuhTempoSO`, `IdPelanggan`, `subtotal`, `PPN`, `total`, `keterangan`, `Deal`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(31, '2020-06-29 00:00:00', 'SO/200000002', '2020-05-30 00:00:00', '2020-06-29 00:00:00', 3, 1466842, 10, 1613526, '', 'Y', 22, '2020-05-30 11:45:19', 22, '2020-07-06 14:36:33'),
(32, '2020-06-29 00:00:00', 'SO/200000002', '2020-05-30 00:00:00', '2020-06-29 00:00:00', 3, 1466842, 10, 1613526, '', 'Y', 22, '2020-05-30 11:45:19', 22, '2020-07-06 14:36:33'),
(33, '2020-06-29 00:00:00', 'SO/200000002', '2020-05-30 00:00:00', '2020-06-29 00:00:00', 3, 1466842, 10, 1613526, '', 'Y', 22, '2020-05-30 11:45:19', 22, '2020-07-06 14:36:33'),
(34, '2020-06-29 00:00:00', 'SO/200000002', '2020-05-30 00:00:00', '2020-06-29 00:00:00', 3, 1466842, 10, 1613526, '', 'Y', 22, '2020-05-30 11:45:19', 22, '2020-07-06 14:36:33'),
(51, '2020-08-02 00:00:00', 'SO/200000006', '2020-06-18 00:00:00', '2020-08-02 00:00:00', 3, 2763776, 10, 3040154, '', 'Y', 22, '2020-06-18 12:55:08', 22, '2020-07-06 14:34:30'),
(52, '2020-08-02 00:00:00', 'SO/200000006', '2020-06-18 00:00:00', '2020-08-02 00:00:00', 3, 2763776, 10, 3040154, '', 'Y', 22, '2020-06-18 12:55:08', 22, '2020-07-06 14:34:30'),
(53, '2020-08-02 00:00:00', 'SO/200000006', '2020-06-18 00:00:00', '2020-08-02 00:00:00', 3, 2763776, 10, 3040154, '', 'Y', 22, '2020-06-18 12:55:08', 22, '2020-07-06 14:34:30'),
(54, '2020-08-02 00:00:00', 'SO/200000006', '2020-06-18 00:00:00', '2020-08-02 00:00:00', 3, 2763776, 10, 3040154, '', 'Y', 22, '2020-06-18 12:55:08', 22, '2020-07-06 14:34:30'),
(55, '2020-08-02 00:00:00', 'SO/200000006', '2020-06-18 00:00:00', '2020-08-02 00:00:00', 3, 2763776, 10, 3040154, '', 'Y', 22, '2020-06-18 12:55:08', 22, '2020-07-06 14:34:30'),
(60, '2020-07-25 00:00:00', 'SO/200000007', '2020-06-25 00:00:00', '2020-07-25 00:00:00', 3, 4697536, 10, 5167290, '', 'Y', 22, '2020-06-25 13:29:37', 22, '2020-07-06 14:34:16'),
(61, '2020-07-25 00:00:00', 'SO/200000007', '2020-06-25 00:00:00', '2020-07-25 00:00:00', 3, 4697536, 10, 5167290, '', 'Y', 22, '2020-06-25 13:29:37', 22, '2020-07-06 14:34:16'),
(62, '2020-07-25 00:00:00', 'SO/200000007', '2020-06-25 00:00:00', '2020-07-25 00:00:00', 3, 4697536, 10, 5167290, '', 'Y', 22, '2020-06-25 13:29:37', 22, '2020-07-06 14:34:16'),
(63, '2020-07-25 00:00:00', 'SO/200000007', '2020-06-25 00:00:00', '2020-07-25 00:00:00', 3, 4697536, 10, 5167290, '', 'Y', 22, '2020-06-25 13:29:37', 22, '2020-07-06 14:34:16'),
(64, '1970-01-01 00:00:00', 'SO/200000005', '2020-06-11 00:00:00', '1970-01-01 00:00:00', 3, 769170, 10, 846087, 'OK', 'Y', 22, '2020-06-27 20:39:29', 22, '2020-07-06 14:36:05'),
(65, '2020-07-11 00:00:00', 'SO/200000004', '2020-06-11 00:00:00', '2020-07-11 00:00:00', 3, 587895, 10, 646685, '', 'Y', 22, '2020-06-27 20:40:05', 22, '2020-07-06 14:35:46'),
(69, '2020-07-06 00:00:00', 'SO/200000003', '2020-06-06 00:00:00', '2020-07-06 00:00:00', 3, 2044185, 10, 2248604, '', 'Y', 22, '2020-06-27 20:48:45', 22, '2020-07-06 14:37:42'),
(70, '2020-07-06 00:00:00', 'SO/200000003', '2020-06-06 00:00:00', '2020-07-06 00:00:00', 3, 2044185, 10, 2248604, '', 'Y', 22, '2020-06-27 20:48:45', 22, '2020-07-06 14:37:42'),
(71, '2020-07-06 00:00:00', 'SO/200000003', '2020-06-06 00:00:00', '2020-07-06 00:00:00', 3, 2044185, 10, 2248604, '', 'Y', 22, '2020-06-27 20:48:45', 22, '2020-07-06 14:37:42'),
(72, '2020-06-21 00:00:00', 'SO/200000001', '2020-05-22 00:00:00', '2020-06-21 00:00:00', 3, 1470509, 10, 1617560, 'Pembayaran ditransfer ke BCA\nNo. Rek : 8820 516 363\nCV. BAJA MAKMUR', 'Y', 20, '2020-07-05 14:19:53', 20, '2020-07-05 14:20:40'),
(73, '2020-06-21 00:00:00', 'SO/200000001', '2020-05-22 00:00:00', '2020-06-21 00:00:00', 3, 1470509, 10, 1617560, 'Pembayaran ditransfer ke BCA\nNo. Rek : 8820 516 363\nCV. BAJA MAKMUR', 'Y', 20, '2020-07-05 14:19:53', 20, '2020-07-05 14:20:40'),
(74, '2020-06-21 00:00:00', 'SO/200000001', '2020-05-22 00:00:00', '2020-06-21 00:00:00', 3, 1470509, 10, 1617560, 'Pembayaran ditransfer ke BCA\nNo. Rek : 8820 516 363\nCV. BAJA MAKMUR', 'Y', 20, '2020-07-05 14:19:53', 20, '2020-07-05 14:20:40'),
(75, '2020-09-04 00:00:00', 'SO/200000008', '2020-07-06 00:00:00', '2020-09-04 00:00:00', 3, 13782400, 10, 15160640, '', 'Y', 22, '2020-07-06 14:49:04', 22, '2020-07-07 11:33:00'),
(76, '2020-09-04 00:00:00', 'SO/200000008', '2020-07-06 00:00:00', '2020-09-04 00:00:00', 3, 13782400, 10, 15160640, '', 'Y', 22, '2020-07-06 14:49:04', 22, '2020-07-07 11:33:00'),
(77, '2020-09-04 00:00:00', 'SO/200000008', '2020-07-06 00:00:00', '2020-09-04 00:00:00', 3, 13782400, 10, 15160640, '', 'Y', 22, '2020-07-06 14:49:04', 22, '2020-07-07 11:33:00'),
(78, '2020-09-04 00:00:00', 'SO/200000008', '2020-07-06 00:00:00', '2020-09-04 00:00:00', 3, 13782400, 10, 15160640, '', 'Y', 22, '2020-07-06 14:49:04', 22, '2020-07-07 11:33:00'),
(79, '2020-09-04 00:00:00', 'SO/200000008', '2020-07-06 00:00:00', '2020-09-04 00:00:00', 3, 13782400, 10, 15160640, '', 'Y', 22, '2020-07-06 14:49:04', 22, '2020-07-07 11:33:00'),
(80, '2020-09-04 00:00:00', 'SO/200000008', '2020-07-06 00:00:00', '2020-09-04 00:00:00', 3, 13782400, 10, 15160640, '', 'Y', 22, '2020-07-06 14:49:04', 22, '2020-07-07 11:33:00'),
(81, '2020-09-04 00:00:00', 'SO/200000008', '2020-07-06 00:00:00', '2020-09-04 00:00:00', 3, 13782400, 10, 15160640, '', 'Y', 22, '2020-07-06 14:49:04', 22, '2020-07-07 11:33:00'),
(82, '2020-09-04 00:00:00', 'SO/200000008', '2020-07-06 00:00:00', '2020-09-04 00:00:00', 3, 13782400, 10, 15160640, '', 'Y', 22, '2020-07-06 14:49:04', 22, '2020-07-07 11:33:00'),
(83, '2020-09-04 00:00:00', 'SO/200000008', '2020-07-06 00:00:00', '2020-09-04 00:00:00', 3, 13782400, 10, 15160640, '', 'Y', 22, '2020-07-06 14:49:04', 22, '2020-07-07 11:33:00'),
(84, '0000-00-00 00:00:00', 'SO/200000009', '2020-07-06 00:00:00', '2020-08-20 00:00:00', 3, 1199205, 10, 1319126, '', 'N', 22, '2020-07-06 14:52:29', NULL, NULL),
(85, '2020-08-06 00:00:00', 'SO/200000010', '2020-07-07 00:00:00', '2020-08-06 00:00:00', 3, 5285531, 10, 5814084, '', 'Y', 22, '2020-07-07 11:45:21', 22, '2020-07-07 12:03:00'),
(86, '2020-08-06 00:00:00', 'SO/200000010', '2020-07-07 00:00:00', '2020-08-06 00:00:00', 3, 5285531, 10, 5814084, '', 'Y', 22, '2020-07-07 11:45:21', 22, '2020-07-07 12:03:00'),
(87, '2020-08-06 00:00:00', 'SO/200000010', '2020-07-07 00:00:00', '2020-08-06 00:00:00', 3, 5285531, 10, 5814084, '', 'Y', 22, '2020-07-07 11:45:21', 22, '2020-07-07 12:03:00'),
(88, '2020-08-06 00:00:00', 'SO/200000010', '2020-07-07 00:00:00', '2020-08-06 00:00:00', 3, 5285531, 10, 5814084, '', 'Y', 22, '2020-07-07 11:45:21', 22, '2020-07-07 12:03:00'),
(89, '2020-08-06 00:00:00', 'SO/200000010', '2020-07-07 00:00:00', '2020-08-06 00:00:00', 3, 5285531, 10, 5814084, '', 'Y', 22, '2020-07-07 11:45:21', 22, '2020-07-07 12:03:00'),
(90, '2020-08-06 00:00:00', 'SO/200000010', '2020-07-07 00:00:00', '2020-08-06 00:00:00', 3, 5285531, 10, 5814084, '', 'Y', 22, '2020-07-07 11:45:21', 22, '2020-07-07 12:03:00'),
(91, '2020-08-06 00:00:00', 'SO/200000010', '2020-07-07 00:00:00', '2020-08-06 00:00:00', 3, 5285531, 10, 5814084, '', 'Y', 22, '2020-07-07 11:45:21', 22, '2020-07-07 12:03:00'),
(92, '2020-08-06 00:00:00', 'SO/200000010', '2020-07-07 00:00:00', '2020-08-06 00:00:00', 3, 5285531, 10, 5814084, '', 'Y', 22, '2020-07-07 11:45:21', 22, '2020-07-07 12:03:00'),
(93, '2020-07-11 00:00:00', 'SO/200000011', '2020-07-11 00:00:00', '2020-07-11 00:00:00', 4, 121337, 0, 121337, '', 'Y', 22, '2020-07-11 09:55:38', 27, '2020-08-24 15:19:46'),
(108, '2020-07-11 00:00:00', 'SO/200000012', '2020-07-11 00:00:00', '2020-07-11 00:00:00', 5, 2097099, 10, 2306809, '', 'Y', 22, '2020-07-11 12:44:31', 27, '2020-08-24 15:03:40'),
(109, '2020-07-11 00:00:00', 'SO/200000012', '2020-07-11 00:00:00', '2020-07-11 00:00:00', 5, 2097099, 10, 2306809, '', 'Y', 22, '2020-07-11 12:44:31', 27, '2020-08-24 15:03:40'),
(110, '2020-07-11 00:00:00', 'SO/200000012', '2020-07-11 00:00:00', '2020-07-11 00:00:00', 5, 2097099, 10, 2306809, '', 'Y', 22, '2020-07-11 12:44:31', 27, '2020-08-24 15:03:40'),
(111, '2020-07-11 00:00:00', 'SO/200000012', '2020-07-11 00:00:00', '2020-07-11 00:00:00', 5, 2097099, 10, 2306809, '', 'Y', 22, '2020-07-11 12:44:31', 27, '2020-08-24 15:03:40'),
(112, '2020-07-11 00:00:00', 'SO/200000012', '2020-07-11 00:00:00', '2020-07-11 00:00:00', 5, 2097099, 10, 2306809, '', 'Y', 22, '2020-07-11 12:44:31', 27, '2020-08-24 15:03:40'),
(113, '2020-07-11 00:00:00', 'SO/200000012', '2020-07-11 00:00:00', '2020-07-11 00:00:00', 5, 2097099, 10, 2306809, '', 'Y', 22, '2020-07-11 12:44:31', 27, '2020-08-24 15:03:40'),
(114, '2020-08-10 00:00:00', 'SO/200000013', '2020-07-11 00:00:00', '1970-01-01 07:00:00', 6, 17781830, 10, 19560013, '', 'Y', 22, '2020-07-11 14:29:45', 22, '2020-07-11 14:40:37'),
(115, '2020-08-10 00:00:00', 'SO/200000013', '2020-07-11 00:00:00', '1970-01-01 07:00:00', 6, 17781830, 10, 19560013, '', 'Y', 22, '2020-07-11 14:29:45', 22, '2020-07-11 14:40:37'),
(116, '2020-08-10 00:00:00', 'SO/200000013', '2020-07-11 00:00:00', '1970-01-01 07:00:00', 6, 17781830, 10, 19560013, '', 'Y', 22, '2020-07-11 14:29:45', 22, '2020-07-11 14:40:37'),
(117, '2020-08-10 00:00:00', 'SO/200000013', '2020-07-11 00:00:00', '1970-01-01 07:00:00', 6, 17781830, 10, 19560013, '', 'Y', 22, '2020-07-11 14:29:45', 22, '2020-07-11 14:40:37'),
(118, '2020-08-10 00:00:00', 'SO/200000013', '2020-07-11 00:00:00', '1970-01-01 07:00:00', 6, 17781830, 10, 19560013, '', 'Y', 22, '2020-07-11 14:29:45', 22, '2020-07-11 14:40:37'),
(119, '0000-00-00 00:00:00', 'SO/200000014', '2020-07-13 00:00:00', '1970-01-01 07:00:00', 7, 720929, 10, 793022, '', 'N', 25, '2020-07-13 14:02:01', NULL, NULL),
(120, '0000-00-00 00:00:00', 'SO/200000014', '2020-07-13 00:00:00', '1970-01-01 07:00:00', 7, 720929, 10, 793022, '', 'N', 25, '2020-07-13 14:02:01', NULL, NULL),
(121, '0000-00-00 00:00:00', 'SO/200000014', '2020-07-13 00:00:00', '1970-01-01 07:00:00', 7, 720929, 10, 793022, '', 'N', 25, '2020-07-13 14:02:01', NULL, NULL),
(122, '0000-00-00 00:00:00', 'SO/200000014', '2020-07-13 00:00:00', '1970-01-01 07:00:00', 7, 720929, 10, 793022, '', 'N', 25, '2020-07-13 14:02:01', NULL, NULL),
(123, '0000-00-00 00:00:00', 'SO/200000014', '2020-07-13 00:00:00', '1970-01-01 07:00:00', 7, 720929, 10, 793022, '', 'N', 25, '2020-07-13 14:02:01', NULL, NULL),
(124, '2020-08-14 00:00:00', 'SO/200000015', '2020-07-13 00:00:00', '1970-01-01 07:00:00', 8, 725700, 10, 798270, '', 'Y', 25, '2020-07-13 14:18:45', 25, '2020-07-13 14:46:39'),
(125, '2020-08-14 00:00:00', 'SO/200000015', '2020-07-13 00:00:00', '1970-01-01 07:00:00', 8, 725700, 10, 798270, '', 'Y', 25, '2020-07-13 14:18:45', 25, '2020-07-13 14:46:39'),
(126, '1970-01-01 07:00:00', 'SO/200000016', '2020-07-13 00:00:00', '1970-01-01 07:00:00', 9, 2084175, 10, 2292593, '', 'Y', 25, '2020-07-13 14:20:15', 25, '2020-07-13 14:29:39'),
(127, '1970-01-01 07:00:00', 'SO/200000016', '2020-07-13 00:00:00', '1970-01-01 07:00:00', 9, 2084175, 10, 2292593, '', 'Y', 25, '2020-07-13 14:20:15', 25, '2020-07-13 14:29:39'),
(128, '2020-08-17 00:00:00', 'SO/200000017', '2020-07-16 00:00:00', '1970-01-01 07:00:00', 5, 571182, 10, 628300, '', 'Y', 25, '2020-07-16 10:43:13', 25, '2020-07-16 11:39:10'),
(129, '2020-08-17 00:00:00', 'SO/200000017', '2020-07-16 00:00:00', '1970-01-01 07:00:00', 5, 571182, 10, 628300, '', 'Y', 25, '2020-07-16 10:43:13', 25, '2020-07-16 11:39:10'),
(130, '2020-08-17 00:00:00', 'SO/200000017', '2020-07-16 00:00:00', '1970-01-01 07:00:00', 5, 571182, 10, 628300, '', 'Y', 25, '2020-07-16 10:43:13', 25, '2020-07-16 11:39:10'),
(131, '2020-08-17 00:00:00', 'SO/200000017', '2020-07-16 00:00:00', '1970-01-01 07:00:00', 5, 571182, 10, 628300, '', 'Y', 25, '2020-07-16 10:43:13', 25, '2020-07-16 11:39:10'),
(132, '1970-01-01 07:00:00', 'SO/200000018', '2020-07-16 00:00:00', '1970-01-01 07:00:00', 7, 90000, 10, 99000, '', 'Y', 25, '2020-07-16 11:11:22', 27, '2020-07-21 15:53:20'),
(133, '1970-01-01 07:00:00', 'SO/200000019', '2020-07-16 00:00:00', '1970-01-01 07:00:00', 5, 13800, 10, 15180, '', 'Y', 25, '2020-07-16 11:23:40', 27, '2020-08-24 15:01:31'),
(134, '2020-08-20 00:00:00', 'SO/200000020', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 8, 447570, 10, 492327, '', 'Y', 27, '2020-07-21 14:57:22', 27, '2020-07-21 15:06:12'),
(135, '2020-08-20 00:00:00', 'SO/200000020', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 8, 447570, 10, 492327, '', 'Y', 27, '2020-07-21 14:57:22', 27, '2020-07-21 15:06:12'),
(136, '2020-08-20 00:00:00', 'SO/200000020', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 8, 447570, 10, 492327, '', 'Y', 27, '2020-07-21 14:57:22', 27, '2020-07-21 15:06:12'),
(137, '2020-08-20 00:00:00', 'SO/200000020', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 8, 447570, 10, 492327, '', 'Y', 27, '2020-07-21 14:57:22', 27, '2020-07-21 15:06:12'),
(138, '2020-08-20 00:00:00', 'SO/200000020', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 8, 447570, 10, 492327, '', 'Y', 27, '2020-07-21 14:57:22', 27, '2020-07-21 15:06:12'),
(139, '2020-08-20 00:00:00', 'SO/200000021', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 5, 138000, 10, 151800, '', 'Y', 27, '2020-07-21 15:17:06', 27, '2020-08-24 15:03:01'),
(140, '2020-08-20 00:00:00', 'SO/200000022', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 7, 48000, 10, 52800, '', 'Y', 27, '2020-07-21 15:42:30', 27, '2020-08-03 14:32:34'),
(141, '0000-00-00 00:00:00', 'SO/200000023', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 9, 188170, 0, 188170, '', 'N', 27, '2020-07-21 15:45:06', NULL, NULL),
(142, '0000-00-00 00:00:00', 'SO/200000023', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 9, 188170, 0, 188170, '', 'N', 27, '2020-07-21 15:45:06', NULL, NULL),
(143, '2020-08-20 00:00:00', 'SO/200000024', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 8, 760000, 10, 836000, '', 'Y', 27, '2020-07-21 19:41:49', 27, '2020-08-04 14:23:22'),
(144, '0000-00-00 00:00:00', 'SO/200000025', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 6, 195600, 10, 215160, '', 'N', 27, '2020-07-21 21:05:56', NULL, NULL),
(145, '0000-00-00 00:00:00', 'SO/200000026', '2020-07-21 00:00:00', '2020-08-20 00:00:00', 3, 120000, 10, 132000, '', 'N', 27, '2020-07-21 21:10:18', NULL, NULL),
(146, '2020-08-21 00:00:00', 'SO/200000027', '2020-07-22 00:00:00', '2020-08-21 00:00:00', 5, 48000, 10, 52800, '', 'Y', 27, '2020-07-22 12:51:28', 27, '2020-08-03 14:35:15'),
(147, '2020-07-26 00:00:00', 'SO/200000028', '2020-07-26 00:00:00', '2020-07-26 00:00:00', 10, 121337, 0, 121337, '', 'Y', 27, '2020-07-26 20:49:57', 27, '2020-07-26 20:51:20'),
(148, '2020-07-28 00:00:00', 'SO/200000029', '2020-07-28 00:00:00', '2020-07-28 00:00:00', 11, 513384, 10, 564722, '', 'Y', 27, '2020-07-28 12:26:24', 27, '2020-07-28 12:42:32'),
(149, '2020-07-28 00:00:00', 'SO/200000030', '2020-07-28 00:00:00', '2020-07-28 00:00:00', 10, 121337, 10, 133471, '', 'Y', 27, '2020-07-28 12:27:45', 27, '2020-07-28 12:42:06'),
(150, '2020-08-27 00:00:00', 'SO/200000031', '2020-07-28 00:00:00', '2020-08-27 00:00:00', 4, 115000, 10, 126500, '', 'Y', 27, '2020-07-28 12:41:58', 27, '2020-07-28 12:42:21'),
(152, '2020-07-28 00:00:00', 'SO/200000032', '2020-07-28 00:00:00', '2020-07-28 00:00:00', 12, 760000, 10, 836000, '', 'Y', 27, '2020-07-28 12:57:11', 27, '2020-07-28 12:57:15'),
(153, '2020-07-28 00:00:00', 'SO/200000033', '2020-07-28 00:00:00', '2020-07-28 00:00:00', 11, 513384, 10, 564722, '', 'Y', 27, '2020-07-28 15:45:46', 27, '2020-07-28 15:48:43'),
(154, '2020-07-28 00:00:00', 'SO/200000034', '2020-07-28 00:00:00', '2020-07-28 00:00:00', 10, 121337, 10, 133471, '', 'Y', 27, '2020-07-28 15:46:50', 27, '2020-07-28 15:48:29'),
(155, '2020-08-27 00:00:00', 'SO/200000035', '2020-07-28 00:00:00', '2020-08-27 00:00:00', 4, 115000, 0, 115000, '', 'Y', 27, '2020-07-28 15:48:23', 27, '2020-07-28 15:48:38'),
(157, '2020-08-01 00:00:00', 'SO/200000036', '2020-08-01 00:00:00', '2020-08-01 00:00:00', 11, 511426, 10, 562569, '', 'Y', 27, '2020-08-01 15:31:05', 27, '2020-08-01 15:34:59'),
(158, '2020-08-02 00:00:00', 'SO/200000037', '2020-08-02 00:00:00', '2020-08-02 00:00:00', 10, 59584, 10, 65542, '', 'Y', 27, '2020-08-02 15:31:09', 27, '2020-08-02 15:36:44'),
(159, '2020-08-02 00:00:00', 'SO/200000038', '2020-08-02 00:00:00', '2020-08-02 00:00:00', 12, 82276, 10, 90504, '', 'Y', 27, '2020-08-02 15:39:05', 27, '2020-08-02 15:39:31'),
(160, '2020-09-08 00:00:00', 'SO/200000039', '2020-08-07 00:00:00', '2020-09-06 00:00:00', 9, 1607928, 10, 1768721, '', 'Y', 27, '2020-08-07 14:10:45', 27, '2020-08-07 14:17:35'),
(161, '2020-10-09 00:00:00', 'SO/200000040', '2020-08-10 00:00:00', '2020-10-09 00:00:00', 13, 258130, 10, 283943, '', 'Y', 27, '2020-08-10 15:27:25', 27, '2020-08-10 15:38:06'),
(162, '2020-10-09 00:00:00', 'SO/200000040', '2020-08-10 00:00:00', '2020-10-09 00:00:00', 13, 258130, 10, 283943, '', 'Y', 27, '2020-08-10 15:27:25', 27, '2020-08-10 15:38:06'),
(163, '2020-10-09 00:00:00', 'SO/200000040', '2020-08-10 00:00:00', '2020-10-09 00:00:00', 13, 258130, 10, 283943, '', 'Y', 27, '2020-08-10 15:27:25', 27, '2020-08-10 15:38:06'),
(164, '2020-10-09 00:00:00', 'SO/200000040', '2020-08-10 00:00:00', '2020-10-09 00:00:00', 13, 258130, 10, 283943, '', 'Y', 27, '2020-08-10 15:27:25', 27, '2020-08-10 15:38:06'),
(165, '2020-10-09 00:00:00', 'SO/200000040', '2020-08-10 00:00:00', '2020-10-09 00:00:00', 13, 258130, 10, 283943, '', 'Y', 27, '2020-08-10 15:27:25', 27, '2020-08-10 15:38:06'),
(166, '2020-09-24 00:00:00', 'SO/200000041', '2020-08-10 00:00:00', '2020-09-24 00:00:00', 14, 9084230, 10, 9992653, '', 'Y', 27, '2020-08-10 16:01:17', 27, '2020-08-10 16:05:44'),
(167, '2020-09-24 00:00:00', 'SO/200000041', '2020-08-10 00:00:00', '2020-09-24 00:00:00', 14, 9084230, 10, 9992653, '', 'Y', 27, '2020-08-10 16:01:17', 27, '2020-08-10 16:05:44'),
(168, '2020-09-24 00:00:00', 'SO/200000041', '2020-08-10 00:00:00', '2020-09-24 00:00:00', 14, 9084230, 10, 9992653, '', 'Y', 27, '2020-08-10 16:01:17', 27, '2020-08-10 16:05:44'),
(169, '2020-09-24 00:00:00', 'SO/200000041', '2020-08-10 00:00:00', '2020-09-24 00:00:00', 14, 9084230, 10, 9992653, '', 'Y', 27, '2020-08-10 16:01:17', 27, '2020-08-10 16:05:44'),
(170, '2020-09-10 00:00:00', 'SO/200000042', '2020-08-11 00:00:00', '2020-09-10 00:00:00', 8, 1679729, 10, 1847702, '', 'Y', 27, '2020-08-11 15:00:28', 27, '2020-08-11 15:08:11'),
(171, '2020-09-10 00:00:00', 'SO/200000042', '2020-08-11 00:00:00', '2020-09-10 00:00:00', 8, 1679729, 10, 1847702, '', 'Y', 27, '2020-08-11 15:00:28', 27, '2020-08-11 15:08:11'),
(172, '2020-09-10 00:00:00', 'SO/200000042', '2020-08-11 00:00:00', '2020-09-10 00:00:00', 8, 1679729, 10, 1847702, '', 'Y', 27, '2020-08-11 15:00:28', 27, '2020-08-11 15:08:11'),
(173, '2020-09-10 00:00:00', 'SO/200000042', '2020-08-11 00:00:00', '2020-09-10 00:00:00', 8, 1679729, 10, 1847702, '', 'Y', 27, '2020-08-11 15:00:28', 27, '2020-08-11 15:08:11'),
(178, '2020-09-30 00:00:00', 'SO/200000044', '2020-08-31 00:00:00', '2020-09-30 00:00:00', 51, 297972, 0, 297972, '', 'Y', 28, '2020-08-31 09:17:27', 28, '2020-08-31 09:18:55'),
(185, '0000-00-00 00:00:00', 'SO/200000045', '2020-08-31 00:00:00', '2020-09-30 00:00:00', 29, 3639268, 0, 3639268, '1. ID DIA 1400\n2. ID DIA 500', 'N', 29, '2020-08-31 16:46:40', NULL, NULL),
(186, '0000-00-00 00:00:00', 'SO/200000045', '2020-08-31 00:00:00', '2020-09-30 00:00:00', 29, 3639268, 0, 3639268, '1. ID DIA 1400\n2. ID DIA 500', 'N', 29, '2020-08-31 16:46:40', NULL, NULL),
(271, '2020-09-01 00:00:00', 'SO/200000049', '2020-09-01 00:00:00', '2020-09-01 00:00:00', 22, 843066, 0, 843066, '', 'Y', 28, '2020-09-01 13:31:42', 28, '2020-09-01 13:31:55'),
(272, '2020-09-01 00:00:00', 'SO/200000049', '2020-09-01 00:00:00', '2020-09-01 00:00:00', 22, 843066, 0, 843066, '', 'Y', 28, '2020-09-01 13:31:42', 28, '2020-09-01 13:31:55'),
(293, '0000-00-00 00:00:00', 'SO/200000046', '2020-09-01 00:00:00', '2020-10-01 00:00:00', 4, 980090, 0, 980090, '', 'N', 29, '2020-09-03 09:57:21', NULL, NULL),
(294, '0000-00-00 00:00:00', 'SO/200000046', '2020-09-01 00:00:00', '2020-10-01 00:00:00', 4, 980090, 0, 980090, '', 'N', 29, '2020-09-03 09:57:21', NULL, NULL),
(295, '0000-00-00 00:00:00', 'SO/200000046', '2020-09-01 00:00:00', '2020-10-01 00:00:00', 4, 980090, 0, 980090, '', 'N', 29, '2020-09-03 09:57:21', NULL, NULL),
(296, '0000-00-00 00:00:00', 'SO/200000046', '2020-09-01 00:00:00', '2020-10-01 00:00:00', 4, 980090, 0, 980090, '', 'N', 29, '2020-09-03 09:57:21', NULL, NULL),
(297, '0000-00-00 00:00:00', 'SO/200000046', '2020-09-01 00:00:00', '2020-10-01 00:00:00', 4, 980090, 0, 980090, '', 'N', 29, '2020-09-03 09:57:21', NULL, NULL),
(301, '0000-00-00 00:00:00', 'SO/200000050', '2020-09-04 00:00:00', '2020-10-04 00:00:00', 51, 235667, 0, 235667, '', 'N', 29, '2020-09-04 08:25:54', NULL, NULL),
(302, '0000-00-00 00:00:00', 'SO/200000050', '2020-09-04 00:00:00', '2020-10-04 00:00:00', 51, 235667, 0, 235667, '', 'N', 29, '2020-09-04 08:25:54', NULL, NULL),
(338, '2020-09-01 00:00:00', 'SO/200000047', '2020-09-01 00:00:00', '2020-09-01 00:00:00', 22, 4466242, 0, 4466242, '', 'Y', 29, '2020-09-07 09:55:31', 29, '2020-09-07 09:55:53'),
(339, '2020-09-01 00:00:00', 'SO/200000047', '2020-09-01 00:00:00', '2020-09-01 00:00:00', 22, 4466242, 0, 4466242, '', 'Y', 29, '2020-09-07 09:55:31', 29, '2020-09-07 09:55:53'),
(344, '2020-10-05 00:00:00', 'SO/200000051', '2020-09-05 00:00:00', '2020-10-05 00:00:00', 21, 80783, 0, 80783, '', 'Y', 29, '2020-09-07 16:14:09', 29, '2020-09-08 08:56:35'),
(345, '2020-10-05 00:00:00', 'SO/200000051', '2020-09-05 00:00:00', '2020-10-05 00:00:00', 21, 80783, 0, 80783, '', 'Y', 29, '2020-09-07 16:14:09', 29, '2020-09-08 08:56:35'),
(349, '2020-09-01 00:00:00', 'SO/200000048', '2020-09-01 00:00:00', '2020-09-01 00:00:00', 22, 0, 0, 0, '', 'Y', 29, '2020-09-08 08:59:39', 29, '2020-09-08 09:12:55'),
(354, '2020-09-26 00:00:00', 'SO/200000043', '2020-08-27 00:00:00', '2020-09-26 00:00:00', 10, 0, 0, 0, '', 'Y', 29, '2020-09-08 09:06:00', 29, '2020-09-08 09:12:31'),
(355, '0000-00-00 00:00:00', 'SO/200000052', '2020-09-07 00:00:00', '2020-10-07 00:00:00', 4, 34612, 0, 34612, '', 'N', 28, '2020-09-10 08:46:13', NULL, NULL),
(358, '0000-00-00 00:00:00', 'SO/200000053', '2020-09-07 00:00:00', '2020-09-07 00:00:00', 22, 4466242, 0, 4466242, '', 'N', 28, '2020-09-10 08:48:49', NULL, NULL),
(359, '0000-00-00 00:00:00', 'SO/200000053', '2020-09-07 00:00:00', '2020-09-07 00:00:00', 22, 4466242, 0, 4466242, '', 'N', 28, '2020-09-10 08:48:49', NULL, NULL),
(361, '2020-09-07 00:00:00', 'SO/200000054', '2020-09-07 00:00:00', '2020-09-07 00:00:00', 22, 190634, 0, 190634, '', 'Y', 28, '2020-09-10 08:52:59', 30, '2020-11-28 11:17:04'),
(370, '2020-10-07 00:00:00', 'SO/200000055', '2020-09-07 00:00:00', '2020-10-07 00:00:00', 4, 0, 0, 0, '', 'Y', 28, '2020-09-10 09:08:33', 30, '2020-11-28 11:19:20'),
(371, '2020-10-07 00:00:00', 'SO/200000055', '2020-09-07 00:00:00', '2020-10-07 00:00:00', 4, 0, 0, 0, '', 'Y', 28, '2020-09-10 09:08:33', 30, '2020-11-28 11:19:20'),
(372, '2020-10-07 00:00:00', 'SO/200000055', '2020-09-07 00:00:00', '2020-10-07 00:00:00', 4, 0, 0, 0, '', 'Y', 28, '2020-09-10 09:08:33', 30, '2020-11-28 11:19:20'),
(373, '2020-10-07 00:00:00', 'SO/200000055', '2020-09-07 00:00:00', '2020-10-07 00:00:00', 4, 0, 0, 0, '', 'Y', 28, '2020-09-10 09:08:33', 30, '2020-11-28 11:19:20'),
(374, '2020-10-07 00:00:00', 'SO/200000055', '2020-09-07 00:00:00', '2020-10-07 00:00:00', 4, 0, 0, 0, '', 'Y', 28, '2020-09-10 09:08:33', 30, '2020-11-28 11:19:20'),
(375, '2020-10-07 00:00:00', 'SO/200000055', '2020-09-07 00:00:00', '2020-10-07 00:00:00', 4, 0, 0, 0, '', 'Y', 28, '2020-09-10 09:08:33', 30, '2020-11-28 11:19:20'),
(376, '2021-01-13 00:00:00', 'SO/200000056', '2020-11-29 00:00:00', '2021-01-13 00:00:00', 17, 6018, 0, 6018, '', 'Y', 30, '2020-11-29 16:15:18', 30, '2020-11-29 18:48:20'),
(377, '2021-01-13 00:00:00', 'SO/200000056', '2020-11-29 00:00:00', '2021-01-13 00:00:00', 17, 6018, 0, 6018, '', 'Y', 30, '2020-11-29 16:15:18', 30, '2020-11-29 18:48:20'),
(378, '0000-00-00 00:00:00', 'SO/200000057', '2020-11-29 00:00:00', '2020-12-29 00:00:00', 4, 50, 0, 50, '', 'N', 30, '2020-11-29 16:26:44', NULL, '2020-12-21 13:16:58'),
(379, '0000-00-00 00:00:00', 'SO/200000058', '2020-11-29 00:00:00', '2021-01-13 00:00:00', 17, 10, 0, 10, '', 'Y', 30, '2020-11-29 16:33:24', NULL, '2020-12-20 03:01:00'),
(380, '0000-00-00 00:00:00', 'SO/200000058', '2020-11-29 00:00:00', '2021-01-13 00:00:00', 17, 10, 0, 10, '', 'Y', 30, '2020-11-29 16:33:24', NULL, '2020-12-20 03:01:00'),
(381, '2021-01-14 00:00:00', 'SO/200000059', '2020-11-30 00:00:00', '2021-01-14 00:00:00', 17, 24050, 10, 26455, NULL, 'Y', 0, '2020-11-30 02:03:41', NULL, '2020-11-30 08:38:26'),
(382, '2021-01-14 00:00:00', 'SO/200000059', '2020-11-30 00:00:00', '2021-01-14 00:00:00', 17, 24050, 10, 26455, NULL, 'Y', 0, '2020-11-30 02:03:41', NULL, '2020-11-30 08:38:26'),
(383, '2021-01-14 00:00:00', 'SO/200000060', '2020-11-30 00:00:00', '2021-01-14 00:00:00', 24, 23150, 10, 25465, NULL, 'Y', 0, '2020-11-30 08:34:12', NULL, '2020-12-19 23:10:31'),
(384, '2021-01-14 00:00:00', 'SO/200000060', '2020-11-30 00:00:00', '2021-01-14 00:00:00', 24, 23150, 10, 25465, NULL, 'Y', 0, '2020-11-30 08:34:12', NULL, '2020-12-19 23:10:31'),
(385, '2021-01-14 00:00:00', 'SO/200000061', '2020-11-30 00:00:00', '2021-01-14 00:00:00', 17, 25625, 10, 28188, NULL, 'Y', 0, '2020-11-30 12:02:48', NULL, '2020-11-30 12:04:56'),
(386, '2021-01-14 00:00:00', 'SO/200000061', '2020-11-30 00:00:00', '2021-01-14 00:00:00', 17, 25625, 10, 28188, NULL, 'Y', 0, '2020-11-30 12:02:48', NULL, '2020-11-30 12:04:56'),
(387, '2021-01-01 00:00:00', 'SO/200000062', '2020-12-02 00:00:00', '2021-01-01 00:00:00', 17, 13150, 10, 14465, NULL, 'Y', 0, '2020-12-02 09:23:59', NULL, '2020-12-21 13:17:25'),
(388, '2021-01-19 00:00:00', 'SO/200000063', '2020-12-20 00:00:00', '2021-01-19 00:00:00', 20, 15, 10, 16, NULL, 'Y', 0, '2020-12-20 16:10:25', NULL, '2020-12-20 16:14:43'),
(389, '2021-01-20 00:00:00', 'SO/200000064', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 17, 29, 10, 32, NULL, 'Y', 0, '2020-12-21 13:15:39', NULL, '2020-12-21 13:16:31'),
(390, '2021-01-20 00:00:00', 'SO/200000064', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 17, 29, 10, 32, NULL, 'Y', 0, '2020-12-21 13:15:39', NULL, '2020-12-21 13:16:31'),
(391, '2021-01-20 00:00:00', 'SO/200000065', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 20, 73, 10, 81, NULL, 'P', 0, '2020-12-21 13:27:52', NULL, '2021-01-04 10:16:55'),
(392, '2021-01-20 00:00:00', 'SO/200000065', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 20, 73, 10, 81, NULL, 'P', 0, '2020-12-21 13:27:52', NULL, '2021-01-04 10:16:55'),
(393, '2021-01-20 00:00:00', 'SO/200000065', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 20, 73, 10, 81, NULL, 'P', 0, '2020-12-21 13:27:52', NULL, '2021-01-04 10:16:55'),
(394, '2021-01-20 00:00:00', 'SO/200000065', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 20, 73, 10, 81, NULL, 'P', 0, '2020-12-21 13:27:52', NULL, '2021-01-04 10:16:55'),
(395, '2021-01-20 00:00:00', 'SO/200000065', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 20, 73, 10, 81, NULL, 'P', 0, '2020-12-21 13:27:52', NULL, '2021-01-04 10:16:55'),
(399, '2021-01-20 00:00:00', 'SO/200000067', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 19, 102, 10, 113, NULL, 'Y', 0, '2020-12-21 14:43:02', NULL, '2020-12-21 14:43:26'),
(400, '2021-01-20 00:00:00', 'SO/200000067', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 19, 102, 10, 113, NULL, 'Y', 0, '2020-12-21 14:43:02', NULL, '2020-12-21 14:43:26'),
(401, '2021-01-20 00:00:00', 'SO/200000067', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 19, 102, 10, 113, NULL, 'Y', 0, '2020-12-21 14:43:02', NULL, '2020-12-21 14:43:26'),
(402, '2021-01-20 00:00:00', 'SO/200000067', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 19, 102, 10, 113, NULL, 'Y', 0, '2020-12-21 14:43:02', NULL, '2020-12-21 14:43:26'),
(403, '2021-01-20 00:00:00', 'SO/200000067', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 19, 102, 10, 113, NULL, 'Y', 0, '2020-12-21 14:43:02', NULL, '2020-12-21 14:43:26'),
(404, '2021-01-20 00:00:00', 'SO/200000067', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 19, 102, 10, 113, NULL, 'Y', 0, '2020-12-21 14:43:02', NULL, '2020-12-21 14:43:26'),
(405, '2021-01-20 00:00:00', 'SO/200000067', '2020-12-21 00:00:00', '2021-01-20 00:00:00', 19, 102, 10, 113, NULL, 'Y', 0, '2020-12-21 14:43:02', NULL, '2020-12-21 14:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `trreturbelis`
--

CREATE TABLE `trreturbelis` (
  `id` int(11) NOT NULL,
  `NoRetur` varchar(30) NOT NULL,
  `TglRetur` datetime NOT NULL,
  `NoFaktur` varchar(30) NOT NULL,
  `TglFaktur` datetime NOT NULL,
  `TglJatuhTempo` datetime NOT NULL,
  `NoPO` varchar(30) NOT NULL,
  `TglPO` datetime NOT NULL,
  `TglJatuhTempoPO` datetime NOT NULL,
  `IdProduk` varchar(5) NOT NULL,
  `BeratJenis` varchar(10) NOT NULL,
  `Diameter` varchar(10) NOT NULL,
  `Panjang` varchar(10) NOT NULL,
  `Lebar` varchar(10) NOT NULL,
  `Tebal` varchar(10) NOT NULL,
  `Bentuk` varchar(30) NOT NULL,
  `OngkosPotong` int(11) NOT NULL,
  `HanyaPotong` varchar(5) NOT NULL,
  `ItemBarang` varchar(80) NOT NULL,
  `Berat` varchar(10) NOT NULL,
  `HargaKg` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `HargaSatuan` int(11) NOT NULL,
  `Diskon` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `PPN` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `trreturjuals`
--

CREATE TABLE `trreturjuals` (
  `id` int(11) NOT NULL,
  `NoRetur` varchar(30) NOT NULL,
  `NoFaktur` varchar(30) NOT NULL,
  `TglFaktur` datetime NOT NULL,
  `TglJatuhTempo` datetime NOT NULL,
  `TglSO` datetime NOT NULL,
  `TglJatuhTempoSO` datetime NOT NULL,
  `TglRetur` datetime NOT NULL,
  `IdProduk` varchar(5) NOT NULL,
  `BeratJenis` varchar(10) NOT NULL,
  `Diameter` varchar(10) NOT NULL,
  `Panjang` varchar(10) NOT NULL,
  `Lebar` varchar(10) NOT NULL,
  `Tebal` varchar(10) NOT NULL,
  `Bentuk` varchar(30) NOT NULL,
  `OngkosPotong` int(11) NOT NULL,
  `HanyaPotong` varchar(5) NOT NULL,
  `ItemBarang` varchar(80) NOT NULL,
  `Berat` varchar(10) NOT NULL,
  `HargaKg` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `HargaSatuan` int(11) NOT NULL,
  `Diskon` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `PPN` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `trsuratjalans`
--

CREATE TABLE `trsuratjalans` (
  `id` int(11) NOT NULL,
  `NoSuratJalan` varchar(20) NOT NULL,
  `TglSuratJalan` datetime DEFAULT NULL,
  `KepadaNama` varchar(100) DEFAULT NULL,
  `NoPO` varchar(100) DEFAULT NULL,
  `KepadaTelp` varchar(50) DEFAULT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Pending',
  `stsrc` varchar(1) NOT NULL,
  `userin` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `userupd` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trsuratjalans`
--

INSERT INTO `trsuratjalans` (`id`, `NoSuratJalan`, `TglSuratJalan`, `KepadaNama`, `NoPO`, `KepadaTelp`, `Status`, `stsrc`, `userin`, `created_at`, `userupd`, `updated_at`) VALUES
(1, 'SJ/200000001', '2020-07-05 00:00:00', 'Bpk. A', NULL, '081234567890', 'Pending', 'A', 20, '2020-07-05 14:44:42', 20, '2020-07-05 14:55:59'),
(2, 'SJ/200000002', '2020-07-06 00:00:00', NULL, NULL, '', 'Pending', 'A', 22, '2020-07-06 14:35:11', 27, '2020-07-26 21:04:03'),
(3, 'SJ/200000003', '2020-07-06 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 22, '2020-07-06 14:35:20', NULL, NULL),
(4, 'SJ/200000004', '2020-07-06 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 22, '2020-07-06 14:35:22', NULL, NULL),
(5, 'SJ/200000005', '2020-07-06 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 22, '2020-07-06 14:35:24', NULL, NULL),
(6, 'SJ/200000006', '2020-07-06 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 22, '2020-07-06 14:35:29', NULL, NULL),
(7, 'SJ/200000007', '2020-07-06 00:00:00', NULL, 'PO/1234567890987654321234567890', NULL, 'Done', 'A', 22, '2020-07-06 14:35:36', 20, '2020-08-01 17:48:08'),
(8, 'SJ/200000008', '2020-07-06 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 22, '2020-07-06 14:35:59', NULL, NULL),
(9, 'SJ/200000009', '2020-07-06 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 22, '2020-07-06 14:36:17', NULL, NULL),
(10, 'SJ/200000010', '2020-07-07 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 22, '2020-07-07 11:14:56', NULL, NULL),
(11, 'SJ/200000011', '2020-07-07 00:00:00', NULL, NULL, '-', 'Pending', 'A', 22, '2020-07-07 11:17:40', 27, '2020-07-28 13:05:38'),
(12, 'SJ/200000012', '2020-07-07 00:00:00', 'PT. Mitra Tama Gemilang', NULL, '0000', 'Pending', 'A', 22, '2020-07-07 11:26:04', 22, '2020-07-07 11:30:40'),
(13, 'SJ/200000013', '2020-07-08 00:00:00', 'PT Mitra Tama Gemilang', NULL, '0000', 'Pending', 'A', 22, '2020-07-07 11:58:40', 22, '2020-07-07 12:01:30'),
(14, 'SJ/200000014', '2020-07-11 00:00:00', 'PT. ANEKA CIPTA PROSPERINDO', NULL, '-', 'Pending', 'A', 22, '2020-07-11 14:34:37', 22, '2020-07-11 14:38:33'),
(15, 'SJ/200000015', '2020-07-14 00:00:00', 'PT. TAG', NULL, '-', 'Pending', 'A', 25, '2020-07-13 14:33:44', 25, '2020-07-13 14:39:44'),
(16, 'SJ/200000016', '2020-07-13 00:00:00', NULL, NULL, '-', 'Pending', 'A', 25, '2020-07-13 14:33:47', 27, '2020-07-28 13:01:21'),
(17, 'SJ/200000017', '2020-07-17 00:00:00', 'PT. SUPRA TERATAI METAL', NULL, '-', 'Pending', 'A', 25, '2020-07-16 11:31:06', 25, '2020-07-16 11:37:47'),
(18, 'SJ/200000018', '2020-07-28 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 20, '2020-07-31 08:02:07', NULL, NULL),
(19, 'SJ/200000019', '2020-08-01 00:00:00', NULL, NULL, '-', 'Pending', 'A', 27, '2020-08-01 15:31:59', 27, '2020-08-01 15:33:12'),
(20, 'SJ/200000020', '2020-08-02 00:00:00', NULL, 'BKL123', NULL, 'Done', 'A', 27, '2020-08-02 15:34:08', 27, '2020-08-02 15:35:25'),
(21, 'SJ/200000021', '2020-07-28 00:00:00', NULL, '', NULL, 'Pending', 'A', 27, '2020-08-02 15:37:08', 27, '2020-08-02 15:37:38'),
(22, 'SJ/200000022', '2020-08-02 00:00:00', NULL, 'HKM01/08/2020', NULL, 'Done', 'A', 27, '2020-08-02 15:39:59', 27, '2020-08-02 15:41:36'),
(23, 'SJ/200000023', '2020-07-22 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 27, '2020-08-04 14:23:34', NULL, NULL),
(24, 'SJ/200000024', '2020-07-21 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 27, '2020-08-04 14:24:20', NULL, NULL),
(25, 'SJ/200000025', '2020-07-21 00:00:00', NULL, NULL, NULL, 'Pending', 'A', 27, '2020-08-04 14:24:21', NULL, NULL),
(26, 'SJ/200000026', '2020-08-08 00:00:00', NULL, '202007001924', NULL, 'Done', 'A', 27, '2020-08-07 14:11:33', 27, '2020-08-07 14:16:49'),
(27, 'SJ/200000027', '2020-08-11 00:00:00', NULL, '', NULL, 'Done', 'A', 27, '2020-08-10 15:30:58', 27, '2020-08-10 15:37:29'),
(28, 'SJ/200000028', '2020-08-11 00:00:00', NULL, 'LK202690', NULL, 'Done', 'A', 27, '2020-08-10 16:04:01', 27, '2020-08-10 16:05:23'),
(29, 'SJ/200000029', '2020-08-12 00:00:00', NULL, 'A122SAI', NULL, 'Done', 'A', 27, '2020-08-11 15:06:14', 27, '2020-08-11 15:07:37'),
(30, 'SJ/200000030', '2020-07-16 00:00:00', NULL, '', NULL, 'Done', 'A', 27, '2020-08-24 15:02:40', 27, '2020-08-24 15:05:48'),
(31, 'SJ/200000031', '2020-07-21 00:00:00', NULL, '', NULL, 'Done', 'A', 27, '2020-08-24 15:03:28', 27, '2020-08-24 15:06:27'),
(32, 'SJ/200000032', '2020-07-11 00:00:00', NULL, '', NULL, 'Done', 'A', 27, '2020-08-24 15:04:54', 27, '2020-08-24 15:07:35'),
(33, 'SJ/200000033', '2020-07-11 00:00:00', NULL, '', NULL, 'Done', 'A', 27, '2020-08-24 15:19:56', 27, '2020-08-24 15:20:45'),
(34, 'SJ/200000034', '2020-08-31 00:00:00', NULL, '', NULL, 'Done', 'A', 28, '2020-08-31 09:19:58', 28, '2020-08-31 09:22:39'),
(35, 'SJ/200000035', '2020-09-01 00:00:00', NULL, '', NULL, 'Done', 'A', 28, '2020-09-01 13:32:59', 28, '2020-09-01 13:34:20'),
(36, 'SJ/200000036', '2020-09-05 00:00:00', NULL, '51', NULL, 'Done', 'A', 20, '2020-09-08 10:50:45', 20, '2020-09-11 12:24:57'),
(37, 'SJ/00000037', '2020-12-19 00:00:00', NULL, NULL, NULL, 'Pending', 'A', NULL, '2020-12-19 23:39:40', NULL, '2020-12-19 23:39:40'),
(38, 'SJ/00000038', '2020-11-30 00:00:00', NULL, 'cek123', NULL, 'Pending', 'A', NULL, '2020-12-19 23:48:09', NULL, '2020-12-20 01:29:36'),
(39, 'SJ/200000039', '2020-12-20 00:00:00', NULL, NULL, NULL, 'Pending', 'A', NULL, '2020-12-20 03:01:31', NULL, '2020-12-20 03:01:31'),
(40, 'SJ/200000040', '2020-12-20 00:00:00', NULL, NULL, NULL, 'Pending', 'A', NULL, '2020-12-20 16:19:21', NULL, '2020-12-20 16:19:21'),
(41, 'SJ/200000041', '2020-12-21 00:00:00', NULL, NULL, NULL, 'Pending', 'A', NULL, '2020-12-21 13:18:16', NULL, '2020-12-21 13:18:16'),
(42, 'SJ/200000042', '2020-12-21 00:00:00', NULL, NULL, NULL, 'Pending', 'A', NULL, '2020-12-21 14:44:16', NULL, '2020-12-21 14:44:16'),
(43, 'SJ/200000043', '2020-12-21 00:00:00', NULL, NULL, NULL, 'Pending', 'A', NULL, '2020-12-21 14:45:04', NULL, '2020-12-21 14:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'operator',
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `status`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Adrian Stefanus', 'admin', 'active', 'adrian.stefanus@binus.ac.id', NULL, '$2y$10$hyWjHdvpFctfCDhOA4xIqOZIYdVoHeqfPFEJeSBo6l.NYpXoIoa/O', NULL, NULL, NULL, NULL, 'profile-photos/rRyFy5QJAEFYKCGOv4QB7MnrwO5qgPA13bbWeUdR.jpeg', '2020-11-23 04:41:38', '2020-11-23 05:29:11'),
(2, 'Noah Lawu', 'operator', 'active', 'noahlawu10@gmail.com', NULL, '$2y$10$G73r3mt9q16WP.f04hyi7uN7LJpXOZizAEkVHEUfvrWMqySXZpYUq', NULL, NULL, NULL, NULL, NULL, '2020-11-23 05:39:04', '2020-11-28 05:21:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Idmember` (`Idmember`),
  ADD KEY `idmsmember` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fakturbelis`
--
ALTER TABLE `fakturbelis`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `NoFaktur` (`NoFaktur`);

--
-- Indexes for table `fakturjuals`
--
ALTER TABLE `fakturjuals`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `NoFaktur` (`NoFaktur`);

--
-- Indexes for table `kuitansijuals`
--
ALTER TABLE `kuitansijuals`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `NoKuitansi` (`NoKuitansi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmsmember` (`id`);

--
-- Indexes for table `temp_penawarans`
--
ALTER TABLE `temp_penawarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trpembelians`
--
ALTER TABLE `trpembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trpenawarans`
--
ALTER TABLE `trpenawarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trreturbelis`
--
ALTER TABLE `trreturbelis`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trreturjuals`
--
ALTER TABLE `trreturjuals`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trsuratjalans`
--
ALTER TABLE `trsuratjalans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakturbelis`
--
ALTER TABLE `fakturbelis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `fakturjuals`
--
ALTER TABLE `fakturjuals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `kuitansijuals`
--
ALTER TABLE `kuitansijuals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `temp_penawarans`
--
ALTER TABLE `temp_penawarans`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trpembelians`
--
ALTER TABLE `trpembelians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT for table `trpenawarans`
--
ALTER TABLE `trpenawarans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT for table `trreturbelis`
--
ALTER TABLE `trreturbelis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trreturjuals`
--
ALTER TABLE `trreturjuals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trsuratjalans`
--
ALTER TABLE `trsuratjalans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
