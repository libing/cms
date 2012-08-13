<?php
$config = array();
$config['HOST'] = '127.0.0.1';
$config['DBUSER'] = 'root';
$config['DBPASSWD'] = '';
$config['DBNAME'] = 'hiccer';
$webroot = substr(dirname(__FILE__),0,-7);
date_default_timezone_set('PRC');
//包含公共函数
include_once $webroot.'include/common_function.php';
//包含数据库操作函数
include_once $webroot.'include/class.Dbopera.php';
//包含公共变量
include_once $webroot.'include/common.php';
