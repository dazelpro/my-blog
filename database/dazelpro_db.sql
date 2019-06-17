/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 5.6.21 : Database - dazelpro_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dazelpro_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dazelpro_db`;

/*Table structure for table `t_article` */

DROP TABLE IF EXISTS `t_article`;

CREATE TABLE `t_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(250) DEFAULT NULL,
  `article_content` longtext,
  `article_image` varchar(100) DEFAULT NULL,
  `article_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `article_last_update` datetime DEFAULT NULL,
  `article_category_id` int(11) DEFAULT NULL,
  `article_tags` varchar(250) DEFAULT NULL,
  `article_slug` varchar(250) DEFAULT NULL,
  `article_status` int(11) DEFAULT '0',
  `article_views` int(11) DEFAULT '0',
  `article_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `t_article` */

insert  into `t_article`(`article_id`,`article_title`,`article_content`,`article_image`,`article_date`,`article_last_update`,`article_category_id`,`article_tags`,`article_slug`,`article_status`,`article_views`,`article_user_id`) values 
(12,'Cara Membangun Bisini Online & Meraih Keuntungan yang Besar','<p>Berikut Cara<sup>2</sup> nya:</p>\r\n','859e518ba184859c09131ef390669912.jpg','2019-06-03 16:01:22',NULL,8,'Tutorials','cara-membangun-bisini-online-meraih-keuntungan-yang-besar',0,0,2),
(13,'Tutorial Membuat Data Table Sederhana dengan Bootstrap Responsive','<p>Testing</p>\r\n','ce485f5f615b45062d19cea82edc3b11.jpg','2019-06-03 16:02:14',NULL,8,'Tutorials,HTML','tutorial-membuat-data-table-sederhana-dengan-bootstrap-responsive',0,0,2),
(14,'Cara Cermati Perilaku Hewan Peliharaan Dirumah','<p>Coba</p>\r\n','cfaccd5906f74050d8d02a2a0997f60d.jpg','2019-06-03 22:28:14',NULL,8,'Tutorials','cara-cermati-perilaku-hewan-peliharaan-dirumah',0,0,2),
(15,'Tutorial PHP dan MySQL Lengkap Gratiiiissss!!!!','','bbb52c1b897bd227a1de65b158e636a3.jpg','2019-06-03 22:29:04',NULL,9,'Bahasa Pemograman','tutorial-php-dan-mysql-lengkap-gratiiiissss-',0,0,2),
(16,'Cara Membuat Sublime Text Autocorrect Pada Codeigniter [Snippet Code]','<p>Adalah sebuah template kode program yang bisa langsung dapat kita gunakan dalam program. Template tersebut berisikan dengan sekelompok barisan kode program yang berfungsi untuk menjalankan perintah tertentu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dengan adanya Snippet Code, programmer akan merasa terbantu karena pengkodingan akan lebih cepat dan efisien. Penasaran bagaimana caranya? Simak tutorial berikut ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Cara Menginstal Plugin Snippet Codeigniter pada Sublime Text</strong></p>\r\n\r\n<ul>\r\n	<li>Hal pertama tentunya kalian sudah menginstal&nbsp;<a href=\"https://www.sublimetext.com/3\" target=\"_blank\">Sublime Text</a>&nbsp;pada komputer / laptop.</li>\r\n	<li>Harus ada koneksi internet.</li>\r\n	<li>Kunjungi halaman&nbsp;<a href=\"https://packagecontrol.io/installation\" target=\"_blank\">Package Control</a></li>\r\n	<li>Setelah itu pilih versi Sublime Text yang kalian gunakan. Kemudian Copy semua kode program yang ada didalamnya.</li>\r\n</ul>\r\n\r\n<p><a href=\"https://2.bp.blogspot.com/-wtYldynAfZY/W4yioe8mi6I/AAAAAAAAAo0/XxrZrKY_Fv4QLqdVd9t5oiciWeHsZEsjACLcBGAs/s1600/Pagkage.JPG\" imageanchor=\"1\"><img border=\"0\" data-original-height=\"651\" data-original-width=\"1298\" src=\"https://2.bp.blogspot.com/-wtYldynAfZY/W4yioe8mi6I/AAAAAAAAAo0/XxrZrKY_Fv4QLqdVd9t5oiciWeHsZEsjACLcBGAs/s640/Pagkage.JPG\" style=\"height:320px; width:640px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Langkah berikutnya, silahkan buka Sublime Text kalian masing-masing.</li>\r\n	<li>Klik menu&nbsp;<strong>View</strong>&nbsp;-&nbsp;<strong>Show Console</strong></li>\r\n	<li>Kemudian akan muncul sebuah textbox pada bagian bawah.</li>\r\n	<li>Paste Kode Program tadi pada textbox tersebut, kemudian tekan&nbsp;<strong>Enter</strong>.</li>\r\n</ul>\r\n\r\n<p><a href=\"https://4.bp.blogspot.com/-ZgDvu4oPkpk/W4yjnHanJkI/AAAAAAAAAo8/4E1si_6qttIev4F6Jvh3_AVcrDTv9cdVgCLcBGAs/s1600/Paste.JPG\" imageanchor=\"1\"><img border=\"0\" data-original-height=\"127\" data-original-width=\"572\" src=\"https://4.bp.blogspot.com/-ZgDvu4oPkpk/W4yjnHanJkI/AAAAAAAAAo8/4E1si_6qttIev4F6Jvh3_AVcrDTv9cdVgCLcBGAs/s1600/Paste.JPG\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Lalu pilih menu&nbsp;<strong>Preference</strong>&nbsp;-&nbsp;<strong>Package Control</strong></li>\r\n	<li>Silahkan klik&nbsp;<strong>Install Package</strong>\r\n	<p><strong><a href=\"https://1.bp.blogspot.com/-7KCijEuNvyo/W5OyZjG_MKI/AAAAAAAAApQ/GOpCIyyxRCswssjEp8-L45dGGpXRfuZNwCLcBGAs/s1600/Instal%2BPackage.JPG\" imageanchor=\"1\"><img border=\"0\" data-original-height=\"506\" data-original-width=\"380\" src=\"https://1.bp.blogspot.com/-7KCijEuNvyo/W5OyZjG_MKI/AAAAAAAAApQ/GOpCIyyxRCswssjEp8-L45dGGpXRfuZNwCLcBGAs/s1600/Instal%2BPackage.JPG\" /></a></strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Lalu akan muncul dialog baru dan ketikkan &quot;Codeigniter&quot;</li>\r\n	<li>Setelah itu klik Codeigniter Snippet</li>\r\n</ul>\r\n\r\n<p><a href=\"https://3.bp.blogspot.com/-S7meQpnpYQE/W5OyZq3ZPKI/AAAAAAAAApc/TMJWMqgJet0wOmG7zFn9VoOe0hoG5MtrACEwYBhgL/s1600/Codeigniter%2BSnippet.JPG\" imageanchor=\"1\"><img border=\"0\" data-original-height=\"489\" data-original-width=\"657\" src=\"https://3.bp.blogspot.com/-S7meQpnpYQE/W5OyZq3ZPKI/AAAAAAAAApc/TMJWMqgJet0wOmG7zFn9VoOe0hoG5MtrACEwYBhgL/s1600/Codeigniter%2BSnippet.JPG\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Silahkan restart Sublime Text kalian dan coba lihat hasilnya</li>\r\n	<li>Buka folder project kalian masing-masing, lalu buat sebuah file baru dan ketikkan perintah &quot;Controller&quot; lalu tekan tab. Maka file controller akan terbuat dengan sendirinya tanpa harus diketikkan secara manual.</li>\r\n</ul>\r\n\r\n<p>Dengan langkah-langkah yang sudah saya jelaskan diatas, kalian juga dapat menginstal plugin-plugin yang kalian butuhkan agar mempercepat proses pengkodingan. Jangan lupa Like, dan Share ke teman-temannya ya.</p>\r\n\r\n<p>Terimakasih.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Masih kurang paham ?</p>\r\n\r\n<p>Tonton tutorial versi videonya dibawah ini !</p>\r\n','26ad48dbabe17aeae2116b049eada51e.jpg','2019-06-04 23:19:30',NULL,8,'Tutorials,Bahasa Pemograman','cara-membuat-sublime-text-autocorrect-pada-codeigniter-snippet-code-',0,0,1),
(17,'Testing Ajjah','<p><img alt=\"\" id=\"img\" src=\"/my-blog/assets/backend/kcfinder/upload/files/1-%20(1).jpg\" style=\"height:772px; width:1160px\" /></p>\r\n','7f6aaa6e8575b5ce39f26701bd137a9b.jpg','2019-06-07 04:24:33',NULL,8,'Tutorials','testing-ajjah',0,0,1),
(18,'testing ajjah','<p><img alt=\"\" src=\"/my-blog/assets/backend/kcfinder/upload/files/1-%20(1).jpg\" style=\"height:772px; width:1160px\" /></p>\r\n','634574e63223a8545d3bd1fa17380ae7.png','2019-06-07 04:26:02',NULL,8,'Tutorials','testing-ajjahh',0,0,1),
(19,'tes','<p><img alt=\"\" src=\"/my-blog/assets/backend/kcfinder/upload/files/1-%20(1).jpg\" style=\"height:772px; width:1160px\" /></p>\r\n','5cda3de949fe52f9bc8dc51d66c7b03e.png','2019-06-07 04:30:19',NULL,8,'Tutorials','tes',0,0,1),
(20,'Testing','<p><img alt=\"\" src=\"/my-blog/assets/backend/kcfinder/upload/files/1-%20(1).jpg\" style=\"height:67%; width:100%\" /></p>\r\n\r\n<h2><strong>Ini adalah salah satu contoh article terbaru :)</strong></h2>\r\n','0467d11035be23148a3de1316969ef59.jpg','2019-06-07 04:35:45',NULL,8,'Tutorials','testing',0,0,1);

/*Table structure for table `t_category` */

DROP TABLE IF EXISTS `t_category`;

CREATE TABLE `t_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(300) DEFAULT NULL,
  `category_slug` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `t_category` */

insert  into `t_category`(`category_id`,`category_name`,`category_slug`) values 
(8,'Tutorial','tutorial'),
(9,'Bahasa Pemograman','bahasa-pemograman'),
(10,'Codeigniter','codeigniter');

/*Table structure for table `t_tag` */

DROP TABLE IF EXISTS `t_tag`;

CREATE TABLE `t_tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_tag` */

insert  into `t_tag`(`tag_id`,`tag_name`) values 
(1,'Tutorials'),
(3,'HTML'),
(4,'Bahasa Pemograman'),
(5,'Traveling');

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `user_nick_name` varchar(8) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_level` varchar(10) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT '1',
  `user_photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_user` */

insert  into `t_user`(`user_id`,`user_name`,`user_nick_name`,`user_email`,`user_password`,`user_level`,`user_status`,`user_photo`) values 
(1,'Zeldianto Eka Putra','DAZELPRO','dazelpro@gmail.com','202cb962ac59075b964b07152d234b70','1','1','Link');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
