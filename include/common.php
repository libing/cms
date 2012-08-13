<?php
//实例化数据库操作函数
$DBopera = new Dbopera($config);
//查出所有数据的启用分类
$category = $DBopera->data_query(array('*'),array('category'),array('`open`'=>'0'));
//所有公用数据
$_GLOBALS = array('category'=>'');

if(is_array($category)){
	foreach($category as $cavalue){
		$_GLOBALS['category'][$cavalue['id']] = $cavalue['caName'];
	}
}

