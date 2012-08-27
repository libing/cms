<?php
//验证用户是否已经登录
include_once __DIR__.'/setting.php';

//标题
$title = !empty($_POST['title']) ? $_POST['title'] : '';
//中文简介
$cn_descript = !empty($_POST['cn_descript']) ? $_POST['cn_descript'] : '';
//英文简介
$en_descript = !empty($_POST['en_descript']) ? $_POST['en_descript'] : '';
//大列表
$channel_ch = !empty($_POST['channel_ch']) ? $_POST['channel_ch'] : '';
//小列表
$channel_li = !empty($_POST['channel_li']) ? $_POST['channel_li'] : '';
//内容
$content = !empty($_POST['content']) ? $_POST['content'] : '';
//图片
$image = !empty($_FILES) ? uploadImage($DIR_images,'image',$_FILES) : '';

$add_data = $DBopera->data_join(
		'data',
		array('cateId','linkUrl','title','cn_describe','en_describe','content'),
		array($channel_li,$image,$title,$cn_descript,$en_descript,$content)
		);
if($add_data >= 1){
	echo '<script>location.href="index.php?ch='.$channel_ch.'&li='.$channel_li.'";</script>';
}