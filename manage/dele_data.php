<?php
//验证用户是否已经登录
include_once __DIR__.'/setting.php';

//id
$id = !empty($_GET['id']) ? $_GET['id'] : '';
//大列表
$channel_ch = !empty($_GET['ch']) ? $_GET['ch'] : '';
//小列表
$channel_li = !empty($_GET['li']) ? $_GET['li'] : '';

$add_data = $DBopera->data_del('data',array('id'=>$id));
if($add_data >= 1){
	echo '<script>alert("删除成功");location.href="index.php?ch='.$channel_ch.'&li='.$channel_li.'";</script>';
}