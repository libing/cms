/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : lbcms

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2012-08-27 18:24:54
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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lb_channel
-- ----------------------------
INSERT INTO `lb_channel` VALUES ('1', '首页', 'index', '0', null);
INSERT INTO `lb_channel` VALUES ('2', '历史', 'setting', '0', null);
INSERT INTO `lb_channel` VALUES ('3', '足底测试', 'update', '0', null);
INSERT INTO `lb_channel` VALUES ('4', '装备指导', 'dataup', '0', null);
INSERT INTO `lb_channel` VALUES ('5', '足部保护', 'setting1', '0', null);
INSERT INTO `lb_channel` VALUES ('6', '训练', 'setting2', '0', null);
INSERT INTO `lb_channel` VALUES ('7', '体验中心', 'setting3', '0', null);
INSERT INTO `lb_channel` VALUES ('8', '专家咨询', 'setting4', '0', null);
INSERT INTO `lb_channel` VALUES ('10', '焦点图', 'uploadfile', '1', null);
INSERT INTO `lb_channel` VALUES ('11', '运动服务', 'asdfs', '1', null);
INSERT INTO `lb_channel` VALUES ('12', '冠军体验', '7', '1', null);
INSERT INTO `lb_channel` VALUES ('13', '专家咨询', '6', '1', null);
INSERT INTO `lb_channel` VALUES ('14', '装备测评', '5', '1', null);
INSERT INTO `lb_channel` VALUES ('15', '装备指导', '4', '1', null);
INSERT INTO `lb_channel` VALUES ('16', '足部保护', '3', '1', null);
INSERT INTO `lb_channel` VALUES ('17', '滚动图片', '8', '1', null);
INSERT INTO `lb_channel` VALUES ('18', '焦点图', null, '2', null);
INSERT INTO `lb_channel` VALUES ('19', '焦点图', null, '3', null);
INSERT INTO `lb_channel` VALUES ('20', '焦点图', null, '4', null);
INSERT INTO `lb_channel` VALUES ('21', '焦点图', null, '5', null);
INSERT INTO `lb_channel` VALUES ('22', '焦点图', null, '6', null);
INSERT INTO `lb_channel` VALUES ('23', '焦点图', null, '7', null);
INSERT INTO `lb_channel` VALUES ('24', '焦点图', null, '8', null);
INSERT INTO `lb_channel` VALUES ('26', '添加信息', null, '2', null);
INSERT INTO `lb_channel` VALUES ('27', '添加信息', null, '3', null);
INSERT INTO `lb_channel` VALUES ('28', '添加信息', null, '4', null);
INSERT INTO `lb_channel` VALUES ('29', '添加信息', null, '5', null);
INSERT INTO `lb_channel` VALUES ('30', '添加信息', null, '6', null);
INSERT INTO `lb_channel` VALUES ('31', '添加信息', null, '7', null);
INSERT INTO `lb_channel` VALUES ('32', '添加信息', null, '8', null);
INSERT INTO `lb_channel` VALUES ('34', '信息列表', null, '2', null);
INSERT INTO `lb_channel` VALUES ('35', '信息列表', null, '3', null);
INSERT INTO `lb_channel` VALUES ('36', '信息列表', null, '4', null);
INSERT INTO `lb_channel` VALUES ('37', '信息列表', null, '5', null);
INSERT INTO `lb_channel` VALUES ('38', '信息列表', null, '6', null);
INSERT INTO `lb_channel` VALUES ('39', '信息列表', null, '7', null);
INSERT INTO `lb_channel` VALUES ('40', '信息列表', null, '8', null);

-- ----------------------------
-- Table structure for `lb_data`
-- ----------------------------
DROP TABLE IF EXISTS `lb_data`;
CREATE TABLE `lb_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cateId` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `linkUrl` text,
  `title` varchar(100) DEFAULT NULL,
  `describe` text,
  `content` text,
  `insertDate` char(20) DEFAULT NULL,
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
INSERT INTO `lb_members` VALUES ('1', 'hiccer', '1b118a0785063eb3f24ee4fe5a64ac76', null);

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
