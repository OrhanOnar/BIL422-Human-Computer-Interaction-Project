-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                10.2.15-MariaDB - mariadb.org binary distribution
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               9.5.0.5278
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- etuget için veritabanı yapısı dökülüyor
CREATE DATABASE IF NOT EXISTS `etuget` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `etuget`;

-- tablo yapısı dökülüyor etuget.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `admin_password` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `admin_desc` text COLLATE utf8_bin NOT NULL DEFAULT '0',
  `admin_mail` text COLLATE utf8_bin NOT NULL DEFAULT '0',
  `admin_real` text COLLATE utf8_bin NOT NULL DEFAULT '0',
  `admin_pls` text COLLATE utf8_bin NOT NULL DEFAULT '0',
  `admin_status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- etuget.admin: ~3 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_desc`, `admin_mail`, `admin_real`, `admin_pls`, `admin_status`) VALUES
	(1, 'user1', '123', 'Tobb Etü CS Student at some point', 'u1@etumail.com', 'Libby Mathis', 'C++,Java', 1),
	(2, 'user2', '234', 'Tobb Etü CS student at different point', 'u2@etumail.com', 'Leona Shepherd', 'C++,PHP', 1),
	(3, 'user3', '123', 'Tobb Etü CS student I guess..', 'u3@etumail.com', 'Leonidas the Spartan', 'HTML,CSS', 1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- tablo yapısı dökülüyor etuget.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(50) COLLATE utf8_bin NOT NULL,
  `ip_address` varchar(50) COLLATE utf8_bin NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- etuget.ci_sessions: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- tablo yapısı dökülüyor etuget.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `name` text COLLATE utf8_bin NOT NULL DEFAULT '0',
  `date` text COLLATE utf8_bin NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_bin NOT NULL DEFAULT '0',
  `closed` text COLLATE utf8_bin NOT NULL DEFAULT '0',
  `attend` text COLLATE utf8_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- etuget.projects: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`project_id`, `user_id`, `name`, `date`, `description`, `closed`, `attend`) VALUES
	(1, 1, 'DenemeProject1', '1/31/2019--2/15/2019', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0', '2'),
	(2, 3, 'UserProject3', '3/20/2019---', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0', '2');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
