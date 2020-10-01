-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.20 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ecom.t_invoice
CREATE TABLE IF NOT EXISTS `t_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alamat` text,
  `jumlah` int(11) DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ecom.t_invoice: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_invoice` DISABLE KEYS */;
INSERT INTO `t_invoice` (`id`, `name`, `alamat`, `jumlah`, `produk_id`) VALUES
	(1, 'ahmad', 'jalan merdeka', 10, 1);
/*!40000 ALTER TABLE `t_invoice` ENABLE KEYS */;


-- Dumping structure for table ecom.t_produk
CREATE TABLE IF NOT EXISTS `t_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table ecom.t_produk: ~4 rows (approximately)
/*!40000 ALTER TABLE `t_produk` DISABLE KEYS */;
INSERT INTO `t_produk` (`id`, `name`, `description`, `price`, `image`) VALUES
	(1, 'Majoo Pro', 'Ini Deskripsi', 2750000, './assets/produk/10/01/standard_repo4.png'),
	(2, 'Majoo Advance', 'Ini Deskripsi', 2750000, './assets/produk/10/01/paket-advance.png'),
	(3, 'Mojoo Lifestyle', 'ini deskripsi', 2750000, './assets/produk/10/01/paket-lifestyle.png'),
	(4, 'Majoo Desktop', 'Ini Deskripsi', 2750000, './assets/produk/10/01/paket-desktop.png');
/*!40000 ALTER TABLE `t_produk` ENABLE KEYS */;


-- Dumping structure for table ecom.t_user
CREATE TABLE IF NOT EXISTS `t_user` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ecom.t_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` (`id`, `username`, `password`, `nama`, `role`) VALUES
	(1, 'admin', 'admin', 'admin', '01');
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
