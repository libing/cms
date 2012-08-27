<?php
include_once __DIR__.DIRECTORY_SEPARATOR.'setting.php';
include_once $admin_dir.'header.php';
include_once $admin_dir.'left.php';

$data = array();
$data = $DBopera->data_query(array('*'),array('data'),array('cateId'=>$li),array('id'=>'DESC'));

if(!empty($li)){
	include_once $array_list[$li].'.php';
}

include_once $admin_dir.'footer.php';
