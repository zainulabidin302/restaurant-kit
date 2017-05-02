/*
SQLyog Trial v12.4.1 (64 bit)
MySQL - 10.1.21-MariaDB : Database - rk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rk`;

/*Table structure for table `addresses` */

DROP TABLE IF EXISTS `addresses`;

CREATE TABLE `addresses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `line1` int(10) DEFAULT NULL,
  `line2` varchar(255) DEFAULT NULL,
  `Cityid` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKaddresses622473` (`Cityid`),
  CONSTRAINT `FKaddresses622473` FOREIGN KEY (`Cityid`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `addresses` */

/*Table structure for table `bank` */

DROP TABLE IF EXISTS `bank`;

CREATE TABLE `bank` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `address_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bank` */

/*Table structure for table `card` */

DROP TABLE IF EXISTS `card`;

CREATE TABLE `card` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `card` */

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `Provinceid` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKCity42920` (`Provinceid`),
  CONSTRAINT `FKCity42920` FOREIGN KEY (`Provinceid`) REFERENCES `province` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `city` */

/*Table structure for table `converstions` */

DROP TABLE IF EXISTS `converstions`;

CREATE TABLE `converstions` (
  `fromUnitid` int(10) NOT NULL,
  `toUnitid` int(10) DEFAULT NULL,
  KEY `FKconverstio691424` (`fromUnitid`),
  CONSTRAINT `FKconverstio691424` FOREIGN KEY (`fromUnitid`) REFERENCES `units` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `converstions` */

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `country` */

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `customers` */

/*Table structure for table `deal` */

DROP TABLE IF EXISTS `deal`;

CREATE TABLE `deal` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` decimal(19,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `deal` */

/*Table structure for table `deal_recipie` */

DROP TABLE IF EXISTS `deal_recipie`;

CREATE TABLE `deal_recipie` (
  `Dealid` int(10) NOT NULL,
  `Recipieid` int(10) NOT NULL,
  PRIMARY KEY (`Dealid`,`Recipieid`),
  KEY `FKDeal_Recip755843` (`Dealid`),
  KEY `FKDeal_Recip73186` (`Recipieid`),
  KEY `FKDeal_Recip717378` (`Recipieid`),
  CONSTRAINT `FKDeal_Recip717378` FOREIGN KEY (`Recipieid`) REFERENCES `recipies` (`id`),
  CONSTRAINT `FKDeal_Recip73186` FOREIGN KEY (`Recipieid`) REFERENCES `recipies` (`id`),
  CONSTRAINT `FKDeal_Recip755843` FOREIGN KEY (`Dealid`) REFERENCES `deal` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `deal_recipie` */

/*Table structure for table `deal_recipies` */

DROP TABLE IF EXISTS `deal_recipies`;

CREATE TABLE `deal_recipies` (
  `recipie_id` int(10) NOT NULL,
  `deal_id` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`recipie_id`,`deal_id`),
  KEY `FKdeal_recip26012` (`deal_id`),
  KEY `FKdeal_recip239152` (`recipie_id`),
  CONSTRAINT `FKdeal_recip239152` FOREIGN KEY (`recipie_id`) REFERENCES `recipies` (`id`),
  CONSTRAINT `FKdeal_recip26012` FOREIGN KEY (`deal_id`) REFERENCES `deal` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `deal_recipies` */

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `departments` */

insert  into `departments`(`id`,`title`) values 
(1,'General');

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `groups` */

/*Table structure for table `ingredients` */

DROP TABLE IF EXISTS `ingredients`;

CREATE TABLE `ingredients` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `min_order_level` int(10) DEFAULT NULL,
  `max_order_level` int(10) DEFAULT NULL,
  `unit_id` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `image_url` text,
  PRIMARY KEY (`id`),
  KEY `FKingredient161506` (`unit_id`),
  CONSTRAINT `FKingredient161506` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `ingredients` */

insert  into `ingredients`(`id`,`title`,`min_order_level`,`max_order_level`,`unit_id`,`created_at`,`updated_at`,`deleted_at`,`image_url`) values 
(1,'Tomato',5,20,1,'2017-05-01 12:22:36','2017-05-01 12:22:36',NULL,NULL),
(2,'Tomato',5,20,1,'2017-05-01 12:22:53','2017-05-01 12:22:53',NULL,NULL),
(3,'Onion',10,60,1,'2017-05-01 12:25:19','2017-05-01 12:25:19',NULL,NULL);

/*Table structure for table `language` */

DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_code` varchar(255) DEFAULT NULL,
  `flag_url` varchar(255) DEFAULT NULL,
  `lat` int(10) DEFAULT NULL,
  `lng` int(10) DEFAULT NULL,
  `address_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `language` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2017_05_02_131501_create_addresses_table',1),
(2,'2017_05_02_131501_create_bank_table',1),
(3,'2017_05_02_131501_create_card_table',1),
(4,'2017_05_02_131501_create_city_table',1),
(5,'2017_05_02_131501_create_converstions_table',1),
(6,'2017_05_02_131501_create_country_table',1),
(7,'2017_05_02_131501_create_customers_table',1),
(8,'2017_05_02_131501_create_deal_table',1),
(9,'2017_05_02_131501_create_deal_recipie_table',1),
(10,'2017_05_02_131501_create_deal_recipies_table',1),
(11,'2017_05_02_131501_create_departments_table',1),
(12,'2017_05_02_131501_create_groups_table',1),
(13,'2017_05_02_131501_create_ingredients_table',1),
(14,'2017_05_02_131501_create_language_table',1),
(15,'2017_05_02_131501_create_order_items_table',1),
(16,'2017_05_02_131501_create_orders_table',1),
(17,'2017_05_02_131501_create_payment_table',1),
(18,'2017_05_02_131501_create_promotion_table',1),
(19,'2017_05_02_131501_create_promotions_table',1),
(20,'2017_05_02_131501_create_province_table',1),
(21,'2017_05_02_131501_create_purchaseorder_table',1),
(22,'2017_05_02_131501_create_purchaseorderitem_table',1),
(23,'2017_05_02_131501_create_recipie_groups_table',1),
(24,'2017_05_02_131501_create_recipie_images_table',1),
(25,'2017_05_02_131501_create_recipie_items_table',1),
(26,'2017_05_02_131501_create_recipie_promotion_table',1),
(27,'2017_05_02_131501_create_recipies_table',1),
(28,'2017_05_02_131501_create_role_user_table',1),
(29,'2017_05_02_131501_create_roles_table',1),
(30,'2017_05_02_131501_create_settings_table',1),
(31,'2017_05_02_131501_create_stock_table',1),
(32,'2017_05_02_131501_create_table_table',1),
(33,'2017_05_02_131501_create_thirdpartyapplications_table',1),
(34,'2017_05_02_131501_create_timezone_table',1),
(35,'2017_05_02_131501_create_transaction_table',1),
(36,'2017_05_02_131501_create_transaction_payment_table',1),
(37,'2017_05_02_131501_create_units_table',1),
(38,'2017_05_02_131501_create_users_table',1),
(39,'2017_05_02_131501_create_users_address_table',1),
(40,'2017_05_02_131504_add_foreign_keys_to_addresses_table',1),
(41,'2017_05_02_131504_add_foreign_keys_to_city_table',1),
(42,'2017_05_02_131504_add_foreign_keys_to_converstions_table',1),
(43,'2017_05_02_131504_add_foreign_keys_to_deal_recipie_table',1),
(44,'2017_05_02_131504_add_foreign_keys_to_deal_recipies_table',1),
(45,'2017_05_02_131504_add_foreign_keys_to_ingredients_table',1),
(46,'2017_05_02_131504_add_foreign_keys_to_order_items_table',1),
(47,'2017_05_02_131504_add_foreign_keys_to_orders_table',1),
(48,'2017_05_02_131504_add_foreign_keys_to_payment_table',1),
(49,'2017_05_02_131504_add_foreign_keys_to_province_table',1),
(50,'2017_05_02_131504_add_foreign_keys_to_purchaseorder_table',1),
(51,'2017_05_02_131504_add_foreign_keys_to_purchaseorderitem_table',1),
(52,'2017_05_02_131504_add_foreign_keys_to_recipie_images_table',1),
(53,'2017_05_02_131504_add_foreign_keys_to_recipie_items_table',1),
(54,'2017_05_02_131504_add_foreign_keys_to_recipie_promotion_table',1),
(55,'2017_05_02_131504_add_foreign_keys_to_role_user_table',1),
(56,'2017_05_02_131504_add_foreign_keys_to_roles_table',1),
(57,'2017_05_02_131504_add_foreign_keys_to_stock_table',1),
(58,'2017_05_02_131504_add_foreign_keys_to_transaction_payment_table',1),
(59,'2017_05_02_131504_add_foreign_keys_to_users_address_table',1);

/*Table structure for table `order_items` */

DROP TABLE IF EXISTS `order_items`;

CREATE TABLE `order_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `quantity` int(10) NOT NULL,
  `price` double DEFAULT NULL,
  `shipping_eta` int(10) DEFAULT NULL,
  `cooking_eta` int(10) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `promotion_availed` int(10) DEFAULT NULL,
  `address_id` int(10) DEFAULT NULL,
  `shipper_id` int(10) DEFAULT NULL,
  `cook_id` int(10) DEFAULT NULL,
  `waiter_id` int(10) DEFAULT NULL,
  `order_id` int(10) NOT NULL,
  `recipie_id` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKorder_item407742` (`order_id`),
  KEY `FKorder_item341025` (`address_id`),
  KEY `FKorder_item394178` (`shipper_id`),
  KEY `FKorder_item182799` (`cook_id`),
  KEY `FKorder_item155101` (`waiter_id`),
  KEY `FKorder_item896156` (`recipie_id`),
  CONSTRAINT `FKorder_item155101` FOREIGN KEY (`waiter_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FKorder_item182799` FOREIGN KEY (`cook_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FKorder_item341025` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `FKorder_item394178` FOREIGN KEY (`shipper_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FKorder_item407742` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `FKorder_item896156` FOREIGN KEY (`recipie_id`) REFERENCES `recipies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `order_items` */

insert  into `order_items`(`id`,`quantity`,`price`,`shipping_eta`,`cooking_eta`,`comments`,`promotion_availed`,`address_id`,`shipper_id`,`cook_id`,`waiter_id`,`order_id`,`recipie_id`,`created_at`,`updated_at`,`deleted_at`) values 
(3,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,3,'2017-05-02 03:03:45','2017-05-02 03:03:45',NULL),
(4,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,2,'2017-05-02 03:03:45','2017-05-02 03:03:45',NULL),
(5,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,1,'2017-05-02 03:03:45','2017-05-02 03:03:45',NULL),
(6,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,3,'2017-05-02 03:11:11','2017-05-02 03:11:11',NULL),
(7,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,12,3,'2017-05-02 03:11:55','2017-05-02 03:11:55',NULL),
(8,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,3,'2017-05-02 03:14:28','2017-05-02 03:14:28',NULL),
(9,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,2,'2017-05-02 03:14:28','2017-05-02 03:14:28',NULL),
(10,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14,3,'2017-05-02 03:15:21','2017-05-02 03:15:21',NULL),
(11,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,15,3,'2017-05-02 03:16:12','2017-05-02 03:16:12',NULL),
(12,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,16,3,'2017-05-02 03:16:56','2017-05-02 03:16:56',NULL),
(13,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,17,3,'2017-05-02 03:17:16','2017-05-02 03:17:16',NULL),
(14,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,18,3,'2017-05-02 03:17:28','2017-05-02 03:17:28',NULL),
(15,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,19,3,'2017-05-02 03:18:40','2017-05-02 03:18:40',NULL),
(16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,3,'2017-05-02 03:18:54','2017-05-02 03:18:54',NULL),
(17,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,21,2,'2017-05-02 03:22:39','2017-05-02 03:22:39',NULL),
(18,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22,3,'2017-05-02 03:23:36','2017-05-02 03:23:36',NULL),
(19,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22,2,'2017-05-02 03:23:36','2017-05-02 03:23:36',NULL),
(20,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,23,3,'2017-05-02 03:24:12','2017-05-02 03:24:12',NULL),
(21,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,23,2,'2017-05-02 03:24:12','2017-05-02 03:24:12',NULL),
(22,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,24,3,'2017-05-02 03:24:42','2017-05-02 03:24:42',NULL),
(23,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,24,2,'2017-05-02 03:24:42','2017-05-02 03:24:42',NULL),
(24,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,3,'2017-05-02 03:25:01','2017-05-02 03:25:01',NULL),
(25,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,2,'2017-05-02 03:25:01','2017-05-02 03:25:01',NULL),
(26,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,3,'2017-05-02 04:16:37','2017-05-02 04:16:37',NULL),
(27,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,2,'2017-05-02 04:16:37','2017-05-02 04:16:37',NULL),
(28,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,'2017-05-02 04:16:37','2017-05-02 04:16:37',NULL),
(29,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,4,'2017-05-02 04:16:37','2017-05-02 04:16:37',NULL),
(30,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,27,2,'2017-05-02 04:16:56','2017-05-02 04:16:56',NULL),
(31,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,27,1,'2017-05-02 04:16:56','2017-05-02 04:16:56',NULL),
(32,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,27,4,'2017-05-02 04:16:56','2017-05-02 04:16:56',NULL),
(33,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,27,5,'2017-05-02 04:16:56','2017-05-02 04:16:56',NULL),
(34,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,28,1,'2017-05-02 07:28:28','2017-05-02 07:28:28',NULL),
(35,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29,3,'2017-05-02 07:28:56','2017-05-02 07:28:56',NULL),
(36,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29,2,'2017-05-02 07:28:56','2017-05-02 07:28:56',NULL),
(37,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,3,'2017-05-02 07:30:01','2017-05-02 07:30:01',NULL),
(38,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,2,'2017-05-02 07:30:01','2017-05-02 07:30:01',NULL),
(39,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31,3,'2017-05-02 07:30:37','2017-05-02 07:30:37',NULL),
(40,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,32,3,'2017-05-02 07:31:06','2017-05-02 07:31:06',NULL),
(41,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,33,3,'2017-05-02 07:32:33','2017-05-02 07:32:33',NULL),
(42,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,33,2,'2017-05-02 07:32:33','2017-05-02 07:32:33',NULL),
(43,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,33,1,'2017-05-02 07:32:33','2017-05-02 07:32:33',NULL),
(44,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,34,2,'2017-05-02 07:32:58','2017-05-02 07:32:58',NULL),
(45,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,34,1,'2017-05-02 07:32:58','2017-05-02 07:32:58',NULL),
(46,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,2,'2017-05-02 07:35:00','2017-05-02 07:35:00',NULL),
(47,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,3,'2017-05-02 07:35:00','2017-05-02 07:35:00',NULL),
(48,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,2,'2017-05-02 07:37:25','2017-05-02 07:37:25',NULL),
(49,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,1,'2017-05-02 07:37:25','2017-05-02 07:37:25',NULL),
(50,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,3,'2017-05-02 07:37:25','2017-05-02 07:37:25',NULL),
(51,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,1,'2017-05-02 07:38:52','2017-05-02 07:38:52',NULL),
(52,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,2,'2017-05-02 07:38:52','2017-05-02 07:38:52',NULL),
(53,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,3,'2017-05-02 07:38:52','2017-05-02 07:38:52',NULL),
(54,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,38,1,'2017-05-02 07:41:09','2017-05-02 07:41:09',NULL),
(55,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,38,2,'2017-05-02 07:41:09','2017-05-02 07:41:09',NULL),
(56,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39,3,'2017-05-02 07:45:36','2017-05-02 07:45:36',NULL),
(57,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39,2,'2017-05-02 07:45:36','2017-05-02 07:45:36',NULL),
(58,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,40,2,'2017-05-02 07:53:42','2017-05-02 07:53:42',NULL),
(59,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,41,3,'2017-05-02 07:55:13','2017-05-02 07:55:13',NULL),
(60,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,41,2,'2017-05-02 07:55:13','2017-05-02 07:55:13',NULL),
(61,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,42,1,'2017-05-02 07:55:52','2017-05-02 07:55:52',NULL),
(62,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,42,2,'2017-05-02 07:55:52','2017-05-02 07:55:52',NULL),
(63,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,43,3,'2017-05-02 07:56:34','2017-05-02 07:56:34',NULL),
(64,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,44,2,'2017-05-02 07:58:41','2017-05-02 07:58:41',NULL),
(65,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,45,3,'2017-05-02 07:59:16','2017-05-02 07:59:16',NULL),
(66,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,46,2,'2017-05-02 08:03:48','2017-05-02 08:03:48',NULL),
(67,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,46,1,'2017-05-02 08:03:48','2017-05-02 08:03:48',NULL),
(68,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,46,3,'2017-05-02 08:03:48','2017-05-02 08:03:48',NULL),
(69,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,47,2,'2017-05-02 08:04:04','2017-05-02 08:04:04',NULL),
(70,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,47,1,'2017-05-02 08:04:04','2017-05-02 08:04:04',NULL),
(71,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,48,2,'2017-05-02 08:04:50','2017-05-02 08:04:50',NULL),
(72,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,49,2,'2017-05-02 08:05:10','2017-05-02 08:05:10',NULL),
(73,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,50,3,'2017-05-02 08:05:25','2017-05-02 08:05:25',NULL),
(74,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,51,3,'2017-05-02 08:06:13','2017-05-02 08:06:13',NULL),
(75,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,51,2,'2017-05-02 08:06:13','2017-05-02 08:06:13',NULL),
(76,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,52,3,'2017-05-02 08:10:00','2017-05-02 08:10:00',NULL),
(77,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,53,2,'2017-05-02 08:12:03','2017-05-02 08:12:03',NULL),
(78,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,53,3,'2017-05-02 08:12:03','2017-05-02 08:12:03',NULL),
(79,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,54,2,'2017-05-02 08:12:21','2017-05-02 08:12:21',NULL),
(80,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,54,3,'2017-05-02 08:12:21','2017-05-02 08:12:21',NULL),
(81,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,55,2,'2017-05-02 08:13:15','2017-05-02 08:13:15',NULL),
(82,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,56,2,'2017-05-02 08:13:34','2017-05-02 08:13:34',NULL),
(83,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,56,3,'2017-05-02 08:13:34','2017-05-02 08:13:34',NULL),
(84,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,57,3,'2017-05-02 08:16:04','2017-05-02 08:16:04',NULL),
(85,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,58,2,'2017-05-02 08:54:36','2017-05-02 08:54:36',NULL),
(86,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,58,1,'2017-05-02 08:54:36','2017-05-02 08:54:36',NULL),
(87,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,59,1,'2017-05-02 08:55:17','2017-05-02 08:55:17',NULL),
(88,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,59,2,'2017-05-02 08:55:17','2017-05-02 08:55:17',NULL),
(89,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,60,1,'2017-05-02 08:55:57','2017-05-02 08:55:57',NULL),
(90,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,60,2,'2017-05-02 08:55:57','2017-05-02 08:55:57',NULL),
(91,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,60,3,'2017-05-02 08:55:57','2017-05-02 08:55:57',NULL),
(92,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,61,3,'2017-05-02 08:56:13','2017-05-02 08:56:13',NULL),
(93,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,62,2,'2017-05-02 08:57:29','2017-05-02 08:57:29',NULL),
(94,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,63,3,'2017-05-02 08:57:56','2017-05-02 08:57:56',NULL),
(95,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,64,2,'2017-05-02 08:58:32','2017-05-02 08:58:32',NULL),
(96,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,65,2,'2017-05-02 08:58:43','2017-05-02 08:58:43',NULL),
(97,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,66,2,'2017-05-02 08:59:20','2017-05-02 08:59:20',NULL),
(98,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,67,2,'2017-05-02 08:59:28','2017-05-02 08:59:28',NULL),
(99,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,68,2,'2017-05-02 08:59:58','2017-05-02 08:59:58',NULL),
(100,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,68,1,'2017-05-02 08:59:58','2017-05-02 08:59:58',NULL),
(101,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,69,3,'2017-05-02 09:00:15','2017-05-02 09:00:15',NULL),
(102,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,70,2,'2017-05-02 09:00:35','2017-05-02 09:00:35',NULL),
(103,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,71,2,'2017-05-02 09:00:51','2017-05-02 09:00:51',NULL),
(104,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,72,2,'2017-05-02 09:02:02','2017-05-02 09:02:02',NULL),
(105,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,73,3,'2017-05-02 10:26:59','2017-05-02 10:26:59',NULL),
(106,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,73,2,'2017-05-02 10:26:59','2017-05-02 10:26:59',NULL),
(107,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,73,1,'2017-05-02 10:26:59','2017-05-02 10:26:59',NULL),
(108,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,74,3,'2017-05-02 10:38:11','2017-05-02 10:38:11',NULL),
(109,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,75,3,'2017-05-02 10:39:15','2017-05-02 10:39:15',NULL),
(110,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,76,3,'2017-05-02 13:08:29','2017-05-02 13:08:29',NULL),
(111,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,76,2,'2017-05-02 13:08:29','2017-05-02 13:08:29',NULL),
(112,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,76,1,'2017-05-02 13:08:29','2017-05-02 13:08:29',NULL),
(113,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,76,4,'2017-05-02 13:08:29','2017-05-02 13:08:29',NULL),
(114,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,76,5,'2017-05-02 13:08:29','2017-05-02 13:08:29',NULL),
(115,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,76,6,'2017-05-02 13:08:29','2017-05-02 13:08:29',NULL);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `remarks` int(10) DEFAULT NULL,
  `is_takeaway` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `address_id` int(10) DEFAULT NULL,
  `transaction_id` int(10) DEFAULT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`),
  KEY `FKorders267488` (`customer_id`),
  KEY `FKorders833566` (`address_id`),
  KEY `FKorders35850` (`transaction_id`),
  CONSTRAINT `FKorders267488` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `FKorders35850` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`id`),
  CONSTRAINT `FKorders833566` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `orders` */

insert  into `orders`(`id`,`remarks`,`is_takeaway`,`created_at`,`updated_at`,`deleted_at`,`customer_id`,`address_id`,`transaction_id`,`uuid`) values 
(10,NULL,NULL,'2017-05-02 03:03:45','2017-05-02 03:03:45',NULL,NULL,NULL,NULL,NULL),
(11,NULL,NULL,'2017-05-02 03:11:10','2017-05-02 03:11:10',NULL,NULL,NULL,NULL,'fe2d4a80-2ee4-11e7-a658-bbbec323ef13'),
(12,NULL,NULL,'2017-05-02 03:11:55','2017-05-02 03:11:55',NULL,NULL,NULL,NULL,'18f2ffa0-2ee5-11e7-be56-4f072fe6e57a'),
(13,NULL,NULL,'2017-05-02 03:14:28','2017-05-02 03:14:28',NULL,NULL,NULL,NULL,'73b48500-2ee5-11e7-94a9-e333291e40c7'),
(14,NULL,NULL,'2017-05-02 03:15:21','2017-05-02 03:15:21',NULL,NULL,NULL,NULL,'934dafc0-2ee5-11e7-b87b-8bdfb6a6e5eb'),
(15,NULL,NULL,'2017-05-02 03:16:12','2017-05-02 03:16:12',NULL,NULL,NULL,NULL,'b19962e0-2ee5-11e7-abdc-cb09fe74fa0d'),
(16,NULL,NULL,'2017-05-02 03:16:56','2017-05-02 03:16:56',NULL,NULL,NULL,NULL,'cbed8370-2ee5-11e7-b52a-d317329a71cd'),
(17,NULL,NULL,'2017-05-02 03:17:16','2017-05-02 03:17:16',NULL,NULL,NULL,NULL,'d80957e0-2ee5-11e7-8a72-9f4a161f5a72'),
(18,NULL,NULL,'2017-05-02 03:17:28','2017-05-02 03:17:28',NULL,NULL,NULL,NULL,'df3fd6d0-2ee5-11e7-b33f-69370c358e3e'),
(19,NULL,NULL,'2017-05-02 03:18:40','2017-05-02 03:18:40',NULL,NULL,NULL,NULL,'0a643810-2ee6-11e7-ab48-8f03c0cec069'),
(20,NULL,NULL,'2017-05-02 03:18:54','2017-05-02 03:18:54',NULL,NULL,NULL,NULL,'1295bba0-2ee6-11e7-a82c-3df6683440cd'),
(21,NULL,NULL,'2017-05-02 03:22:39','2017-05-02 03:22:39',NULL,NULL,NULL,NULL,'98cbdf60-2ee6-11e7-8db5-21137fa6c27e'),
(22,NULL,NULL,'2017-05-02 03:23:36','2017-05-02 03:23:36',NULL,NULL,NULL,NULL,'ba5671c0-2ee6-11e7-8b14-e1b7fd7f8e8c'),
(23,NULL,NULL,'2017-05-02 03:24:12','2017-05-02 03:24:12',NULL,NULL,NULL,NULL,'cfef57c0-2ee6-11e7-9c0d-75a75dba34a0'),
(24,NULL,NULL,'2017-05-02 03:24:42','2017-05-02 03:24:42',NULL,NULL,NULL,NULL,'e1bb8cf0-2ee6-11e7-8902-17a3d801a66e'),
(25,NULL,NULL,'2017-05-02 03:25:01','2017-05-02 03:25:01',NULL,NULL,NULL,NULL,'ecf49ce0-2ee6-11e7-b2f8-6927f2bf4535'),
(26,NULL,NULL,'2017-05-02 04:16:37','2017-05-02 04:16:37',NULL,NULL,NULL,NULL,'227a0300-2eee-11e7-8bff-c9e0dde5a31a'),
(27,NULL,NULL,'2017-05-02 04:16:56','2017-05-02 04:16:56',NULL,NULL,NULL,NULL,'2dc15d60-2eee-11e7-a4e7-a96444a85505'),
(28,NULL,NULL,'2017-05-02 07:28:28','2017-05-02 07:28:28',NULL,NULL,NULL,NULL,'ef7269a0-2f08-11e7-a857-15c88042eeea'),
(29,NULL,NULL,'2017-05-02 07:28:56','2017-05-02 07:28:56',NULL,NULL,NULL,NULL,'009584e0-2f09-11e7-a880-a3f04aeb36a4'),
(30,NULL,NULL,'2017-05-02 07:30:01','2017-05-02 07:30:01',NULL,NULL,NULL,NULL,'271cddc0-2f09-11e7-ac91-65e856fb3575'),
(31,NULL,NULL,'2017-05-02 07:30:37','2017-05-02 07:30:37',NULL,NULL,NULL,NULL,'3c9d72b0-2f09-11e7-ac6b-e5e46680ec23'),
(32,NULL,NULL,'2017-05-02 07:31:06','2017-05-02 07:31:06',NULL,NULL,NULL,NULL,'4da25030-2f09-11e7-807a-617756637d24'),
(33,NULL,NULL,'2017-05-02 07:32:33','2017-05-02 07:32:33',NULL,NULL,NULL,NULL,'81c262b0-2f09-11e7-bf8f-3bf8bd916776'),
(34,NULL,NULL,'2017-05-02 07:32:58','2017-05-02 07:32:58',NULL,NULL,NULL,NULL,'90d0b560-2f09-11e7-acdc-4bc2ba0a01a4'),
(35,NULL,NULL,'2017-05-02 07:35:00','2017-05-02 07:35:00',NULL,NULL,NULL,NULL,'d9652d90-2f09-11e7-a206-490831c0d1ba'),
(36,NULL,NULL,'2017-05-02 07:37:25','2017-05-02 07:37:25',NULL,NULL,NULL,NULL,'2fdfdc50-2f0a-11e7-84e7-8debd4266037'),
(37,NULL,NULL,'2017-05-02 07:38:52','2017-05-02 07:38:52',NULL,NULL,NULL,NULL,'638c61e0-2f0a-11e7-8756-0364e3dac749'),
(38,NULL,NULL,'2017-05-02 07:41:09','2017-05-02 07:41:09',NULL,NULL,NULL,NULL,'b500ac00-2f0a-11e7-b01c-0f61340e032b'),
(39,NULL,NULL,'2017-05-02 07:45:36','2017-05-02 07:45:36',NULL,NULL,NULL,NULL,'544bbfa0-2f0b-11e7-9cf7-01a90ec7fe3d'),
(40,NULL,NULL,'2017-05-02 07:53:42','2017-05-02 07:53:42',NULL,NULL,NULL,NULL,'764b1620-2f0c-11e7-a9aa-2b6a8d41c93b'),
(41,NULL,NULL,'2017-05-02 07:55:13','2017-05-02 07:55:13',NULL,NULL,NULL,NULL,'ac69d7e0-2f0c-11e7-b4a3-1f8a00844f18'),
(42,NULL,NULL,'2017-05-02 07:55:52','2017-05-02 07:55:52',NULL,NULL,NULL,NULL,'c3a895e0-2f0c-11e7-b00b-7f59cb0dbfc8'),
(43,NULL,NULL,'2017-05-02 07:56:34','2017-05-02 07:56:34',NULL,NULL,NULL,NULL,'dc9cd6e0-2f0c-11e7-a03a-27116dea0eba'),
(44,NULL,NULL,'2017-05-02 07:58:41','2017-05-02 07:58:41',NULL,NULL,NULL,NULL,'284abd90-2f0d-11e7-b12c-c5b63df5c23f'),
(45,NULL,NULL,'2017-05-02 07:59:16','2017-05-02 07:59:16',NULL,NULL,NULL,NULL,'3d2ac3a0-2f0d-11e7-ac10-159d8da67628'),
(46,NULL,NULL,'2017-05-02 08:03:48','2017-05-02 08:03:48',NULL,NULL,NULL,NULL,'df3c4370-2f0d-11e7-a291-e79ea0470b63'),
(47,NULL,NULL,'2017-05-02 08:04:04','2017-05-02 08:04:04',NULL,NULL,NULL,NULL,'e89a5bf0-2f0d-11e7-91f9-a166c16f5f1b'),
(48,NULL,NULL,'2017-05-02 08:04:50','2017-05-02 08:04:50',NULL,NULL,NULL,NULL,'03ff7290-2f0e-11e7-ab55-c1c6fa3e174b'),
(49,NULL,NULL,'2017-05-02 08:05:10','2017-05-02 08:05:10',NULL,NULL,NULL,NULL,'100a5f40-2f0e-11e7-a90a-77516e6c1e97'),
(50,NULL,NULL,'2017-05-02 08:05:25','2017-05-02 08:05:25',NULL,NULL,NULL,NULL,'18cd5ad0-2f0e-11e7-a2ea-f94a009cd34c'),
(51,NULL,NULL,'2017-05-02 08:06:13','2017-05-02 08:06:13',NULL,NULL,NULL,NULL,'35863e00-2f0e-11e7-a69b-a3419575efad'),
(52,NULL,NULL,'2017-05-02 08:10:00','2017-05-02 08:10:00',NULL,NULL,NULL,NULL,'bd35b7c0-2f0e-11e7-9d76-f91ffa8e8746'),
(53,NULL,NULL,'2017-05-02 08:12:03','2017-05-02 08:12:03',NULL,NULL,NULL,NULL,'065450e0-2f0f-11e7-a868-e72eca5d811a'),
(54,NULL,NULL,'2017-05-02 08:12:21','2017-05-02 08:12:21',NULL,NULL,NULL,NULL,'110b4a40-2f0f-11e7-8c4a-ed84c4210c6e'),
(55,NULL,NULL,'2017-05-02 08:13:15','2017-05-02 08:13:15',NULL,NULL,NULL,NULL,'31477420-2f0f-11e7-ad14-91f64f1baad9'),
(56,NULL,NULL,'2017-05-02 08:13:33','2017-05-02 08:13:33',NULL,NULL,NULL,NULL,'3c3e4f80-2f0f-11e7-beae-afb326fb35f4'),
(57,NULL,NULL,'2017-05-02 08:16:03','2017-05-02 08:16:03',NULL,NULL,NULL,NULL,'95a70770-2f0f-11e7-a822-4516e8764ac5'),
(58,NULL,NULL,'2017-05-02 08:54:36','2017-05-02 08:54:36',NULL,NULL,NULL,NULL,'f7c85c20-2f14-11e7-8c49-4dfb4652c9f1'),
(59,NULL,NULL,'2017-05-02 08:55:17','2017-05-02 08:55:17',NULL,NULL,NULL,NULL,'10630860-2f15-11e7-a0f0-41eb137d7590'),
(60,NULL,NULL,'2017-05-02 08:55:57','2017-05-02 08:55:57',NULL,NULL,NULL,NULL,'280b7dc0-2f15-11e7-b81d-7f447927e705'),
(61,NULL,NULL,'2017-05-02 08:56:13','2017-05-02 08:56:13',NULL,NULL,NULL,NULL,'31e33af0-2f15-11e7-bb90-49d50e99aca4'),
(62,NULL,NULL,'2017-05-02 08:57:29','2017-05-02 08:57:29',NULL,NULL,NULL,NULL,'5eec74d0-2f15-11e7-9fd8-7dcabaa572fc'),
(63,NULL,NULL,'2017-05-02 08:57:56','2017-05-02 08:57:56',NULL,NULL,NULL,NULL,'6f50dba0-2f15-11e7-8088-7b813ad8d338'),
(64,NULL,NULL,'2017-05-02 08:58:32','2017-05-02 08:58:32',NULL,NULL,NULL,NULL,'84cf5fe0-2f15-11e7-bec4-5f57c0e26531'),
(65,NULL,NULL,'2017-05-02 08:58:42','2017-05-02 08:58:42',NULL,NULL,NULL,NULL,'8aedc4e0-2f15-11e7-a58b-2959ab44e88b'),
(66,NULL,NULL,'2017-05-02 08:59:20','2017-05-02 08:59:20',NULL,NULL,NULL,NULL,'a103e8e0-2f15-11e7-9711-e559f7ff52ac'),
(67,NULL,NULL,'2017-05-02 08:59:28','2017-05-02 08:59:28',NULL,NULL,NULL,NULL,'a5d32840-2f15-11e7-8c69-89be15dda7eb'),
(68,NULL,NULL,'2017-05-02 08:59:58','2017-05-02 08:59:58',NULL,NULL,NULL,NULL,'b7f7ee40-2f15-11e7-babc-7925b2eceeca'),
(69,NULL,NULL,'2017-05-02 09:00:15','2017-05-02 09:00:15',NULL,NULL,NULL,NULL,'c225d150-2f15-11e7-8626-e3a78d1bb852'),
(70,NULL,NULL,'2017-05-02 09:00:35','2017-05-02 09:00:35',NULL,NULL,NULL,NULL,'ce33dc60-2f15-11e7-abdf-c7664faf1bc8'),
(71,NULL,NULL,'2017-05-02 09:00:51','2017-05-02 09:00:51',NULL,NULL,NULL,NULL,'d7bb29b0-2f15-11e7-86ab-8742e7cd7f46'),
(72,NULL,NULL,'2017-05-02 09:02:02','2017-05-02 09:02:02',NULL,NULL,NULL,NULL,'01afda20-2f16-11e7-9481-1596aae56235'),
(73,NULL,NULL,'2017-05-02 10:26:59','2017-05-02 10:26:59',NULL,NULL,NULL,NULL,'dfff2cb0-2f21-11e7-b7fa-f1fa8b45a2f7'),
(74,NULL,NULL,'2017-05-02 10:38:10','2017-05-02 10:38:10',NULL,NULL,NULL,NULL,'702232a0-2f23-11e7-b8b8-257e0ce8bfb6'),
(75,NULL,NULL,'2017-05-02 10:39:15','2017-05-02 10:39:15',NULL,NULL,NULL,NULL,'96d478d0-2f23-11e7-a56f-ff6102eae06c'),
(76,NULL,NULL,'2017-05-02 13:08:29','2017-05-02 13:08:29',NULL,NULL,NULL,NULL,'6fcbfb50-2f38-11e7-a06c-0715f1b07183');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `payment_type` int(10) DEFAULT NULL,
  `transaction_id` int(10) DEFAULT NULL,
  `cr` int(10) DEFAULT NULL,
  `dt` int(10) DEFAULT NULL,
  `account_number` int(10) DEFAULT NULL,
  `branch_code` int(10) DEFAULT NULL,
  `account_holder_name` int(10) DEFAULT NULL,
  `account_holder_cnic` int(10) DEFAULT NULL,
  `account_holder_address` int(10) DEFAULT NULL,
  `Bankid` int(10) NOT NULL,
  `Cardid` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKPayment441796` (`Bankid`),
  KEY `FKPayment670271` (`Cardid`),
  CONSTRAINT `FKPayment441796` FOREIGN KEY (`Bankid`) REFERENCES `bank` (`id`),
  CONSTRAINT `FKPayment670271` FOREIGN KEY (`Cardid`) REFERENCES `card` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

/*Table structure for table `promotion` */

DROP TABLE IF EXISTS `promotion`;

CREATE TABLE `promotion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `expires` timestamp NULL DEFAULT NULL,
  `is_active` int(10) DEFAULT NULL,
  `percentage` double DEFAULT NULL,
  `fix_amount` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `promotion` */

/*Table structure for table `promotions` */

DROP TABLE IF EXISTS `promotions`;

CREATE TABLE `promotions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `expires` timestamp NULL DEFAULT NULL,
  `is_active` int(10) DEFAULT NULL,
  `percentage` double DEFAULT NULL,
  `fix_amount` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `promotions` */

/*Table structure for table `province` */

DROP TABLE IF EXISTS `province`;

CREATE TABLE `province` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `Countryid` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKProvince300459` (`Countryid`),
  CONSTRAINT `FKProvince300459` FOREIGN KEY (`Countryid`) REFERENCES `country` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `province` */

/*Table structure for table `purchaseorder` */

DROP TABLE IF EXISTS `purchaseorder`;

CREATE TABLE `purchaseorder` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `supply_to` int(10) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `order_confirmed_by` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKPurchaseOr456301` (`supply_to`),
  KEY `FKPurchaseOr576023` (`supplier_id`),
  KEY `FKPurchaseOr315753` (`order_confirmed_by`),
  CONSTRAINT `FKPurchaseOr315753` FOREIGN KEY (`order_confirmed_by`) REFERENCES `users` (`id`),
  CONSTRAINT `FKPurchaseOr456301` FOREIGN KEY (`supply_to`) REFERENCES `addresses` (`id`),
  CONSTRAINT `FKPurchaseOr576023` FOREIGN KEY (`supplier_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `purchaseorder` */

/*Table structure for table `purchaseorderitem` */

DROP TABLE IF EXISTS `purchaseorderitem`;

CREATE TABLE `purchaseorderitem` (
  `PurchaseOrderid` int(10) NOT NULL,
  `Ingredientid` int(10) NOT NULL,
  `quantity` double DEFAULT NULL,
  KEY `FKPurchaseOr433276` (`PurchaseOrderid`),
  KEY `FKPurchaseOr5381` (`Ingredientid`),
  CONSTRAINT `FKPurchaseOr433276` FOREIGN KEY (`PurchaseOrderid`) REFERENCES `purchaseorder` (`id`),
  CONSTRAINT `FKPurchaseOr5381` FOREIGN KEY (`Ingredientid`) REFERENCES `ingredients` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `purchaseorderitem` */

/*Table structure for table `recipie_groups` */

DROP TABLE IF EXISTS `recipie_groups`;

CREATE TABLE `recipie_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `recipie_groups` */

insert  into `recipie_groups`(`id`,`title`,`price`) values 
(1,'General',NULL),
(2,'Pakistani',NULL),
(3,'Indian',NULL),
(4,'Italian',NULL),
(5,'Chinese',NULL),
(6,'Kababish',NULL),
(7,'Turkish',NULL),
(8,'Deserts',NULL);

/*Table structure for table `recipie_images` */

DROP TABLE IF EXISTS `recipie_images`;

CREATE TABLE `recipie_images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `media_type` int(10) DEFAULT NULL,
  `recipie_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKrecipie_im327016` (`recipie_id`),
  CONSTRAINT `FKrecipie_im327016` FOREIGN KEY (`recipie_id`) REFERENCES `recipies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `recipie_images` */

/*Table structure for table `recipie_items` */

DROP TABLE IF EXISTS `recipie_items`;

CREATE TABLE `recipie_items` (
  `recipie_id` int(10) NOT NULL,
  `ingredient_id` int(10) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  KEY `FKrecipie_it579617` (`recipie_id`),
  KEY `FKrecipie_it258862` (`ingredient_id`),
  CONSTRAINT `FKrecipie_it258862` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`),
  CONSTRAINT `FKrecipie_it579617` FOREIGN KEY (`recipie_id`) REFERENCES `recipies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `recipie_items` */

insert  into `recipie_items`(`recipie_id`,`ingredient_id`,`quantity`,`created_at`,`updated_at`,`deleted_at`) values 
(1,1,10,'2017-05-01 15:53:02','2017-05-01 15:53:02',NULL),
(1,3,10,'2017-05-01 15:53:02','2017-05-01 15:53:02',NULL),
(2,2,123,'2017-05-01 15:56:47','2017-05-01 15:56:47',NULL),
(2,3,123,'2017-05-01 15:56:47','2017-05-01 15:56:47',NULL),
(3,3,2,'2017-05-01 15:57:07','2017-05-01 15:57:07',NULL),
(4,1,10,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL),
(4,3,10,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL),
(19,2,100,'2017-05-02 04:33:34','2017-05-02 04:33:34',NULL),
(19,3,100,'2017-05-02 04:33:34','2017-05-02 04:33:34',NULL);

/*Table structure for table `recipie_promotion` */

DROP TABLE IF EXISTS `recipie_promotion`;

CREATE TABLE `recipie_promotion` (
  `recipie_id` int(10) NOT NULL,
  `promotion_id` int(10) NOT NULL,
  PRIMARY KEY (`recipie_id`,`promotion_id`),
  KEY `FKrecipie_pr499794` (`recipie_id`),
  KEY `FKrecipie_pr374188` (`promotion_id`),
  CONSTRAINT `FKrecipie_pr374188` FOREIGN KEY (`promotion_id`) REFERENCES `promotions` (`id`),
  CONSTRAINT `FKrecipie_pr499794` FOREIGN KEY (`recipie_id`) REFERENCES `recipies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `recipie_promotion` */

/*Table structure for table `recipies` */

DROP TABLE IF EXISTS `recipies`;

CREATE TABLE `recipies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(19,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `image_url` text,
  `recipie_group_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `recipies` */

insert  into `recipies`(`id`,`title`,`description`,`price`,`created_at`,`updated_at`,`deleted_at`,`image_url`,`recipie_group_id`) values 
(1,'French Omelate','Nice description',30,'2017-05-01 15:53:02','2017-05-01 15:53:02','0000-00-00 00:00:00','french-omelate.jpg\r\n',2),
(2,'Biryani','o No No',40,'2017-05-01 15:56:47','2017-05-01 15:56:47','0000-00-00 00:00:00','biryani.jpg\r\n',3),
(3,'Karahi','What the nice dish',50,'2017-05-01 15:57:07','2017-05-01 15:57:07','0000-00-00 00:00:00','karahi.jpg\r\n',3),
(4,'Rice & Cheese','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',2),
(5,'Chicken','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',1),
(6,'Ghoost','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',1),
(7,'Volcano','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',4),
(8,'Naan','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',1),
(9,'Nutella','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',1),
(10,'Juice','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',5),
(11,'Raita','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',1),
(12,'Maita','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',6),
(13,'Khaita','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',7),
(14,'Paita','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',1),
(15,'Taita','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',1),
(16,'Kaika','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',5),
(17,'Mimi Mimi','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',1),
(18,'Bimi Bimi','Description is not that necessary',90,'2017-05-01 16:48:04','2017-05-01 16:48:04',NULL,'biryani.jpg',1),
(19,'Firni','Description',NULL,'2017-05-02 04:33:34','2017-05-02 04:33:34',NULL,NULL,1);

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `role_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `FKrole_user652589` (`role_id`),
  KEY `FKrole_user517458` (`user_id`),
  CONSTRAINT `FKrole_user517458` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FKrole_user652589` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `role_user` */

insert  into `role_user`(`role_id`,`user_id`) values 
(1,1),
(1,2),
(2,3),
(3,4),
(4,5);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `department_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKroles990810` (`department_id`),
  CONSTRAINT `FKroles990810` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`id`,`title`,`details`,`department_id`) values 
(1,'Admin','This is Administrator role.',1),
(2,'Cook',NULL,1),
(3,'Waiter',NULL,1),
(4,'Supplier',NULL,1);

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `settings` */

insert  into `settings`(`id`,`key`,`value`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'timezone','45','2017-05-01 08:10:53','2017-05-01 08:51:08',NULL),
(3,'status','on','2017-05-01 08:10:53','2017-05-01 08:43:40',NULL),
(5,'tables','60','2017-05-01 08:12:56','2017-05-01 08:50:59',NULL);

/*Table structure for table `stock` */

DROP TABLE IF EXISTS `stock`;

CREATE TABLE `stock` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stock_in_qty` int(10) DEFAULT NULL,
  `stock_out_qty` int(10) DEFAULT NULL,
  `employee_id` int(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `supplier_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKStock889974` (`employee_id`),
  KEY `FKStock650850` (`supplier_id`),
  CONSTRAINT `FKStock650850` FOREIGN KEY (`supplier_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FKStock889974` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `stock` */

/*Table structure for table `table` */

DROP TABLE IF EXISTS `table`;

CREATE TABLE `table` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `space` int(10) DEFAULT NULL,
  `location` int(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `table` */

/*Table structure for table `thirdpartyapplications` */

DROP TABLE IF EXISTS `thirdpartyapplications`;

CREATE TABLE `thirdpartyapplications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` int(10) DEFAULT NULL,
  `config` int(10) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `thirdpartyapplications` */

/*Table structure for table `timezone` */

DROP TABLE IF EXISTS `timezone`;

CREATE TABLE `timezone` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hour` double DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `timezone` */

/*Table structure for table `transaction` */

DROP TABLE IF EXISTS `transaction`;

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `transaction_status` int(10) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `transaction_from` int(10) DEFAULT NULL,
  `transaction_to` int(10) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `cr` double DEFAULT NULL,
  `dr` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaction` */

/*Table structure for table `transaction_payment` */

DROP TABLE IF EXISTS `transaction_payment`;

CREATE TABLE `transaction_payment` (
  `Transactionid` int(10) NOT NULL,
  `Paymentid` int(10) NOT NULL,
  PRIMARY KEY (`Transactionid`,`Paymentid`),
  KEY `FKTransactio42015` (`Transactionid`),
  KEY `FKTransactio30627` (`Paymentid`),
  CONSTRAINT `FKTransactio30627` FOREIGN KEY (`Paymentid`) REFERENCES `payment` (`id`),
  CONSTRAINT `FKTransactio42015` FOREIGN KEY (`Transactionid`) REFERENCES `transaction` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaction_payment` */

/*Table structure for table `units` */

DROP TABLE IF EXISTS `units`;

CREATE TABLE `units` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `units` */

insert  into `units`(`id`,`title`,`short_code`) values 
(1,'Kilo Gram','kg'),
(2,'Number',''),
(3,'Ounce','ounce'),
(4,'Mili Gram','mg'),
(5,'Litre','l'),
(6,'Mili Litre','ml');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_company` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `image_url` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='created\nupdated';

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`phone`,`password`,`is_company`,`name`,`remember_token`,`created_at`,`updated_at`,`deleted_at`,`image_url`) values 
(1,'zain@rk.io',NULL,'$2y$10$/nCpiMeokYKfM1waTlqLC.wjrWgGP1GNaM2Hx0VavHr7edBILpsz2',NULL,'zain',NULL,'2017-04-30 07:34:49','2017-04-30 07:34:49',NULL,'zain.png'),
(2,'admin@rk.io',NULL,'$2y$10$e6VAJwDvVIa82TQaUOBUTOImTXrYYqVlem0Z95Mjfwm3sfyYfk8zK',NULL,'admin','8ocbG17PcFnTHbORzA7xKRRJXqSq1zGNUmXi2SHr0nFfPS1W8fT2roJyZNGT','2017-04-30 07:53:13','2017-04-30 07:53:13',NULL,'admin.png'),
(3,'cook@rk.io',NULL,'$2y$10$xvOrp14qS68iGvAL1eeAUOmFYypVi.N0UBYMs.N9u.TTSCd7IObKO',NULL,'cook','b6rwjP9FGVp4mqt0UpZFf4abtAIMArWTFcfE4yPQZhrhxrkNuzogwj87n2zN','2017-04-30 07:53:38','2017-04-30 07:53:38',NULL,'cook.png'),
(4,'waiter@rk.io',NULL,'$2y$10$8805fqSGzzCTQBj/AVKS4uePQuOjFcZ8N8G3bVYOC6RWDVKyKj0Oi',NULL,'waiter','9orJuB8i33iXWOgsvmPf1Lzx0coeGswVfGzZ83ASisw1zkvSxIxyuJhtjA3n','2017-04-30 07:53:54','2017-04-30 07:53:54',NULL,'waiter.png'),
(5,'supplier@rk.io',NULL,'$2y$10$F/m0H.DEgh9J14dSR63ze.I8wnZuKcqCkPeDx1q70g8PcPscMthTy',NULL,'supplier','GhogX9ZzYHcw7s0S4DhEjbOYYLlzG7Bwa0KV4iA2NjiVwqNizRXzMmb5Apu3','2017-04-30 07:54:20','2017-04-30 07:54:20',NULL,'supplier.jpg');

/*Table structure for table `users_address` */

DROP TABLE IF EXISTS `users_address`;

CREATE TABLE `users_address` (
  `Addressid` int(10) NOT NULL,
  `Employeeid` int(10) NOT NULL,
  PRIMARY KEY (`Addressid`,`Employeeid`),
  KEY `FKusers_addr175941` (`Addressid`),
  KEY `FKusers_addr815897` (`Employeeid`),
  CONSTRAINT `FKusers_addr175941` FOREIGN KEY (`Addressid`) REFERENCES `addresses` (`id`),
  CONSTRAINT `FKusers_addr815897` FOREIGN KEY (`Employeeid`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users_address` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
