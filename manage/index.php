<?php
include_once __DIR__.DIRECTORY_SEPARATOR.'setting.php';
include_once $admin_dir.'header.php';
include_once $admin_dir.'left.php';

$data = array();
$data = $DBopera->data_query(array('*'),array('data'),array('cateId'=>$li),array('id'=>'DESC'));
$main = array();


if(!empty($li)){
	
	if(in_array($li,array('10','17','19','20','21','22','23','24')) ){
		//只有标题、图片和图片链接
		$main = array('title'=>true,'linkUrl'=>true,'image'=>true);	
	}
	if( in_array($li,array('11','12','13','14','15','16','18','25','33')) ){
		//标题、简介、图片、图片链接
		$main = array('title'=>true,'descript'=>true,'image'=>true,'linkUrl'=>true);
	}
	if( in_array($li,array('26','27','28','29','30','31','32')) ){
		$main = array('title'=>true,'content'=>true);
	}

	
	
	include_once $array_list[$li].'.php';
}

include_once $admin_dir.'footer.php';
