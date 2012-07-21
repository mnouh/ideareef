/*
 Navicat MySQL Data Transfer

 Source Server         : EC2
 Source Server Version : 50519
 Source Host           : ec2-50-19-22-74.compute-1.amazonaws.com
 Source Database       : insite

 Target Server Version : 50519
 File Encoding         : utf-8

 Date: 07/01/2012 14:02:25 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `tbl_users`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci UNIQUE NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `verify_code` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` int(1) DEFAULT '0',
  `terms` int(1) DEFAULT '0',
  `lookup` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `joined_date` datetime NOT NULL,
  `city` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `tbl_users`
-- ----------------------------
BEGIN;
INSERT INTO `tbl_users` VALUES ('1', 'mnouh3@gmail.com', '7286a190cf5229ad5db1a5ad2d9bee1e', '4ff08d6cb6f8b3.92305332', 'Mohamed', 'Nouh', '0', '45294c96f9a3dfe7ccc040b2178a2d00', '0', null, 'FB66FcB4980Fd_4ff08D6cb6fc6', '2012-07-02 02:48:28', null, null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
