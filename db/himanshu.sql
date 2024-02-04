
CREATE DATABASE IF NOT EXISTS `himanshu`;
USE `himanshu`;

-- Dumping structure for table devdarshan.booking_details
CREATE TABLE IF NOT EXISTS `booking_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `package` varchar(100) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `message` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Dumping structure for table himanshu.subscribe
CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;


-- Dumping structure for table himanshu.user_details
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_browser` varchar(50) DEFAULT NULL,
  `user_ip` varchar(50) DEFAULT NULL,
  `user_device` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


-- Dumping data for table himanshu.user_details: ~0 rows (approximately)
INSERT INTO `user_details` (`id`, `user_browser`, `user_ip`, `user_device`) VALUES
	(1, 'Chrome', '::1', 'pc');
