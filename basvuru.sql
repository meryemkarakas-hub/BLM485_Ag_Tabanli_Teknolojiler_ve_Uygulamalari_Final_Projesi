-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Ara 2022, 10:53:20
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `basvuru`
--
CREATE DATABASE IF NOT EXISTS `basvuru` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `basvuru`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `adminAd` text NOT NULL,
  `adminSifre` text NOT NULL,
  `adminEmail` text NOT NULL,
  `adminSirket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`idadmin`, `adminAd`, `adminSifre`, `adminEmail`, `adminSirket`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basvuranlar`
--

CREATE TABLE `basvuranlar` (
  `basvuranTc` int(11) NOT NULL,
  `basvuruTarihi` text NOT NULL,
  `ilanID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `basvuranlar`
--

INSERT INTO `basvuranlar` (`basvuranTc`, `basvuruTarihi`, `ilanID`) VALUES
(0, '10-01-2022', 1),
(49546385486, '10-01-2022', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilanlar`
--

CREATE TABLE `ilanlar` (
  `sirketid` int(11) NOT NULL,
  `ilanid` int(11) NOT NULL,
  `ilanad` text NOT NULL,
  `aciklama` text NOT NULL,
  `bolum` text NOT NULL,
  `minSinif` int(11) NOT NULL,
  `minOrt` text NOT NULL,
  `yayinTarihi` text NOT NULL,
  `sonBasvuru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ilanlar`
--

INSERT INTO `ilanlar` (`sirketid`, `ilanid`, `ilanad`, `aciklama`, `bolum`, `minSinif`, `minOrt`, `yayinTarihi`, `sonBasvuru`) VALUES
(1, 1, 'Java', 'test', 'bilgisayar', 4, '3', '10-01-2022', '2022-01-31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isarayan`
--

CREATE TABLE `isarayan` (
  `idisArayanTc` int(11) NOT NULL,
  `isArayanOrt` text NOT NULL,
  `isArayanAdi` text NOT NULL,
  `isArayanCinsiyet` text NOT NULL,
  `isArayanOkul` text NOT NULL,
  `isArayanEmail` text NOT NULL,
  `isArayanSifre` text NOT NULL,
  `isArayanSinif` int(11) NOT NULL,
  `isArayanDogumTarihi` text NOT NULL,
  `isArayanBolum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `isarayan`
--

INSERT INTO `isarayan` (`idisArayanTc`, `isArayanOrt`, `isArayanAdi`, `isArayanCinsiyet`, `isArayanOkul`, `isArayanEmail`, `isArayanSifre`, `isArayanSinif`, `isArayanDogumTarihi`, `isArayanBolum`) VALUES
(49546385486, '3', 'Meryem Karakaş', 'kadın', 'Ankara Üniversitesi', 'meryemkarakas11@gmail.com', '12345', 3, '1996-12-17', 'Bilgisayar Mühendisliği');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sirketler`
--

CREATE TABLE `sirketler` (
  `idSirketler` int(11) NOT NULL,
  `SirketlerAd` text NOT NULL,
  `SirketlerAdres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sirketler`
--

INSERT INTO `sirketler` (`idSirketler`, `SirketlerAd`, `SirketlerAdres`) VALUES
(1, 'Turksat', 'Gölbası');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Tablo için indeksler `basvuranlar`
--
ALTER TABLE `basvuranlar`
  ADD PRIMARY KEY (`basvuranTc`,`ilanID`);

--
-- Tablo için indeksler `ilanlar`
--
ALTER TABLE `ilanlar`
  ADD PRIMARY KEY (`ilanid`);

--
-- Tablo için indeksler `isarayan`
--
ALTER TABLE `isarayan`
  ADD PRIMARY KEY (`idisArayanTc`);

--
-- Tablo için indeksler `sirketler`
--
ALTER TABLE `sirketler`
  ADD PRIMARY KEY (`idSirketler`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ilanlar`
--
ALTER TABLE `ilanlar`
  MODIFY `ilanid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `isarayan`
--
ALTER TABLE `isarayan`
  MODIFY `idisArayanTc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Tablo için AUTO_INCREMENT değeri `sirketler`
--
ALTER TABLE `sirketler`
  MODIFY `idSirketler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
