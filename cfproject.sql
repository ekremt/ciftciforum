-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 02 May 2019, 14:21:48
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cfproject`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(100) NOT NULL,
  `aciklama` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `p_tarihi` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `post`
--

INSERT INTO `post` (`id`, `baslik`, `aciklama`, `img`, `p_tarihi`, `user_id`) VALUES
(1, 'Tarımda olanak', ' asdasd asd asd asd asd asd as', 'img/postimg/banner.jpg', '2019-04-09 07:21:11', 1),
(2, 'Hayvancılık', 'asdas dasd asd asd asd asdas d asd asd as\r\nd asd asd asd asd asd', 'img/postimg/banner.jpg', '2019-05-07 00:00:00', 1),
(19, '', '', 'img/postimg/', '2019-05-02 13:43:43', 2),
(5, 'dfgfdgfd', 'gdfgdfg', 'img/postimg/banner2.jpg', '2019-05-02 13:15:36', 2),
(35, 'Dağlar Dereler', 'dfsd fsdf sdfsd fsdf sdf sdf sdf sdf sdf sdf', 'img/postimg/wallhaven-260765.jpg', '2019-05-02 14:14:36', 1),
(34, 'Türkey', 'sdfsdfsdf', 'img/postimg/80ed8666962096310250abe7d407774d.jpg', '2019-05-02 13:58:05', 1),
(33, '', '', 'img/postimg/', '2019-05-02 13:57:25', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `k_adi` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `soyadi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `k_adi`, `sifre`, `adi`, `soyadi`) VALUES
(1, 'ekremtinas', '123456789', 'Ekrem', 'Tınas'),
(2, 'hsndgsn', '123456789', 'Hasan Hüseyin', 'Dağaşan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

DROP TABLE IF EXISTS `yorum`;
CREATE TABLE IF NOT EXISTS `yorum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yorum` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`id`, `yorum`, `post_id`, `user_id`) VALUES
(1, 'Güzel bir yorum', 1, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
