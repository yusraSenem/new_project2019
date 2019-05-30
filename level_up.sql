-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 30 May 2019, 14:45:55
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
-- Veritabanı: `level_up`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `departmanlar`
--

DROP TABLE IF EXISTS `departmanlar`;
CREATE TABLE IF NOT EXISTS `departmanlar` (
  `bolum_kod` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `bolum_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`bolum_kod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `departmanlar`
--

INSERT INTO `departmanlar` (`bolum_kod`, `bolum_ad`) VALUES
('ARGE', 'Araştırma ve Geliştirme'),
('BISD', 'Bilgi İşlem ve Donanım Departmanı'),
('EDD', 'Eğitim ve Destek Departmanı'),
('FIND', 'Finansman Departmanı'),
('IK', 'İnsan Kaynakları Departmanı'),
('KYD', 'Kalite ve Yönetim Departmanı'),
('MHSB', 'Muhasebe'),
('PZR', 'Pazarlama Departmanı'),
('YAZD', 'Yazılım Geliştirme Departmanı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gorevler`
--

DROP TABLE IF EXISTS `gorevler`;
CREATE TABLE IF NOT EXISTS `gorevler` (
  `gorev_kod` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `gorev_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `gorev_tanim` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `baslama_tarihi` date DEFAULT NULL,
  `bitis_tarihi` date DEFAULT NULL,
  PRIMARY KEY (`gorev_kod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gorevler`
--

INSERT INTO `gorevler` (`gorev_kod`, `gorev_ad`, `gorev_tanim`, `baslama_tarihi`, `bitis_tarihi`) VALUES
('ANALIZ', 'Sistem gereksinimleri', 'Sistem gereksinimlerini belirleme', '2018-06-10', '2018-06-28'),
('BACK1', 'ticari site arkaplan', 'müşterimizin ihtiyacı olan siteyi dinamik hale getirmek için php tabanlı arkaplan tasarımı', NULL, NULL),
('BAKIMTIC', 'bakım onarım ve teslim', 'sitenin bakımını yapma sorunları düzeltme ve teslim', '2019-07-20', '2019-07-27'),
('BAKIMVR', 'bakım ve sunum', 'sistemin bakımını yapma ve pazara sunma', '2018-09-05', '2018-10-04'),
('BASETIC', 'veritabanı tasarımı', 'E ticaret sitesinin veritabanını oluşturma ve yönetme', '2019-05-24', '2019-06-13'),
('ENTVR', 'Gözlüğe entergre işlemleri', 'gözlüğe entegre işlemleri', '2018-07-29', '2018-08-10'),
('FRONTTIC', 'arayüz tasarımı', 'E ticaret sitesinin kullanıcı arayüzünü tasarlama', '2019-05-24', '2019-06-15'),
('GORUS', 'Psikolog ile görüşme', 'Psikologlar ile görüşüp gerekli bilgileri alma', '2018-05-21', '2018-06-10'),
('IOT1', 'programlama', 'müşterimizin şirketi için birbirleri ile haberleşebilen kameralardan oluşan güvenlik sistemi için program yazımı', '2019-03-10', '2019-08-20'),
('JAVAVR', 'Java programlama', 'java programlama', '2018-06-28', '2018-07-28'),
('PHPTIC', 'arkaplan tasarımı', 'E ticaret sitesini dinamikleştirme en az tıklanma ile birçok işlevi gerçekleştirebilme', '2019-04-26', '2019-06-02'),
('PHPVR', 'PHP programlama', 'php programlama', '2018-06-28', '2018-07-29'),
('SEO1', 'Tarayıcı Optimizasyonu', 'Hazırlanacak sitenin aramalarda üst sıralara çıkması için optimize edilmesi.', '2019-05-10', '2019-06-15'),
('TESTTIC', 'site testi', 'Oluşabilecek tüm hataları tespit etmek için sitenin testinin yapılması', '2019-07-03', '2019-07-20'),
('TESTVR', 'VR test', 'sistemi test etme', '2018-08-10', '2018-09-05'),
('WEB1', 'ticari site arayüz tasarımı', 'bir müşterimizin ihtiyacı olan web sitesi için kullanıcı arayüzü geliştirme', '2019-04-10', '2019-04-27');

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `gosterim`
-- (Asıl görünüm için aşağıya bakın)
--
DROP VIEW IF EXISTS `gosterim`;
CREATE TABLE IF NOT EXISTS `gosterim` (
`p_ad` varchar(50)
,`p_soyad` varchar(50)
,`p_email` varchar(50)
,`unvan` varchar(50)
,`yetki_id` int(3)
,`gorev_ad` varchar(50)
,`gorev_baslangic` date
,`gorev_bitis` date
,`proje_ad` varchar(50)
,`proje_baslangic` date
,`proje_bitis` date
,`bolum_ad` varchar(50)
);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personeller`
--

DROP TABLE IF EXISTS `personeller`;
CREATE TABLE IF NOT EXISTS `personeller` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_ad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `p_soyad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `p_gsm` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `p_email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` int(6) DEFAULT NULL,
  `bolum_kod` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `unvan` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yetki_id` int(3) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `yetki` (`yetki_id`),
  KEY `bolum` (`bolum_kod`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `personeller`
--

INSERT INTO `personeller` (`p_id`, `p_ad`, `p_soyad`, `p_gsm`, `p_email`, `sifre`, `bolum_kod`, `unvan`, `yetki_id`) VALUES
(1, 'karar', 'veren', '3123123', 'karar@gmail.com', 123456, NULL, 'yonetici', 1),
(2, 'elif', 'güler', '253649', 'elif@gmail.com', 132654, 'IK', 'ik uzmanı', 2),
(4, 'darma', 'duman', '785412', 'duman@gmail.com', 98654, 'YAZD', 'frontend developer', 2),
(5, 'vakit', 'geciyor', '25361', 'vakit@gmail.com', 25469, 'YAZD', 'backend developer', 2),
(6, 'gorev', 'beklemez', '2536417', 'gorev@gmail.com', 14526, 'YAZD', 'yazılım mimarı', 2),
(7, 'yardim', 'kesinlikledilir', '2569874', 'yardim@gmail.com', 2036410, 'KYD', 'kalite uzmanı', 2),
(26, 'servet', 'miras', '25316987', 'servet@gmail.com', 520147, 'YAZD', 'backend developer', 2),
(28, 'yaman', 'cokyaman', '6398521', 'yaman@gmail.com', 25314, 'KYD', 'SEO Uzmanı', 2),
(29, 'Barış', 'Savaş', '36985412', 'baris@gmail.com', 2031658, 'YAZD', 'Database Manager', 2),
(30, 'Hayal', 'Gerçek', '209520', 'hayal@gmail.com', 78450, 'KYD', 'Tester', 2),
(31, 'hızır', 'yetiş', '2036985', 'yetis@gmail.com', 90258, 'KYD', 'DevOps', 2),
(32, 'Optik', 'Çokbakan', '25417', 'optik@gmail.com', 20154, 'KYD', 'İş Analisti', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel_gorev`
--

DROP TABLE IF EXISTS `personel_gorev`;
CREATE TABLE IF NOT EXISTS `personel_gorev` (
  `p_id` int(11) NOT NULL,
  `gorev_kod` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `gorev_gunde_bitti` int(11) DEFAULT NULL,
  `max_gorev_suresi` int(100) DEFAULT NULL,
  `tasarruflu_zaman` int(100) DEFAULT NULL,
  `erken_bitirme_orani` float DEFAULT NULL,
  KEY `personel` (`p_id`),
  KEY `gorev` (`gorev_kod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `personel_gorev`
--

INSERT INTO `personel_gorev` (`p_id`, `gorev_kod`, `gorev_gunde_bitti`, `max_gorev_suresi`, `tasarruflu_zaman`, `erken_bitirme_orani`) VALUES
(5, 'BACK1', NULL, NULL, NULL, NULL),
(30, 'TESTTIC', NULL, NULL, NULL, NULL),
(30, 'BAKIMTIC', NULL, NULL, NULL, NULL);

--
-- Tetikleyiciler `personel_gorev`
--
DROP TRIGGER IF EXISTS `silinen_gorev`;
DELIMITER $$
CREATE TRIGGER `silinen_gorev` BEFORE DELETE ON `personel_gorev` FOR EACH ROW INSERT INTO `silinen_gorevler`(`p_id`, `gorev_kod`,gorev_gunde_bitti,max_gorev_suresi,tasarruflu_zaman,erken_bitirme_orani,silinme_tarihi) VALUES (old.p_id,old.gorev_kod,old.gorev_gunde_bitti,old.max_gorev_suresi,
                                                                                                    old.tasarruflu_zaman,old.erken_bitirme_orani,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

DROP TABLE IF EXISTS `projeler`;
CREATE TABLE IF NOT EXISTS `projeler` (
  `proje_kod` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `proje_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `proje_tanim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `baslangic` date DEFAULT NULL,
  `bitis` date DEFAULT NULL,
  PRIMARY KEY (`proje_kod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`proje_kod`, `proje_ad`, `proje_tanim`, `baslangic`, `bitis`) VALUES
('TICWEB', 'E ticaret ', 'Müşterimiz XX için e-ticaret sitesi yapımı', '2019-04-23', '2019-07-28'),
('VRPSIKO', 'Psikologlar için sanal gerçeklik gözlüğü', 'Psikologların hastaları üzerinde istediği etkiyi yaratmak için kullanılan VR programlama', '2018-05-20', '2018-10-05'),
('WEBTSRM1', 'web tasarım projesi', 'A müşterisinin talebi üzerine şirketimiz tarafından alınan bu proje ticari web sitesi hazırlama projesidir.', '2019-03-20', '2019-05-28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `proje_gorev`
--

DROP TABLE IF EXISTS `proje_gorev`;
CREATE TABLE IF NOT EXISTS `proje_gorev` (
  `gorev_kod` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `proje_kod` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  KEY `gorev_k` (`gorev_kod`),
  KEY `proje_k` (`proje_kod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `proje_gorev`
--

INSERT INTO `proje_gorev` (`gorev_kod`, `proje_kod`) VALUES
('BACK1', 'WEBTSRM1'),
('WEB1', 'WEBTSRM1'),
('FRONTTIC', 'TICWEB'),
('PHPTIC', 'TICWEB'),
('BASETIC', 'TICWEB'),
('TESTTIC', 'TICWEB'),
('BAKIMTIC', 'TICWEB'),
('GORUS', 'VRPSIKO'),
('ANALIZ', 'VRPSIKO'),
('JAVAVR', 'VRPSIKO'),
('PHPVR', 'VRPSIKO'),
('ENTVR', 'VRPSIKO'),
('TESTVR', 'VRPSIKO'),
('BAKIMVR', 'VRPSIKO');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `silinen_gorevler`
--

DROP TABLE IF EXISTS `silinen_gorevler`;
CREATE TABLE IF NOT EXISTS `silinen_gorevler` (
  `p_id` int(11) NOT NULL,
  `gorev_kod` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `gorev_gunde_bitti` int(11) DEFAULT NULL,
  `max_gorev_suresi` int(100) DEFAULT NULL,
  `tasarruflu_zaman` int(100) DEFAULT NULL,
  `erken_bitirme_orani` float DEFAULT NULL,
  `silinme_tarihi` timestamp NOT NULL,
  `silinen_gorev_id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`silinen_gorev_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `silinen_gorevler`
--

INSERT INTO `silinen_gorevler` (`p_id`, `gorev_kod`, `gorev_gunde_bitti`, `max_gorev_suresi`, `tasarruflu_zaman`, `erken_bitirme_orani`, `silinme_tarihi`, `silinen_gorev_id`) VALUES
(7, 'SEO1', 16, 36, 20, 55.5556, '2019-05-25 21:43:21', 2),
(4, 'FRONTTIC', 10, 22, 12, 54.54, '2019-05-26 20:54:13', 4),
(4, 'WEB1', 47, 17, -30, -176.471, '2019-05-26 21:01:39', 5),
(29, 'BASETIC', 15, 20, 5, 25, '2019-05-27 12:23:50', 6),
(31, 'GORUS', 29, 31, 2, 6.45, '2019-05-27 14:30:38', 7),
(32, 'ANALIZ', 20, 18, -2, -11.11, '2019-05-27 14:32:08', 8),
(26, 'JAVAVR', 26, 30, 3, 10, '2019-05-27 14:32:39', 9),
(5, 'PHPVR', 30, 31, 1, 3.22, '2019-05-27 14:33:09', 10),
(31, 'ENTVR', 7, 12, 5, 41.67, '2019-05-27 14:33:46', 11),
(30, 'TESTVR', 20, 26, 6, 23.07, '2019-05-27 14:34:17', 12),
(7, 'BAKIMVR', 35, 29, -6, -20.69, '2019-05-27 14:34:50', 13),
(26, 'PHPTIC', 33, 37, 4, 10.8108, '2019-05-29 14:49:06', 14);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetkiler`
--

DROP TABLE IF EXISTS `yetkiler`;
CREATE TABLE IF NOT EXISTS `yetkiler` (
  `yetki_id` int(3) NOT NULL AUTO_INCREMENT,
  `yetki_ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL,
  PRIMARY KEY (`yetki_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetkiler`
--

INSERT INTO `yetkiler` (`yetki_id`, `yetki_ad`, `tarih`) VALUES
(1, 'yonetici', '2019-05-02 21:00:00'),
(2, 'personel', '2019-05-02 21:00:00');

-- --------------------------------------------------------

--
-- Görünüm yapısı `gosterim`
--
DROP TABLE IF EXISTS `gosterim`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gosterim`  AS  select `personeller`.`p_ad` AS `p_ad`,`personeller`.`p_soyad` AS `p_soyad`,`personeller`.`p_email` AS `p_email`,`personeller`.`unvan` AS `unvan`,`personeller`.`yetki_id` AS `yetki_id`,`gorevler`.`gorev_ad` AS `gorev_ad`,`gorevler`.`baslama_tarihi` AS `gorev_baslangic`,`gorevler`.`bitis_tarihi` AS `gorev_bitis`,`projeler`.`proje_ad` AS `proje_ad`,`projeler`.`baslangic` AS `proje_baslangic`,`projeler`.`bitis` AS `proje_bitis`,`departmanlar`.`bolum_ad` AS `bolum_ad` from (((((`personeller` join `gorevler`) join `projeler`) join `personel_gorev`) join `proje_gorev`) join `departmanlar`) where ((`personeller`.`p_id` = `personel_gorev`.`p_id`) and (`personel_gorev`.`gorev_kod` = `gorevler`.`gorev_kod`) and (`projeler`.`proje_kod` = `proje_gorev`.`proje_kod`) and (`proje_gorev`.`gorev_kod` = `gorevler`.`gorev_kod`) and (`departmanlar`.`bolum_kod` = `personeller`.`bolum_kod`)) ;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `personeller`
--
ALTER TABLE `personeller`
  ADD CONSTRAINT `bolum` FOREIGN KEY (`bolum_kod`) REFERENCES `departmanlar` (`bolum_kod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yetki` FOREIGN KEY (`yetki_id`) REFERENCES `yetkiler` (`yetki_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `personel_gorev`
--
ALTER TABLE `personel_gorev`
  ADD CONSTRAINT `gorev` FOREIGN KEY (`gorev_kod`) REFERENCES `gorevler` (`gorev_kod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personel` FOREIGN KEY (`p_id`) REFERENCES `personeller` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `proje_gorev`
--
ALTER TABLE `proje_gorev`
  ADD CONSTRAINT `gorev_k` FOREIGN KEY (`gorev_kod`) REFERENCES `gorevler` (`gorev_kod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proje_k` FOREIGN KEY (`proje_kod`) REFERENCES `projeler` (`proje_kod`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
