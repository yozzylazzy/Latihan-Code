-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pegawai
DROP DATABASE IF EXISTS `pegawai`;
CREATE DATABASE IF NOT EXISTS `pegawai` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pegawai`;

-- Dumping structure for table pegawai.pegawai
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `NIP` char(5) COLLATE utf8mb4_general_ci NOT NULL,
  `Nama` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Golongan` int NOT NULL,
  `Divisi` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Alamat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pegawai.pegawai: ~4 rows (approximately)
DELETE FROM `pegawai`;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` (`NIP`, `Nama`, `Golongan`, `Divisi`, `Alamat`) VALUES
	('22001', 'Tamara Santoso', 1, 'Produksi', 'Jl. Ganesha 96'),
	('22002', 'Gunawan Rusmanto', 2, 'Marketing', 'Jl. Merdeka 33'),
	('22003', 'Rudi Jayadipura', 3, 'Produksi', 'Jl. Tamansari 77'),
	('22004', 'Wawan Kurniadi', 3, 'Personalia', 'Jl. Ternate 55');
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
