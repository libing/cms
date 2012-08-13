<?php
/***************
 * 此文件为网站所有基础配置文件，勿轻易改动
 *
 *
 */
$config = array();
//数据库配置数据
$config['HOST'] = '127.0.0.1';
$config['DBUSER'] = 'root';
$config['DBPASSWD'] = '';
$config['DBNAME'] = 'hiccer';
$webroot = __DIR__.'/';
date_default_timezone_set('PRC');
//包含公共函数
include_once $webroot.'include/common_function.php';
//包含数据库操作函数
include_once $webroot.'include/class.Dbopera.php';
//包含公共变量
include_once $webroot.'include/common.php';



?>
