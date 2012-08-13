<?php
/***************
 * 此文件为网站所有基础配置文件，勿轻易改动
 *
 *
 */
header("Content-Type:text/html; charset=UTF-8");
//设置所在时区
date_default_timezone_set('PRC');
//网站跟目录
$webroot = __DIR__.DIRECTORY_SEPARATOR;
//包含的全局变量
$_GLOBALS = array();

//错误级别
if (ini_get('display_errors')) {
	ini_set('display_errors', 1);
}

$config = array();
//数据库配置数据
$config['HOST'] = '127.0.0.1';
$config['DBUSER'] = 'root';
$config['DBPASSWD'] = 'hicc';
$config['DBNAME'] = 'lbcms';

//包含语言包
include_once $webroot.DIRECTORY_SEPARATOR.'language'.DIRECTORY_SEPARATOR.'lang_cn.php';
//包含公共函数
include_once $webroot.'include'.DIRECTORY_SEPARATOR.'common_function.php';
//包含数据库操作函数
include_once $webroot.'include'.DIRECTORY_SEPARATOR.'class.Dbopera.php';

//实例化数据库操作函数
$DBopera = new Dbopera($config);

/*
//查出所有数据的启用分类
$category = $DBopera->data_query(array('*'),array('category'),array('`open`'=>'0'));
//所有公用数据
$_GLOBALS = array('category'=>'');

if(is_array($category)){
	foreach($category as $cavalue){
		$_GLOBALS['category'][$cavalue['id']] = $cavalue['caName'];
	}
}
*/
?>
