-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 05 Ağu 2019, 08:07:27
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `skuafor`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_fiyatlar`
--

CREATE TABLE `tbl_fiyatlar` (
  `FiyatId` int(11) NOT NULL,
  `Baslik` varchar(200) NOT NULL,
  `Fiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_fiyatlar`
--

INSERT INTO `tbl_fiyatlar` (`FiyatId`, `Baslik`, `Fiyat`) VALUES
(1, 'Fön', 30),
(2, 'Amerikan Fön', 400),
(3, 'Kesim(Maşa yada Fön dahil)	', 150),
(4, 'Topuz', 100),
(5, 'Maşa', 75),
(6, 'Boya Dip', 175),
(7, 'Boya Değişim', 400),
(8, 'Röfle', 350),
(9, 'Gelin Saçı', 750);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_hakkimizda`
--

CREATE TABLE `tbl_hakkimizda` (
  `IcerikId` int(11) NOT NULL,
  `Baslik` varchar(200) NOT NULL,
  `Icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_hakkimizda`
--

INSERT INTO `tbl_hakkimizda` (`IcerikId`, `Baslik`, `Icerik`) VALUES
(1, 'HAKKIMIZDA', '<p>Saadet Kuaf&ouml;r, 1995 yılında Saadet Akbulak tarafından Sakarya, Tığcılar Mahallesi&#39;nde a&ccedil;ılmıştır. Tecr&uuml;beli ve her zaman kendini geliştiren kadrosu ile birlikte sizlere en iyi hizmeti ve kaliteyi sunmak i&ccedil;in sabah 9:00, akşam 19:00 arası hizmet vermektir. Adapazarı</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_iletisim`
--

CREATE TABLE `tbl_iletisim` (
  `IletisimId` int(11) NOT NULL,
  `Icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_iletisim`
--

INSERT INTO `tbl_iletisim` (`IletisimId`, `Icerik`) VALUES
(1, '<p>Adres: Tığcılar Mahallesi Kavaklar Caddesi No.18 Sakarya/Adapazarı Telefon: 0 (264) 274 90 00 E-Posta: saadetakbulak@gmail.com<br />\r\n&Ccedil;alışma Saatleri: Haftai&ccedil;i:&nbsp;9:00 - 19:00, Haftasonu: 9:00 - 21:00</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_resimler`
--

CREATE TABLE `tbl_resimler` (
  `ResimId` int(11) NOT NULL,
  `Baslik` varchar(200) NOT NULL,
  `Tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_resimler`
--

INSERT INTO `tbl_resimler` (`ResimId`, `Baslik`, `Tarih`) VALUES
(7, 'düz saç', '2019-05-01');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_fiyatlar`
--
ALTER TABLE `tbl_fiyatlar`
  ADD PRIMARY KEY (`FiyatId`);

--
-- Tablo için indeksler `tbl_hakkimizda`
--
ALTER TABLE `tbl_hakkimizda`
  ADD PRIMARY KEY (`IcerikId`);

--
-- Tablo için indeksler `tbl_iletisim`
--
ALTER TABLE `tbl_iletisim`
  ADD PRIMARY KEY (`IletisimId`);

--
-- Tablo için indeksler `tbl_resimler`
--
ALTER TABLE `tbl_resimler`
  ADD PRIMARY KEY (`ResimId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_fiyatlar`
--
ALTER TABLE `tbl_fiyatlar`
  MODIFY `FiyatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_hakkimizda`
--
ALTER TABLE `tbl_hakkimizda`
  MODIFY `IcerikId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_iletisim`
--
ALTER TABLE `tbl_iletisim`
  MODIFY `IletisimId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_resimler`
--
ALTER TABLE `tbl_resimler`
  MODIFY `ResimId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
