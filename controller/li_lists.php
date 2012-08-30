<?php
//焦点图
$channel_focus = $DBopera->data_query(array('*'),array('channel'),array('`chparent`'=>$_GLOBALS['variable']['id'],'`chname`'=>'焦点图'),array('id'=>'ASC'),array('0'=>'1'));
$focus = $DBopera->data_query(array('*'),array('data'),array('`cateId`'=>$channel_focus[0]['id']),array('id'=>'ASC'),array('0'=>'1'));
//列表
$channel_lists = $DBopera->data_query(array('*'),array('channel'),array('`chparent`'=>$_GLOBALS['variable']['id'],'`chname`'=>'添加信息'),array('id'=>'ASC'),array('0'=>'1'));
$lists  = $DBopera->data_query(array('*'),array('data'),array('`cateId`'=>$channel_lists[0]['id']),array('id'=>'ASC'));

include_once $template.'li_header.php';
include_once $template.'li_lists.php';
include_once $template.'li_footer.php';