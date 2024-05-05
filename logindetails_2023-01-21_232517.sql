/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS billing;
CREATE TABLE `billing` (
  `name` varchar(50) NOT NULL,
  `email` varchar(15) NOT NULL,
  `Address` int(11) NOT NULL,
  `TEL_NO` int(10) NOT NULL,
  `Card_no` int(10) NOT NULL,
  `CreditCard_number` int(10) NOT NULL,
  `Exp_Month` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS login;
CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS process;
CREATE TABLE `process` (
  `name` varchar(50) NOT NULL,
  `email` varchar(15) NOT NULL,
  `tel_no` int(10) NOT NULL,
  `car_ordered` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS registration;
CREATE TABLE `registration` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;