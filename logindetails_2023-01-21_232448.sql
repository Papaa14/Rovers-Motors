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

INSERT INTO billing(name,email,Address,TEL_NO,Card_no,CreditCard_number,Exp_Month) VALUES('CALVIN MANGI','calvinmangi627@',0,114026601,0,2147483647,'0000-00-00');

INSERT INTO login(username,password) VALUES('ana24','1456'),('parlemo627','12345'),('parlemo627','1452'),('CIM/00011/021','2323'),('1234','EAR/0083');

INSERT INTO process(name,email,tel_no,car_ordered) VALUES('CALVIN MANGI','calvinmangi627@',114026601,X'424d57'),('CALVIN MANGI','calvinmangi627@',114026601,X'6669656c646572'),('CALVIN MANGI','calvinmangi627@',114026601,X'6669656c646572'),('CALVIN MANGI','calvinmangi627@',114026601,X'6d65726365646573'),('CALVIN MANGI','calvinmangi627@',114026601,X'6d65726365646573203233'),('CALVIN MANGI','calvinmangi62@g',114026601,X'76677479'),('CALVIN MANGI','calvinmangi62@g',114026601,X'76677479');
INSERT INTO registration(name,email,username,password) VALUES('CALVIN MANGI','calvinmangi627@gmail.com','CIM/00011/021','12345678'),('CALVIN MANGI','calvinmangi627@gmail.com','parlemo627','1456'),('gt','calvinmangi62@gmail.com','EAR/00832/021','1234'),('ABDI','ABDI627@gmail.com','ABDI1','123');