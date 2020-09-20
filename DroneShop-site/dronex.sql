-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2018 at 04:42 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dronex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_admin` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `password_admin` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `user_admin`, `password_admin`) VALUES
(2, 'nimda', '49ae41d28e4064ad9f12862d6d8096def63acc1c');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

DROP TABLE IF EXISTS `deliveries`;
CREATE TABLE IF NOT EXISTS `deliveries` (
  `id_d` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `data` text CHARACTER SET latin1,
  PRIMARY KEY (`id_d`),
  UNIQUE KEY `id_d` (`id_d`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id_d`, `id_user`, `id_prod`, `data`) VALUES
(86, 18, 1, '03/06/2018/01:14:am'),
(74, 18, 1, '28/05/2018/11:45:pm'),
(73, 18, 1, '28/05/2018/11:45:pm'),
(71, 18, 4, '28/05/2018/11:42:pm'),
(44, 19, 1, '27/05/2018/06:34:pm');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `specs` text CHARACTER SET latin1 NOT NULL,
  `images` text CHARACTER SET latin1 NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code`, `title`, `description`, `specs`, `images`, `type`, `stock`, `price`) VALUES
(1, 'DJI Spark Fly More Combo Verde ', 'DJI Spark este o mini drona care dispune de tehnologiile marca DJI ce permite sa captati momentele oricand va simtiti inspirati. Cu optiune de control inteligent, gimbal mecanic si o camera cu o calitate excelenta, Spark va ajuta sa va depasiti limitele creative. Pachetul Fly More Combo include telecomanda, un hub de incarcare, o pereche de elice, protectii de elice si un acumulator de rezerva. ', '                <h1>Specificatii tehnice</h1><hr>\r\n                <strong>Gimbal</strong><br>\r\n                <ul>\r\n                  <li>Pitch: -85 : 0 (grade)</li>\r\n                  <li>Stabilizare: pe 2 axe (pitch, roll)</li>\r\n                  <li> Sesizare obstacole: 0.2 - 5 m</li>\r\n                </ul><br><br>\r\n                <strong>Camera</strong><br>\r\n                <ul>\r\n                  <li>Senzor: 1/2.3\" CMOS</li>\r\n                  <li>Pixeli efectivi: 12 MP</li>\r\n                  <li>Camp vizual: 81.9 grade</li>\r\n                  <li>Distanta focala: 25 mm (echivalent 35 mm)</li>\r\n                  <li>Diafragma: f/2.6</li>\r\n                  <li>Focalizare: 2 m - infinit</li>\r\n                  <li>ISO: Video - 100-3200, Foto: 100-1600</li>\r\n                  <li>Timp de expunere: 2-1/8000 s</li>\r\n                  <li>Rezolutie foto: 3968x2976 px</li>\r\n                  <li>Moduri foto: Single Shot, Burst Shooting: 3 cadre, Auto Exposure Bracketing (AEB): 3 cadre @ 0.7 EV bias, Interval: 2/3/5/7/10/15/20/30/60 s</li>\r\n                  <li>Rezolutie video: FHD: 1920x1080 px 30p</li>\r\n                  <li>Bitrate max.: 24 Mbps</li>\r\n                  <li>Formate suportate: FAT32 (max. 32 GB)</li>\r\n                  <li>Format foto: JPEG</li>\r\n                  <li>Format video: MP4 (MPEG-4 AVC/H.264)</li>\r\n                </ul><br><br>\r\n                <strong>Aeronava</strong><br>\r\n                <ul>\r\n                  <li>Greutate: 300 g</li>\r\n                  <li>Dimensiuni: 143x143x55 mm</li>\r\n                  <li>Viteza maxima de ascensiune: 3 m/s (Sport Mode, fara vant)</li>\r\n                  <li>Viteza maxima de coborare: 3 m/s (Auto Landing Mode)</li>\r\n                  <li>Viteza maxima: 50 kph (Sport Mode, fara vant)</li>\r\n                  <li>Timp de zbor maxim: 16 min.</li>\r\n                  <li>Temperatura de operare: 0 - 40 (grade Celsius) </li>\r\n                  <li>Sistem pozitionare sateliti: GPS/GLONASS</li>\r\n                  <li>Frecvente de operare: 2.400 - 2.483 GHz; 5.725 - 5.825 GHz</li>\r\n                </ul><br><br>\r\n                  <strong>Sistem de pozitionare vizuala</strong><br>\r\n                  <ul>\r\n                    <li>Viteza: 22.4 mph (36 kph) @ 2 m inaltime</li>\r\n                    <li>Plaja altituine: 0 - 8 m</li>\r\n                    <li>Distanta de operare: 0 - 30 m</li>\r\n                    <li>Mediu de operare: lux&gt;15</li>\r\n                  </ul>\r\n', '/pWEB/photos/drone2.jpg,\r\n/pWEB/photos/spark/spark14.jpg,\r\n/pWEB/photos/spark/spark13.png,\r\n/pWEB/photos/spark/spark12.png,\r\n/pWEB/photos/spark/spark11.png,\r\n/pWEB/photos/spark/spark15.png', 'Spark', 19, 3100),
(2, 'Inpsire 2 Pro camera 4K, obiectiv si telecomanda', 'Inspire 2 PRO reprezinta solutia completa pentru filmari aeriene profesionale. Camera este proiectata pe sistemul Micro 4/3 si\r\nfilmeaza 4K la 30fps cu bitratemediu de 1.7 Gbps (maxim 2.4Gbps) si este prevazuta cu obiectiv interschimbabil DJI MFT 15mm f/1.7 ASPH.', '<h1>Specificatii tehnice</h1><hr>\r\n\r\n                <p>Drona Inspire 2 reprezinta solutia completa pentru filmari aeriene profesionale. Camera este proiectata pe sistemul Micro 4/3 si filmeaza 4K la 30fps cu bitratemediu de 1.7 Gbps (maxim 2.4Gbps) si este prevazuta cu obiectiv interschimbabil DJI MFT 15mm f/1.7 ASPH.</p>\r\n                <p>Unghiurile de filmare sunt controlabile de la distanta prin intermediul capului gimbal pe 3 axe DJI Zenmuse X5.</p>\r\n                <br> <br>\r\n                <ul>\r\n                  <li>Gimbal pe 3 axe</li>\r\n                  <li>Senzor CMOS Micro 4/3</li>\r\n                  <li>Filmare 4K 30 fps</li>\r\n                  <li>Rezolutie foto 16Mpx</li>\r\n                  <li>Montura Micro 4/3</li>\r\n                  <li>Dynamic range: 12.8 stopuri</li>\r\n                  <li>ISO: 100-25600</li>\r\n                  <li>Bitrate mediu: 1.7 Gbps (max. 2.4Gbps)</li>\r\n                  <li>Obiectiv DJI MFT 15mm f/1.7 ASPH</li>\r\n                </ul>', '/pWEB/photos/drone1.jpg,\r\n/pWEB/photos/inspire/inspire11.png,\r\n/pWEB/photos/inspire/inspire12.png,\r\n/pWEB/photos/inspire/inspire13.png,\r\n/pWEB/photos/inspire/inspire14.png,\r\n/pWEB/photos/inspire/inspire15.png', 'Inspire 2', 7, 18800),
(3, 'Mavic PRO', '                    DJI Mavic reprezinta cea mai noua tehnologie inglobata intr-o drona usoara si foarte usor de folosit. Dimensiunea mica ascunde un grad\r\n                    de complexitate nemaintalnit la o drona lansata de la DJI. Sistemul de calcul este echipat cu un procesor cu 24 de nuclee, sistem de transmisie\r\n                    de pana la 7km, 5 senzori si o camera 4k stabilizata.', '<h1>Specificatii tehnice</h1><hr>\r\n\r\n                <strong>Camera</strong><br>\r\n                <ul>\r\n                  <li>Senzor: 1/2.3\" (CMOS), 12.7 MP</li>\r\n                  <li>Obiectiv: FOV 78.8 grade 28 mm (echivalent 35mm) f/2.2, Focalizare de la 0.5 m la infinit</li>\r\n                  <li>ISO: 100-3200 (video), 100-1600 (foto)</li>\r\n                  <li>Viteza obturator: 8s -1/8000s</li>\r\n                  <li>Rezolutie maxima: 4000x3000</li>\r\n                  <li>Moduri foto: Single shot, Burst shooting: 3/5/7 cadre, Auto Exposure Bracketing (AEB), Interval</li>\r\n                  <li>Moduri video: C4K: 4096x2160 24p, 4K: 3840x2160 24/25/30p, 2.7K: 2704x1520 24/25/30p, FHD: 1920x1080 24/25/30/48/50/60/96p, HD: 1280x720 24/25/30/48/50/60/120</li>\r\n                  <li>Bitrate maxim: 60 Mbps</li>\r\n                  <li>Format foto: JPEG, DNG</li>\r\n                  <li>Format video: MP4, MOV (MPEG-4 AVC/H.264)</li>\r\n                  <li>Stocare: card Micro SD, 64 GB max., Class 10/ UHS-1</li>\r\n                </ul><br><br>\r\n                <strong>Gimbal</strong><br>\r\n                <ul>\r\n                  <li>Arie de control: Pitch: -90 : +30 (grade), Roll: 0 sau 90 de grade (pe orizontala si verticala)</li>\r\n                  <li>Stabilizare: pe 3 axe</li>\r\n                </ul><br><br>\r\n                <strong>Drona</strong><br>\r\n                <ul>\r\n                  <li>Greutate: aprox. 734g</li>\r\n                  <li>Viteza maxima ascensiune: 5 m/s in modul Sport</li>\r\n                  <li>Viteza maxima coborare: 3 m/s</li>\r\n                  <li>Viteza maxima: 65 kph in modul Sport (fara vant)</li>\r\n                  <li>Autonomie: max. 27 min (in conditii fara vant la 25 kph)</li>\r\n                  <li>Temperatura operare: 0 - 40 grade Celsius</li>\r\n                </ul><br><br>\r\n                <strong>Telecomanda</strong><br>\r\n                <ul>\r\n                  <li>Frecvente operare: 2.4 GHz - 2.483 GHz</li>\r\n                  <li>Arie transmisie: max. 7 km</li>\r\n                  <li>Acumulator: 2970mAh</li>\r\n                  <li>Voltaj: 950mA @ 3.7V</li>\r\n                </ul><br><br>\r\n                <strong>Acumulator Intelligent Flight</strong><br>\r\n                <ul>\r\n                  <li>Capacitate: 3830 mAh</li>\r\n                  <li>Voltaj: 11.4V</li>\r\n                  <li>Tip: LiPo 3S</li>\r\n                  <li>Capacitate: LiPo 3S</li>\r\n                  <li>Greutate: aprox. 240 g</li>\r\n                  <li>Temperatura operare: 5 - 40 grade Celsius</li>\r\n                </ul>', '/pWEB/photos/drone3.jpg,\r\n/pWEB/photos/mavic/mavic11.png,\r\n/pWEB/photos/mavic/mavic12.png,\r\n/pWEB/photos/mavic/mavic13.png,\r\n/pWEB/photos/mavic/mavic14.png,\r\n/pWEB/photos/mavic/mavic15.png', 'Mavic', 84, 4300),
(4, 'Phantom 4 PRO', '                    Phantom 4 Pro este echipata cu o camera cu senzor 1-inch de 20 de megapixeli capabila sa inregistreze vieo la rezolutie 4K/60fps si fotografii\r\n                    in modul Burst cu 14fps. Sistemul FlightAutonomy adauga doi senzori de vedere in spate si sisteme infra-rosu pentru un total de detectare a obstacolelor\r\n                     pe 5 directii si evitare a obstacolelor pe 5 directii. ', '               <h1>Specificatii tehnice</h1><hr>\r\n\r\n                <strong>Vision Positioning</strong><br>\r\n                <ul>\r\n                  <li>Raza velocitate:pana la 31 mph (50 km/h) la 6.6\\\' (2 m) </li>\r\n                  <li>Raza altitudine: 0 to 10 </li>\r\n                  <li>Raza operare: 0 to 10 </li>\r\n                  <li>Raza detectare obstacole: 0.7 to 30 m</li>\r\n                  <li>Unghi cuprindere(FOV): orizontal +/-60 grade, vertical +/-54 grade</li>\r\n                  <li>Frecventa detectare: 10 Hz</li>\r\n                  <li>Mediu operare: suprafete cu texturi clare si iluminare adecvata(> 15 lux)</li>\r\n                </ul><br><br>\r\n                <strong>TOF Sensing System</strong><br>\r\n                <ul>\r\n                  <li>Raza detectare obstacole: 0.2 to 7 m</li>\r\n                  <li>Unghi cuprindere:orizontal: +/-35 grade, vertical: +/-10 grade</li>\r\n                  <li>Frecventa detectare: 10 Hz</li>\r\n                  <li>Mediu operare:  Suprafete cu material de reflexie difuza si reflectivitate > 8% (zid, copaci,oameni  etc.)</li>\r\n                </ul><br><br>\r\n                <strong>Telecomanda</strong><br>\r\n                <ul>\r\n                  <li>Frecventa:2.400 to 2.483 GHz </li>\r\n                  <li>Distanta comunicare: 7 km</li>\r\n                  <li>Curent operare:2.4 GHz: 23 dBm</li>\r\n                  <li>Consum putere: 1.2 A at 7.4 V</li>\r\n                  <li>Tip baterie: incorporat</li>\r\n                  <li>Chimie: Lithium-ion polymer (LiPo)</li>\r\n                  <li>Capacitate: 6000 mAh</li>\r\n                  <li>Configuratie: 2S</li>\r\n                  <li>Compatibiliatte suport telefon: tablete si smatphone-uri</li>\r\n                  <li>Temperatura operare: 0 to 40 grade Celsius</li>\r\n                </ul><br><br>\r\n                <strong>Camera</strong><br>\r\n                <ul>\r\n                  <li>Senzor: 1\" CMOS</li>\r\n                  <li>Pixeli efectivi: 20 milion</li>\r\n                  <li>Obiectiv:FOV (Field of View) 84 grade</li>\r\n                  <li>Distanta focala: 8.8 mm / 24 mm (35 mm format echivalent)</li>\r\n                  <li>Diafragma: f/2.8 - f/11</li>\r\n                  <li>Distanta focus(Auto Focus): 3.3\\\' (1 m) la infinit</li>\r\n                  <li>Still Photo Mode: 4:3 aspect ratio 4864 x 3648</li>\r\n                  <li>Rezolutie video: 1920 x 1080 at 48/50/60p</li>\r\n                  <li>ISO RangeVideo: 100 to 3200 (Auto); 100 to 6400 (Manual)</li>\r\n                  <li>Photo: 100 to 3200 (Auto); 100 to 12800 (Manual)</li>\r\n                  <li>Shutter SpeedMechanical:8 to 1/2000 second</li>\r\n                  <li>Electronic Shutter:8 to 1/8000 second</li>\r\n                  <li>Photo ModesBurst Shooting: 3/5/7/10/14 frames</li>\r\n                  <li>Auto Exposure Bracketing (AEB): 3/5 bracketed frames at 0.7 EV Bias</li>\r\n                  <li>Interval: 2/3/5/7/10/15/30/60 second</li>\r\n                  <li>Format foto:JPEG/DNG (raw)/JPEG siraw</li>\r\n                  <li>Card: microSDHC/SDXC card pana la 128 GB </li>\r\n                  <li>Format: FAT32 / exFAT </li>\r\n                  <li>Sisteme compatibile: FAT32 (up to 32 GB); exFAT (over 32 GB) </li>\r\n                  <li>Temperatura operare: 0 to 40 grade Celsius</li>\r\n                </ul><br><br>\r\n                <strong>Gimbal</strong><br>\r\n                <ul>\r\n                  <li>Numar axe: 3 (pitch, roll, yaw)</li>\r\n                  <li>Raza control: Pitch: -90 grade to +30 grade</li>\r\n                  <li>Viteza: Pitch: 90 grade/second</li>\r\n                  <li>Acuratete control: +/-0.03 grade</li>\r\n                </ul><br><br>\r\n                <strong>Acumulator</strong><br>\r\n                <ul>\r\n                  <li>Chimie: Lithium-ion (LiPo)</li>\r\n                  <li>Capacitate: 5870 mAh / 89.2 Wh</li>\r\n                  <li>Configuratie: 4 S</li>\r\n                  <li>Voltaj: 15.2 V</li>\r\n                  <li>Greutate: 468 g</li>\r\n                  <li>Incarcator: voltaj 17.4 V, putere 100 W</li>\r\n                  <li>Temperatura incarcare:-10 to 40 grade Celsius</li>\r\n                  <li>Putere maxima: 100 W  </li>\r\n                </ul>', '/pWEB/photos/drone4.jpg,\r\n/pWEB/photos/phantom/phantom11.png,\r\n/pWEB/photos/phantom/phantom12.png,\r\n/pWEB/photos/phantom/phantom14.png,\r\n/pWEB/photos/phantom/phantom15.png,\r\n/pWEB/photos/phantom/phantom13.jpg', 'Phantom 4', 27, 7999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `last_name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `address` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `city` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `zip` int(10) DEFAULT NULL,
  `zone_id` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `country` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `client_id` (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`client_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `zip`, `zone_id`, `country`, `password`) VALUES
(18, 'klaus', 'klaus', 'www.klaus@yahoo.com', 78569344, 'Str. Klaus', 'klaus', 69, 'Bucuresti', '175', 'd568b8cd7ef64877891488bb3328757d2d21c847'),
(19, 'Andrei', 'Oana', 'www.trueandrei@yahoo.com', 752028677, 'Str. Hermann Oberth', 'Sibiu', 53535, 'Neamt', '175', '42e54f0ad48d66f10abb041e160e455116c2c710');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
