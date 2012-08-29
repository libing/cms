<?php
include_once __DIR__.DIRECTORY_SEPARATOR.'_config.inc.php';
$_SERVER['QUERY_STRING'] = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : 'index.html';
//参数内容，必须符合该参数
$RequestArray = array('index'=>'li_index','lists'=>'li_lists','views'=>'li_views');
$preg_array = array();
preg_match("/^(\/)?(.*\/)?(.*).html$/",$_SERVER['QUERY_STRING'],$preg_array);
$array_file = explode('_',$preg_array[3]);
//参数的总数
$file_count = count($array_file);

if($file_count >=3){
	$file_i = 1;
	for($file_i ; $file_i<=($file_count-2) ; $file_i++){
		$_GLOBALS['variable'][$array_file[$file_i]] = $array_file[$file_i+1];
		$file_i++;
	}
}
if(!array_key_exists($array_file[0],$RequestArray)){
	die($lang['error_para']);
}

//包含请求的控制器文件
include_once $webroot.'controller'.DIRECTORY_SEPARATOR.$preg_array[2].$RequestArray[$array_file[0]].'.php';
?>