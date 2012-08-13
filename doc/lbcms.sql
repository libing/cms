/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : lbcms

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2012-08-13 18:36:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `lb_channel`
-- ----------------------------
DROP TABLE IF EXISTS `lb_channel`;
CREATE TABLE `lb_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chname` varchar(20) NOT NULL,
  `chfile` varchar(50) DEFAULT NULL,
  `chparent` tinyint(4) NOT NULL DEFAULT '0',
  `chsort` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lb_channel
-- ----------------------------
INSERT INTO `lb_channel` VALUES ('1', '数据更新', 'update', '0', '2');
INSERT INTO `lb_channel` VALUES ('2', '网站设置', 'setting', '0', '3');
INSERT INTO `lb_channel` VALUES ('3', '后台首页', 'index', '0', '1');
INSERT INTO `lb_channel` VALUES ('4', '数据更新', 'dataup', '1', '1');
INSERT INTO `lb_channel` VALUES ('6', '网站设置1', 'setting1', '2', '1');
INSERT INTO `lb_channel` VALUES ('7', '网站设置2', 'setting2', '2', '2');

-- ----------------------------
-- Table structure for `lb_data`
-- ----------------------------
DROP TABLE IF EXISTS `lb_data`;
CREATE TABLE `lb_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `cateId` int(11) DEFAULT NULL,
  `comDate` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lb_data
-- ----------------------------

-- ----------------------------
-- Table structure for `lb_members`
-- ----------------------------
DROP TABLE IF EXISTS `lb_members`;
CREATE TABLE `lb_members` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `passwd` varchar(100) DEFAULT NULL,
  `losttime` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lb_members
-- ----------------------------
INSERT INTO `lb_members` VALUES ('1', 'lbccer', '1b118a0785063eb3f24ee4fe5a64ac76', null);

-- ----------------------------
-- Table structure for `lb_settings`
-- ----------------------------
DROP TABLE IF EXISTS `lb_settings`;
CREATE TABLE `lb_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webName` char(100) DEFAULT NULL,
  `webKey` text,
  `webDescribe` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lb_settings
-- ----------------------------
