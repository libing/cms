<?php
//详细信息
$views = $DBopera->data_query(array('*'),array('data'),array('`id`'=>$_GLOBALS['variable']['id']));
//焦点图
$focus = $DBopera->data_query(array('*'),array('data'),array('`id`'=>$_GLOBALS['variable']['foid']));

include_once $template.'li_header.php';
include_once $template.'li_views.php';
include_once $template.'li_footer.php';