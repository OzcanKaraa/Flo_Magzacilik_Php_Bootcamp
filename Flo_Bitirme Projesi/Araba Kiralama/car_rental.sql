-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 06:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `altkategori`
--

CREATE TABLE `altkategori` (
  `altkat_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `alt_baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `alt_sira` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `altkategori`
--

INSERT INTO `altkategori` (`altkat_id`, `kategori_id`, `alt_baslik`, `alt_sira`) VALUES
(5, 5, 'ARAÇLAR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(10) NOT NULL,
  `ayar_baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_aciklama` varchar(350) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_key` varchar(350) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_telefon` int(13) NOT NULL,
  `ayar_email` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_baslik`, `ayar_aciklama`, `ayar_key`, `ayar_telefon`, `ayar_email`, `ayar_facebook`, `ayar_instagram`, `ayar_logo`) VALUES
(0, 'Ozcan Araba Kiralama', 'Tüm modeller uygun fiyatlarda', '', 0, 'ozcan@gmail.com', 'ozcan_rental', 'ozcan_rental', '265512878249041064-vintage-style-car-rentals-label-template-vector-logo-design.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cokluresim`
--

CREATE TABLE `cokluresim` (
  `cokluresim_id` int(11) NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danismanlar`
--

CREATE TABLE `danismanlar` (
  `danisman_id` int(11) NOT NULL,
  `danisman_isim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `danisman_gorev` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `danisman_telefon` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `danisman_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `danisman_resim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `danisman_sifre` varchar(120) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `danismanlar`
--

INSERT INTO `danismanlar` (`danisman_id`, `danisman_isim`, `danisman_gorev`, `danisman_telefon`, `danisman_mail`, `danisman_resim`, `danisman_sifre`) VALUES
(10, 'Ozcan ', 'Admin', '', 'ozcan@gmail.com', '2890228303avatar4.png', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'Mehmet Hoca', 'Admin', '', 'msbatal@gmail.com', '2787024297a.png', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(10) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_aciklama`, `hakkimizda_resim`) VALUES
(1, 'Ozcan Araba Kiralama', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `ilanlar`
--

CREATE TABLE `ilanlar` (
  `ilan_id` int(10) NOT NULL,
  `altkategori_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `ilan_baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `ilan_sira` int(10) NOT NULL,
  `ilan_tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ilan_anahtarkelime` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_marka` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_model` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `danisman_id` int(10) NOT NULL,
  `ilan_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_fiyat` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ilanlar`
--

INSERT INTO `ilanlar` (`ilan_id`, `altkategori_id`, `kategori_id`, `ilan_baslik`, `ilan_aciklama`, `ilan_sira`, `ilan_tarih`, `ilan_anahtarkelime`, `ilan_marka`, `ilan_model`, `danisman_id`, `ilan_adres`, `ilan_resim`, `ilan_fiyat`) VALUES
(13, 5, 5, '2022 FİAT EGEA URBAN 1.6 MULTİJET OTOMATİK 130HP', '', 1, '2022-12-03 11:26:51', 'fiat', '', 'Egea', 0, 'İstanbul / Kadıköy', '2229227662fiat.png', 3400.00),
(14, 5, 5, '2022 FİAT EGEA EASY 1.6 MULTİJET OTOMATİK 130HP', '', 2, '2022-12-03 11:29:04', 'Fiat', '', 'Egea', 0, 'İstanbul/Kadıköy', '2166027761image_2022-12-03_142726493.png', 2520.00),
(15, 5, 5, '2017 İNSİGNİA EXCELLENCE ENJOY 1.6 ', '<h1>2017 İNSİGNİA EXCELLENCE ENJOY 1.6</h1>\r\n', 3, '2022-12-03 12:42:03', ' 2017 İNSİGNİA EXCELLENCE ENJOY 1.6', '', 'İNSİGNİA', 0, 'İstanbul', '2780529325image_2022-12-03_153653475.png', 2838.00),
(17, 5, 5, 'RENAULT CLİO 1.5 JOY ', '<p><strong>G&uuml;nl&uuml;k&nbsp;</strong>&nbsp;:250 TL X 3 = 750 TL<br />\r\n<strong>15 G&uuml;n&nbsp;</strong>&nbsp; :200 TL X 15 = 3.000 TL<br />\r\n<strong>30 G&uuml;n</strong>&nbsp; :170 TL X 30 = 5.100 TL<br />\r\n<strong>Provizyon :</strong>&nbsp;1.200 TL<br />\r\n<br />\r\n&nbsp;</p>\r\n', 4, '2022-12-03 17:06:20', ' Renault', '', 'Clio', 0, 'İstanbul', '211882029312.png', 1500.00),
(18, 5, 5, 'Renault', '<p>RENAULT TALİANT 1.0 TURBO TOUCH X-TRONİC</p>\r\n\r\n<p><strong>G&uuml;nl&uuml;k&nbsp;</strong>:250 TL X 3 = 750 TL<br />\r\n<strong>15 G&uuml;n</strong>&nbsp;:200 TL X 15 = 3.000 TL<br />\r\n<strong>30 G&uuml;n</strong>&nbsp;:170 TL X 30 = 5.100 TL<br />\r\n<strong>Provizyon</strong>&nbsp;: 1.200 TL</p>\r\n', 5, '2022-12-03 17:06:09', 'renault', '', 'TALİANT', 0, 'İstanbul', '2911629295image_2022-12-03_200406955.png', 3500.00),
(19, 5, 5, 'RENAULT KOLEOS ICON 1.3 Tce EDC 160 HP', '<p><strong>G&uuml;nl&uuml;k&nbsp;</strong>:300 TL X 3 = 900 TL<br />\r\n<strong>15 G&uuml;n&nbsp;</strong>:250 TL X 15 = 3.750 TL<br />\r\n<strong>30 G&uuml;n</strong>&nbsp;:200 TL X 30 = 6.000 TL<br />\r\n<strong>Provizyon&nbsp;</strong>: 1.300 TL</p>\r\n', 6, '2022-12-03 17:08:25', 'Renault', '', 'RENAULT KOLEOS ', 0, 'İstanbul', '2390027771image_2022-12-03_200652339.png', 4000.00);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) NOT NULL,
  `kategori_baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_baslik`, `kategori_sira`) VALUES
(5, 'FİLO DÜNYASI', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `altkategori`
--
ALTER TABLE `altkategori`
  ADD PRIMARY KEY (`altkat_id`);

--
-- Indexes for table `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Indexes for table `cokluresim`
--
ALTER TABLE `cokluresim`
  ADD PRIMARY KEY (`cokluresim_id`);

--
-- Indexes for table `danismanlar`
--
ALTER TABLE `danismanlar`
  ADD PRIMARY KEY (`danisman_id`);

--
-- Indexes for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Indexes for table `ilanlar`
--
ALTER TABLE `ilanlar`
  ADD PRIMARY KEY (`ilan_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `altkategori`
--
ALTER TABLE `altkategori`
  MODIFY `altkat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cokluresim`
--
ALTER TABLE `cokluresim`
  MODIFY `cokluresim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `danismanlar`
--
ALTER TABLE `danismanlar`
  MODIFY `danisman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ilanlar`
--
ALTER TABLE `ilanlar`
  MODIFY `ilan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
