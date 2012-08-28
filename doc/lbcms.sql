-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 08 月 28 日 17:19
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lbcms`
--

-- --------------------------------------------------------

--
-- 表的结构 `lb_channel`
--

CREATE TABLE IF NOT EXISTS `lb_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chname` varchar(20) NOT NULL,
  `chfile` varchar(50) DEFAULT NULL,
  `chparent` tinyint(4) NOT NULL DEFAULT '0',
  `chsort` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `lb_channel`
--

INSERT INTO `lb_channel` (`id`, `chname`, `chfile`, `chparent`, `chsort`) VALUES
(1, '首页', 'index', 0, NULL),
(2, '历史', 'setting', 0, NULL),
(3, '足底测试', 'update', 0, NULL),
(4, '装备指导', 'dataup', 0, NULL),
(5, '足部保护', 'setting1', 0, NULL),
(6, '训练', 'setting2', 0, NULL),
(7, '体验中心', 'setting3', 0, NULL),
(8, '专家咨询', 'setting4', 0, NULL),
(10, '焦点图', 'uploadfile', 1, NULL),
(11, '运动服务', 'uploadfile', 1, NULL),
(12, '冠军体验', 'uploadfile', 1, NULL),
(13, '专家咨询', 'uploadfile', 1, NULL),
(14, '装备测评', 'uploadfile', 1, NULL),
(15, '装备指导', 'uploadfile', 1, NULL),
(16, '足部保护', 'uploadfile', 1, NULL),
(17, '滚动图片', 'uploadfile', 1, NULL),
(18, '焦点图', 'uploadfile', 2, NULL),
(19, '焦点图', 'uploadfile', 3, NULL),
(20, '焦点图', 'uploadfile', 4, NULL),
(21, '焦点图', 'uploadfile', 5, NULL),
(22, '焦点图', 'uploadfile', 6, NULL),
(23, '焦点图', 'uploadfile', 7, NULL),
(24, '焦点图', 'uploadfile', 8, NULL),
(26, '添加信息', 'uploadfile', 2, NULL),
(27, '添加信息', 'uploadfile', 3, NULL),
(28, '添加信息', 'uploadfile', 4, NULL),
(29, '添加信息', 'uploadfile', 5, NULL),
(30, '添加信息', 'uploadfile', 6, NULL),
(31, '添加信息', 'uploadfile', 7, NULL),
(32, '添加信息', 'uploadfile', 8, NULL),
(34, '信息列表', NULL, 2, NULL),
(35, '信息列表', NULL, 3, NULL),
(36, '信息列表', NULL, 4, NULL),
(37, '信息列表', NULL, 5, NULL),
(38, '信息列表', NULL, 6, NULL),
(39, '信息列表', NULL, 7, NULL),
(40, '信息列表', NULL, 8, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `lb_data`
--

CREATE TABLE IF NOT EXISTS `lb_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cateId` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `linkUrl` text,
  `title` varchar(100) DEFAULT NULL,
  `cn_describe` text,
  `en_describe` text,
  `content` text,
  `insertDate` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=266 ;

--
-- 转存表中的数据 `lb_data`
--

INSERT INTO `lb_data` (`id`, `cateId`, `type`, `linkUrl`, `title`, `cn_describe`, `en_describe`, `content`, `insertDate`) VALUES
(263, 10, NULL, '1346083790.jpg', '爱的色放', '阿道夫爱的', '短发艾丝凡', '', NULL),
(264, 10, NULL, '1346084021.jpg', '爱的发的', '啊打发', '啊打发短发打算', '', NULL),
(265, 10, NULL, '1346084032.jpg', '顶顶顶顶顶顶', '顶顶顶顶顶顶顶', '顶顶顶顶顶', '', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `lb_members`
--

CREATE TABLE IF NOT EXISTS `lb_members` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `passwd` varchar(100) DEFAULT NULL,
  `losttime` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `lb_members`
--

INSERT INTO `lb_members` (`id`, `user`, `passwd`, `losttime`) VALUES
(1, 'hiccer', '1b118a0785063eb3f24ee4fe5a64ac76', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `lb_settings`
--

CREATE TABLE IF NOT EXISTS `lb_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webName` char(100) DEFAULT NULL,
  `webKey` text,
  `webDescribe` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
