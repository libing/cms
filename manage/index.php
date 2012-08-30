<?php
include_once __DIR__.DIRECTORY_SEPARATOR.'setting.php';
include_once $admin_dir.'header.php';
include_once $admin_dir.'left.php';

$data = array();
$data = $DBopera->data_query(array('*'),array('data'),array('cateId'=>$li),array('id'=>'DESC'));
$main = array();


if(!empty($li)){
	
	if(in_array($li,array('10','17','18','19','20','21','22','23','24','44','45','47')) ){
		//只有标题、图片和图片链接
		$main = array('title'=>true,'linkUrl'=>true,'image'=>true);	
	}
	if( in_array($li,array('12','13','15','16','25','33')) ){
		//标题、简介、图片、图片链接
		$main = array('title'=>true,'describe'=>true,'image'=>true,'linkUrl'=>true);
	}
	if( in_array($li,array('11','14')) ){
		//标题、链接、内容
		$main = array('title'=>true,'content'=>true,'linkUrl'=>true);
	}
	if( in_array($li,array('26','27','28','29','30','31','32','48')) ){
		//标题、内容
		$main = array('title'=>true,'describe'=>true,'image'=>true,'linkUrl'=>true,'content'=>true,);
	}
	if( in_array($li,array('43')) ){
		$main = array('title'=>true,'linkUrl'=>true);
	}

	
	
	include_once $array_list[$li].'.php';
}

include_once $admin_dir.'footer.php';
