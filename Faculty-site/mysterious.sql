-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 03 Ian 2020 la 22:59
-- Versiune server: 5.7.21
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
-- Database: `mysterious`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_admin` varchar(30) DEFAULT NULL,
  `password_admin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `admins`
--

INSERT INTO `admins` (`admin_id`, `user_admin`, `password_admin`) VALUES
(1, 'nimda@nimda', '49ae41d28e4064ad9f12862d6d8096def63acc1c');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `assigned_courses`
--

DROP TABLE IF EXISTS `assigned_courses`;
CREATE TABLE IF NOT EXISTS `assigned_courses` (
  `assigned_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `course_code` int(11) DEFAULT NULL,
  `data` text,
  `grade` int(11) DEFAULT NULL,
  PRIMARY KEY (`assigned_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `assigned_courses`
--

INSERT INTO `assigned_courses` (`assigned_id`, `user_id`, `course_code`, `data`, `grade`) VALUES
(1, 2, 1, '03/01/2020/02:45:pm', 7),
(18, 2, 4, '03/01/2020/11:17:pm', 4);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(128) DEFAULT NULL,
  `description` text,
  `participation` int(255) DEFAULT NULL,
  `homework` text,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `courses`
--

INSERT INTO `courses` (`code`, `subject`, `description`, `participation`, `homework`) VALUES
(1, 'Artificial Intelligence', 'Artificial intelligence (AI) is the ability of a computer program or a machine to think and learn. It is also a field of study which tries to make computers \"smart\". They work on their own without being encoded with commands.John McCarthy came up with the name \"artificial intelligence\" in 1955.\r\n\r\nIn general use, the term \"artificial intelligence\" means a programme which mimics human cognition. At least some of the things we associate with other minds, such as learning and problem solving can be done by computers, though not in the same way as we do.[1] Andreas Kaplan and Michael Haenlein define AI as a system’s ability to correctly interpret external data, to learn from such data, and to use those learnings to achieve specific goals and tasks through flexible adaptation.[2]\r\n\r\nAn ideal (perfect) intelligent machine is a flexible agent which perceives its environment and takes actions to maximize its chance of success at some goal or objective.[3] As machines become increasingly capable, mental faculties once thought to require intelligence are removed from the definition. For example, optical character recognition is no longer perceived as an exemplar of \"artificial intelligence\": it is just a routine technology.', 1, '<b>Pentru saptamana 12:</b><br>\r\nDe citit din cartea \"Artificial Intelligence A Modern Approach\" Third Edition de Sturt Russel & Peter Norvig capitolele: <br>\r\n	3 Solving Problems by Searching<br>\r\n	3.1 Problem Solving Agents<br>\r\n	3.2 Example Problems<br>\r\n	3.3 Searching for solutions<br>\r\n	3.4 Uninformed Search Strategies<br>\r\n	3.5 INFORMED (HEURISTIC) SEARCH STRATEGIES<br>\r\n	3.6 HEURISTIC FUNCTIONS<br>'),
(2, 'Data Mining', 'Data mining is a term from computer science. Sometimes it is also called knowledge discovery in databases (KDD). Data mining is about finding new information in a lot of data. The information obtained from data mining is hopefully both new and useful.\r\n\r\nIn many cases, data is stored so it can be used later. The data is saved with a goal. For example, a store wants to save what has been bought. They want to do this to know how much they should buy themselves, to have enough to sell later. Saving this information, makes a lot of data. The data is usually saved in a database. The reason why data is saved is called the first use.\r\n\r\nLater, the same data can also be used to get other information that was not needed for the first use. The store might want to know now what kind of things people buy together when they buy at the store. (Many people who buy pasta also buy mushrooms for example.) That kind of information is in the data, and is useful, but was not the reason why the data was saved. This information is new and can be useful. It is a second use for the same data.\r\n\r\nFinding new information that can also be useful from data, is called data mining.', 0, 'pg90 ex1,2,3,4,5,6,7'),
(3, 'Machine learning', 'Machine learning gives computers the ability to learn without being explicitly programmed (Arthur Samuel, 1959).[1][2] It is a subfield of computer science.\r\n\r\nThe idea came from work in artificial intelligence.[3] Machine learning explores the study and construction of algorithms which can learn and make predictions on data.[4] Such algorithms follow programmed instructions, but can also make predictions or decisions based on data.[5]:2 They build a model from sample inputs.\r\n\r\nMachine learning is done where designing and programming explicit algorithms cannot be done. Examples include spam filtering, detection of network intruders or malicious insiders working towards a data', 0, 'pg224 ex1,2,3 <br>\r\npg255 ex5,6,7 <br>\r\npg330 ex10,11,12<br>'),
(4, 'Web', 'Web development is the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network).[1] Web development can range from developing a simple single static page of plain text to complex web-based internet applications (web apps), electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development.\r\n\r\nAmong web professionals, \"web development\" usually refers to the main non-design aspects of building web sites: writing markup and coding.[2] Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills.', 1, 'De citit cursurile 9,10,11, Andrei test ;)');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `zone_id` varchar(30) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`client_id`, `first_name`, `last_name`, `email`, `phone`, `city`, `zone_id`, `password`) VALUES
(1, 'andreas', 'andreiescu', 'euandreas@yahoo.com', 752023688, 'Sibiu', 'Sibiu', 'bd2211cd787fb741618cebc9c5532ff0888eced9'),
(2, 'io', 'io', 'io@io.com', 750101010, 'IO', 'Ilfov', 'd203c5c283e48bf6e4f482b11ab563710e6ebfb9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
