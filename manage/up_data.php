<?php
//验证用户是否已经登录
include_once __DIR__.'/setting.php';

//id
$id = !empty($_POST['id']) ? $_POST['id'] : '';
//标题
$title = !empty($_POST['title']) ? $_POST['title'] : '';
//中文简介
$cn_descript = !empty($_POST['cn_describe']) ? $_POST['cn_describe'] : '';
//英文简介
$en_descript = !empty($_POST['en_describe']) ? $_POST['en_describe'] : '';
//大列表
$channel_ch = !empty($_POST['channel_ch']) ? $_POST['channel_ch'] : '';
//小列表
$channel_li = !empty($_POST['channel_li']) ? $_POST['channel_li'] : '';
//内容
$content = !empty($_POST['content']) ? $_POST['content'] : '';
//图片链接地址
$linkUrl = !empty($_POST['linkUrl']) ? $_POST['linkUrl'] : '';
//图片
$image = !empty($_FILES) ? uploadImage($DIR_images,'image',$_FILES) : '';

$add_data = $DBopera->data_update(
		'data',
		array('cateId'=>$channel_li,'linkUrl'=>$linkUrl,'images'=>$image,'title'=>$title,'cn_describe'=>$cn_descript,'en_describe'=>$en_descript,'content'=>$content),
		array('id'=>$id)
		);
if($add_data >= 1){
	echo '<script>location.href="index.php?ch='.$channel_ch.'&li='.$channel_li.'";</script>';
}