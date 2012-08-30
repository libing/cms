<?php

//焦点图
$focus = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'10'),array('id'=>'DESC'),array('0'=>'5'));

//运动服务实验室
$sport = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'11'),array('id'=>'DESC'),array('0'=>'1'));
//冠军体验
$winner = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'12'),array('id'=>'DESC'),array('0'=>'1'));
//专家咨询
$expert = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'13'),array('id'=>'DESC'),array('0'=>'1'));
//装备指导
$guide = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'15'),array('id'=>'DESC'),array('0'=>'1'));
//足部指导
$foot = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'16'),array('id'=>'DESC'),array('0'=>'1'));
//滚动图片
$roll = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'17'),array('id'=>'DESC'),array('0'=>'9'));
//装备测评
$equip = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'14'),array('id'=>'DESC'),array('0'=>'1'));


include_once $template.'li_header.php';
include_once $template.'li_index.php';
include_once $template.'li_footer.php';
