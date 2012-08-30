<?php
/***************
 * 此文件为网站所有基础配置文件，勿轻易改动
 *
 *
 */
header("Content-Type:text/html; charset=UTF-8");
//设置所在时区
date_default_timezone_set('PRC');
//斜杠
$sprit = DIRECTORY_SEPARATOR;
//网站跟目录
$webroot = __DIR__.$sprit;
//模版目录
$template = $webroot.'template_html'.$sprit;
//上传图片存放地址
$DIR_images = $webroot.'template_html'.$sprit.'affix'.$sprit;
//包含的全局变量
$_GLOBALS = array();
//get获取到的全部变量
$_GLOBALS['variable'] = array();

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
include_once $webroot.$sprit.'language'.$sprit.'lang_cn.php';
//包含公共函数
include_once $webroot.'include'.$sprit.'common_function.php';
//包含数据库操作函数
include_once $webroot.'include'.$sprit.'class.Dbopera.php';

//实例化数据库操作函数
$DBopera = new Dbopera($config);
//网站配置
$webConfig = $DBopera->data_query(array('*'),array('settings'));
if(is_array($webConfig[0])){
	foreach($webConfig[0] as $webKey=>$webValue){
		$_GLOBALS[$webKey] = $webValue;
	}
}
/* 附加内容 */
//友情链接
$flink = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'43'),array('id'=>'ASC'));
//留言
$mes = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'44'),array('id'=>'DESC'),array('0'=>'1'));
//联系我们
$callme = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'45'),array('id'=>'DESC'),array('0'=>'1'));