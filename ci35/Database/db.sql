/*
SQLyog Community v13.1.1 (32 bit)
MySQL - 10.4.21-MariaDB : Database - latihan_dbb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`latihan_dbb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `latihan_dbb`;

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
('B001','sepatuu',900000,2),
('B002','tas',50000,1),
('B003','jaket',100000,3),
('B004','celana',70000,3);

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
('A001','monkey','kalibata','08138252'),
('A002','tigor','medan','08577971083');

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

/*Table structure for table `tbl_transaksi` */

DROP TABLE IF EXISTS `tbl_transaksi`;

CREATE TABLE `tbl_transaksi` (
  `No_faktur` varchar(13) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Kode_customer` varchar(10) DEFAULT NULL,
  `Nama_customer` varchar(50) DEFAULT NULL,
  `Kode_barang` varchar(10) DEFAULT NULL,
  `Nama_barang` varchar(50) DEFAULT NULL,
  `Harga` double DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `Total_bayar` double DEFAULT NULL,
  `Pajak` double DEFAULT NULL,
  `Grand_total` double DEFAULT NULL,
  PRIMARY KEY (`No_faktur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_transaksi` */

insert  into `tbl_transaksi`(`No_faktur`,`Tanggal`,`Kode_customer`,`Nama_customer`,`Kode_barang`,`Nama_barang`,`Harga`,`Qty`,`Total_bayar`,`Pajak`,`Grand_total`) values 
('FK0001','2022-12-02 10:25:20','A001','monkey','B001','sepatuu',900000,1,900000,99000,999000),
('FK0002','2022-12-02 10:35:17','A001','monkey','B002','tas',50000,2,100000,11000,111000),
('FK0003','2022-12-02 10:35:37','A001','monkey','B003','jaket',100000,3,300000,33000,333000),
('FK0004','2022-12-02 10:51:32','A001','monkey','B002','tas',50000,4,200000,22000,222000),
('FK0005','2022-12-02 10:52:53','A002','tigor','B004','celana',70000,4,280000,30800,310800),
('FK0006','2022-12-09 10:32:41','A001','monkey','B004','celana',70000,3,210000,23100,233100),
('FK0007','2022-12-16 09:55:46','A001','monkey','B002','tas',50000,2,100000,11000,111000);

/*Table structure for table `user_login` */

DROP TABLE IF EXISTS `user_login`;

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `log_on` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_login` */

insert  into `user_login`(`id`,`user_name`,`user_email`,`user_password`,`status`,`log_on`) values 
(1,'admin','admin@gmail.com','admin','admin','2022-12-23 10:15:39'),
(2,'kasir','kasir@gmail.com','kasir','kasir','2022-12-23 10:15:39'),
(3,'rafid','rafid@gmail.com','rafid','admin','2022-12-23 10:15:39'),
(4,'guna','guna@gmail.com','guna','admin','2022-12-23 10:17:15');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
