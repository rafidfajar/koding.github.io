/*
SQLyog Community v13.1.1 (32 bit)
MySQL - 10.4.21-MariaDB : Database - latihan_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`latihan_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `latihan_db`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `barang_id` varchar(4) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`barang_id`,`nama_barang`,`harga`,`qty`) values 
('B001','kiting',545787907784787,1000000000);

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `customer_id` varchar(4) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(11) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `customer` */

insert  into `customer`(`customer_id`,`nama_customer`,`alamat`,`telpon`) values 
('A001','bang toip','kalibata','08138252');

/*Table structure for table `tb_gambar` */

DROP TABLE IF EXISTS `tb_gambar`;

CREATE TABLE `tb_gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(100) DEFAULT NULL,
  `nama_file` varchar(100) DEFAULT NULL,
  `ukuran_file` double DEFAULT NULL,
  `tipe_file` varchar(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_gambar` */

insert  into `tb_gambar`(`id`,`deskripsi`,`nama_file`,`ukuran_file`,`tipe_file`) values 
(1,'rahut kuu','tot.jpg',44.84,'image/jpeg'),
(2,'gambar','3.jpg',2.63,'image/jpeg'),
(3,'gambar','31.jpg',2.63,'image/jpeg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
