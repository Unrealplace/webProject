/*
 Navicat Premium Data Transfer

 Source Server         : liyang_mysql
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : localhost:3306
 Source Schema         : liyang_db2

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : 65001

 Date: 17/08/2018 18:08:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (16, '王朝惠', 1, '2010-02-11', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (17, '李杨', 0, '2010-02-11', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (18, '王朝惠', 1, '2010-02-11', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (19, '李杨', 0, '2010-02-11', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (20, '王朝惠', 1, '2010-02-11', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (21, '李杨', 0, '2010-02-11', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (22, '王朝惠', 1, '2010-02-11', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (23, '李杨', 0, '2010-02-11', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (24, '王朝惠', 1, '2010-02-11', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (25, '张三', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (26, '李四', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (27, '王二', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (28, '麻子', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (29, '舞动', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (30, '前空', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (31, '小狗', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (32, '小猫', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (33, '小猪', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (34, '老虎', 0, '1992-04-24', 'assets/img/icon-08.png');
INSERT INTO `users` VALUES (35, '二哈', 0, '1992-04-24', 'assets/img/icon-08.png');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
