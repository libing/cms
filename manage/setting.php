<?php
session_start();
//判断登录
if(empty($_SESSION['login']) && $_SESSION['login'] = 'yes' && empty($_SESSION['user'])){
	header('Location:http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,-9).'login.php');
}


$ch = !empty($_GET['ch']) ? $_GET['ch'] : '' ;//当前请求的频道文件名
$li = !empty($_GET['li']) ? $_GET['li'] : '' ;//当前请求的频道文件名

$admin_dir = dirname(__FILE__).'/';

//头部频道内容
$channel = $DBopera->data_query(array('*'),array('channel'),array('chparent'=>'0'),array('chsort'=>'ASC'));

//所有的频道列表
$array_channel = array();
foreach($channel as $chvalue){
	$array_channel[$chvalue['id']] = $chvalue['chfile'];
}
unset($chvalue);

//当前频道的ID
$current_ch_id = array_search($ch,$array_channel);

//当前频道的所有列表
$list = $DBopera->data_query(array('*'),array('channel'),array('chparent'=>$current_ch_id),array('chsort'=>'ASC'));

//当前所有列表
$array_list = array();
foreach($list as $livalue){
	$array_list[$livalue['id']] = $livalue['chfile'];
}

//判断请求的文件是否为已有的文件
if(!in_array($ch,$array_channel)){
	$ch = 'index';
}
if(!in_array($li,$array_list)){
	$li = array_slice($array_list,0,1);
	if(is_array($li) && isset($li[0])){
		$li = $li[0];	
	}
}
